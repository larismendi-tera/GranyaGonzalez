<?php
defined('_JEXEC') OR die('Access Denied!');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co

/**
 * This class outputs/generates the correct data in a reports and display a graph
 * functions included:
 * headerFilter, getDataSubscribers, displayGraphSubs, getDataMailing, mailingSpecificGraph
 */


class outputReportGraph {

	/**
	 * This public static function loads the required files for the statistics reports
	 */
	public static function initIncludes() {

		//import the open flash chart library into our file
		require_once(JNEWS_PATH_INCLUDES.'openflashchart'. DS .'php-ofc-library'.DS .'open-flash-chart.php');
		require_once(JNEWSPATH_ADMIN.'droplist'. DS .'intervals.php');			//intervals radiolist
		require_once(JNEWSPATH_ADMIN.'droplist'. DS .'predefined_range.php');	//predefined dropdownlist
		require_once(JNEWSPATH_ADMIN.'droplist'. DS .'report_type.php');		//report type radio list
		require_once(JNEWSPATH_ADMIN.'droplist'. DS .'subscribers.php');		//users dropdown list

		$doc = JFactory::getDocument();
		$doc->addStyleSheet( JNEWS_URL_ADMIN . 'cssadmin/jnews.css' );
		$doc->addStyleSheet( JNEWS_URL_INCLUDES.'calendar2/css/calendar.css');
		JHTML::_('behavior.modal');

	}


/**
	 * This public static function displays the header in the page, it consists of report filters
	 * @param string $currentInterval
	 */
	public static function headerFilter( $currentInterval ){
		//Predefined fieldset
		$currentRange =  JRequest::getVar('rptrange');
		$currentType = JRequest::getVar('rpttype');

		if ( empty( $currentInterval ) ) $currentInterval = JRequest::getVar('rptinterval');
		if ( empty( $currentRange ) ) $currentRange = 'this-month';
		if ( empty( $currentType ) ) {
			if($GLOBALS[JNEWS.'level'] > 2)$currentType = 'graph';
			else $currentType = 'listing';
		}

		//drop lists used in the header filter
		$filters = new stdClass;
		$filters->interval = intervalReportType::intervalType($currentInterval);
		$filters->predefinedRange = rangeReportType::rangeType($currentRange);
		$filters->reportType = outputReportType::reportType($currentType);
		$filters->subs = subscribersReportType::subscirbersType();

		$mainPath = JNEWS_URL_INCLUDES.'calendar2/';

		//for passing the values in the input of start and end
		$task = JRequest::getVar( 'task' );
		$startdate = ( $task!='refresh' ? JRequest::getVar( 'startdate', '0000-00-00' ):'0000-00-00' );
		$enddate = ( $task!='refresh' ? JRequest::getVar( 'enddate', '0000-00-00' ):'0000-00-00' );

	$mainframe = JFactory::getApplication();

	if($mainframe->isAdmin()) $width = '450px';
	else $width = '350px';
	?>

 	<table align="center" valign="top" >
 	<tr> <td>
 		<fieldset id="predef_date" style="width: <?php echo $width; ?>; height: 100px;">
 			<legend><?php echo _JNEWS_GROUP_PREDEFINED_DATE.':'; ?></legend>
 			<table align="center">
  				<tbody>
					<tr><td valign="top"><?php echo _JNEWS_LABEL_SET_INTERVAL.':'; ?></td>
						<td valign="top"> <?php echo $filters->interval; ?>
					 </td></tr>
					<tr>

						<td valign="top"><?php echo _JNEWS_LABEL_DATE_RANGE.':'; ?></td>
						<td valign="top"> <?php echo $filters->predefinedRange; ?>
					</td></tr>

					<tr>
						<td valign="top" style="padding-right:10px;"><?php echo _JNEWS_LABEL_CURRENT_SERVER_TIME.': '; ?></td>
						<td valign="top"><?php echo date( "l, j F Y H:i:s", jnews::getNow( 0, true ) )?></td></tr>
					</tr>

				</tbody>
			</table>

 		</fieldset>
	</td>
	<td>
	<script type="text/javascript" src="<?php echo $mainPath.'js/calendar.js'; ?>" > </script>

		<table align="center">
		<?php 	if($GLOBALS[JNEWS.'level'] > 2){ ?>
					<tr><td valign="top"><?php echo _JNEWS_LABEL_REPORT_TYPE.':'; ?></td>
						<td valign="top"><?php echo $filters->reportType ?>
		 			</td></tr>
		<?php 	}

		if($mainframe->isAdmin()) $width = '350px';
		else $width = '300px';
		?>
			<tr><td colspan="2" valign="top">
				<fieldset id="specific_date"style="width: <?php echo $width; ?>; height: 80px;"><legend><?php echo _JNEWS_GROUP_SPECIFIED_DATE; ?> </legend>
				<table align="center" >
				<tbody>
				<tr><td valign="top"><?php echo _JNEWS_SPECIFIED_DATE_START.':'; ?></td>
					<td valign="top">
						<input id="startdate" name="startdate" value="<?php echo $startdate;?>" type="text">
						<input type="button" class="aca_calendar" value=""
							style ="background:transparent url('<?php echo $mainPath. 'images/dashboard-icon.gif'; ?>') repeat scroll 0 0;"
							onclick="displayCalendar(document.getElementById('startdate'),'yyyy-mm-dd',this,false,
								'<?php echo $mainPath .'images/'; ?>')">
					</td></tr>
				<tr><td valign="top"><?php echo _JNEWS_SPECIFIED_DATE_END .':'; ?> </td>
					<td valign="top">
						<input name="enddate" id="enddate" value="<?php echo $enddate;?>" type="text">
						<input type="button" class="aca_calendar" value=""
							style ="background:transparent url('<?php echo $mainPath. 'images/dashboard-icon.gif'; ?>') repeat scroll 0 0;"
							onclick="displayCalendar(document.getElementById('enddate'),'yyyy-mm-dd',this,false,
								'<?php echo $mainPath .'images/'; ?>')">
					</td></tr>
			</tbody></table>
		</table>
		</td></tr>
  		</tbody>

	</table>
	<input type="hidden" name="option" value="<?php echo JNEWS_OPTION; ?>" />
	<input type="hidden" id ="act" value="statistics">
	<input type="hidden" id ="task" value="">
	<?php 
	$mainframe = JFactory::getApplication();
	if(version_compare(JVERSION,'1.6.0','<') || $mainframe->isAdmin()){ ?>
	<script language="javascript" type="text/javascript">
			function submitbutton(pressbutton) {
				var form = document.adminForm;
				if (pressbutton == 'generate') {
					<?php 
					if($mainframe->isAdmin()){
					?>
					form.action = 'index.php?option=<?php echo JNEWS_OPTION; ?>&act=statistics&task=generate#';
					<?php }else{//frontend
						$mainLink = JRoute::_( 'index.php?option='.JNEWS_OPTION.'&act=statistics&task=generate&mid=6' );
						?>
					form.action = '<?php echo $mainLink; ?>';
						<?php 
					}
					?>
				}else if (pressbutton == 'refresh') {
					<?php 
							if($mainframe->isAdmin()){
							?>
							form.action = 'index.php?option=<?php echo JNEWS_OPTION; ?>&act=statistics&task=refresh';
							<?php }else{//frontend
								$mainLink = JRoute::_( 'index.php?option='.JNEWS_OPTION.'&act=statistics&task=refresh&mid=6' );
								?>
							form.action = '<?php echo $mainLink; ?>';
								<?php 
							}
							?>
					
				}else if(pressbutton == 'exportmailing'){
					form.action = 'index.php?option=<?php echo JNEWS_OPTION; ?>&act=statistics&task=exportm';
				}else if(pressbutton == 'exportlist'){
					form.action = 'index.php?option=<?php echo JNEWS_OPTION; ?>&act=statistics&task=exportl';
				}else if(pressbutton == 'exportsubscribers'){
					form.action = 'index.php?option=<?php echo JNEWS_OPTION; ?>&act=statistics&task=exports';
				}
				submitform( pressbutton );
			}
			</script>
		<?php }else{ ?>
		<script language="javascript" type="text/javascript">
			function submitbutton(pressbutton) {
				var form = document.adminForm;
				if (pressbutton == 'generate') {
					form.action = 'generate#';
				}else if (pressbutton == 'refresh') {
					form.action = 'refresh';
				}else if(pressbutton == 'exportmailing'){
					form.action = 'exportm';
				}else if(pressbutton == 'exportlist'){
					form.action = 'exportl';
				}else if(pressbutton == 'exportsubscribers'){
					form.action = 'exports';
				}
				submitform( pressbutton );
			}
			</script>
		<?php 
		}
	}


