<?php
defined('_JEXEC') or die('Restricted access');

if (!defined('SERVICES_JSON_SLICE'))
	require_once 'JSON/JSON.php';

function json_encode($arg)
{
	global $services_json;
	if (!isset($services_json)) {
		$services_json = new Services_JSON(SERVICES_JSON_LOOSE_TYPE);
	}
	return $services_json->encode($arg);
}

function json_decode($arg)
{
	global $services_json;
	if (!isset($services_json)) {
		$services_json = new Services_JSON(SERVICES_JSON_LOOSE_TYPE);
	}
	return $services_json->decode($arg, false);
}