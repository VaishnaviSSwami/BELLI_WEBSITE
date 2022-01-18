<?php
session_start();
$dbHost = 'localhost';
$dbName = 'bellidb';
$dbUsername = 'root';
$dbPassword = '';
$dbc= mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName); 
?>