<?php

$host = "localhost";
$username = "root";
$password = "rootroot";
$db = "senity";

$conn = mysqli_connect($host, $username, $password, $db);

if (!$conn) {
    echo "Connect failed!";
}
