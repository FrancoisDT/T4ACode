<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
/* Database connection settings */
$host = 'localhost';
$user = 'tracking_dbuser';
$pass = 'T4AUser!';
$db = 'tracking_accounts';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);


