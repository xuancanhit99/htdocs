<html>
<head>
	<title>Регистрация</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
	<link rel="stylesheet" href="button.css">
</head>
<body >
<center><font size="5" color="black" face="Palatino Linotype">Информационно-справочная система<br><b>"Авиарейсы Аэропорта"</b></font></center>
<hr>
<br><br><br><br><br><br>
<center><b>Регистрация:</b>
<form  class="kek" method="get"> 
<table><tr>
<td><label>Введите ЛОГИН:</label></td>
<td><input class="txa" type="text" name = "login"  maxlength = "15"></td></tr><br>
<tr>
<td><label>Введите ПАРОЛЬ:<label></td>
<td><input class="txa" type="pass" name = "password"  maxlength = "15"></td></tr>
</table> <br>
<input class="btt" type="submit" name="Submit"  value="Отправить данные"> 
</form>

<?php
if (isset($_GET['login'])){
$login = $_GET['login'];
$password = $_GET['password'];
$table = "usr";
$db=mysqli_connect("localhost","root","") OR DIE("ERROR CON ");			
mysqli_select_db($db,"users") or die(mysqli_error($db));  
mysqli_query($db, "SET NAMES utf8");
$query = "INSERT INTO usr (log,pass)  
VALUES ('$login','$password')"; 			
mysqli_query($db,$query) or die(mysqli_error($db)); 
		
}
?>
<center><p><a class="aa" href="index.php">Вернуться на предыдущую страницу</a></p>

</body>
</html>