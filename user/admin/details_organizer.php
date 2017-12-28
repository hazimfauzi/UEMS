<?php 
include('header.php'); 
include('session.php'); 
include('admin_top_navbar.php');
include('admin_sidebar.php'); 
$createdBy = $_GET['createdBy'];
$query=mysql_query("SELECT * FROM user WHERE userId = '$createdBy' ")or die(mysql_error());
$organizer=mysql_fetch_assoc($query);
?>
<!-- Page Content -->

<div id="page-wrapper">
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
      <div class="page-header">
        <p>
        <h2><i class="fa fa-user fa-fw"></i> Organizer Profile</h2>
        Organizer Name : <?php echo $organizer['name']; ?>
        </p>
      </div>
    </div>
    <!-- /.col-lg-12 --> 
  </div>
  <!-- /.container-fluid -->
  
  <div class="row">
    <div class="col-lg-8"><br/>
      <div class="panel panel-default">
        <div class="panel-heading">
          <ul class="nav nav-pills">
            <li class="active"><a href="#liveEvent" data-toggle="tab">Live Event</a> </li>
            <li><a href="#pastEvent" data-toggle="tab">Past Event</a> </li>
          </ul>
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body"> 
          <!-- Nav tabs --> 
          
          <!-- Tab panes -->
          <div class="tab-content">
            <div class="tab-pane fade in active" id="liveEvent">
              <?php  $user_query=mysql_query("SELECT * FROM event WHERE createdBy = '$createdBy' AND eventStatus = 'Validated' AND startDate >= '$now' ORDER BY startDate DESC ")or die(mysql_error());
			  $num_row = mysql_num_rows($user_query);
					if($num_row == 0){
					echo "No results found for \"<b>Live Event</b>\"";
					}else{
									for($i=1; $i<$row=mysql_fetch_assoc($user_query); $i++){
										$id=$row['eventId'];
										$image='../../upload/'.$row['eventBanner'];  
										$imageData = base64_encode(file_get_contents($image));
										$src = 'data: '.mime_content_type($image).';base64,'.$imageData;
										
										?>
              <div class="panel panel-default">
                <div class="panel-heading"> <strong><?php echo $row['eventTitle']; ?></strong> </div>
                <div class="panel-body">
                  <div class="col-lg-6"><?php echo '<img width="250" height="100" src="' . $src . '">'; ?> </div>
                  <div class="col-lg-6">
                    <p><strong><?php echo date('D, d M Y',strtotime($row['startDate'])); ?></strong><?php echo date(' h:i A ', strtotime($row['startTime'])); ?> </p>
                    <p><?php echo $row['eventTitle']; ?><br/>
                      <?php echo $row['eventCategory']; ?></p>
                    <p><?php echo $row['eventLocation']; ?> </p>
                  </div>
                </div>
              </div>
              <?php }}?>
            </div>
            <div class="tab-pane fade" id="pastEvent">
              <?php  $user_query=mysql_query("SELECT * FROM event WHERE createdBy = '$createdBy' AND eventStatus = 'Validated' AND startDate <= '$now' ORDER BY startDate DESC ")or die(mysql_error());
			  $num_row = mysql_num_rows($user_query);
					if($num_row == 0){
					echo "No results found for \"<b>Past Event</b>\"";
					}else{
									for($i=1; $i<$row=mysql_fetch_assoc($user_query); $i++){
										$id=$row['eventId'];
										$image='../../upload/'.$row['eventBanner'];  
										$imageData = base64_encode(file_get_contents($image));
										$src = 'data: '.mime_content_type($image).';base64,'.$imageData;
										
										?>
              <div class="panel panel-default">
                <div class="panel-heading"> <strong><?php echo $row['eventTitle']; ?></strong> </div>
                <div class="panel-body">
                  <div class="col-lg-6"> <?php echo '<img width="250" height="100" src="' . $src . '">'; ?> </div>
                  <div class="col-lg-6">
                    <p><strong><?php echo date('D, d M Y',strtotime($row['startDate'])); ?></strong><?php echo date(' h:i A ', strtotime($row['startTime'])); ?> </p>
                    <p><?php echo $row['eventTitle']; ?><br/>
                      <?php echo $row['eventCategory']; ?></p>
                    <p><?php echo $row['eventLocation']; ?> </p>
                  </div>
                </div>
              </div>
              <?php }}?>
            </div>
          </div>
        </div>
        <!-- /.panel-body --> 
      </div>
      <!-- /.panel --> 
    </div>
    <!-- /.col-lg-8 --> 
    <br/>
    <div class="col-lg-4">
      <?php include('rate.php'); ?>
      <?php include('comments.php'); ?>
    </div>
  </div>
</div>
<!-- /#page-wrapper --> 

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
