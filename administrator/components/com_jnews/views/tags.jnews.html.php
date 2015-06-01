<?php
defined('_JEXEC') OR die('Access Denied!');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co

/**
* <p>Tags View</p>
* <p>This class contains functions to create the tag view</p>
* @author Joobi Limited <wwww.joobi.co>
*/
class jNews_TagsHTML {
	/**
	 * <p>public static function to create the menu of the tags popup view<p>
	 * @param object $mailing - used by the autocontent tagging which is only for pro version
	 */
	public static function menuTags($mailing=null, $new=1){
		$mainframe = JFactory::getApplication();
		$url = JURI::base();
		$doc = JFactory::getDocument();

        if ($mainframe->isAdmin()){
        	$doc->addStyleSheet(JNEWS_URL_ADMIN . 'cssadmin/jnews.css');//css for the table
        	$doc->addStyleSheet('components/'.JNEWS_OPTION.'/cssadmin/jnews.tags.css');//css for the menu
        }else{
        	$doc->addStyleSheet('components/'.JNEWS_OPTION.'/css/jnews.tags.css');
        }

        $task = JRequest::getVar('task');
        $listype = JRequest::getInt('listype');
        switch($task){

        	case 'site':
        		$title = _JNEWS_TAGTITLE_SITE;
        		break;

        	case 'content':
        		$title = _JNEWS_TAGTITLE_CONTENT;
        		break;

        	case 'k2content':
        		$title = _JNEWS_TAGMENU_K2CONTENT;
        		break;

        	case 'smart':
        		$title = _JNEWS_TAGTITLE_AUTOCONTENT;
        		break;

			case 'mod':
				$title = _JNEWS_TAGTITLE_MOD;
				break;

			case 'subscription':
				$title = _JNEWS_TAGMENU_SUBSCRIPTION;
				break;

			case 'subscriber':
				$title = _JNEWS_MENU_SUBSCRIBERS;
				break;

			case 'datetime':
				$title = _JNEWS_TAGMENU_DATETIME;
				break;

			case 'virtuemartproduct':
				$title = _JNEWS_TAGMENU_VMPRODUCTS;
				break;

			case 'jomsocial':
				$title = _JNEWS_TAGMENU_JOMSOCIAL;
				break;
				
			case 'share':
				$title = _JNEWS_TAGMENU_MEDIA_SHARE;
				break;

			case 'lyften':
				$title = _JNEWS_TAGMENU_BLOGS;
				break;

			case 'deals':
				$title = _JNEWS_TAGMENU_DEALS;
				break;

			case 'flexicontent':
				//$title = _JNEWS_TAGMENU_FLEXICONTENT;
				break;

			default:
				$title = _JNEWS_TAGMENU_SUBSCRIPTION;

        }
	?>
<h1><?php echo 'Tag: '.$title;?></h1>
<div id="submenu-box">
			<div class="t">
				<div class="t">
					<div class="t"></div>
		 		</div>
	 		</div>
			<div class="m">
				<ul id="submenu">
				<?php
				$tags = array (_JNEWS_TAGMENU_SUBSCRIPTION, _JNEWS_MENU_SUBSCRIBERS, _JNEWS_TAGMENU_DATETIME, _JNEWS_TAGMENU_WEBSITE, _JNEWS_TAGMENU_CONTENT);

				//we check first if the plugins(virtuemart, k2 and jomsocial) are installed or unpublished
				JPluginHelper::importPlugin('jnews');
				$vmp= JPluginHelper::getPlugin('jnews','virtuemartproduct');
				$jomsocial = $mainframe->triggerEvent( 'jnewsbot_jomsocial_editabs' );
				$share = $mainframe->triggerEvent( 'jnewsbot_share_editabs' );
				$k2 = $mainframe->triggerEvent('jnewsbot_k2editabs');
				$blogs = $mainframe->triggerEvent( 'jnewsbot_blog_editabs' );
				$deals = $mainframe->triggerEvent( 'jnewsbot_deal_editabs' );

				if (!empty($vmp)) $tags[]=_JNEWS_TAGMENU_VMPRODUCTS;

				if (!empty($k2)) $tags[]=_JNEWS_TAGMENU_K2CONTENT;

				if($GLOBALS[JNEWS.'level'] > 2){
					$joobiInclude = jnews::includejoobi();
					if (!empty($jomsocial) AND $joobiInclude) {
						if ( @include_once( JNEWSPATH_ADMIN . 'social' .DS. 'class.social.php' ) ) {
							//we check if the social class file exists for the implementation of master lists
							if(class_exists('jNews_Social')){
								$tags[]=_JNEWS_TAGMENU_JOMSOCIAL;
							}
						}	
					}
				}
				
				if(!empty($share)){
					$tags[]= _JNEWS_TAGMENU_MEDIA_SHARE;
				}
				
				if (!empty($blogs)) $tags[]= _JNEWS_TAGMENU_BLOGS;

				if (!empty($deals)) $tags[]= _JNEWS_TAGMENU_DEALS;

				if($GLOBALS[JNEWS.'level'] > 2 && $listype == 7){
					$tags[]=_JNEWS_TAGMENU_AUTOCONTENT;
					//$tags[]=_JNEWS_TAGMENU_FLEXICONTENT;
				}

				if($GLOBALS[JNEWS.'level'] > 1){
					$tags[]=_JNEWS_TAGMENU_MODULE;
				}

				foreach ($tags as $tag){

					switch($tag){

						case _JNEWS_TAGMENU_SUBSCRIPTION:
							$task = 'subscription';
						break;

						case _JNEWS_MENU_SUBSCRIBERS:
							$task = 'subscriber';
						break;

						case _JNEWS_TAGMENU_USERS:
							$task = 'user';
						break;

						case _JNEWS_TAGMENU_DATETIME:
							$task = 'datetime';
						break;

						case _JNEWS_TAGMENU_VMPRODUCTS:
								$task = 'virtuemartproduct';
						break;

						case _JNEWS_TAGMENU_WEBSITE:
							$task = 'site';
						break;

						case _JNEWS_TAGMENU_CONTENT:
							$task = 'content';
						break;

						case _JNEWS_TAGMENU_K2CONTENT:
							$task = 'k2content';
						break;

						case _JNEWS_TAGMENU_JOMSOCIAL:
							$task = 'jomsocial';
						break;
						
						case _JNEWS_TAGMENU_MEDIA_SHARE:
							$task = 'share';
						break;

						case _JNEWS_TAGMENU_AUTOCONTENT:
							$task = 'smart';
						break;

						case _JNEWS_TAGMENU_MODULE:
							$task = 'mod';
						break;

						case _JNEWS_TAGMENU_BLOGS:
							$task = 'lyften';
						break;

						case _JNEWS_TAGMENU_DEALS:
							$task = 'deals';
						break;

						case _JNEWS_TAGMENU_FLEXICONTENT:
							$task = 'flexicontent';
						break;

						default:
							$task = '';

					}//endswicth

					$class = '';

					if($GLOBALS[JNEWS.'level'] > 2){
						if(!$new){
							echo '<li'.$class.'><a href="'. jNews_Tools::completeLink( 'option='.JNEWS_OPTION.'&act=tags&task='.$task.'&cat_id='.$mailing->cat_id.'&listype='.$listype.'&delay_max='.$mailing->delay_max.'&notify_id='.$mailing->notify_id, true, false, true ) .'">'.$tag.'</a></li>';
						}else{
							echo '<li'.$class.'><a href="'. jNews_Tools::completeLink( 'option='.JNEWS_OPTION.'&act=tags&task='.$task.'&cat_id=0:0&listype='.$listype.'&new=1', true, false, true ) .'">'.$tag.'</a></li>';
						}
					}else{
						$linkTh = jNews_Tools::completeLink( 'option='.JNEWS_OPTION, true, false, true );
						echo '<li'.$class.'><a href="'. jNews_Tools::completeLink( 'option='.JNEWS_OPTION.'&act=tags&task='.$task.'&listype='.$listype, true, false, true ) .'">'.$tag.'</a></li>';
					}

				}
				?>
				</ul>
				<div class="clr"></div>
			</div>
			<div class="b">
				<div class="b">
		 			<div class="b"></div>
				</div>
			</div>
		</div>
	<?php
	}

