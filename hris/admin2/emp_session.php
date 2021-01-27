<?php
session_start();
$keys=$_GET['emp'];


if(!isset($keys))
{

header("location:../index.php");
}


?>