<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="login_system";

$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if($conn->connect_error){
    die("cloud not connect to database!".$conn->connect_error);
}
?>