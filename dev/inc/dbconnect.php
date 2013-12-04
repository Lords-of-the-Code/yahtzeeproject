<?php
$db = new PDO("mysql:dbname=yahtzeeproject;host=localhost","admin","admin");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
