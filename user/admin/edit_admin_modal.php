
<!-- Modal -->
<div class="modal fade" id="editModal<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
				<div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                	<h4 class="modal-title" id="myModalLabel">Edit Admin</h4>
				</div>
				<div class="modal-body">
					<form  method="POST" action="edit_admin.php" enctype="multipart/form-data">
					<div class="form-group">
						<label >Staf Number</label>
                    	<input type="hidden" id="inputEmail" name="id" value="<?php echo $row['userId']; ?>" required>
						<input class="form-control" type="text" id="inputEmail" value="<?php echo $row['userId']; ?>" name="matric_no"  placeholder="Staf Number" required>
					</div>
					<div class="form-group">
						<label >Name</label>
						<input class="form-control" type="text" id="inputPassword" value="<?php echo $row['name']; ?>" name="name"  placeholder="Full Name" required>
					</div>
					<div class="form-group">
						<label >IC number</label>
						<input class="form-control" type="text" id="inputPassword" value="<?php echo $row['icNum']; ?>" name="ic_number"  placeholder="Ic Number" required>
					</div>
					
					<div class="form-group">
						<label>Gender</label>
						<select class="form-control" name="gender" required>
							<option><?php echo $row['gender']; ?></option>
							<option>Male</option>
							<option>Female</option>
						</select>
					</div>
					<div class="form-group">
						<label>Adddress:</label>
						<input class="form-control" type="text" id="inputPassword" name="address" value="<?php echo $row['address']; ?>" placeholder="Home Address" required>
					</div>
					<div class="form-group">
						<label>Cellphone Number:</label>
						<input class="form-control" type='tel' pattern="[0-9]{10,10}" class="search" value="<?php echo $row['phoneNum']; ?>" name="contact"  placeholder="Phone Number"  autocomplete="off"  maxlength="11" >
					</div>	
				</div>
                
            	<div class="modal-footer">
            		<div class="pull-right">
						<div class="form-group">
							<div class="forms">
								<button name="submit" type="submit<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-save icon-large"></i>Save</button>
								<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
							</div>
						</div>
					</div></form>	
				</div>
		</div>
        <!-- /.modal-content -->
     </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->	
	













	
									