/**
	 * This public static function creates the statistics and reports tab views
	 * @param array $filters query list filters
	 * @param string $task action task
	 * @param string $fileNameExport
	 */
	public static function tabReports( $filters, $task, $fileNameExport ) {

		//type of reports: listing, graph or export file
		$type = JRequest::getVar('rpttype');
		if( empty( $type ) ){
			if ($GLOBALS[JNEWS.'level'] > 2) $type = 'graph';
			else $type = 'listing';
		}

		$stats_tabs = new MosTabsjNews(0);
		$stats_tabs->startPane( 'acaStatsReports' );
		$stats_tabs->startTab( _JNEWS_REPORTS_MAIL, "acaStatsReports.Mailing");
		outputReportGraph::mailingReports( $filters, $type, $task, $fileNameExport );
		$stats_tabs->endTab();
		$stats_tabs->startTab( _JNEWS_REPORTS_LIST, "acaStatsReports.Lists");
		outputReportGraph::listReports( $filters, $type, $task, $fileNameExport );
		$stats_tabs->endTab();
		$stats_tabs->startTab( _JNEWS_REPORTS_SUBS, "acaStatsReports.Subscriber");
		outputReportGraph::subscribersReports( $filters, $type, $task, $fileNameExport );
		$stats_tabs->endTab();
		$stats_tabs->endPane();
		echo '<div style="clear:both;"></div>';
	}

/**
	 * This public static function generates the List Reports Statistics
	 * @param array $filters array of header filters
	 * @param string $type type of reports(listing, graph & export file)
	 * @param string $task
	 * @param string $fileNameExport
	 */
	 public static function listReports( $filters, $type, $task, $fileNameExport ){
		$my = JFactory::getUser();
		if(!empty($my->id)) $ownedlists = jNews_Lists::getOwnedlists($my->id);

		if(version_compare(JVERSION,'1.6.0','>=')){ //j16
			$usergid =JAccess::getGroupsByUser($my->id, false);
			$my->gid = $usergid[0];
		}

		$gidAdmins = array(24,25,7,8);

		$mainframe = JFactory::getApplication();

		$dateFormat = $filters['dateFormat'];
		$specialFormat = $filters['specialFormat'];
		$dateFormat4DateNumber = $filters['dateFormat4DateNumber'];
		$specialNo = $filters['specialNo'];
		$startdate = $filters['startdate'];
		$enddate = $filters['enddate'];

		$db = JFactory::getDBO();
		$sql = "SELECT L.id, L.list_name, N.subscribers, N.confirmed, O.unsubs " .
					" FROM `#__jnews_lists` AS L " .
      				" LEFT JOIN ( " .
      				"		SELECT S.list_id, count( S.subscriber_id ) AS subscribers, " .
      				"			SUM( T.confirmed ) AS confirmed" .
      				"		FROM `#__jnews_listssubscribers` AS S " .
      				"		LEFT JOIN `#__jnews_subscribers` AS T ON T.id = S.subscriber_id" .
      				"		WHERE S.subdate BETWEEN $startdate AND $enddate" .
      				"		GROUP BY S.list_id " .
      				"   ) AS N ON N.list_id = L.id" .
      				" LEFT JOIN ( " .
      				"		SELECT V.list_id, count( V.subscriber_id ) AS unsubs" .
      				"		FROM `#__jnews_listssubscribers` AS V" .
      				"		WHERE V.unsubdate BETWEEN $startdate AND $enddate" .
      				"			AND V.unsubscribe = 1" .
      				"		GROUP BY V.list_id" .
      				"   ) AS O ON O.list_id = L.id" .
      				" WHERE L.published <>2 " .
      				"   AND ( N.list_id is not NULL OR O.list_id is not NULL )";

				if(!$mainframe->isAdmin()){
					if($GLOBALS[JNEWS.'enable_jsub']){
						if(!empty($ownedlists)) $sql .= " AND N.list_id IN (".implode($ownedlists, ',').")";
					}
					if( (!in_array($my->gid, $gidAdmins) ) && jnews::checkpermissions($my->gid) ){ //come back here
						if(!empty($ownedlists)) $sql .= " AND N.list_id IN (".implode($ownedlists, ',').")";
					}
				}

				$sql .=	" GROUP BY L.id ".
      				" ORDER BY L.id ";

			$db->setQuery( $sql );
			$results = $db->loadObjectList();

		if( !empty($results)) {
			foreach ( $results as $key => $data ) {
				//subscribers waiting for confirmation
				$results[$key]->unconfirmed = $data->subscribers - $data->confirmed;
			}
		}

		$mainPath = JNEWS_PATH_ADMIN_IMAGES.'16/';
		?>	<div id="wizard" class=""></div> <?php

		if($GLOBALS[JNEWS.'level'] > 2){
			?>
				<div id="exportbtn" style="float:right;">

	         	<a  href="#" name="exportlist" value="<?php echo _JNEWS_STATS_EXPORT; ?>"
	             	onclick="submitbutton('exportlist')">
	             	<img src="<?php echo $mainPath . 'export_statistics.png'?>"/>
	       		</a>
		    	</div>
				<br/> <br/>

			<?php

			if ( $task == 'exportl' ){								//task
				//Go to a public static function to export the generated file
				outputReportGraph::listExport( $results, $fileNameExport );
			}
			if($type == 'graph'){
				outputReportGraph::listGraph( $results );
			}
		}

		//By default it will display a listing of reports
		if($type == 'listing'){
				//call the public static function that wil display the reports in listing type
				outputReportGraph::listListing( $results );
		}
	 	return true;

	 }


