<?php

$host="localhost";
$user="root";
$password="";
$dbname="kedaiduludulu";

$con= mysqli_connect($host,$user,$password,$dbname);

if(!$con) {
	echo "not connected";
}
else {
	echo "connected";
}
?>
