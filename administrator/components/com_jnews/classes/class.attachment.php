<?php
defined('_JEXEC') OR die('Access Denied!');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co

class jNews_Attachment {

/** Function that will delete the attach file from jnews attachments
	 * folder/file path : components/.../upload
	 * @param string $filename - name of the file [ extension name should be include e.g filename.txt ]
	 * @param boolean $path - file path : default to /components/.../upload
	*/
	function deleteAttachment( $filename, $path=null ){
		if( empty($filename) ){
			// if the inputted param is empty return an echo message
			echo "Please check the entered params for function deleteAttachment.";
			return true;
		}

		// we need to close the file before deleting it
		$file = fopen( $filename, 'w') or die("can't open file");
		fclose($file);

		// delete file
		$filepath = ( !empty($path) ) ? $path .DS. $filename : JPATH_ROOT .DS. 'components' .DS. JNEWS_OPTION .DS. 'upload' .DS. $filename;
		if( !empty($filename) ) @unlink( $filepath );

		return true;
	}


/** Function that will remove the attachment text save into column attachments in the table #__jnews_mailings
	 * @param string $filename - name of the file to be removed
	 * @param int $mailingID - newsletter id
				  - default to 0 if the should be remove from all newsletters that been using the file
	*/
	function deleteAttachmentQuery( $filename, $mailingID=0 ){
		// set database
		static $db=null;
		if( !isset($db) ) $db = JFactory::getDBO();

		// check mailing id
		$mailingIDsA = null;
		if( empty($mailingID) ){
			// load the mailing ids that used the file to be detached
			$query = 'SELECT `id` FROM `#__jnews_mailings` WHERE `attachments` LIKE "%'.$filename.'%"';
			$db->setQuery($query);
			$mailingIDsA = $db->loadResultArray();
			if( !empty($mailingIDsA) ){
				// if found then replace it with an empty string
				foreach( $mailingIDsA as $mailingID ){
					jNews_Attachment::_setAttachments( $mailingID, $filename );
				} 
			}
		}else{
			// if found then replace it with an empty string
			jNews_Attachment::_setAttachments( $mailingID, $filename );
		}

		return true;
	}


	/* function that will replace and remove the attachments of the given mail
	 * @param int $mailingID - newsletter id
	 * @param string $filename - name of the file to be changed/replaced
	*/
	function _setAttachments( $mailingID, $filename ){
		// set database
		static $db=null;
		if( !isset($db) ) $db = JFactory::getDBO();

		// load the entire attachment found in the mailingID
		$query = 'SELECT `attachments` FROM `#__jnews_mailings` WHERE `id` = '. $mailingID;
		$db->setQuery($query);
		$result = $db->loadResult();

		// if found then replace it with an empty string
		if( !empty($result) ){
			// remove found result with /
			$newText = str_replace( '/'.$filename, '', $result);
			jNews_Attachment::_updateAttachments( $mailingID, $newText );

			// remove found result without /
			$newText = str_replace($filename, '', $result);
			jNews_Attachment::_updateAttachments( $mailingID, $newText );
		}

		return true;
	}


	/* Function that will update the attachments of mailings
	 * @param int $mailingID - newsletter id
	 * @param string $newText - text to be set to update
	*/
	function _updateAttachments( $mailingID, $newText ){
		// set database
		static $db=null;
		if( !isset($db) ) $db = JFactory::getDBO();
		$query = 'UPDATE `#__jnews_mailings` SET `attachments` = "'.$newText.'" WHERE `id` = '.$mailingID;
		$db->setQuery($query);
		return $db->query();
	}
} 

