<?php

session_start();
ini_set('display_errors', 'On');
//error_reporting(0);


// database connection config
$dbHost = 'localhost';
$dbUser = 'root'; 
$dbPass = 'root@1';
$dbName = 'mgo';

$_SESSION['host'] = $dbHost;
$_SESSION['username'] = $dbUser;
$_SESSION['password'] = $dbPass;
$_SESSION['db_name'] = $dbName;

$conn = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);
// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

