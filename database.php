<?php
$url = 'localhost';
$username = 'root';
$password = '';
$db = mysqli_connect($url, $username, $password, "weightlight");
if (!$db) {
    die('Could not Connect My Sql:' . mysql_error());
} else {
    // echo "your connected";
}