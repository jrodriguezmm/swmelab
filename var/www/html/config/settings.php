<?php
// part of orsee. see orsee.org
//error_reporting(E_ALL & ~E_NOTICE);

// SERVER SETTINGS
// Web server document root, e.g. /srv/www/htdocs
// no trailing slash!
$settings__root_to_server="/var/www/html";

// Experiment system root relative to server root, e.g. /orsee
// begins always with "/" if in a subdirectory
// no trailing slash!
$settings__root_directory="";
// url to web server document root (IP or domain name)
// without trailing slash and the http://!
//$settings__server_url="www.orsee.org";
$settings__server_url=getenv('SERVERURL');

// servr protocol (either "http://" or "https://"
$settings__server_protocol=getenv('SERVERPROTOCOLO');

// Double-check your entries above! The URL to your ORSEE installation will be:
// settings__server_protocol + settings__server_url + settings__root_directory

$site__database_host=getenv('DBHOST');
//$site__database_port="3306"; // set only if not default 3306
$site__database_database=getenv('DBNAME');
$site__database_admin_username=getenv('DBUSER');
$site__database_admin_password=getenv('DBPASS');
$site__database_type="mysql";
$site__database_table_prefix="or_";

// TIMEZOME SETTING
// PHP >= 5.1.0 requires the timezone to be explicitely set.
// If you have not set it in php.ini, then set it here. (Otherwise, you can uncomment.)
// List of timezones: http://php.net/manual/en/timezones.php
date_default_timezone_set("America/Bogota");

// EMAIL MODULE
// These settings are only needed when you plan to enable the email module
// to retrieve emails from an external email account and process them in ORSEE
//$settings__email_server_type=getenv('EMAILSERVERTYPE'); // either pop3 or imap
//$settings__email_server_name=getenv('EMAILSERVERNAME');
//$settings__email_server_port=getenv('EMAILSERVERPORT'); // if empty or not set, port is automatically determined by type
//$settings__email_username=getenv('EMAILUSER');
//$settings__email_password=getenv('EMAILPASSWORD');

//$settings__email_ssl=TRUE; // whether to use SSL to connect to IMAP/POP3 server (for gmail, use TRUE!)
// E.g. for gmail, use TRUE for ssl setting. You may have to allow 
// "Access for less secure apps" in your google account settings.

$settings__email_server_type="pop3"; // either pop3 or imap
$settings__email_server_name="pop.gmail.com";
$settings__email_server_port="995"; // if empty or not set, port is automatically determined by type
$settings__email_username="experimentos.economia.uniandes@gmail.com";
$settings__email_password="Nash2016";
$settings__email_ssl=True;
// STOP SITE, TRACKING, DEBUGGING
// If below is set to "y", the admin part of ORSEE won't be reachable for anybody
// This is useful for example when running some procedures directly in the database
$settings__stop_admin_site="n";

// To stop tracking set to "y"
$settings__disable_orsee_tracking="n";

// Enable/disable debugging information output at the bottom fo each page.
// Do NOT ENABLE on a live ORSEE system - reveals a lot of information.
$settings__time_debugging_enabled="n";
$settings__query_debugging_enabled="n";

// Include path for tagsets. Leave as is, only change when you know what you are doing.
ini_set("include_path",ini_get("include_path").":./tagsets:./../tagsets:./../../tagsets");

?>