	/**
	 * <p>public static function to create a view for the Joomla Modules tags<p>
	 * @param int $setLimit - the limit

	 */
	public static function modTags($forms){
			$mainframe = JFactory::getApplication();
			if(!$mainframe->isAdmin()) jimport( 'joomla.html.parameter' );
			JPluginHelper::importPlugin( 'jnews');
			$plugin = JPluginHelper::getPlugin('jnews');
			$params = new JParameter( $plugin->params );
			$botResult = $mainframe->triggerEvent('jnewsbot_tagmodule', array($forms, $params));
			if (empty($plugin)) echo '<center><span style="font-size: 1.3em;">The <strong>jNews Tag: Joomla Modules</strong> plugin is either not installed or published. Click <a target="_blank" href="administrator/index.php?option=com_plugins&client=site&filter_type=jnews">here</a> to check if it\'s installed or published.</span></center>';
	}

	/**
	 * <p>public static function to create the view for the joomla content tags</p>
	 */
	public static function contentTags($forms = ''){
		$mainframe = JFactory::getApplication();
		JPluginHelper::importPlugin( 'jnews' );
		$contents = $mainframe->triggerEvent( 'jnewsbot_editabs', array($forms) );
		 if (!empty($contents)){
			foreach($contents as $content) {
				echo $content[1];
			}
		}
	}

/**
	 * <p>public static function to create the view for the k2 content tags</p>
	 */
	public static function k2contentTags(){
		$mainframe = JFactory::getApplication();
		JPluginHelper::importPlugin( 'jnews' );
		$contents = $mainframe->triggerEvent( 'jnewsbot_k2editabs' );

		 if (!empty($contents)){
			foreach($contents as $content) {
				echo $content[1];
			}
		}else{
			if (empty($contents)) echo '<center><span style="font-size: 1.3em;">The <strong>jNews K2 Contents</strong> plugin is either not installed or published. Click <a target="_blank" href="administrator/index.php?option=com_plugins&client=site&filter_type=jnews">here</a> to check if it\'s installed or published.</span></center>';
		}
	}