/**
	 * This public static function is to generate data report of Lists Report
	 * @param array $filters array of header filters
	 * @param string $type type of reports(listing, graph & export file)
	 * @param string $task
	 * @param string $fileNameExport
	 */
	 public static function listListing( $results ){

	 	$columnHeaders = array( '#', _JNEWS_LIST_NAME, _JNEWS_LIST_SUBCRIBERS, _JNEWS_LIST_UNSUBSCRIBERS,_JNEWS_LIST_CONFIRMED, _JNEWS_LIST_UNCONFIRMED, 'ID');
		$colNames = array( 'list_name', 'subscribers','unsubs', 'confirmed', 'unconfirmed', 'id' );

		$styles = array();
		$styles['subscribers'] = $styles['confirmed'] = 'text-align:center;';
		$styles['unconfirmed'] = $styles['id'] = $styles['unsubs'] = 'text-align:center;';

		outputReportGraph::htmlListingOutput( $columnHeaders, $colNames, $results, $styles );

	 }


/**
	 * This public static function will generate a graph report of Subscribers Report
	 * -- No. of Subscriptions per List.
	 * Bar chart is generated, it includes the number of subscribers/unsubscribers/confirmed
	 * @referenced files: open flash chart 2 library
	 * @param object $results query result
	 */
	 public static function listGraph( $results ){

		//Inializing all the variables needed
		$xLabels = array();
		$subs = array();
		$unsubs = array();
		$confirmed = array();
		$unconfirmed = array();

		$min = 0;
		$max = 0;
		$range = 0;
		$value = 0;
		$valueSub = 0;
		$valueUnSub = 0;
		$valueCon = 0;
		$valueUncon = 0;
		if ( !empty( $results ) ){
			//Extract the query results and group it to specific groups
			foreach ( $results as $key => $data ){
				$xLabels[] = $data->list_name;
				//subs
				if( empty( $data->subscribers ) ){
					$subsTemp[] = 0;
				} else {
					$subsTemp[] = $valueSub =(int)$data->subscribers;
				}
				$subs = $subsTemp;

				//unsubs
				if ( empty( $data->unsubs ) ){
					$unsubsTemp[] = 0;
				} else {
					$unsubsTemp[] = $valueUnSub =(int)$data->unsubs;
				}
				$unSubs = $unsubsTemp;

				//confirmed
				if( empty( $data->confirmed ) ){
					$confirmedTemp[] = 0;
				} else {
					$confirmedTemp[] = $valueCon = (int)$data->confirmed;
				}
				$confirmed = $confirmedTemp;

				//unconfirmed
				if( empty($data->unconfirmed ) ){
					$unconfirmed[] = 0;
				} else {
					$unconfirmed[] = $valueUncon= (int)$data->unconfirmed;
				}

				$minTemp = 0;
				$maxTemp = 0;

				if( $valueSub >  $valueCon ){
					 $minTemp = $valueCon;
					 $maxTemp = $valueSub;
				} else {
					 $minTemp = $valueSub;
					 $maxTemp = $valueCon;
				}
				if( $minTemp > $valueUnSub && $maxTemp > $valueUnSub ) $minTemp = $valueUnSub;
				if( $minTemp < $valueUncon && $maxTemp < $valueUncon ) $maxTemp = $valueUncon;
				if( $minTemp > $valueUncon ) $minTemp = $valueUncon;

				//Minimum, maximum and range
				if( $min > $minTemp ) $min = $minTemp;
				if( $max < $maxTemp ) $max = $maxTemp;
			}
		}else{
			echo '&nbsp;&nbsp;<b>' . _JNEWS_GRAPH_WARN_MESSAGE . '</b><br /><br />';
			return true;
		}
		$range = ($max-$min)/10;

		//generate json data for first graph
		$css = '{font-size:15px;font-weight:bold;color:#0B55C4;}';
		$title = new title(_JNEWS_REPORTS_LIST);
		$title->set_style($css);

		$barSubs = new bar();					//Subscribers
		$barSubs->set_values($subs);
		$barSubs->set_colour( '#006400' );		//156cbd
		$barSubs->set_tooltip(_JNEWS_PIE_SUBS.':#val#');

		$barUnsubs = new bar();				//Unsubscribers
		$barUnsubs->set_values($unSubs);
		$barUnsubs->set_colour('#66CD00');		// 94D710
		$barUnsubs->set_tooltip(_JNEWS_PIE_UNSUBS.':#val#');

		$barConfirmed = new bar();
		$barConfirmed->set_values($confirmed);
		$barConfirmed->set_colour( '#0000EE' );			//  368d03 0000CD
		$barConfirmed->set_tooltip(_JNEWS_PIE_CONFIRMED.':#val#');	//Confirmed

		$barUnconfirmed = new bar();
		$barUnconfirmed->set_values($unconfirmed);
		$barUnconfirmed->set_colour( '#1E90FF' );			//  f7941d
		$barUnconfirmed->set_tooltip(_JNEWS_PIE_UNCONFIRMED.':#val#');	//Unconfirmed

		//x-axis label config
		$x_axis = new x_axis();
		$x_axis->set_labels_from_array($xLabels);
		$x_axis->labels->rotate(-20);
		$x_axis->labels->set_size(12);

		//y-axis label config
		$y_axis = new y_axis();
		$y_axis->set_range($min,$max, $range );

		//display only one graph but multiple bar chart
		$chartList = new open_flash_chart();
		$chartList->set_title($title);
		$chartList->set_x_axis($x_axis);
		$chartList->set_y_axis($y_axis);
		$chartList->add_element( $barSubs );			//Subscribers
		$chartList->add_element( $barUnsubs);			//Unsubs
		$chartList->add_element( $barConfirmed);		//Confirmed
		$chartList->add_element( $barUnconfirmed);		//Unconfirmed
		$chartList->set_bg_colour('#FFFFFF');
		$data_2 = $chartList->toPrettyString();

		outputReportGraph::createGraph($data_2, 'lists',null,null,'ls');

		return true;
	 }


