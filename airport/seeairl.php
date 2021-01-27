<html>
	<head>
		<title>РЕЙСЫ АЭРОПОРТА</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="button.css">
	</head>
	<center><font size="5" color="Black" face="Palatino Linotype">Информационно-справочная система<br><b>"Авиарейсы Аэропорта"</b></font></center>
	<hr>
	<br>
	<body >
	<?php
	session_start();
	if(!isset($_SESSION['Name']))
	{
		echo "<div style=\"font:bold 16px Arial; color:white;\">Вы не авторизованы!</div>";
		exit;
	}
	?>		
		<?php 		 	
		$db=mysqli_connect("localhost","root","") OR DIE(mysql_error());
		mysqli_select_db($db, "airport");
		mysqli_query($db, "SET NAMES utf8");
		$result = mysqli_query($db, "SELECT * FROM airlines")or die(mysqli_error($db));	
		$a=mysqli_fetch_array($result);
		echo "<table class=table>";
		echo "<tr><th><b>Код</b></th><th><b>Название авиакомпании</b></th><tr>";
		do
		{
			$pole1=$a[0];
			$pole2=$a[1];
			echo "<tr><td>$pole1</td><td>$pole2</td><tr>";
		} while ($a=mysqli_fetch_array($result));
		echo "</table>";
		
		?>
		<br>
		<br>
		<a class="aa" href="glav.php">На главную</a>
	</body>


</html>