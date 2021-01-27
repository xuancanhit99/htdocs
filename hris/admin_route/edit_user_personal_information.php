<div class="modal fade" id="edit_myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog"style="width:1200px;">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><center><strong>Edit Personal Information</strong></center></h4>
      </div>
	  <form action="update_personal_info.php" method="POST" enctype="multipart/form-data">
      <div class="modal-body"  style=" height:500px;overflow:hidden;">
<div class="col-lg-4">
										<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Sex:</span>
												<select name="sex" class="form-control input-sm" >
												<option value="<?php echo $show['sex']; ?>"> <?php echo $show['sex']; ?> </option>
												<option value="Male" >Male  </option>
												<option value="Female">Female  </option>
												</select>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Residential Address:</span>
												<textarea name="residential_address" class="form-control input-sm"  rows="1" ><?php echo $show['residential_address']; ?> </textarea>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Permanent Address:</span>
												<textarea name="permanent_address"  class="form-control input-sm"  rows="1" ><?php echo $show['permanent_address']; ?></textarea>
											</div>
											<div class="input-group input-sm">
											  <span class="input-group-addon input-sm">Civil Status</span>
												 <select name="civil_status" class="form-control input-sm" id="animal" >
															<option value="<?php echo $show['civil_status']; ?>"><?php echo $show['civil_status']; ?></option>
																<option value="Single">Single</option>
															<option value="Married">Married</option>
															<option value="Annulled">Annulled</option>
															<option value="Widowed">Widowed</option>
															<option value="Seperated">Seperated</option>
															<option value="Others">Others, specify</option>
														</select>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Height:</span>
												<input type="text" value="<?php echo $show['height']; ?>" name="height"  class="form-control input-sm" />
												
														<input type="hidden"  name="employee_id_no" class="form-control input-sm"
											value="<?php
											$id=$_SESSION['employee_id'];
											echo $id;?>" >
										
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Position:</span>
												<input type="text" value="<?php echo $show['position'];  ?>" name="position" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">GSIS ID No.:</span>
												<input type="text" value="<?php echo $show['gsis_id_no']; ?>" name="gsis_id_no" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">PhilHealth.:</span>
												<input type="text"value="<?php echo $show['philhealth_no']; ?>"  name="philhealth_no" class="form-control input-sm" />
											</div>
										
									</div>
									<div class="col-lg-4">
										<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Date of Birth:</span>
												<input type="text" value="<?php echo $show['date_of_birth']; ?>" name="date_of_birth" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">ZIP Code:</span>
												<input type="text" value="<?php echo $show['ra_zip_code']; ?>" name="ra_zip_code" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">ZIP Code::</span>
												<input type="text" value="<?php echo $show['pa_zip_code']; ?>" name="pa_zip_code" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Citizenship:</span>
												<input type="text" value="<?php echo $show['citizenship']; ?>" name="citizenship" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Weight:</span>
												<input type="text" value="<?php echo $show['weight']; ?>" name="weight" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Department:</span>
												<input type="text" value="<?php echo $show['department']; ?>" name="department" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Agency Employee No.:</span>
												<input type="text"value="<?php echo $show['agency_employee_no']; ?>"  name="agency_employee_no" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">CSC ID No:</span>
												<input type="cis_no" value="<?php echo $show['cis_no']; ?>" name="cis_no" class="form-control input-sm" />
											</div>
											
													<?php		
													$query=("SELECT employee_id FROM personal_information ORDER BY employee_id DESC LIMIT 1");
																$result = $mysqli->query($query);
																
															while(	$rowp = $result->fetch_array(MYSQLI_ASSOC))
															{
											
											?>
												<input type="hidden" name="employee_id" value="<?php echo $rowp['employee_id']; ?>"  style="display:none;" />
											<?php }?>
									</DIV>
									<div class="col-lg-4">
									
													<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Place of Birth:</span>
												<input type="text" value="<?php echo $show['place_birth']; ?>" name="place_birth" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Telephone No.:</span>
												<input type="text" value="<?php echo $show['ra_telephone_no']; ?>" name="ra_telephone_no" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Telephone No.:</span>
												<input type="text" value="<?php echo $show['pa_telephone_no']; ?>" name="pa_telephone_no" class="form-control input-sm" />
											</div>
									
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">E-Mail Address:</span>
												<input type="text" value="<?php echo $show['email_address']; ?>"name="email_address" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Blood Type:</span>
												<input type="text" value="<?php echo $show['bloodtype']; ?>" name="bloodtype" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Cellphone No.:</span>
												<input type="text" value="<?php echo $show['cellphone_no']; ?>" name="cellphone_no" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">TIN:</span>
												<input type="text" value="<?php echo $show['tin']; ?>" name="tin" class="form-control input-sm" />
											</div>	
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">SSS No.:</span>
												<input type="text" value="<?php  echo$show['sss_no']; ?>" name="sss_no" class="form-control input-sm" />
											</div>	
											
											<div class="input-group input-sm">
												<span class=" input-group-addon input-sm ">Pag-ibig No.:</span>
												<input type="text" value="<?php echo $show['pag_ibig_id_no']; ?>" name="pag_ibig_id_no" class="form-control input-sm" />
											</div>	
									
											
											
									</div>
      </div>
	       <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit"  name="submit" class="btn btn-primary">Save</button>
      </div>

	  </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->