/**
	 * public static function that will export a file based on the generated reports
	 * @param array $results array of results from query
	 * @param string $fileNameExport
	 */
	 public static function listExport( $results, $fileNameExport ){
	 	//Inializing all the variables needed
		$headers = '';
		$data = '';
		$ctr = 0;

		$headers = _JNEWS_LIST_NAME. "," ._JNEWS_LIST_SUBCRIBERS . "," ._JNEWS_LIST_CONFIRMED.  ",". _JNEWS_LIST_UNCONFIRMED;
		if(!empty($results)){
			foreach($results as $key => $datas){
				$data .= '"' .$datas->list_name . '"';
				$data .= "," . $datas->subscribers ;
				$data .= "," .  $datas->confirmed ;
				$data .= "," . $datas->unconfirmed ;
				$data .= "\n";
			}

			$csvFormat = $headers. "\n" . $data;
			$fileNameTemp = _JNEWS_REPORTS_LIST . $fileNameExport;
			$fileName = str_replace(' ', '_', $fileNameTemp);
			outputReportGraph::exportHeader($csvFormat, $fileName);		//Call the public static function to export the csv file
 		}else{
			echo jnews::printM('warning',_JNEWS_EXPORT_WARN_MESSAGE);
			return;
		}

		return true;
	 }


/**
	 * This public static function gets the data that needs to be generated
	 * Report for the No. of Subcriptions on a certain Date
	 * @param array $filters array of header filters
	 * @param string $type type of reports(listing, graph & export file)
	 * @param string $task
	 * @param string $fileNameExport
	 */
	 public static function subscribersReports( $filters, $type, $task, $fileNameExport ) {

		$dateFormat = $filters['dateFormat'];
		$specialFormat = $filters['specialFormat'];
		$dateFormat4DateNumber = $filters['dateFormat4DateNumber'];
		$specialNo = $filters['specialNo'];
		$startdate = $filters['startdate'];
		$enddate = $filters['enddate'];

		$db = JFactory::getDBO();
		$sql = "SELECT FROM_UNIXTIME(subscribe_date $specialFormat) AS s_date," .
					"		$dateFormat4DateNumber subscribe_date $specialNo AS DateNumber, " .
					"		COUNT(id) AS `s_id`" .
					" FROM `#__jnews_subscribers`" .
					" WHERE confirmed = 1" .
					" 	AND `subscribe_date`BETWEEN $startdate AND $enddate" .
					" GROUP BY `DateNumber` " .
					" ORDER BY `subscribe_date`";
		$db->setQuery( $sql );
		$results = $db->loadObjectList();

		$mainPath = JNEWS_PATH_ADMIN_IMAGES.'16/';
		?>	<div id="wizard" class=""></div> <?php

		if($GLOBALS[JNEWS.'level'] > 2){
			?>
		       	<div id="exportbtn" style="float:right;">
		         	<a  href="#" name="exportsubscribers" value="<?php echo _JNEWS_STATS_EXPORT; ?>"
		             	onclick="submitbutton('exportsubscribers')">
		             	<img src="<?php echo $mainPath .'export_statistics.png'?>"/>
		       		</a>
		       	</div>
				<br/> <br/>

			<?php

			if( $task == 'exports'){
				//Go to a public static function to export the generated file
				outputReportGraph::subscribersExport( $results, $fileNameExport );
			}
			if($type == 'graph'){
				//temporarily redirect to the graph page
				outputReportGraph::subscribersGraph( $results );
			}
		}

		if($type == 'listing'){
			//call the public static function that wil display the reports in listing type
			outputReportGraph::subscribersList( $results );
		}

	}
	
	
/**
	 * This public static function is to generate data report of Subscribers Report
	 * @param object $results query results
	 */
	 public static function subscribersList( $results ){

	 	$columnHeaders = array( '#', _JNEWS_LIST_SUB_DATE,_JNEWS_LIST_SUBCRIBERS);
		$colNames = array( 's_date', 's_id' );

		$styles = array();
		$styles['s_date'] = $styles['s_id'] = 'text-align:center;';

		outputReportGraph::htmlListingOutput( $columnHeaders, $colNames, $results, $styles );

	 }
	 

