<html>
	<head>
		<title>Форма добавления РЕЙСА</title>
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
		$soed=mysqli_connect("localhost","root","") OR DIE(mysqli_error());
		mysqli_select_db($soed, "airport");
		mysqli_query($soed, "SET NAMES utf8");
		$res=mysqli_query($soed,"SELECT apcode FROM destinations")or die(mysqli_error($soed));
		$r=mysqli_query($soed,"SELECT airlcode FROM airlines")or die(mysqli_error($soed));
		?>

		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" name="additem" method="GET"> 
			<input class="txtb" type="text" name="a" placeholder="Номер рейса" required value=""> <br><br>
			<select class="txtb"  name="b" required value=""><option value="" disabled selected style='display:none;'>Вылет/Прилет</option> <option value="Вылет">Вылет</option><option value="Прилет">Прилет</option></select><br><br>
			<select class="txtb" name="c" required value=""><option value="" disabled selected style='display:none;'>Откуда/Куда</option>
													<?php while($object = mysqli_fetch_object($res)): ?>
													<option value ="<?=$object->apcode?>"><?=$object->apcode?></option>
													<?php endwhile;?>
												</select> <br><br>
			<input class="txtb" type="time" name="d" required value=""><font size="4" color="gray"> - Время</font> <br><br>
			<select class="txtb" name="e" required value=""><option value="" disabled selected style='display:none;'>Перевозчик</option>
													<?php while($object = mysqli_fetch_object($r)): ?>
													<option value ="<?=$object->airlcode?>"><?=$object->airlcode?></option>
													<?php endwhile;?>
												</select> <br><br>
			<input class="txtb" type="date" name="f" required value=""><font size="4" color="gray"> - Начало выполнения</font> <br><br>
			<input class="txtb" type="date" name="g" required value=""><font size="4" color="gray"> - Окончание выполнения</font> <br><br>
			<input class="txtb" type="text" name="h" placeholder="Дни курсирования" required value=""> <br><br>
			<input class="txtb" type="text" name="i" placeholder="Тип ВС" required value=""> <br><br>
			<input class="btt" name="submit" type="submit" value="Занести рейс в Базу">  
		</form>
		<?php mysqli_close($soed); ?>
		<?php 		
		if (isset($_GET['a']) && isset($_GET['b'])&& isset($_GET['c'])&& isset($_GET['d'])&& isset($_GET['e'])&& isset($_GET['f'])&& isset($_GET['g'])&& isset($_GET['h'])&& isset($_GET['i'])){		
		$j = $_GET['a'];
		$k = $_GET['b'];
		$l = $_GET['c'];
		$m = $_GET['d'];
		$n = $_GET['e'];
		$o = $_GET['f'];
		$p = $_GET['g'];
		$q = $_GET['h'];
		$r = $_GET['i'];
		$db_table = "flights"; 	
		$db=mysqli_connect("localhost","root","") OR DIE(mysqli_error());
		mysqli_select_db($db, "airport");
		mysqli_query($db, "SET NAMES utf8");
		$result = mysqli_query($db, "INSERT INTO $db_table (flnumber,tip,destin,time,airline,datest,datend,per,plane) VALUES ('$j','$k','$l','$m','$n','$o','$p','$q','$r')")or die(mysqli_error($db));		 		
		if ($result = 'true'){
         echo "<div style=\"font:bold 12px Arial; color:white;\">Авиарейс добавлен!</div>";
		}
		}
		?>
		<br>
		<br>
		<a class="aa" href="glav.php">На главную</a>
	</body>


</html>