	/**
	 * <p>public static function to create the view for the site links tags<p>
	 */
	public static function siteTags($forms=''){
			$mainframe = JFactory::getApplication();
			if(!$mainframe->isAdmin()) jimport( 'joomla.html.parameter' );
			JPluginHelper::importPlugin( 'jnews');
			$plugin = JPluginHelper::getPlugin('jnews', 'tagsite');
			$params = new JParameter( $plugin->params );
			$botResult = $mainframe->triggerEvent('jnewsbot_tagsite', array($forms, $params));
			if (empty($plugin)) echo '<center><span style="font-size: 1.3em;">The jNews Tag: Site Links plugin is either not installed or published. Click <a target="_blank" href="administrator/index.php?option=com_plugins&client=site&filter_type=jnews">here</a> to check if it\'s installed or published.</span></center>';
	}

	/** <p>public static function to create the view for the subscription tags<p>
	 */
	public static function subscriptionTags(){
			$mainframe = JFactory::getApplication();
			JPluginHelper::importPlugin('jnews');
			$plugin = JPluginHelper::getPlugin( 'jnews', 'tagsubscription' );			
			$botResult = $mainframe->triggerEvent('jnewsbot_tagsubscription');
			if (empty($plugin)) echo '<center><span style="font-size: 1.3em;">The jNews Tag: Subscription plugin is either not installed or published. Click <a target="_blank" href="administrator/index.php?option=com_plugins&client=site&filter_type=jnews">here</a> to check if it\'s installed or published.</span></center>';
	}

	/** <p>public static function to create the view for the subscriber tags<p>
	 */
	public static function subscriberTags(){
			$mainframe = JFactory::getApplication();
			JPluginHelper::importPlugin( 'jnews');
			$plugin = JPluginHelper::getPlugin('jnews', 'tagsubscriber');
			$botResult = $mainframe->triggerEvent('jnewsbot_tagsubscriber');
			if (empty($plugin)) echo '<center><span style="font-size: 1.3em;">The <strong>jNews Tag: Subscriber</strong> plugin is either not installed or published. Click <a target="_blank" href="administrator/index.php?option=com_plugins&client=site&filter_type=jnews">here</a> to check if it\'s installed or published.</span></center>';
	}

	/** <p>public static function to create the view for the subscriber tags<p>
	 */
	public static function datetimeTags(){
			$mainframe = JFactory::getApplication();
			JPluginHelper::importPlugin( 'jnews');
			$plugin = JPluginHelper::getPlugin('jnews', 'tagdatetime');
			$botResult = $mainframe->triggerEvent('jnewsbot_tagdatetime');
			if (empty($plugin)) echo '<center><span style="font-size: 1.3em;">The <strong>jNews Tag: Date and Time</strong> plugin is either not installed or published. Click <a target="_blank" href="administrator/index.php?option=com_plugins&client=site&filter_type=jnews">here</a> to check if it\'s installed or published.</span></center>';
	}