/**
	 * This public static function will generate a graph report of Subscribers Report
	 * --No. of Subscriptions on a certain date
	 * Line chart is generated,
	 * @referenced files: open flash chart 2 library
	 * @param object $results query result
	 */
	 public static function subscribersGraph( $results ){

		$xLabels = array();
		$subs = array();
		$min = 0;
		$max = 0;
		$range = 0;
		if(!empty($results)){
			foreach($results as $key => $data){
				$xLabels[] = $data->s_date;
				if(empty( $data->s_id)){
					$subsTemp[] = 0;
				}else{
					$subsTemp[] = $valueSub =(int)$data->s_id;
				}
				$subs = $subsTemp;

				//Minimum, maximum and range
				if($min > $valueSub) $min = $valueSub;
				if($max < $valueSub) $max = $valueSub;
			}
		}else{
			echo '&nbsp;&nbsp;<b>' . _JNEWS_GRAPH_WARN_MESSAGE . '</b><br /><br />';
			return true;
		}

		$range = ($max-$min)/10;

		//graph title settings
		$css = '{font-size:15px;font-weight:bold;color:#0B55C4;}';
		$title = new title(_JNEWS_REPORTS_SUBS);
		$title->set_style($css);

		//line graph settings
		$line = new line();
		$line->set_values($subs);
		$line->set_colour('#156cbd');
		$line->set_key(_JNEWS_REPORTS_SUBS,10);

		//x-axis settings
		$xaxis = new x_axis();	//set the x-axis
		$xaxis->set_labels_from_array($xLabels);
		$xaxis->labels->rotate(-20);
		$xaxis->labels->set_size(12);

		//y-axis settings
		$yaxis = new y_axis();
		$yaxis->set_range($min,$max, $range );

		//chart settings
		$chartLine = new open_flash_chart();
		$chartLine->set_title($title);
		$chartLine->set_x_axis($xaxis);
		$chartLine->set_y_axis($yaxis);
		$chartLine->add_element($line);
		$chartLine->set_bg_colour('#FFFFFF');
		$data = $chartLine->toPrettyString();

		outputReportGraph::createGraph( $data, 'subs', null, null,'sb' );

		return true;
	}


	/**
	 * public static function to generate an export file
	 */
	 public static function subscribersExport($results, $fileNameExport){
	 	//Inializing all the variables needed
		$headers = '';
		$data = '';
		$ctr = 0;
		$csvFormat = '';

		$headers = _JNEWS_LIST_SUB_DATE .","._JNEWS_LIST_SUBCRIBERS;
		if(!empty($results)){
			foreach($results as $key => $datas){
				$data .= '"' . $datas->s_date  . '" ' ;
				$data .= "," . $datas->s_id  . '' ;
				$data .= "\r\n";
			}

			$csvFormat = $headers."\r\n" . $data;
			$fileNameTemp = _JNEWS_REPORTS_SUBS . $fileNameExport;
			$fileName = str_replace(' ', '_', $fileNameTemp);
			outputReportGraph::exportHeader($csvFormat, $fileName);
 		}else{
			echo jnews::printM('warning',_JNEWS_EXPORT_WARN_MESSAGE);
			return;
		}

//			return true;
	 }


	/**
	 * This public static function generates the view of the mailing statistics
	 * and reports lists and graphs.
	 * @param array $filters array of header filters
	 * @param string $type type of reports(listing, graph & export file)
	 * @param string $task
	 * @param string $fileNameExport
	 */
	public static function mailingReports( $filters, $type, $task, $fileNameExport ){
		$my = JFactory::getUser();
		if(!empty($my->id)) $ownedlists = jNews_Lists::getOwnedlists($my->id);

		if(version_compare(JVERSION,'1.6.0','>=')){ //j16
			$usergid =JAccess::getGroupsByUser($my->id, false);
			$my->gid = $usergid[0];
		}

		$gidAdmins = array(24,25,7,8);

		$dateFormat = $filters['dateFormat'];
		$specialFormat = $filters['specialFormat'];
		$dateFormat4DateNumber = $filters['dateFormat4DateNumber'];
		$specialNo = $filters['specialNo'];
		$startdate = $filters['startdate'];
		$enddate = $filters['enddate'];

		$mainframe = JFactory::getApplication();

		$db = JFactory::getDBO();

		$sql = "SELECT FROM_UNIXTIME(N.sentdate $specialFormat) AS s_date," .
				"	$dateFormat4DateNumber N.sentdate $specialNo AS DateNumber, " .
				"	M.subject, N.html_sent, N.text_sent, N.html_read as html_views, " .
				"	N.pending, N.failed, N.bounces, N.sent, " .
				"	N.mailing_id as id" .
				" FROM #__jnews_mailings AS M" .
				" LEFT JOIN #__jnews_stats_global AS N ON N.mailing_id = M.id";

		if(!$mainframe->isAdmin()){
			if($GLOBALS[JNEWS.'enable_jsub']) $sql .= " LEFT JOIN #__jnews_listmailings AS O ON O.mailing_id = M.id";
			if( (!in_array($my->gid, $gidAdmins) ) && jnews::checkpermissions($my->gid) ){ //come back here
				if(!empty($ownedlists))$sql .= " LEFT JOIN #__jnews_listmailings AS O ON O.mailing_id = M.id";
			}
		}

		$sql .=" WHERE N.sentdate BETWEEN $startdate AND $enddate" ;

		if(!$mainframe->isAdmin() && !jnews::checkPermissions('admin')){
			if($GLOBALS[JNEWS.'enable_jsub'] && !empty($ownedlists) ) $sql .=" AND O.list_id IN (".implode($ownedlists,',').")";
			if( (!in_array($my->gid, $gidAdmins) ) && jnews::checkpermissions($my->gid) ) $sql .=" AND O.list_id IN (".implode($ownedlists,',').")";
		}

		$sql .=" GROUP BY M.id, DateNumber ORDER BY DateNumber ";

		$db->setQuery( $sql );
		$results = $db->loadObjectList();
			
		$mainPath = JNEWS_PATH_ADMIN_IMAGES.'16/';

		?>	<div id="wizard" class=""></div> <?php

		if($GLOBALS[JNEWS.'level'] > 2){
			?>
			       	<div id="exportbtn" style="float:right;">
			         	<a  href="#" name="exportmailing" value="<?php echo _JNEWS_STATS_EXPORT; ?>"
			             		onclick="submitbutton('exportmailing')" >
			             	<img src="<?php echo $mainPath . 'export_statistics.png'?>"/>
			       		</a>
			    	</div>
					<br/> <br/>
			<?php

			if ( $task == 'exportm' ){
				//Go to a public static function to export the generated file
				outputReportGraph::mailingExport( $results, $fileNameExport );
			}
			if($type == 'graph'){
					//tallying totals
			        $totalData = array();
			        $totalData['subject'] = '';
			        $totalData['html_sent'] = 0;
			        $totalData['text_sent'] = 0;
			        $totalData['html_views'] = 0;
			        $totalData['pending'] = 0;
//			        $totalData['failed'] = 0;
//			        $totalData['bounces'] = 0;
			        $totalData['sent'] = 0;
			        $totalData['mailings'] = 0;

			        if(!empty($results)){
				        foreach( $results as $row ){
				            $totalData['html_sent'] += $row->html_sent;
				            $totalData['text_sent'] += $row->text_sent;
				            $totalData['html_views'] += $row->html_views;
				            $totalData['pending'] += $row->pending;
//			           		$totalData['failed'] += $row->failed;
//				        	$totalData['bounces'] += $row->bounces;
				           	$totalData['sent'] += $row->sent;
//			           	 	$totalData['sent'] += $row->html_sent + $row->text_sent; //fixed
				            $totalData['mailings'] ++;
				        }//end4each
			        }
			        
					outputReportGraph::mailingGraph( $totalData );
					
			}
		}

		if($type == 'listing') {
			//call the public static function that wil display the reports in listing type
			outputReportGraph::mailingList( $results, str_replace( "'", "", $startdate ), str_replace( "'", "", $enddate ) );
		}

		return true;
	}


	/**
	 * This public static function displays the mailing report listing
	 * @param object $results query results
	 */
	public static function mailingList( $results, $startDate=0, $endDate=0 ) {
		$mainframe = JFactory::getApplication();

		$columnHeaders = array( '#', _JNEWS_LIST_SUB, _JNEWS_MAILING_SENT_HTML,
				_JNEWS_MAILING_SENT_TEXT, _JNEWS_VIEWS_FROM_HTML,
				_JNEWS_MAILING_PENDING, _JNEWS_MAILING_SENT, 'ID' );

		$colNames = array( 'subject', 'html_sent', 'text_sent', 'html_views','pending', 'sent', 'id' );

		$styles = array();
		$styles[ 'html_sent' ] = $styles[ 'text_sent' ] = $styles[ 'sent' ] = 'text-align:center;';
		$styles[ 'html_views' ] = $styles[ 'pending' ] = 'text-align:center;';
		$styles[ 'id' ] = 'text-align:center;';

		$links = array();
		$links['subject'] = jNews_Tools::completeLink( 'option='.JNEWS_OPTION.'&act=statistics&task=graph', true, false, true );//changed the second parameter from false to true

		outputReportGraph::htmlListingOutput( $columnHeaders, $colNames, $results, $styles, $links, $startDate, $endDate );

	}


	/**
	 * This public static function will generate a graph report of Mailing Report
	 * Two Pie charts are generated,
	 * @referenced files: open flash chart 2 library
	 *
	 * @param object $results query result
	 */
	 public static function mailingSpecificGraph( $results ,$queryfilters ) {
		if ( empty($results) ) {
			echo '&nbsp;&nbsp;<b>' . _JNEWS_GRAPH_WARN_MESSAGE . '</b><br /><br />';
			return true;
		}

		?>
		<div style="font-size:20px; font-weight:bold; color:#0B55C4;">
			<?php echo _JNEWS_MAILING_SUBJECT_HEADER . ': ' . $results['subject']; ?>
		</div>
		<br />
		<?php
			
		//remove the wizard text in the pop-up page of mailing report
		$doc = JFactory::getDocument();
		$doc->addStyleDeclaration('div#acawizard{display:none}');
		//Tabs
		$stats_tabs = new MosTabsjNews(0);
		$stats_tabs->startPane( 'acaMailingReports' );
		

		//Graph of each Mailing
		$stats_tabs->startTab( _JNEWS_MAIL_GRAPH, "acaMailingReports.graph" );
		//Call the public static function which creates the pie Chart
		$data = array();
		$data = outputReportGraph::mailingPieChart($results);
		?>
			<br /><br />
			<table style="width:100%; height:100%;">
				<tr><td width="50%">
						<?php if($data['pie1'] == 'empty'){
							echo jnews::printM('notice',_JNEWS_PIE_FORMAT_WARN_MESSAGE);
						}else{
							echo outputReportGraph::createGraph($data['pie1'], 'format', '250','250',1);
						}
						?>
				</td><td>
						<?php if($data['pie2'] == 'empty'){
							echo jnews::printM('notice',_JNEWS_PIE_PROCESS_WARN_MESSAGE);
						}else{
							echo outputReportGraph::createGraph($data['pie2'], 'mailing', '320','250',2);
						}
						?>
				</td></tr>
			</table>
	<?php
	$stats_tabs->endTab();
	//Detailed info of each Mailing (read/unread/text)
	$stats_tabs->startTab( _JNEWS_MAIL_DETAILS, "acaMailingReports.details");

	?>
		<br />
		<table class="<?php echo jnews::myTheme(); ?>">
			<thead>
				<th ><?php echo _JNEWS_MAIL_DETAILS_READ; ?></th>
				<th ><?php echo _JNEWS_MAIL_DETAILS_UNREAD; ?></th>
				<th ><?php echo _JNEWS_MAIL_DETAILS_TEXT; ?></th>
			</thead>
			<tr>
				<?php
					$mailingId = $results['id'];
					$startDate  = $queryfilters['startdate'];
					$endDate = $queryfilters['enddate'];

					$db = JFactory::getDBO();

					$sql = "SELECT B.`email` " .	//COUNT(A.subscriber_id) AS s_format "
							"FROM `#__jnews_stats_details` AS A " .
							"LEFT JOIN `#__jnews_subscribers` AS B ON B.`id` = A.`subscriber_id` ".
							"WHERE A.`mailing_id` = " . $mailingId .
							" AND A.sentdate BETWEEN $startDate AND $endDate";

					//html read
					$query = $sql . " AND A.`html` = 1 AND A.`read` = 1 LIMIT 10000";
					$db->setQuery( $query );
					$resultHTMLRead = $db->loadResultArray();

					//html unread
					$query = $sql . " AND A.`html` = 1 AND A.`read` = 0 LIMIT 10000";
					$db->setQuery( $query );
					$resultHTMLUnread = $db->loadResultArray();
					
					//text only
					$query = $sql . " AND A.`html` = 0 LIMIT 10000";
					$db->setQuery( $query );
					$resultsText = $db->loadResultArray();
					
				?>
				<td valign="top"><?php
						foreach($resultHTMLRead as $data){
							if(!empty($data)) echo $data . "<br />";
						}
				 ?></td>
				<td valign="top"><?php
						foreach($resultHTMLUnread as $data){
							if(!empty($data)) echo $data . "<br />";
						}

				 ?></td>
				<td valign="top"><?php
						foreach($resultsText as $data){
							if(!empty($data)) echo $data . "<br />";
						}
				 ?></td>
			</tr>
		</table>
	<?php
	$stats_tabs->endTab();
	$stats_tabs->endPane();

	}


