<html>
	<head>
		<title>Форма удаления РЕЙСА</title>
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
			<input class="txtb" type="text" name="add_code" placeholder="Номер рейса" required value=""> <br><br>
			<input class="btt" name="submit" type="submit" value="Удалить РЕЙС">  
		</form>
		<?php 		
		if (isset($_GET['add_code'])){		
		$code = $_GET['add_code'];				
		$db_table = "flights"; 	
		$db=mysqli_connect("localhost","root","") OR DIE(mysqli_error());
		mysqli_select_db($db, "airport");	
		$result = mysqli_query($db, "DELETE from $db_table  WHERE flnumber='$code'");		 		
		if ($result = 'true'){
         echo "<div style=\"font:bold 12px Arial; color:white;\">Информация удалена из базы!</div>";;
		}
		}
		?>
		<br>
		<a class="aa" href="glav.php">На главную</a>
	</body>


</html>