<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            <thead>
                                <tr>
        	<th>Name</th>
	<th>Position</th>
	
	<th>Payroll</th>
	<th>DTR</th>
	
									
                                   
                                </tr>
                            </thead>
                            <tbody>
<form 	 method="POST">
	 	<?php	
		
		
		
		
		$emp=(" select * from employee ") or die(mysql_error());
		$fetch_res = $mysqli->query($emp);
		
		while($show = $fetch_res->fetch_array(MYSQLI_ASSOC))
		
		{$id=$show['employee_id'];
		
	?>
	 <tr>
	 <td><a href="E_D_emp.php <?php  echo '?emp='.$id;?>	 "><?php  echo $show['firstname']." ".$show['middlename']." ".$show['lastname'];  ?></a></td>
	 <td> <a href="E_D_emp.php <?php echo '?emp='.$id;?>  "><?php  echo $show['position'];  ?> </a></td>
	
		 <td> <a href="payroll.php <?php echo '?access='.$id;?> "><i class="lg glyphicon glyphicon-<?php echo $show['payroll_status']; ?>"></i></a></td>
<td><center> <a href="Salary.php<?php echo '?emp='.$id;?>">DTR</a></center></td>

												
										
                                      
                                       
                                    </tr>

			
						<?php	} ?>					
</form>
                            </tbody>
                        </table>