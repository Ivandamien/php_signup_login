<?php
$host = "localhost";
$dbname = "login_db";
$username = "root";
$password = "";

$mysqli =new mysqli($host,$username,$password,$dbname);
// $mysqli = new mysqli(hostname: $host,
//                      username: $username, 
//                      password: $password, 
//                      database: $dbname);

if ($mysqli->connect_errno){
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;