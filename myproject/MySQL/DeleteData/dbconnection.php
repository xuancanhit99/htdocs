<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'admin';
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn) {
    die("Could not Connect MySQL: " .mysqli_error());
}