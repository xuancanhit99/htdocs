<html>
	<head>
		<title>Форма добавления авиакомпании</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="button.css">
	</head>
	<center><font size="5" color="Black" face="Palatino Linotype">Информационно-справочная система<br><b>"Авиарейсы Аэропорта"</b></font></center>
	<hr>
	<br>
	<body>
	<?php
	session_start();
	if(!isset($_SESSION['Name']))
	{
		echo "<div style=\"font:bold 16px Arial; color:white;\">Вы не авторизованы!</div>";
		exit;
	}
	?>

		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" name="additem" method="GET"> 
			<input class="txtb" type="text" name="add_c" placeholder="Код" required value=""> <br><br>
			<input class="txtb" type="text" name="add_name" placeholder="Наименование" required value=""> <br><br>
			<input class="btt" name="submit" type="submit" value="Добавить авиакомпанию">  
		</form>
		<?php 		
		if (isset($_GET['add_c']) && isset($_GET['add_name']))
		{		
		$c = $_GET['add_c'];
		$n = $_GET['add_name'];		
		$db_table = "airlines";		
		$db=mysqli_connect("localhost","root","") OR DIE(mysqli_error());
		mysqli_select_db($db, "airport");	
		mysqli_query($db, "SET NAMES utf8");
		$result = mysqli_query($db, "INSERT INTO $db_table (airlcode,airlname) VALUES ('$c','$n')")or die(mysqli_error($db));		 		
		if ($result = 'true'){
         echo "<div style=\"font:bold 12px Arial; color:white;\">Авиакомпания добавлена!</div>";
		}		
		}
		?>
		<br>
		<a class="aa" href="glav.php">На главную</a>
	
	</body>


</html>