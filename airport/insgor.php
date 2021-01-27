<html>
	<head>
		<title>Форма добавления пункта назначения</title>
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

		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" name="additem" method="GET"> 
			<input class="txtb" type="text" name="adc"  placeholder="Код аэропорта" required value=""> <br><br>
			<input class="txtb" type="text" name="adap" placeholder="Аэропорт" required value=""> <br><br>
			<input class="txtb" type="text" name="addg" placeholder="Город" required value=""> <br><br>
			<input class="btt" name="submit" type="submit" value="Добавить пункт назначения">  
		</form>
		<?php 		
		if (isset($_GET['adc']) && isset($_GET['adap'])&& isset($_GET['addg'])){		
		$c = $_GET['adc'];
		$a = $_GET['adap'];
		$g = $_GET['addg'];
		$db_table = "destinations"; 	
		$db=mysqli_connect("localhost","root","") OR DIE(mysql_error());
		mysqli_select_db($db, "airport");	
		mysqli_query($db, "SET NAMES utf8");
		$result = mysqli_query($db, "INSERT INTO $db_table (apcode,airport,gorod) VALUES ('$c','$a','$g')")or die(mysqli_error($db));		 		
		if ($result = 'true'){
         echo "<div style=\"font:bold 12px Arial; color:white;\">Пункт назначения добавлен!</div>";
		}
		}
		?>
		<br>
		<a class="aa" href="glav.php">На главную</a>
	</body>


</html>