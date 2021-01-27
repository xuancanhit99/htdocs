<html>
<head>
	<title>Авторизация</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
	<link rel="stylesheet" href="button.css">
</head>
<body>
<div class="log">
<center><font size="5" color="Black" face="Palatino Linotype">Информационно-справочная система<br><b>"Авиарейсы Аэропорта"</b></font></center>
<hr>
<div class="loginform">
<center><b>Авторизация:</b>
<center><form class="kek" method = "post"> 
<table><tr><td>
<label>Логин:</label> </td><td><input class="txa" type="text" name="log" /></td></tr>
<tr><td><label>Пароль:</label> </td><td><input class="txa" type="text" name="passs" /></td></table>
<input class="aa" type="submit" name="pass"  value="Войти"><br><br>
<a class="btt" href="glav.php">Войти как гость</a>
</form>

<?php
session_start();
If (isset ($_POST['log'])) 
{
$db = mysqli_connect('localhost','root','') or die ("Соединение не установлено!"); 
mysqli_select_db($db,"users") or die ("Соединение не очень установлено!"); 
$resultat = mysqli_query($db,"SELECT log, pass FROM usr GROUP BY id") or die(mysqli_error($db)); 
$array = mysqli_fetch_array($resultat); 
do
{
$x = True;
If ($_POST['log'] == $array['log'] && $_POST['passs'] == $array['pass'] )  
	{ 
		$_SESSION['Name']=S_POST['log'];
		echo "<script language = 'javascript'>
		document.location.href = 'glav.php';
		</script>";
		$x=False;
	}
}
while($array= mysqli_fetch_array($resultat));
If ($x = True) {echo "<div style=\"font:bold 12px Arial; color:white;\">Неверный логин или пароль (или и то и другое)
 - введите данные повторно </div>";}
}
?>
<br>

<form align = "left" action ="reg.php" method = "post"> 
<center><b>ЗАРЕГИСТРИРОВАТЬСЯ:</b><br>
<center><input type="submit" class="aa" name="registration" value="Зарегистрироваться"> 
</form></div>
</div>

</body>
</html>