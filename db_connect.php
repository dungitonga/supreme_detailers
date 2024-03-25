<?php

$sname= "localhost";
$unmae= "root";
$password = "";
$db_name = "book_db";

$connection = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$connection) {
	echo "Connection failed!";
}