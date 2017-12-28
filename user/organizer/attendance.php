<?php 
include('header.php'); 
include('session.php'); 
include('organizer_top_navbar.php');
include('organizer_sidebar.php');
$eventId = $_GET['eventId'];

$query=mysql_query("SELECT * FROM event WHERE eventId = '$eventId' ")or die(mysql_error());
$row=mysql_fetch_assoc($query);
$id=$row['eventId'];
$image='../../upload/'.$row['eventBanner'];  
$imageData = base64_encode(file_get_contents($image));
$src = 'data: '.mime_content_type($image).';base64,'.$imageData;
$createdBy=$row['createdBy'];

$organizerquery=mysql_query("SELECT * FROM user WHERE userId = '$createdBy' ")or die(mysql_error());
$organizer=mysql_fetch_assoc($organizerquery);

$report_query=mysql_query("
SELECT report.reportId, event.eventTitle, user.name, report.attendanceStatus
FROM event
INNER JOIN report
ON report.eventId=event.eventId
INNER JOIN user
ON report.userId=user.userId
WHERE report.eventId='$eventId'")or die(mysql_error());
?>
<!-- Page Content -->

<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row"><br />
      <div class="col-lg-8">
        <p>
        <h2><i class="fa fa-user fa-fw"></i> Attendance</h2>
        <h4><strong>Event Name : </strong> <?php echo $row['eventTitle']; ?></h4>
        <h5><strong>Organize By : </strong> <?php echo $organizer['name']; ?></h5>
        <strong>Date : </strong><strong><?php echo date('D, d M Y',strtotime($row['startDate'])); ?></strong><?php echo date(' h:i A ', strtotime($row['startTime'])); ?>
        </p>
      </div>
      <div class="col-lg-4">
        <button class="btn-success" title="click for more details" id="<?php echo $id; ?>"  data-toggle="modal" data-target="#event_detail_modal<?php echo $id; ?>"><?php echo '<img width="320" height="120" src="' . $src . '">' ?>
        </button>
        <?php include("event_detail_modal.php");?>
      </div><p><br />.</p>
      <div class="col-lg-12">
      <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
          <tr>
            <center>
              <th>No.</th>
              <th><center>
                  Name
                </center></th>
              <th><center>
                  Status
                </center></th>
            </center>
          </tr>
        </thead>
        <tbody>
          <?php
								  $bil=0;
									while($row2=mysql_fetch_array($report_query)){
									$bil++;
									$id=$row2['reportId'];?>
          <tr class="del<?php echo $id ?>">
            <td><?php echo $bil; ?></td>
            <td><?php echo $row2['2']; ?></td>
            <td><?php echo $row2['3']; ?></td>
          </tr>
          <?php  }  ?>
        </tbody>
      </table>
      </div>
      <!-- /.col-lg-12 --> 
    </div>
    <!-- /.row --> 
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

<!-- DataTables JavaScript --> 
<script src="../../vendor/datatables/js/jquery.dataTables.min.js"></script> 
<script src="../../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script> 
<script src="../../vendor/datatables-responsive/dataTables.responsive.js"></script> 

<!-- Custom Theme JavaScript --> 
<script src="../../dist/js/sb-admin-2.js"></script> 

<!-- Page-Level Demo Scripts - Tables - Use for reference --> 
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>
</body></html>