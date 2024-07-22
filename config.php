<?php
$sb_host = "localhost";
$db_username = "mamad";
$db_password = "";

$connection = mysqli_connect($sb_host,$db_username,$db_password);

if (!$connection){
    die("connection failed".mysqli_connect_error());
}
echo "connected";