	/**
	 * public static function to create the view for the Virtuemart Products
	 */
	  public static function virtuemartproduct($forms = ''){
	  	$mainframe = JFactory::getApplication();
	  	JPluginHelper::importPlugin('jnews');
	  	$plugin= JPluginHelper::getPlugin('jnews','virtuemartproduct');
	  	if(!empty($plugin)){
		  	$params = new JParameter( $plugin->params );
			$botResult = $mainframe->triggerEvent('jnewsbot_virtuemartproduct', array($forms, $params));
	  	}
		if (empty($plugin)) echo '<center><span style="font-size: 1.3em;">The <strong>Virtuemart Product</strong> plugin is either not installed or published. Click <a target="_blank" href="administrator/index.php?option=com_plugins&client=site&filter_type=jnews">here</a> to check if it\'s installed or published.</span></center>';
	  }

	  /**
	 * public static function to create the view for jomsocial
	 */
	  public static function jomsocialTags($forms = ''){
		$mainframe = JFactory::getApplication();
		JPluginHelper::importPlugin( 'jnews', 'jnewsjomsocial' );
		$jomsocial = $mainframe->triggerEvent( 'jnewsbot_jomsocial_editabs' );

		if (!empty($jomsocial)){
			foreach($jomsocial as $jomsocial) {
				echo $jomsocial[1];
			}
		}else{
			if (empty($jomsocial)) echo '<center><span style="font-size: 1.3em;">The <strong>jNews Jomsocial</strong> plugin is either not installed or published. Click <a target="_blank" href="administrator/index.php?option=com_plugins&client=site&filter_type=jnews">here</a> to check if it\'s installed or published.</span></center>';
		}
	  }
	  
	   /**
	 * public static function to create the view for share tags
	 */
	  public static function shareTags($forms = ''){
		$mainframe = JFactory::getApplication();
		JPluginHelper::importPlugin( 'jnews', 'jnewsshare' );
		$share = $mainframe->triggerEvent( 'jnewsbot_share_editabs' );

		if (!empty($share)){
			foreach($share as $share) {
				echo $share[1];
			}
		}else{
			if (empty($share)) echo '<center><span style="font-size: 1.3em;">The <strong>jNews Share</strong> plugin is either not installed or published. Click <a target="_blank" href="administrator/index.php?option=com_plugins&client=site&filter_type=jnews">here</a> to check if it\'s installed or published.</span></center>';
		}
	  }

	  public static function lyftenblog(){
		$mainframe = JFactory::getApplication();
		JPluginHelper::importPlugin( 'jnews' );
		$blogs = $mainframe->triggerEvent( 'jnewsbot_blog_editabs' );

		 if (!empty($blogs)){
			foreach($blogs as $blog) {
				echo $blog[1];
			}
		}else{
			if (empty($blog)) echo '<center><span style="font-size: 1.3em;">The <strong>jNews Lyften Bloggie</strong> plugin is either not installed or published. Click <a target="_blank" href="administrator/index.php?option=com_plugins&client=site&filter_type=jnews">here</a> to check if it\'s installed or published.</span></center>';
		}
	}

	public static function deals(){
		$mainframe = JFactory::getApplication();
		JPluginHelper::importPlugin( 'jnews' );
		$deals = $mainframe->triggerEvent( 'jnewsbot_deal_editabs' );

		 if (!empty($deals)){
			foreach($deals as $deal) {
				echo $deal[1];
			}
		}else{
			if (empty($deal)) echo '<center><span style="font-size: 1.3em;">The <strong>jNews EZ Realty</strong> plugin is either not installed or published. Click <a target="_blank" href="administrator/index.php?option=com_plugins&client=site&filter_type=jnews">here</a> to check if it\'s installed or published.</span></center>';
		}
	}

	public static function flexicontent($mailing){

		$mainframe = JFactory::getApplication();
		JPluginHelper::importPlugin( 'jnews' );
		$flexicontent = $mainframe->triggerEvent( 'jnewsbot_flexicontent_selectCat', array($mailing) );

		 if (!empty($flexicontent)){
			foreach($flexicontent as $flexicontent) {
				echo $flexicontent[1];
			}
		}else{
			if (empty($flexicontent)) echo '<center><span style="font-size: 1.3em;">The <strong>jNews Flexicontent </strong> plugin is either not installed or published. Click <a target="_blank" href="administrator/index.php?option=com_plugins&client=site&filter_type=jnews">here</a> to check if it\'s installed or published.</span></center>';
		}

	}

}