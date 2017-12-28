<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('student_top_navbar.php'); ?>
    <?php include('student_sidebar.php'); ?>
  <!-- Page Content -->
  <div id="page-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header"><i class="fa fa-globe fa-fw"></i>All Event</h1>
        </div>
        <!-- /.col-lg-12 --> 
      </div>
      <!-- /.row --> 
      
      <!-- Nav tabs -->
      <ul class="nav nav-pills">
        <li class="active"><a href="#live-pills" data-toggle="tab">Live Event</a> </li>
        <li><a href="#past-pills" data-toggle="tab">Past Event</a> </li>
      </ul>
      
      <!-- Tab panes -->
      <div class="tab-content">
        <div class="tab-pane fade in active" id="live-pills"><br/>
          <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables">
            <thead>
              <tr>
                <center>
                  <th><center>
                      No.
                    </center></th>
                  <th><center>
                      Event Banner
                    </center></th>
                  <th><center>
                      Title
                    </center></th>
                  <th><center>
                      Categoty
                    </center></th>
                  <th><center>
                      Location
                    </center></th>
                  <th><center>
                      Total Participant
                    </center></th>
                  <th><center>
                      Status
                    </center></th>
                </center>
              </tr>
            </thead>
            <tbody>
              <?php  $user_query=mysql_query("select * from event where eventStatus='Validated' AND startDate >= '$now' order by startDate")or die(mysql_error());
								  $bil=0;
									while($row=mysql_fetch_assoc($user_query)){
									$bil++;
									
									$id=$row['eventId'];
									$image='../../upload/'.$row['eventBanner'];  
									$imageData = base64_encode(file_get_contents($image));
									$src = 'data: '.mime_content_type($image).';base64,'.$imageData;?>
              <tr class="del<?php echo $id ?>">
                <td><?php echo $bil; ?></td>
                <td><center>
                    <button title="click for more details" id="<?php echo $id; ?>"  data-toggle="modal" data-target="#event_detail_modal<?php echo $id; ?>"><?php echo '<img width="300" height="100" src="' . $src . '">' ?>Click For More Details</button>
                  </center>
                  <?php include("event_detail_modal.php");?></td>
                <td><?php echo $row['eventTitle']; ?></td>
                <td><?php echo $row['eventCategory']; ?></td>
                <td><?php echo $row['eventLocation']; ?></td>
                <td><center>
                    <?php echo $row['totalParticipant']; ?>/<?php echo $row['maxParticipant']; ?>
                  </center></td>
                <td><?php if( $row['eventStatus'] == 'Validated'){?>
                  <div class="alert alert-success"><?php echo $row['eventStatus']?></div>
                  <?php }else{?>
                  <div class="alert alert-danger"><?php echo $row['eventStatus']?></div>
                  <?php }?></td>
              </tr>
              <?php  }  ?>
            </tbody>
          </table>
          <!-- /.table-responsive --> 
          
        </div>
        <div class="tab-pane fade" id="past-pills"><br/>
          <table width="100%" class="table table-striped table-bordered table-hover" id="Tables">
            <thead>
              <tr>
                <center>
                  <th><center>
                      No.
                    </center></th>
                  <th><center>
                      Event Banner
                    </center></th>
                  <th><center>
                      Title
                    </center></th>
                  <th><center>
                      Categoty
                    </center></th>
                  <th><center>
                      Location
                    </center></th>
                  <th><center>
                      Total Participant
                    </center></th>
                  <th><center>
                      Status
                    </center></th>
                </center>
              </tr>
            </thead>
            <tbody>
              <?php  $user_query=mysql_query("select * from event where eventStatus='Validated' AND startDate < '$now' order by startDate DESC")or die(mysql_error());
								  $bil=0;
									while($row=mysql_fetch_assoc($user_query)){
									$bil++;
									
									$id=$row['eventId'];
									$image='../../upload/'.$row['eventBanner'];  
									$imageData = base64_encode(file_get_contents($image));
									$src = 'data: '.mime_content_type($image).';base64,'.$imageData;?>
              <tr class="del<?php echo $id ?>">
                <td><?php echo $bil; ?></td>
                <td><center>
                    <button title="click for more details" id="<?php echo $id; ?>"  data-toggle="modal" data-target="#event_detail_modal<?php echo $id; ?>"><?php echo '<img width="300" height="100" src="' . $src . '">' ?>Click For More Details</button>
                  </center>
                  <?php include("event_detail_modal.php");?></td>
                <td><?php echo $row['eventTitle']; ?></td>
                <td><?php echo $row['eventCategory']; ?></td>
                <td><?php echo $row['eventLocation']; ?></td>
                <td><center>
                    <?php echo $row['totalParticipant']; ?>/<?php echo $row['maxParticipant']; ?>
                  </center></td>
                <td><?php if( $row['eventStatus'] == 'Validated'){?>
                  <div class="alert alert-success"><?php echo $row['eventStatus']?></div>
                  <?php }else{?>
                  <div class="alert alert-danger"><?php echo $row['eventStatus']?></div>
                  <?php }?></td>
              </tr>
              <?php  }  ?>
            </tbody>
          </table>
          <!-- /.table-responsive --> 
        </div>
      </div>
    </div>
    <!-- /.panel --> 
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
    </script><!-- DataTables JavaScript --> 
    <script src="../../vendor/datatables/js/jquery.dataTables.min.js"></script> 
    <script src="../../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script> 
    <script src="../../vendor/datatables-responsive/dataTables.responsive.js"></script> 

    <!-- Custom Theme JavaScript --> 
    <script src="../../dist/js/sb-admin-2.js"></script> 

    <!-- Page-Level Demo Scripts - Tables - Use for reference --> 
    <script>
    $(document).ready(function() {
        $('#Tables').DataTable({
            responsive: true
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        $('#dataTables').DataTable({
            responsive: true
        });
    });
    </script>
</body>
</html>
