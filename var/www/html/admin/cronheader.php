<?php
// part of orsee. see orsee.org

include ("/var/www/html/config/settings.php");
include ("/var/www/html/config/system.php");
include ("/var/www/html/config/requires.php");

site__database_config();

$settings=load_settings();

$language=$settings['admin_standard_language'];

$lang=load_language($language);


?>
