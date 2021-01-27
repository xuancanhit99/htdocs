<html>
	<head>
		<title>РЕЙСЫ АЭРОПОРТА</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="button.css">
		<meta http-equiv="Cache-Control" content="no-cache">
	</head>
	<center><font size="5" color="Black" face="Palatino Linotype">Информационно-справочная система<br><b>"Авиарейсы Аэропорта"</b></font></center>
	<hr>
	<br>
	<body>
	<?php 		 	
	$db=mysqli_connect("localhost","root","") OR DIE(mysql_error());
	mysqli_select_db($db, "airport");
	mysqli_query($db, "SET NAMES utf8");
	$result = mysqli_query($db, "SELECT flights.flnumber, destinations.gorod, flights.time, airlines.airlname, flights.datest, flights.datend, flights.per, flights.plane FROM flights,destinations, airlines WHERE flights.destin=destinations.apcode AND flights.airline=airlines.airlcode AND flights.tip='Прилет'")or die(mysqli_error($db));	
	$a=mysqli_fetch_array($result);
	echo "<table class=table>";
	echo "<tr><th><b>Рейс</b></th><th><b>Город</b></th><th><b>Время вылета</b></th><th><b>Перевозчик</b></th><th><b>С</b></th><th><b>По</b></th><th><b>Рейс выполняется по</b></th><th><b>Тип ВС</b></th><tr></b>";
	do
	{
		$pole1=$a[0];
		$pole2=$a[1];
		$pole3=$a[2];
		$pole4=$a[3];
		$pole5=$a[4];
		$pole6=$a[5];
		$pole7=$a[6];
		$pole8=$a[7];
		echo "<tr><td>$pole1</td><td>$pole2</td><td>$pole3</td><td>$pole4</td><td>$pole5</td><td>$pole6</td><td>$pole7</td><td>$pole8</td><tr>";
	} while ($a=mysqli_fetch_array($result));
	echo "</table>";
		
	?>
	<br>
	<br>
	<a class="aa" href="glav.php">На главную</a>
</body>


</html>