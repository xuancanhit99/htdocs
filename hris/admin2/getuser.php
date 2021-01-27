
<select name="date">
					
					
					<?php 
		include('db_con.php');
			$q = $_GET['q'];
					$emp=("SELECT * FROM  attendance WHERE name= '".$q."'");
							$fetch_res = $mysqli->query($emp);
								while($show = $fetch_res->fetch_array(MYSQLI_ASSOC))
					{
					?>
					
					<option value="<?php echo $show['name']; ?>"> <?php echo $show['name']; ?> </option>
					<?php };?>
					</select>
					

					

