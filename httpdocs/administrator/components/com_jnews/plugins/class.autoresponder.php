<?php
defined('_JEXEC') OR die('Access Denied!');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co

 class jNews_Autoresponder {

	function editmailing() {

		$show['sender_info'] = true;
		$show['published'] = true;
		$show['pub_date'] = false;
		$show['hide'] = true;
		$show['issuenb'] = true;
		$show['delay'] = true;
		$show['htmlcontent'] = true;
		$show['textcontent'] = true;
		$show['attachement'] = true;
		$show['images'] = true;
		$show['sitecontent'] = true;
		return $show;

	}


	function editlist() {

		$show['sender_info'] = true;
		$show['hide'] = true;
		$show['auto_option'] = true;
		$show['htmlmailing'] = true;
		$show['auto_subscribe'] = true;
		$show['email_unsubcribe'] = true;
		$show['unsusbcribe'] = true;
		return $show;

	}


	function showMailings() {

		$show['id'] = true;
		$show['dropdown'] = true;
		$show['select'] = true;
		$show['issue'] = true;
		$show['sentdate'] = false;
		$show['delay'] = true;
		$show['status'] = true;
		return $show;

	}


	function getQueue() {

		$query =  ' AND `mailing_id`> 0 ';
		$query .=  ' AND `issue_nb`> 0 ';
		$query .=  ' AND `published`= 1  ';
		$query .=  ' AND `type`= 2  ';
		return $query;

	}


	 function getActive() {

		$config['listype2'] = '1';
		$config['listname2'] = '_JNEWS_AUTORESP';
		$config['listnames2'] = '_JNEWS_MENU_AUTOS';
		$config['listshow2'] = '1';
		$config['listlogo2'] = 'autoresponder.png';
		$config['classes2'] ='autoresponder';
		return $config;

	}


	function edit($listEdit, $lists, $show, $html) {

	?>
	<fieldset class="jnewscss">
	<legend><?php echo _JNEWS_AUTO_RESP_OPTION; ?></legend>
	<table class="jnewstable" cellspacing="1">
		<tbody>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip">
				<?php
					$tip = _JNEWS_INFO_LIST_FOLLOW_UP;
					$title = _JNEWS_FOLLOW_UP;
					echo jNews_Tools::toolTip( $tip, '', 280, 'tooltip.png', $title, '', 0 );
				?>
				</span>
			</td>
			<td>
				<input type="text" name="follow_up" class="inputbox" size="6" maxlength="10" value="<?php if( isset( $listEdit->follow_up ) ) { echo $listEdit->follow_up; } else { echo ''; } ?>" />
			<?php
			if ( !jNews_Auto::good() ) {
				echo jnews::printM('no' , _JNEWS_NOTSO_GOOD_LIC );
				echo _JNEWS_PLEASE_LIC;
			}
			?>
			</td>
		</tr>
		</tbody>
	</table>
	</fieldset>
	<?php
	}


 }
