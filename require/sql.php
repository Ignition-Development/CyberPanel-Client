<?php 
include_once("config.php");
$dbconn = new mysqli($_CONFIG["db_host"]. ':'. $_CONFIG["db_port"], $_CONFIG["db_username"], $_CONFIG["db_password"], $_CONFIG["db_name"]);

?>