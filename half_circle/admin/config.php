<?php
error_reporting(E_ALL);
date_default_timezone_set('Asia/Kolkata');

$host = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "php_master";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8");

function bugRemoval($variable)
{
    global $conn;
    if (is_null($variable)) {
        return '';
    }
    return htmlspecialchars(mysqli_real_escape_string($conn, $variable), ENT_QUOTES, 'UTF-8');
}

