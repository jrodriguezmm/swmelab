<?php
// part of orsee. see orsee.org
echo "Ejecutando cron";
include ("/var/www/html/admin/cronheader.php");

if (php_sapi_name() == "cli") $done=cron__run_cronjobs();
else redirect("/var/www/html/admin/");

?>