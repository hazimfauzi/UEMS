<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('admin_top_navbar.php'); ?>
<?php include('admin_sidebar.php'); ?>
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"><i class="fa fa-plus fa-fw"></i>Create Event</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
				<div class="row">
                	<div class="col-lg-8">
						<div class="panel panel-info">
							<div class="panel-heading">
                                Please Enter Details Below...
							</div>
							<div class="panel-body">
								<form  method="POST" action="save_event.php" enctype="multipart/form-data">
									<div class="form-group">
										<label >Event Title</label>
										<input class="form-control" type="text" id="inputEmail" name="eventTitle"  placeholder="What your event title?" required>
									</div>
                                    <div class="form-group">
                            			<label>Category</label>
                            				<select class="form-control" name="eventCategory" required>
                                    			<option>Choose Category</option>
                                                <option>Career_Development</option>
                                                <option>Multicultural</option>
                                                <option>Student_Life</option>
                                    			<option>Academics</option>
                                        		<option>Festival</option>
                                        		<option>Contest</option>
                                        		<option>PC_Fair</option>
                                                <option>Sport</option>
                                                <option>Talk</option>
                                                <option>Other</option>
                                        		</select>
                           			</div>
                                    <div class="form-group">
                            			<label>Location</label>
                            				<select class="form-control" name="eventLocation" required>
                                    			<option>Choose Location</option>
                                    			<option>UTeM MAIN HALL</option>
                                        		<option>UTeM SPORT CENTRE</option>
                                        		<option>UTeM MOSQUE & ISLAMIC CENTRE</option>
                                        		<option>COMPUTER CENTRE, CRIM & ICNet(PKomp)</option>
                                        		<option>STUDENT CENTRE(PPP)</option>
                                        		<option>UTeM LIBRARY</option>
                                        		<option>CENTRE FOR CO-CURRICULAR ACTIVITIES</option>
                                        		<option>STUDENT HEALTH CENTRE</option>
                                				</select>
                           			</div>
                                    <div class="col-lg-6">
                                    	<div class="form-group">
                            				<label>Start Time</label>
                                			<input class="form-control" type="time" placeholder="Selact Time" name="startTime" required>
                            			</div>
                                    </div>
                            		<div class="col-lg-6">
                           				<div class="form-group">
                            				<label>End Time</label>
                                			<input class="form-control" type="time" placeholder="Selact Time" name="endTime" required>
                            			</div>
                                    </div>
                                    <div class="col-lg-6">
                                    	<div class="form-group">
                            				<label>Start Date</label>
                                			<input class="form-control" type="date" placeholder="Selact date" name="startDate" required>
                            			</div>
                                    </div>
                            		<div class="col-lg-6">
                           				<div class="form-group">
                            				<label>End Date</label>
                                			<input class="form-control" type="date" placeholder="Selact Date" name="endDate" required>
                            			</div>
                                    </div>
									<div class="form-group">
										<label >Max Participant</label>
										<input class="form-control" type="text" id="inputPassword" name="totalParticipant"  placeholder="Max people can join your event" required>
									</div>
                                    <div class="form-group">
                            			<label>Event Banner</label>
                               			<input type="file" name="eventBanner" required>
                            		</div>
									<div class="form-group">
										<label >Event Description</label>
										<textarea class="form-control" type="text" id="inputPassword" name="eventDescription"  placeholder="Tell people what's special about your event." required></textarea>
									</div>
									
									<div class="pull-right">
										<div class="form-group">
											<div class="forms">
												<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>Save</button>
												<button type="reset" class="btn btn-danger ">Reset Button</button>
											</div>
										</div>
									</div>
								</form>					
							</div>		
						</div>
					</div>
				</div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    
<!-- jQuery -->
    <script src="../../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../../dist/js/sb-admin-2.js"></script>
</body>

</html>  