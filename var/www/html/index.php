<?php
ob_start();

require "config/settings.php";
require "config/system.php";
require "./tagsets/site.php";

redirect("public/");

?>
