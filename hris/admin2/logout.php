 <div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <form method="POST" action="delete_information.php">
	<div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
      


	  
	  	
	
		

		     <h4 class="modal-title"><center>Are you sure you want to logout?</center></h4>
   
	  <input type="hidden"  name="employee_id" value="<?php echo $show['employee_id'];?>" >
   			
				
		</br>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">No</button>

          <button type="submit"  name="delete" class="btn btn-danger">Yes</button>
		  		          </div>
		


		
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</form>
	</div><!-- /.modal -->