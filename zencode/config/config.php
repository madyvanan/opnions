<?php
error_reporting( error_reporting() & ~E_NOTICE );
if( ! ini_get('date.timezone') )
{
    date_default_timezone_set('IST');
}
if (version_compare(PHP_VERSION, '5.4.0', '<')) {
    if(session_id() == '') {session_start();}
} else  {
   if (session_status() == PHP_SESSION_NONE) {session_start();}
}

define("CONFIG_PATH", "E:/xampp/htdocs/zencode/config/");
define("DAO_PATH", "E:/xampp/htdocs/zencode/DAO/");
$url_array =  explode('/', $_SERVER['REQUEST_URI']);
define("CURRENT_PAGE",end($url_array));
  

