<!-- Modal -->
<div class="modal fade" id="event_detail_modal_2<?php echo $id2; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
     <div class="modal-dialog">
        <div class="modal-content">
             <div class="modal-header">
             	<?php 	$eventId = $id2;
						$userId = $session_id;
						$sql = "SELECT reportId FROM report WHERE userId='$userId' and eventId='$eventId' ";
						$result3 = mysql_query($sql)or die(mysql_error());
						$row3 = mysql_fetch_assoc($result3);
						$num_row3 = mysql_num_rows($result3);
						if($num_row3 == 1){?>
							<p><center><div class="alert alert-info">You Already Register This Event</div></center></p><?php 
						}?>
             	<?php $left=$row2['maxParticipant']-$row2['totalParticipant']; ?>
                <div class="pull-right">
                	<a class="btn btn-success" title="Click to Register"   href="register_event.php<?php echo '?id='.$id2; ?>"><i class="fa fa-thumb-tack fa-fw"></i>REGISTER</a>
                </div>
                <?php include('validate_event_modal.php')?> 
                <a aria-hidden="true"><h4><strong>Ticket Left : <?php echo $left; ?></strong></h4></a>
                <h4 class="modal-title" id="myModalLabel"><center><h2><strong><?php echo $row2['eventTitle']; ?></strong></h2></center></h4>
             </div>
            <div class="modal-body">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            
            <?php echo '<img width="540" height="200" src="' . $src2 . '">' ?>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home<?php echo $row2['eventId']; ?>" data-toggle="tab">Description</a>
                                </li>
                                <li><a href="#profile<?php echo $row2['eventId']; ?>" data-toggle="tab">Event Date</a>
                                </li>
                                <li><a href="#messages<?php echo $row2['eventId']; ?>" data-toggle="tab">Organized By</a>
                                </li>
                                <li><a href="#settings<?php echo $row2['eventId']; ?>" data-toggle="tab">Approved By</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="home<?php echo $row2['eventId']; ?>">
                                    <h4>Event Description</h4>
                                    <p><?php echo $row2['eventDescription']; ?></p>
                                </div>
                                <div class="tab-pane fade" id="profile<?php echo $row2['eventId']; ?>">
                                    <h4>Start Date</h4>
                                    <p><?php echo date('d/m/Y',strtotime($row2['startDate'])); ?></p>
                                    
                                    <h4>End Date Date</h4>
                                    <p><?php echo date('d/m/Y',strtotime($row2['endDate'])); ?></p>
                                </div>
                                <div class="tab-pane fade" id="messages<?php echo $row2['eventId']; ?>">
                                    <?php 
									$createdBy=$row2['createdBy']; 
                                    $user_query2=mysql_query("select * from user WHERE userId='$createdBy'")or die(mysql_error());
									while($row3=mysql_fetch_assoc($user_query2)){ ?>
									<h4>Name</h4>
                                    <p><?php echo $row3['name']; ?></p>
									<h4>Phone Number</h4>
                                    <p><?php echo $row3['phoneNum']; ?></p>
                                    <h4>Email</h4>
                                    <p><?php echo $row3['email']; ?></p>
									<?php }
									?>
                                </div>
                                <div class="tab-pane fade" id="settings<?php echo $row2['eventId']; ?>">
                                    <?php 
									$approvedBy=$row2['validateBy']; 
                                    $user_query3=mysql_query("select * from user WHERE userId='$approvedBy'")or die(mysql_error());
									while($row4=mysql_fetch_assoc($user_query3)){ ?>
									<h4>Name</h4>
                                    <p><?php echo $row4['name']; ?></p>
									<h4>Phone Number</h4>
                                    <p><?php echo $row4['phoneNum']; ?></p>
                                    <h4>Email</h4>
                                    <p><?php echo $row4['email']; ?></p>
									<?php }
									?>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                
             </div>
            <div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
     </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->