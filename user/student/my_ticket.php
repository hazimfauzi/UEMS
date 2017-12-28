<?php 
include('header.php');
include('session.php');
include('student_top_navbar.php');
include('student_sidebar.php'); 
error_reporting(E_ERROR | E_PARSE);
$k = $_GET['hazim'];
if($k != NULL){?>
	<script>
          alert("You are now successful register to <?php echo $k ?>.\n Please check your email to get ticket ");
    </script>
<?php }?>
  <!-- Page Content -->
  <div id="page-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header"><i class="fa fa-ticket fa-fw"></i> My Ticket</h1>
        </div>
      </div>
      <!-- /.row --> 
      
      <!-- Nav tabs -->
      <ul class="nav nav-pills">
        <li class="active"><a href="#live-pills" data-toggle="tab">Incoming Event</a> </li>
        <li><a href="#attend-pills" data-toggle="tab">Attend Event</a> </li>
        <li><a href="#absent-pills" data-toggle="tab">Absent Event</a> </li>
      </ul>
      
      <!-- Tab panes -->
      <div class="tab-content">
        <div class="tab-pane fade in active" id="live-pills"><br/>
          <?php  $user_query=mysql_query("SELECT report.reportId,report.userId,event.*,report.attendanceStatus,report.qrCode
										FROM event
										INNER JOIN report
										ON event.eventId=report.eventId
										WHERE report.userId='$session_id'
										AND startDate >= '$now';
									")or die(mysql_error());
									for($i=1; $i<$row=mysql_fetch_assoc($user_query); $i++){
										$id=$row['eventId'];
										$image='../../upload/'.$row['eventBanner'];  
										$imageData = base64_encode(file_get_contents($image));
										$src = 'data: '.mime_content_type($image).';base64,'.$imageData;
										
										$qrimage='../../QRCODE/'.$row['qrCode'];  
										$qrData = base64_encode(file_get_contents($qrimage));
										$qrCode = 'data: '.mime_content_type($qrimage).';base64,'.$qrData;
										
										?>
          <button class="alert alert-info" title="Click to Join Event" id="<?php echo $id; ?>"  data-toggle="modal" data-target="#ticket_modal<?php echo $id; ?>">
          <p><strong><?php echo $row['eventTitle']; ?></p>
          </strong> <?php echo '<img width="300" height="100" src="' . $src . '">' ?>
          <p><strong><?php echo date('D, d M Y',strtotime($row['startDate'])); ?></strong><?php echo date(' h:i A ', strtotime($row['startTime'])); ?> </p>
          </button>
          <?php include("ticket_modal.php");
		}?>
        </div>
        <div class="tab-pane fade" id="attend-pills"><br/>
          <?php  $user_query=mysql_query("SELECT report.reportId,report.userId,event.*,report.attendanceStatus
										FROM event
										INNER JOIN report
										ON event.eventId=report.eventId
										WHERE report.userId='$session_id'
										AND startDate < '$now'
										AND attendanceStatus='attend';
									")or die(mysql_error());
									for($i=1; $i<$row=mysql_fetch_assoc($user_query); $i++){
										$id=$row['eventId'];
										$image='../../upload/'.$row['eventBanner'];  
										$imageData = base64_encode(file_get_contents($image));
										$src = 'data: '.mime_content_type($image).';base64,'.$imageData;
										?>
          <button class="alert alert-success" title="Click to Join Event" id="<?php echo $id; ?>"  data-toggle="modal" data-target="#ticket_modal<?php echo $id; ?>">
          <p><strong><?php echo $row['eventTitle']; ?></strong></p>
          <?php echo '<img width="300" height="100" src="' . $src . '">' ?>
          <p><strong><?php echo date('D, d M Y',strtotime($row['startDate'])); ?></strong><?php echo date(' h:i A ', strtotime($row['startTime'])); ?> </p>
          </button>
          <?php include("ticket_modal.php");
		}?>
        </div>
        <div class="tab-pane fade" id="absent-pills"><br/>
          <?php  $user_query=mysql_query("SELECT report.reportId,report.userId,event.*,report.attendanceStatus
										FROM event
										INNER JOIN report
										ON event.eventId=report.eventId
										WHERE report.userId='$session_id'
										AND startDate < '$now'
										AND attendanceStatus='absent';
									")or die(mysql_error());
									for($i=1; $i<$row=mysql_fetch_assoc($user_query); $i++){
										$id=$row['eventId'];
										$image='../../upload/'.$row['eventBanner'];  
										$imageData = base64_encode(file_get_contents($image));
										$src = 'data: '.mime_content_type($image).';base64,'.$imageData;
										?>
          <button class="alert alert-danger" title="Click to Join Event" id="<?php echo $id2; ?>"  data-toggle="modal" data-target="#ticket_modal<?php echo $id; ?>">
          <p><strong><?php echo $row['eventTitle']; ?></p>
          </strong> <?php echo '<img width="300" height="100" src="' . $src . '">' ?>
          <p><strong><?php echo date('D, d M Y',strtotime($row['startDate'])); ?></strong><?php echo date(' h:i A ', strtotime($row['startTime'])); ?> </p>
          </button>
          <?php include("ticket_modal.php");
		}?>
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
