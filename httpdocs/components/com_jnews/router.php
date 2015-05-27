<?php
defined('_JEXEC') or die('Restricted access');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co

function JnewsBuildRoute( &$query ) {
	$segments = array();

	if (isset($query['act'])) {
		$segments[] = $query['act'];
		unset( $query['act'] );
	}
	if (isset($query['task'])) {
		$segments[] = $query['task'];
		unset( $query['task'] );
	}

	if ( !empty($query) ) {
		foreach($query as $name => $value){
			if ( !in_array( $name, array( 'option',  'start', 'format') ) ) {	// 'Itemid',
				$segments[] = $name.':'.$value;
				unset($query[$name]);
			}
		}
	}
	return $segments;
}

function JnewsParseRoute( $segments ) {
	$vars = array();

	if( !empty($segments) ) {
		$i = 0;
		foreach( $segments as $name ) {
			if ( strpos($name,':' ) ) {
				list($arg,$val) = explode(':',$name);
				if ( is_numeric($arg) ) $vars['Itemid'] = $arg;
				else $vars[$arg] = $val;
			} else {
				if($i == 0) $vars['act'] = $name;
				elseif($i == 1) $vars['task'] = $name;
				$i++;
			}
		}
	}
	return $vars;
}