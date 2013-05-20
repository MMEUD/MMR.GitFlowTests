<?php
//$_ADMIN_IPS=array('82.76.72.75', '80.86.123.21','127.0.0.1');
//if(!in_array($_SERVER['REMOTE_ADDR'],$_ADMIN_IPS)) { die("Maintenance. Please try again later"); }

//global error_reporting settings

error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);

define('INI_SET_DISPLAY_ERRORS',1);
ini_set('display_errors', INI_SET_DISPLAY_ERRORS);

define('DEBUG_SITE',0); // keep for compatibility
define('USE_FIREBUG_IN_IE', false);
/** Items per page */
