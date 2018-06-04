<?php
define(DS, DIRECTORY_SEPARATOR);
define('URL_PUBLIC_FOLDER', 'public');
define('URL_PROTOCOL', 'http://');
define('URL_DOMAIN', $_SERVER['HTTP_HOST']);
define('URL_SUB_FOLDER', str_replace(URL_PUBLIC_FOLDER, '', dirname($_SERVER['SCRIPT_NAME'])));
define('URL', join( DS, array(URL_PROTOCOL, URL_DOMAIN, URL_SUB_FOLDER)));