/**
	 * public static function that will generate a general graph for mailing
	 * It will display a results in percentage base on the no. of mailings generated on a certain date
	 *
	 * @param array $resultsGeneral values of the graph
	 */
	 public static function mailingGraph( $resultsGeneral ){
		if (empty($resultsGeneral)){
			echo '&nbsp;&nbsp;<b>' . _JNEWS_GRAPH_WARN_MESSAGE . '</b><br /><br />';
			return true;
		}
		$data = array();
		$data = outputReportGraph::mailingPieChart( $resultsGeneral );
		?>
			<table style="width:100%; height:100%;">
				<tr><td>
<?php if($data['pie1'] == 'empty'){
	echo jnews::printM('notice',_JNEWS_PIE_FORMAT_WARN_MESSAGE);
}else{
	$mainframe = JFactory::getApplication();
	$width = ( $mainframe->isAdmin() ) ? '650' : '260';
	echo outputReportGraph::createGraph($data['pie1'], 'format', $width,'',1);
}
?>
				</td><td>
<?php if($data['pie2'] == 'empty'){
	echo jnews::printM('notice',_JNEWS_PIE_PROCESS_WARN_MESSAGE);
}else{
	echo outputReportGraph::createGraph($data['pie2'], 'mailing', '250','250',2);
}
?>
				</td></tr>
			</table>
		<?php

	 	return true;
	 	
	 }


