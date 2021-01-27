<html>
	<head>
		<title>Главная</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="button.css">
	</head>
	<body>
	<center><font size="5" color="Black" face="Palatino Linotype">Информационно-справочная система<br><b>"Авиарейсы Аэропорта"</b></font></center>
	<hr>	
	<?php
	session_start();
	if(isset($_SESSION['Name']))
	{
	echo '<div class="leftleft">
	<a class="aa" href="insairl.php">Добавить авиакомпанию</a><br>
	<a class="aa" href="seeairl.php">Просмотреть авиакомпании</a><br>
	<a class="aa" href="insgor.php">Добавить пункт назначения</a><br>
	<a class="aa" href="seegor.php">Просмотреть города</a><br>
	<a class="aa" href="insfl.php">Добавить РЕЙС</a><br>
	<a class="aa" href="delfl.php">Удалить РЕЙС</a>
	</div>';
	};
	?>
	<div class="rightright">
	<a class="aa" href="seeflv.php">ВЫЛЕТЫ</a>
	<a class="aa" href="seepril.php">ПРИЛЕТЫ</a>
	<div><a class="down" href="logout.php">Выйти</a></div>	
	</body>


</html>