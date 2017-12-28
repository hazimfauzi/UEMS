<!-- Modal -->
<div class="modal fade" id="event_detail_modal<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
     <div class="modal-dialog">
        <div class="modal-content">
             <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"><center><h2><strong><?php echo $row['eventTitle']; ?></strong></h2></center></h4>
             </div>
            <div class="modal-body">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            
            <?php echo '<img width="540" height="200" src="' . $src . '">' ?>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home<?php echo $row['eventId']; ?>" data-toggle="tab">Description</a>
                                </li>
                                <li><a href="#profile<?php echo $row['eventId']; ?>" data-toggle="tab">Event Date</a>
                                </li>
                                <li><a href="#messages<?php echo $row['eventId']; ?>" data-toggle="tab">Organized By</a>
                                </li>
                                <li><a href="#settings<?php echo $row['eventId']; ?>" data-toggle="tab">Approved By</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="home<?php echo $row['eventId']; ?>">
                                    <h4>Event Description</h4>
                                    <p><?php echo $row['eventDescription']; ?></p>
                                </div>
                                <div class="tab-pane fade" id="profile<?php echo $row['eventId']; ?>">
                                    <h4>Start Date</h4>
                                    <p><?php echo date('d/m/Y',strtotime($row['startDate'])); ?></p>
                                    
                                    <h4>End Date Date</h4>
                                    <p><?php echo date('d/m/Y',strtotime($row['endDate'])); ?></p>
                                </div>
                                <div class="tab-pane fade" id="messages<?php echo $row['eventId']; ?>">
                                    <?php 
									$createdBy=$row['createdBy']; 
                                    $user_query2=mysql_query("select * from user WHERE userId='$createdBy'")or die(mysql_error());
									while($row2=mysql_fetch_assoc($user_query2)){ ?>
									<h4>Name</h4>
                                    <p><?php echo $row2['name']; ?></p>
									<h4>Phone Number</h4>
                                    <p><?php echo $row2['phoneNum']; ?></p>
                                    <h4>Email</h4>
                                    <p><?php echo $row2['email']; ?></p>
									<?php }
									?>
                                </div>
                                <div class="tab-pane fade" id="settings<?php echo $row['eventId']; ?>">
                                    <?php 
									$approvedBy=$row['validateBy']; 
                                    $user_query3=mysql_query("select * from user WHERE userId='$approvedBy'")or die(mysql_error());
									while($row3=mysql_fetch_assoc($user_query3)){ ?>
									<h4>Name</h4>
                                    <p><?php echo $row3['name']; ?></p>
									<h4>Phone Number</h4>
                                    <p><?php echo $row3['phoneNum']; ?></p>
                                    <h4>Email</h4>
                                    <p><?php echo $row3['email']; ?></p>
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