/**
	 * public static function to generate two pie charts for the mailing reports
	 * It was extracted because there are two graph in mailing for each mailing and general mailing which is the total
	 *
	 * @param array $results data needed for graph values
	 */
	 public static function mailingPieChart( $results ){
			$data = array();

			//First Pie, Pie Chart for HTML/TEXT format
			$valuesFormat = array();
			$pieHtmlValues = new pie_value((int)$results['html_sent'], _JNEWS_GRAPH_LBL_HTML);
			$pieTextValues = new pie_value((int)$results['text_sent'], _JNEWS_GRAPH_LBL_TEXT);
			$valuesFormat[] = $pieHtmlValues;
			$valuesFormat[] = $pieTextValues;

			if(empty($results['html_sent']) && empty($results['text_sent']) ){
				$data['pie1'] = 'empty';
			}else{
				$css = '{font-size:15px;font-weight:bold;color:#0B55C4;}';
				$title = new title(_JNEWS_GRAPH_TITLE_FORMAT);	//Name of the newsletter
				$title->set_style($css);

				$pieMailing = new pie();
				$pieMailing->set_alpha(0.6);
				$pieMailing->set_start_angle( 35 );
				$pieMailing->add_animation( new pie_fade() );
				$pieMailing->set_tooltip( '#val#<br>#percent# of 100%' );
				$pieMailing->set_colours( array('#156cbd','#368d03','#f7941d','#ed145a','#92278f',
											'#156cbd','#182972','#3e5d2b','#db4b19','#9d0039','#440e62') );
				$pieMailing->set_values($valuesFormat);

				$chartPie = new open_flash_chart();
				$chartPie->set_title($title);
				$chartPie->add_element($pieMailing);
				$chartPie->set_bg_colour('#FFFFFF');

				$data['pie1'] = $chartPie->toPrettyString();

			}

			//Second chart, Pie chart for the status of mailing process
			$valuesProcess = array();
			//$pieFailedlValues = new pie_value((int)$results['failed'], _JNEWS_MAILING_FAILED);
            //$pieBounceValues = new pie_value((int)$results['bounces'], _JNEWS_MAILING_BOUNCES);
			$piePendingValues = new pie_value((int)$results['pending'], _JNEWS_MAILING_PENDING);
			$pieSentValues = new pie_value((int)$results['sent'], _JNEWS_MAILING_SENT);
           //$valuesProcess[] = $pieFailedlValues;
           //$valuesProcess[] = $pieBounceValues;
			$valuesProcess[] = $piePendingValues;
			$valuesProcess[] = $pieSentValues;

            //if(!empty($results['failed']) && !empty($results['pending']) && !empty($results['bounces'])){
			if(!empty($results['sent']) || !empty($results['pending'])){

				$css = '{font-size:15px;font-weight:bold;color:#0B55C4;}';
				$title = new title(_JNEWS_GRAPH_PIE_TITLE_MAIL);		//Name of the newsletter
				$title->set_style($css);

				$pieMailing = new pie();
				$pieMailing->set_alpha(0.6);
				$pieMailing->set_start_angle( 35 );
				$pieMailing->add_animation( new pie_fade() );
				$pieMailing->set_tooltip( '#val#<br>#percent# of 100%' );
				$pieMailing->set_colours( array('#156cbd','#368d03','#f7941d','#ed145a','#92278f',
											'#156cbd','#182972','#3e5d2b','#db4b19','#9d0039','#440e62') );
				$pieMailing->set_values($valuesProcess);

				$chartPie = new open_flash_chart();
				$chartPie->set_title($title);
				$chartPie->add_element($pieMailing);
				$chartPie->set_bg_colour('#FFFFFF');

				$data['pie2'] = $chartPie->toPrettyString();
			}else{
				$data['pie2'] = 'empty';
			}

	 	return $data;

	 }


