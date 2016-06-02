<?php

global $db;
$db = new PDO("mysql:host=localhost;dbname=json;charset=utf8", "root", "");
$db->exec("SET NAMES 'utf8'");
$db->exec("SET CHARACTER SET utf8");
$db->exec("SET COLLATION_CONNECTION = 'utf8_turkish_ci'");




?>