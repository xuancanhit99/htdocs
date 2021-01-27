<?php
include('db_con.php'); 
session_start();



if(!isset($_SESSION['admin_attendance']))
{

header('location:../index.php');
}


?>