<?php
include('db_con.php'); 
session_start();



if(!isset($_SESSION['attendance_activate']))
{

header('location:../index.php');
}


?>