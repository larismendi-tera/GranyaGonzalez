<?php
defined('_JEXEC') OR die('Access Denied!');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co

class mosMenuBarCustom {
	public static function cancel( $alt='Cancel', $href='' ) {
		jNews_Tools::showIcon('cancelT.png','back','cancel');
		jNews_Tools::showIcon('cancelT.png','back','cancel',0);

		if ( $href ) {
   			$link = $href;
   		} else {
 			$link = 'javascript:window.history.back();';
		}

		$image='';
		?>
		<td>
  			<a class="toolbar" href="<?php echo $link; ?>" onmouseout="MM_swapImgRestore();"  onmouseover="MM_swapImage('cancel','','<?php echo $image2; ?>',1);">
			<?php echo $image; ?>
			<?php echo $alt;?>
  		</a>
		</td>
		<?php
	}

}

 class jNews_Menu {

	 public static function REGISTERED() {

		JToolBarHelper::custom('export', 'export.png', 'export.png', _JNEWS_MENU_EXPORT , false );
		JToolBarHelper::custom('import', 'import.png', 'import.png', _JNEWS_MENU_IMPORT , false );
		JToolBarHelper::divider();
		JToolBarHelper::customX('add', 'newT.png', 'newT.png', _JNEWS_MENU_NEW , false);
		JToolBarHelper::customX('edit', 'editT.png', 'editT.png', _JNEWS_MENU_EDIT , true);
		JToolBarHelper::divider();
		JToolBarHelper::customX('delete', 'deleteT.png', 'deleteT.png', _JNEWS_DELETE , true);
		JToolBarHelper::divider();
		jNews_Menu::_cPanelBtn();
		jNews_Menu::_wizardBtn( 'list-subscribers' );
	 }

	 public static function SHOWSUBSCRIBER() {

		JToolBarHelper::custom('updateOneSub', 'saveT.png', 'saveT.png', _JNEWS_UPDATE , false);
		JToolBarHelper::custom('cancelSub', 'cancelT.png', 'cancelT.png', _JNEWS_CANCEL , false);
		JToolBarHelper::divider();
//		jNews_Menu::_cPanelBtn();
		jNews_Menu::_wizardBtn( 'edit-subscriber' );
	 }

	 public static function NEWSUBSCRIBER() {
		JToolBarHelper::customX('doNew', 'saveT.png', 'saveT.png', _JNEWS_SAVE , false);
		JToolBarHelper::custom('cancelSub', 'cancelT.png', 'cancelT.png', _JNEWS_CANCEL , false);
		JToolBarHelper::divider();
//		jNews_Menu::_cPanelBtn();
		jNews_Menu::_wizardBtn( 'edit-subscriber' );
	 }

	 public static function IMPORT() {
		JToolBarHelper::custom('doImport', 'import.png', 'import.png', _JNEWS_MENU_IMPORT , false);
		jNews_Menu::_backBtn();
		JToolBarHelper::divider();
		jNews_Menu::_cPanelBtn();
		jNews_Menu::_wizardBtn( 'import-subscriber' );
	 }

	 public static function EXPORT() {
		JToolBarHelper::custom('doExport', 'export.png', 'export.png', _JNEWS_MENU_EXPORT , false);
		jNews_Menu::_backBtn();
		JToolBarHelper::divider();
		jNews_Menu::_cPanelBtn();
		jNews_Menu::_wizardBtn( 'export-subscriber' );
	 }

	 public static function SHOW_LIST() {

		if (class_exists('jNews_Pro')) {
//			JToolBarHelper::custom('forms','createformT.png','createformT.png', _JNEWS_FORM_BUTTON ,false);
			$bar = JToolBar::getInstance('toolbar');
			$linkBut = jNews_Tools::completeLink( 'option='.JNEWS_OPTION.'&act=list&task=forms', true, false, true );
			$bar->appendButton( 'Popup', 'forms', _JNEWS_FORM_BUTTON, $linkBut );
		}
		JToolBarHelper::custom('publish','publishT.png','publishT.png', _JNEWS_PUBLISHED ,true);
		JToolBarHelper::custom('unpublish','unpublishT.png','unpublishT.png', _JNEWS_UNPUBLISHED ,true);
		JToolBarHelper::divider();
		JToolBarHelper::customX('add', 'newT.png', 'newT.png', _JNEWS_MENU_NEW , false);
		JToolBarHelper::customX('edit', 'editT.png', 'editT.png', _JNEWS_MENU_EDIT , true);
		JToolBarHelper::custom( 'copy', 'copyT.png', 'copyT.png', _JNEWS_MENU_COPY , true);
		JToolBarHelper::divider();
		JToolBarHelper::custom( 'delete', 'deleteT.png', 'deleteT.png', _JNEWS_DELETE , true);
		JToolBarHelper::divider();
		jNews_Menu::_cPanelBtn();
		jNews_Menu::_wizardBtn( 'list-lists' );
		
	 }

	 public static function SHOW_ARLIST() {
		if (class_exists('jNews_Pro')) {
//			JToolBarHelper::custom('forms','createformT.png','createformT.png', _JNEWS_FORM_BUTTON ,false);
			$bar = JToolBar::getInstance('toolbar');
			$linkBut = jNews_Tools::completeLink( 'option='.JNEWS_OPTION.'&act=list&task=forms', true, false, true );
			$bar->appendButton( 'Popup', 'forms', _JNEWS_FORM_BUTTON, $linkBut );
		}
		JToolBarHelper::custom('publish','publishT.png','publishT.png', _JNEWS_PUBLISHED ,true);
		JToolBarHelper::custom('unpublish','unpublishT.png','unpublishT.png', _JNEWS_UNPUBLISHED ,true);
		JToolBarHelper::divider();
		JToolBarHelper::customX('add', 'newT.png', 'newT.png', _JNEWS_MENU_NEW , false);
		JToolBarHelper::customX('edit', 'editT.png', 'editT.png', _JNEWS_MENU_EDIT , true);
		JToolBarHelper::custom( 'delete', 'deleteT.png', 'deleteT.png', _JNEWS_DELETE , true);
		JToolBarHelper::divider();
		jNews_Menu::_cPanelBtn();
		jNews_Menu::_wizardBtn( 'list-autoresponders' );
	 }

	 public static function EDIT_LIST($task) {
	 	JToolBarHelper::custom( 'update', 'saveT.png', 'saveT.png', _JNEWS_SAVE , false);
		JToolBarHelper::custom( $task, 'cancelT.png', 'cancelT.png', _JNEWS_CANCEL , false);
		JToolBarHelper::divider();
//		jNews_Menu::_cPanelBtn();
		$act = JRequest::getVar( 'act', '', '', 'WORD' );
		$doc = $act=='arlist' ? 'edit-autoresponder' : 'edit-list';
		jNews_Menu::_wizardBtn( $doc );
	 }

	 public static function NEW_LIST($task) {
		JToolBarHelper::custom( 'doNew', 'saveT.png', 'saveT.png', _JNEWS_SAVE , false);
		JToolBarHelper::custom( $task, 'cancelT.png', 'cancelT.png', _JNEWS_CANCEL , false);
		JToolBarHelper::divider();
//		jNews_Menu::_cPanelBtn();
		$act = JRequest::getVar( 'act', '', '', 'WORD' );
		$doc = $act=='arlist' ? 'edit-autoresponder' : 'edit-list';
		jNews_Menu::_wizardBtn( $doc );
	 }

	 public static function SHOW_MAILINGS() {

	 	$listtype = JRequest::getInt('listype');
	 	if ($listtype != '7') JToolBarHelper::custom('unpublishMailing','publishT.png','publishT_f2.png', _JNEWS_UNPUBLISHED ,true);
	 	JToolBarHelper::divider();
		JToolBarHelper::custom('preview', 'previewT.png', 'previewT.png', _JNEWS_MENU_PREVIEW , true );
		
//		$listype = 0;
//		if (isset($_GET['listype'])){ 
//			$listype = $_GET['listype']; 
//		} elseif (isset($_POST['droplist'])) { 
//			$listtype = JRequest::getInt('listype');
//			$maliste = explode('-',$_POST['droplist']); $listype = $maliste[0];
//		} elseif (isset($_POST['listid'])) {
//			$maliste = jNews_Lists::getLists($_POST['listid'],0,null,'listnameA',false,false,false,false);
//			$listype = (!empty($maliste[0]->list_type)) ? $maliste[0]->list_type : 0;
//		}

		JToolBarHelper::divider();
		JToolBarHelper::customX('add', 'newT.png', 'newT.png', _JNEWS_MENU_NEW , false);
		JToolBarHelper::customX('edit', 'editT.png', 'editT.png', _JNEWS_MENU_EDIT , true);
		if ($listtype != '7') JToolBarHelper::customX('copy', 'copyT.png', 'copyT.png',_JNEWS_MENU_COPY, true);
		JToolBarHelper::divider();
		JToolBarHelper::custom( 'deleteMailing', 'deleteT.png', 'deleteT.png', _JNEWS_DELETE , true);
		JToolBarHelper::divider();
		jNews_Menu::_cPanelBtn();
		$doc = $listtype == '7' ? 'list-smart-newsletter' : 'list-newsletter';
		jNews_Menu::_wizardBtn( $doc );
	 }

	 public static function NEWMAILING() {

		$mailingID = JRequest::getInt('mailingid', '', 'request');
		$bar = JToolBar::getInstance('toolbar');
		$doc = JFactory::getDocument();

		if (empty($mailingID) || $mailingID < 1) {
		 	$css = 'span.icon-32-acatemplate {background-image:url('.JNEWS_PATH_ADMIN_IMAGES.'toolbar/templates.png)}';
	        $doc->addStyleDeclaration($css, $type = 'text/css');
			$bar->appendButton( 'Popup', 'acatemplate', _JNEWS_TEMPLATE, jNews_Tools::completeLink( 'option='.JNEWS_OPTION.'&act=templates&task=assign', true, false, true ) );
			JToolBarHelper::divider();
		}

		$listype = JRequest::getInt('listype', 0 );
		$css = 'span.icon-32-acatags {background-image:url('.JNEWS_PATH_ADMIN_IMAGES.'toolbar/tag.png)}';
	    $doc->addStyleDeclaration($css, $type = 'text/css');

		if($listype == 7) {

			$catid = JRequest::getVar('cat_id', 0, 'request');
			if(empty($mailingID) || $mailingID < 1){
				$link = jNews_Tools::completeLink( 'option='.JNEWS_OPTION.'&act=tags&listype='.$listype.'&cat_id='.$catid.'&new=1' , true, false, true );
			}else{
				$delaymax = JRequest::getInt('delay_max', 0, 'request');
				$notifyID = JRequest::getInt('notify_id', 0, 'request');
				$link= jNews_Tools::completeLink( 'option='.JNEWS_OPTION.'&act=tags&listype='.$listype.'&cat_id='.$catid.'&delay_max='.$delaymax.'&notify_id='.$notifyID , true, false, true );
			}
		}else{
			$link = jNews_Tools::completeLink( 'option='.JNEWS_OPTION.'&act=tags&listype='.$listype , true, false, true );
		}
		
		$bar->appendButton( 'Popup', 'acatags', _JNEWS_MENU_TAG, $link );
		JToolBarHelper::divider();
		JToolBarHelper::custom('savePreview', 'previewT.png', 'previewT.png', _JNEWS_MENU_PREVIEW , false);

		if ( empty($listype) ) {
			$droplistW = JRequest::getVar('droplist', '');
			$maliste = explode('-',$droplistW );
			if ( !empty($maliste[0]) ) {
				$listype = $maliste[0];
			} else {
				$listidW = JRequest::getVar('listid', 0 );
				$maliste = jNews_Lists::getLists($listidW,0,null,'listnameA',false,false,false,false);
				$listype = $maliste[0]->list_type;
			}
		}

		JToolBarHelper::divider();
		JToolBarHelper::customX('apply', 'applyT.png', 'applyT.png', _JNEWS_MENU_APPLY , false);
		JToolBarHelper::customX('save', 'saveT.png', 'saveT.png', _JNEWS_SAVE , false);
		JToolBarHelper::custom('show', 'cancelT.png', 'cancelT.png', _JNEWS_MENU_CANCEL , false);
		JToolBarHelper::divider();
		
		$docLink = ( $listype == '7') ? 'edit-smart-newsletter' : 'edit-newsletter';
		jNews_Menu::_wizardBtn( $docLink );

	 }

	 
	 public static function PREVIEWMAILING($task) {
		$mailingid = JRequest::getVar('mailingid','0');
		$mailingid = ($mailingid==0) ? jNews_Mailing::getLastMailingId() : $mailingid;

		if ( $GLOBALS[JNEWS.'level'] > 1 && !jnews::isLocal() ) {
			$bar = JToolBar::getInstance('toolbar');
			$linkSpam = jNews_Tools::completeLink( 'option='.JNEWS_OPTION.'&act=mailing&task=testspam&mailingid='.$mailingid.'&tmpl=component', true, false, true );
	 		if( version_compare(JVERSION,'1.6.0','<') ){
				$html = '<a class="modal" href="'. $linkSpam. '"> <img src="'. JNEWS_PATH_ADMIN_IMAGES2 .'toolbar/block.png"> <br/><center>'._JNEWS_MENU_SEND_TESTSPAM.'</center> </a>';
	 		}else{ //j16
		    	$html = '<a class="modal" href="'. $linkSpam.'" rel="{handler: \'iframe\', size: {x: 1050, y: 800}}" > <img src="'. JNEWS_PATH_ADMIN_IMAGES2 .'toolbar/block.png"> <br/><center>'._JNEWS_MENU_SEND_TESTSPAM.'</center> </a>';
	 		}

			$bar->appendButton( 'Custom', $html );			
			JToolBarHelper::spacer();
		}
		
		JToolBarHelper::custom('preview', 'preview.png', 'preview.png', _JNEWS_MENU_SEND_TEST , false);
		JToolBarHelper::spacer();
		

		$listype = JRequest::getInt('listype', 0, 'request');
		
		if($listype==1){
			$bar = JToolBar::getInstance('toolbar');
			$linkViewOnline = jNews_Tools::completeLink( 'option='.JNEWS_OPTION.'&act=mailing&task=view&mailingid='.$mailingid.'&format=raw', true, false, true );
			$bar->appendButton( 'Popup', 'preview', _JNEWS_VIEW_BROWSER, $linkViewOnline );
			JToolBarHelper::spacer();
			
			$bar = JToolBar::getInstance('toolbar');
			$linkBut = jNews_Tools::completeLink( 'option='.JNEWS_OPTION.'&act=mailing&task=sendready&mailingid='.$mailingid, true, false, true );
			$bar->appendButton( 'Popup', 'sendT', _JNEWS_MENU_SEND, $linkBut );
			JToolBarHelper::spacer();
			
		}

		jNews_Menu::_editMailingPrev();
		JToolBarHelper::spacer();

		JToolBarHelper::custom('show', 'cancelT.png', 'cancelT.png', _JNEWS_MENU_CANCEL , false);
		JToolBarHelper::divider();
		jNews_Menu::_cPanelBtn();
//		jNews_Menu::_wizardBtn();
	 }

	 public static function QUEUE_MENU(){
	 	if(class_exists('jNews_QueueHTML')){
			$bar = JToolBar::getInstance('toolbar');
			$linkBut = jNews_Tools::completeLink( 'option='.JNEWS_OPTION.'&act=queue&task=pqueue&mailingid=0' , true, false, true );
			$bar->appendButton( 'Popup', 'process', _JNEWS_MENU_SEND_QUEUE, $linkBut );
			JToolBarHelper::spacer();
			JToolBarHelper::divider();
			JToolBarHelper::customX('block', 'block.png', 'block.png', _JNEWS_QUEUE_BLOCK , false);
			JToolBarHelper::custom('unblock', 'unblock.png','unblock.png', _JNEWS_QUEUE_UNBLOCK ,false);
			JToolBarHelper::spacer();
			JToolBarHelper::divider();
			JToolBarHelper::customX('delq', 'deleteT.png', 'deleteT.png', _JNEWS_DELETE , false);
			JToolBarHelper::custom('cleanq', 'clean-queue.png','clean-queue.png', _JNEWS_EMPTY_Q ,false);
			JToolBarHelper::divider();
			jNews_Menu::_cPanelBtn();
			jNews_Menu::_wizardBtn( 'list-queue' );
	 	}
	 }

	 public static function TEMPLATES_MENU(){
	 	if(class_exists('jNews_TemplatesHTML')){
	 		$bar = JToolBar::getInstance('toolbar');
	 		JHTML::_( 'behavior.modal' );

	 		if( version_compare(JVERSION,'1.6.0','<') ){ //j15
				$html = '<a class="modal" href="'. jNews_Tools::completeLink( 'option='.JNEWS_OPTION.'&act=templates&task=tempupload' , true, false, true ). '"> <img src="'. JNEWS_PATH_ADMIN_IMAGES2 .'toolbar/upload.png"> <br/><center>'._JNEWS_FILES_UPLOAD.'</center> </a>';
	 		}else{ //j16
		    	$html = '<a class="modal" href="'. jNews_Tools::completeLink('option='.JNEWS_OPTION.'&act=templates&task=tempupload', true, false, true ).'" rel="{handler: \'iframe\', size: {x: 850, y: 500}}" > <img src="'. JNEWS_PATH_ADMIN_IMAGES2 .'toolbar/upload.png"> <br/><center>'._JNEWS_FILES_UPLOAD.'</center> </a>';
	 		}

			$bar->appendButton( 'Custom', $html );
			JToolBarHelper::divider();
			$html = '<a target="_NEW" href="http://www.joobi.co/index.php?option=com_jlinks&controller=redirect&link=newsletter-templates"> <img src="'. JNEWS_PATH_ADMIN_IMAGES2 .'toolbar/more_templates.png"> <br/><center>'._JNEWS_MORE_TEMPLATES.'</center> </a>';
			$bar->appendButton( 'Custom', $html );
			JToolBarHelper::divider();
	 		JToolBarHelper::custom('publish','publishT.png','unpublishT.png', _JNEWS_PUBLISHED ,true);
			JToolBarHelper::custom('unpublish','unpublishT.png','unpublishT.png', _JNEWS_UNPUBLISHED ,true);
			JToolBarHelper::makedefault('default', 'Default');
			JToolBarHelper::divider();
			JToolBarHelper::customX('add', 'newT.png', 'newT.png', _JNEWS_MENU_NEW , false);
			JToolBarHelper::customX('edit', 'editT.png', 'editT.png', _JNEWS_MENU_EDIT , true);
			JToolBarHelper::custom( 'copy', 'copyT.png', 'copyT.png', _JNEWS_MENU_COPY , true);
			JToolBarHelper::divider();
			JToolBarHelper::customX('delete', 'deleteT.png', 'deleteT.png', _JNEWS_DELETE , true);
			JToolBarHelper::divider();
			jNews_Menu::_cPanelBtn();
			jNews_Menu::_wizardBtn( 'list-templates' );
	 	}
	 }

	 public static function NEWTEMPLATE(){

	 	JToolBarHelper::custom('sendtest', 'preview.png', 'preview.png', _JNEWS_SENDTEST_TEMP , false);
		JToolBarHelper::divider();

	 	if(class_exists('jNews_TemplatesHTML')){

			if( version_compare(JVERSION,'1.6.0','<') ){ //j15
				$html = '<a class="modal" href="'. jNews_Tools::completeLink('option='.JNEWS_OPTION.'&act=templates&task=tempupload', true, false, true ).'"> <img src="'. JNEWS_PATH_ADMIN_IMAGES2 .'toolbar/upload.png" /> <br/><center>'._JNEWS_FILES_UPLOAD.'</center> </a>';
			}else{
				$html = '<a class="modal" href="'. jNews_Tools::completeLink('option='.JNEWS_OPTION.'&act=templates&task=tempupload', true, false, true ).'" rel="{handler: \'iframe\', size: {x: 850, y: 500}}" > <img src="'. JNEWS_PATH_ADMIN_IMAGES2 .'toolbar/upload.png" /> <br/><center>'._JNEWS_FILES_UPLOAD.'</center> </a>';
			}

			$bar = JToolBar::getInstance('toolbar');
			$HTML = '<a class="modal" title="'._JNEWS_MAILING_TAG.'" href="'. jNews_Tools::completeLink('option='.JNEWS_OPTION.'&act=tags', true, false, true ).'" rel="{handler: \'iframe\', size: {x: 850, y: 500}}"> <img src="'. JNEWS_PATH_ADMIN_IMAGES2 .'toolbar/tag.png"/> <br/><center>'._JNEWS_MAILING_TAG.'</center> </a>';
			$bar->appendButton( 'Custom', $HTML );
	 		JToolBarHelper::divider();
	 		JToolBarHelper::customX('apply', 'applyT.png', 'applyT.png', _JNEWS_MENU_APPLY , false);
			JToolBarHelper::customX('save', 'saveT.png', 'saveT.png', _JNEWS_SAVE , false);
			JToolBarHelper::divider();
			JToolBarHelper::custom('cancel', 'cancelT.png', 'cancelT.png', _JNEWS_CANCEL , false);
			JToolBarHelper::divider();
//			jNews_Menu::_cPanelBtn();
			jNews_Menu::_wizardBtn( 'edit-template' );
	 	}
	 }

	  public static function EDITTEMPLATE(){
	 	if(class_exists('jNews_TemplatesHTML')){

	 		$script = 'function getTemplate() {
	 					var form = form = document.adminForm;
							template_id = form.template_id.value;
	 		}';

			$doc = JFactory::getDocument();
			$doc->addScriptDeclaration( $script);
			$template_id = JRequest::getVar('template_id');

			$html = '<a class="modal" onclick="getTemplate()" title="'._JNEWS_MENU_PREVIEW.'" href="'. jNews_Tools::completeLink( 'option='.JNEWS_OPTION.'&act=templates&task=preview&template_id='.$template_id , true, false, true ).'" rel="{handler: \'iframe\', size: {x: 850, y: 500}}"> <img src="'. JNEWS_PATH_ADMIN_IMAGES2 .'toolbar/preview_template.png"> <br/><center>'._JNEWS_MENU_PREVIEW.'</center> </a>';
			$HTML = '<a class="modal" title="'._JNEWS_MAILING_TAG.'" href="'. jNews_Tools::completeLink('option='.JNEWS_OPTION.'&act=tags', true, false, true ).'" rel="{handler: \'iframe\', size: {x: 850, y: 500}}"> <img src="'. JNEWS_PATH_ADMIN_IMAGES2 .'toolbar/tag.png"/> <br/><center>'._JNEWS_MAILING_TAG.'</center> </a>';

			JToolBarHelper::custom('sendtest', 'preview.png', 'preview.png', _JNEWS_SENDTEST_TEMP , false);
			JToolBarHelper::divider();

			$bar = JToolBar::getInstance('toolbar');
			$bar->appendButton( 'Custom', $html );
			$bar->appendButton( 'Custom', $HTML );
			JToolBarHelper::divider();
	 		JToolBarHelper::customX('apply', 'applyT.png', 'applyT.png', _JNEWS_MENU_APPLY , false);
	 		JToolBarHelper::customX('save', 'saveT.png', 'saveT.png', _JNEWS_SAVE , false);
			JToolBarHelper::divider();
			JToolBarHelper::custom('cancel', 'cancelT.png', 'cancelT.png', _JNEWS_CANCEL , false);
			JToolBarHelper::divider();
//			jNews_Menu::_cPanelBtn();
			jNews_Menu::_wizardBtn( 'edit-template' );
	 	}
	 	
	 }

	 public static function CONFIGURATION(){

	 	//check if acajoom datas are already transferred to jnews tables
	 	if(jNews_Update::checkAcajoom()){
	 		if(!jNews_Update::checkAcaUpdate()){
		 		JToolBarHelper::custom('acaupdate', 'import.png', 'import.png', _JNEWS_INSTALL_ACAUPDATEBTN, false);
		 		JToolBarHelper::divider();
	 		}
	 	}

		JToolBarHelper::custom('sendtest', 'preview.png', 'preview.png', _JNEWS_MENU_SEND_TEST , false);
		JToolBarHelper::spacer();

		if (class_exists('aca_archive') ) {
			JToolBarHelper::custom('archiveAll', 'archiveT.png', 'archiveT.png', _JNEWS_MENU_ARCHIVE_ALL, false);
			JToolBarHelper::spacer();
		}

		JToolBarHelper::custom('syncUsers','subscribers.png','subscribers.png', _JNEWS_MENU_SYNC_USERS ,false);
		JToolBarHelper::divider();

		JToolBarHelper::customX('apply', 'applyT.png', 'applyT.png', _JNEWS_MENU_APPLY , false);
		JToolBarHelper::customX('save', 'saveT.png', 'saveT.png', _JNEWS_SAVE , false);
		JToolBarHelper::custom('cancel', 'cancelT.png', 'cancelT.png', _JNEWS_CANCEL , false);
		
		JToolBarHelper::divider();
		jNews_Menu::_cPanelBtn();
		jNews_Menu::_wizardBtn( 'configuration' );
	 }

	 public static function CANCEL_ONLY($task) {
		JToolBarHelper::customX('cancelMailing', 'cancelT.png', 'cancelT.png', _JNEWS_MENU_CANCEL , false);
		JToolBarHelper::divider();
		jNews_Menu::_cPanelBtn();
//		jNews_Menu::_wizardBtn();
	 }

	 public static function STATISTICS() {

	 	if( version_compare(JVERSION,'1.6.0','<') ){ //j15
	 		JToolBarHelper::custom('refresh', 'refreshT.png', 'refreshT.png', _JNEWS_MENU_REFRESH_STATS, false);
			JToolBarHelper::custom('generate', 'generate.png', 'generate.png', _JNEWS_MENU_GENERATE_STATS, false);
	 	}else{ //j16
	 		jNews_Menu::_jnewsRefresh();
	 		jNews_Menu::_jnewsGenerate();
	 	}
		JToolBarHelper::divider();
		jNews_Menu::_cPanelBtn();
		jNews_Menu::_wizardBtn( 'statistics' );
	 }


	 public static function UPDATE() {
	 	jNews_Menu::_backBtn();
		jNews_Menu::_cPanelBtn();
	 }

	 public static function DOUPDATE() {
	 	jNews_Menu::_backBtn();
		jNews_Menu::_cPanelBtn();
	 }

	 public static function about() {
		jNews_Menu::_cPanelBtn();
	 }

	/**
	 * <p>public static function to create the wizard menu<p>
	 * @return boolean
	 */
	 public static function _wizardBtn( $name='' ) {
	 	
		include_once( JNEWSPATH_ADMIN . 'buttons' . DS . 'wizard.php' );	 	
	 	$bar = JToolBar::getInstance('toolbar');
		$bar->appendButton( 'Wizard', $name );
	 	
	 	return true;
	 	
	 }

	 /**
	  * <p>public static function to create the custom back menu</p>
	  * @return boolean
	  */
	  public static function _backBtn(){
	  	$html = '<a href=\'javascript:history.go(-1)\'> <img src="'. JNEWS_PATH_ADMIN_IMAGES2 .'toolbar/backT.png"/> <br/><center>'._JNEWS_MENU_BACK.'</center> </a>';
		$bar = JToolBar::getInstance('toolbar');
		$bar->appendButton( 'Custom', $html );
		return true;
	  }

	  /**
	  * <p>public static function to create the custom cpanel menu</p>
	  * @return boolean
	  */
	  public static function _cPanelBtn(){
	  	$html = '<a href=\'index.php?option='.JNEWS_OPTION.'\'> <img src="'. JNEWS_PATH_ADMIN_IMAGES2 .'toolbar/cpanelT.png"/> <br/><center>'._JNEWS_MENU_CPANEL.'</center> </a>';
		$bar = JToolBar::getInstance('toolbar');
		$bar->appendButton( 'Custom', $html );
		return true;
	  }

	  /**
	  * <p>public static function to create the custom cpanel menu</p>
	  * @return boolean
	  */
	  public static function _editMailingPrev(){
		$mailingType = JRequest::getVar( 'listype' );
		$mailingid = JRequest::getVar('mailingid', '0');
		$listId = JRequest::getVar('listid', '0');

		$mailingid = ($mailingid==0) ? jNews_Mailing::getLastMailingId() : $mailingid;

	  	$html = '<a href="index.php?option='.JNEWS_OPTION.'&act=mailing&task=edit&listype='.$mailingType.'&mailingid='.$mailingid.'&listid='.$listId.'"> <img src="'. JNEWS_PATH_ADMIN_IMAGES2 .'toolbar/editT.png"/> <br/><center>'._JNEWS_MENU_EDIT.'</center> </a>';
		$bar = JToolBar::getInstance('toolbar');
		$bar->appendButton( 'Custom', $html );
		return true;
	  }

	public static function _jnewsRefresh(){
		$html = '<a onclick ="javascript: submitbutton(\'refresh\')" href="#"> <img src="'. JNEWS_PATH_ADMIN_IMAGES2 .'toolbar/refreshT.png"/> <br/><center>'._JNEWS_MENU_REFRESH_STATS.'</center> </a>';
		$bar = JToolBar::getInstance('toolbar');
		$bar->appendButton( 'Custom', $html );
		return true;
	}

	public static function _jnewsGenerate(){
		$html = '<a onclick ="javascript: submitbutton(\'generate\')" href="#"> <img src="'. JNEWS_PATH_ADMIN_IMAGES2 .'toolbar/generate.png"/> <br/><center>'._JNEWS_MENU_GENERATE_STATS.'</center> </a>';
		$bar = JToolBar::getInstance('toolbar');
		$bar->appendButton( 'Custom', $html );
		return true;
	}

 }