/**
	 * Export the generated file in csv format
	 * @param $result - (array) data to be exported
	 * 		  $fileNameExport - (string) temporary name of the file to be exported
	 */
	 public static function mailingExport( $results, $fileNameExport ){
	 	//Inializing all the variables needed
		$headers = '';
		$data = '';
		$ctr = 0;

		$headers .= _JNEWS_LIST_SUB . ",". _JNEWS_MAILING_SENT_HTML. ","._JNEWS_MAILING_SENT_TEXT. ",". _JNEWS_VIEWS_FROM_HTML. ",".
               _JNEWS_MAILING_FAILED. ",". _JNEWS_MAILING_PENDING. ",". _JNEWS_MAILING_BOUNCES. ","._JNEWS_MAILING_SENT. ",". 'ID';

		if ( !empty( $results ) ){
			foreach( $results as $key => $datas ){
				$data .= '"' .$datas->subject. '"' ;
				$data .= "," . $datas->html_sent ;
				$data .= " ," . $datas->text_sent ;
				$data .= " ," . $datas->html_views ;
				$data .= " ," . $datas->pending ;
//				$data .= " ," . $datas->failed ;
//				$data .= " ," . $datas->bounces ;
				$data .= " ," . $datas->sent ;
				$data .= " ," . $datas->id ;
				$data .= "\r\n";
			}

			$csvFormat = $headers. "\r\n" . $data;
			$fileNameTemp = _JNEWS_REPORTS_MAIL . $fileNameExport;
			$fileName = str_replace(' ', '_', $fileNameTemp);
			outputReportGraph::exportHeader($csvFormat, $fileName);		//Call the public static function to export the csv file
 		} else {
			echo jnews::printM('warning',_JNEWS_EXPORT_WARN_MESSAGE);
			return;
		}

	 }

	/**
	 * This public static function creates the listing view of the stats and reports.
	 *
	 * @param array $columnHeaders column headers of the listing table
	 * @param array $colNames column names of the results rows
	 * @param object $results query results
	 * @param array $styles styles for the column data
	 * @param array $links links for the column data
	 * @param array $popupCol name of the popup column index
	 *
	 */
	public static function htmlListingOutput( $columnHeaders, $colNames, $results=null, $styles=null, $links=null, $startDate=0, $endDate=0 ) {

		//no table to make
		if ( empty( $columnHeaders ) ) return true;
		$table = '<table class="' . jnews::myTheme() . '"> <tbody><thead>';

		$tableHeader = '<tr>';
		foreach ( $columnHeaders as $colHeader ) {
			$tableHeader .= '<th class="title" style="text-align: center;">';
			$tableHeader .= $colHeader;
			$tableHeader .= '</th>';

		}//end4each
		$tableHeader .= '</tr></thead>';

		$tableRows = '';
		if ( !empty( $results ) ){

			$rownum = 1;
			foreach( $results as $rowdata ){

				$i = ($rownum + 2) % 2;
				$trclass = 'class="row'.$i.'"';
				$tableRows .= '<tr '.$trclass.'>';
				$tableRows .= "<td style=\"width:30px;text-align: center;\"> $rownum </td>";
				$colnum = 0;

				foreach( $colNames as $colname ) {
					if ( isset( $styles[$colname] ) ) $tableRows .= '<td '.outputReportGraph::addStyle($styles[$colname]).'> ';
					else $tableRows .= "<td>" ;

					$coldata = ( !empty($rowdata->$colname )? $rowdata->$colname:0 );
					
					if ( isset( $links[$colname] ) ) {
						$coldata = outputReportGraph::addPopupLink( $links[$colname], $rowdata, $colNames, $coldata, $startDate, $endDate ) ;
					}

					$tableRows .=  "$coldata</td>";
					$colnum++;
				}

				$tableRows .= "</tr>";
				$rownum++;
			}
		}

		$table .= $tableHeader . $tableRows;
		$table .= '</tbody></table>';

		echo $table;
		
	}


	/**
	 * This public static function is to add styles into the table element
	 * @param string $style
	 * @return string html
	 */
	public static function addStyle( $style ) {
		$html = '';
		if ( !empty( $style ) ){
			$html = "style=\"$style\"";
		}

		return $html;
	}


/**
	 * This public static function generates the popup html code for the column
	 * data element.
	 * @param string $link link destionation
	 * @param object $rowdata row results data
	 * @param array $colNames
	 * @param string $coldata
	 * @return string html
	 */
	public static function addPopupLink( $link, $rowdata, $colNames, $coldata, $startDate=0, $endDate=0 ) {

		if ( empty($rowdata) ) return;

		foreach( $colNames as $name ) $link .= '&'.$name.'='.urlencode($rowdata->$name);
		
		if ( !empty($startDate) ) $link .= '&startdate='.$startDate;
		if ( !empty($endDate) ) $link .= '&enddate='.$endDate;
		
		$rel = 'rel="{handler: \'iframe\',size: {x: 700, y: 450}}" ';

		$html = '<a href="'.$link.'" class="modal" '.$rel.'>'.$coldata .'</a>';

		return $html;
		
	}


/**
	 * public static function to create and display a graph
	 * @param: $width
	 * 			$height
	 * 			$chart
	 * 			$chartid
	 * @return true
	 */
	 public static function createGraph( $data, $div, $width=null, $height=null, $id ){

		if(empty($height)) $height = '400';
		if(empty($width)) $width = '100%';

	 	$mainPath = JNEWS_URL_INCLUDES. 'openflashchart/';
	?>
		<script type="text/javascript" src="<?php echo $mainPath .'js/json/json2.js'; ?>" ></script>
		<script type="text/javascript" src="<?php echo $mainPath .'js/swfobject.js'; ?>" ></script>
		<script type="text/javascript">
			swfobject.embedSWF("<?php echo $mainPath .'open-flash-chart.swf'; ?>","<?php echo $div; ?>",
					"<?php echo $width; ?>", "<?php echo $height; ?>", "9.0.0",
					"<?php echo $mainPath .'expressinstall.swf'; ?>",
					{"get-data":"get_data_<?php echo $id; ?>"} );

			function get_data_<?php echo $id; ?>()
			{
				return JSON.stringify(data<?php echo $id; ?>);
			}
			var data<?php echo $id; ?> = <?php echo $data; ?>;
		</script>
		<div id=<?php echo '"'.$div.'"'; ?> ></div>
	<?php
	 }

	/**
	 * public static function to export the csv file
	 * @param: $csvFormat - (string) file to be exported in csv format
	 * 			$fileName - (string) name of the name consisting of name of reports and the date range
	 * @return - true;
	 */
	public static function exportHeader( $csvFormat, $fileName ){
		header('Content-type: application/octet-stream');
		header('Content-disposition:  attachment; filename="' . $fileName . '.csv"');
		header('Pragma: no-cache');
		header('Expires: 0');
		ob_end_clean();
		print $csvFormat;
		exit;

		return true;
	}

}