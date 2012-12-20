<?php
/**
* @version		$Id: configuration.php 2011-11-12 14:10:00Z santhosh subramani$
* @project		Hyves - Test 2
*
* -------------------------------------------------------------------------*/
session_start();
include('class/mysql.class.php');

/**
* @baseurl Settings	Hyves santhosh $
* @package		Chase my Friend
* -------------------------------------------------------------------------*/


$base_url = 'http://'.$_SERVER['REMOTE_ADDR'].$folder_setting; // Base-url path

//Current URL
$url = (!empty($_SERVER['HTTPS'])) ? "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] : "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];

/* -------------------------------------------------------------------------*/

/**
* @Database Setting
* -------------------------------------------------------------------------*/

/**
* Instantiate our mysql class and connect to the database.
*
* database host/server
* database username
* database password
* database name
*
* Class requires $configuration array.
*/

$configuration = array(
	'host' => 'localhost',
	'user' => 'root',
	'pass' => '',
	'name' => 'hyves'
);

$db = mysql_db::getInstance($configuration);

include('class/hyves.class.php');
$hyves = new Hyves();
/* -------------------------------------------------------------------------*/




?>