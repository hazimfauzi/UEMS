<?php 
include('header.php');
include('session.php');
include('student_top_navbar.php');
include('student_sidebar.php'); 
?>
  <!-- Page Content -->
  <div id="page-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header"><i class="fa fa-search fa-fw"></i>Search Event</h1>
        </div>
        <!-- /.col-lg-12 --> 
      </div>
      <!-- /.row -->
      
      <form method="get">
        <div class="input-group custom-search-form">
          <input  type="text" class="form-control" name="k" value="<?php echo $_GET['k']?>" placeholder="Search Event">
          <span class="input-group-btn">
          <button class="btn btn-default" type="submit"> <i class="fa fa-search"> Search </i> </button>
          </span> </div>
      </form>
      <hr />
      <?php
					$bil=0;
					$k = $_GET['k'];
					$term = explode(" ",$k);
					$query2 = "SELECT * FROM event WHERE eventStatus ='Validated' AND startDate > '$now' AND (";
					$i = 0;
					foreach($term as $each){
						$i++;
						
						if($i ==1){
							$query2 .= "eventTitle LIKE '%$each%' ";
							$query2 .= " OR eventDescription LIKE '%$each%' ";
						}
						else{
							$query2 .= " OR eventTitle LIKE '%$each%' ";
							$query2 .= " OR eventDescription LIKE '%$each%' ";
						}
					}
					$query2 .= ")";
					 
					$query2 = mysql_query($query2);
					$num_row2 = mysql_num_rows($query2);
					if($num_row2 > 0){
						?>
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
        <?php
						
						while($row = mysql_fetch_assoc($query2)){
							 ?>
        <tbody>
          <?php
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
            <td><?PHP
                                        $sql = "SELECT reportId FROM report WHERE userId='$session_id' and eventId='$id' ";
										$result3 = mysql_query($sql)or die(mysql_error());
										$row3 = mysql_fetch_assoc($result3);
										$num_row3 = mysql_num_rows($result3);
										if($num_row3 == 1){?>
              <center>
                <a class="btn btn-success" title="Click to Register"   href="my_ticket.php"><i class="fa fa-ticket fa-fw"></i>My Ticket</a>
              </center>
              <?php 
										}else{
										?>
              <a class="btn btn-success" title="Click to Register"   href="register_event.php<?php echo '?id='.$id; ?>"><i class="fa fa-thumb-tack fa-fw"></i>JOIN THIS EVENT</a>
              <?php 
										}
										?></td>
          </tr>
          <?php  }  ?>
        </tbody>
      </table>
      <!-- /.table-responsive -->
      <?php
						
					}
					else{
						echo mysql_error()."No results found for \"<b>$k</b>\"";
					}
					
					
				
				?>
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
</body>
</html>
