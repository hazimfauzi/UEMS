
	<div class="panel panel-default">
    	<div class="panel-heading">
        <h3 class="page-body"><i class="fa fa-star fa-fw"></i>Most Popular Event</h3>
        </div>
        <!-- close panel-heading -->
        <div class="panel-body">
        <!-- Nav tabs -->
        
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#all" data-toggle="tab">All</a>
                                </li>
                                <?php
                                $query = "SELECT DISTINCT(eventCategory) from event WHERE eventStatus = 'Validated'";
                                $result = mysql_query($query)or die(mysql_error());
                                while($row=mysql_fetch_array($result)){;?>
                                <li><a href="#test<?php echo $row[0]; ?>" data-toggle="tab"><?php echo $row[0]; ?></a>
                                </li><?php }  ?>
                                
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="all">
                                    <?php  $user_query=mysql_query("SELECT * FROM event WHERE eventStatus = 'Validated' ORDER BY totalParticipant DESC LIMIT 9")or die(mysql_error());
									for($i=1; $i<$row2=mysql_fetch_assoc($user_query); $i++){
										$id2=$row2['eventId'];
										$image2='../../upload/'.$row2['eventBanner'];  
										$imageData2 = base64_encode(file_get_contents($image2));
										$src2 = 'data: '.mime_content_type($image2).';base64,'.$imageData2;
										?><button class="alert alert-default" title="Click to Join Event" id="<?php echo $id2; ?>"  data-toggle="modal" data-target="#event_detail_modal_2<?php echo $id2; ?>"><?php echo '<img width="300" height="100" src="' . $src2 . '">' ?>
                                        <p><?php echo $row2['eventTitle']; ?></p></button>
                                         <?php include("join_event_modal_2.php");
										
									}
									
									?>
                                </div>
                                
                                <div class="tab-pane fade" id="testStudent_Life">
                                    <?php  $user_query=mysql_query("select * from event where eventCategory ='Student_Life' AND eventStatus = 'Validated' order by totalParticipant DESC limit 9")or die(mysql_error());
									for($i=1; $i<$row=mysql_fetch_assoc($user_query); $i++){
										$id=$row['eventId'];
										$image='../../upload/'.$row['eventBanner'];  
										$imageData = base64_encode(file_get_contents($image));
										$src = 'data: '.mime_content_type($image).';base64,'.$imageData;
										?><button class="alert alert-default" title="Click to Join Event" id="<?php echo $id; ?>"  data-toggle="modal" data-target="#event_detail_modal<?php echo $id; ?>"><?php echo '<img width="300" height="100" src="' . $src . '">' ?>
                                        <p><?php echo $row['eventTitle']; ?></p></button>
                                         <?php include("join_event_modal.php");
									}
									
									?>
                                </div>
                                
                                <div class="tab-pane fade" id="testAcademics">
                                    <?php  $user_query=mysql_query("select * from event where eventCategory ='Academics' AND eventStatus = 'Validated' order by totalParticipant DESC limit 9")or die(mysql_error());
									for($i=1; $i<$row=mysql_fetch_assoc($user_query); $i++){
										$id=$row['eventId'];
										$image='../../upload/'.$row['eventBanner'];  
										$imageData = base64_encode(file_get_contents($image));
										$src = 'data: '.mime_content_type($image).';base64,'.$imageData;
										?><button class="alert alert-default" title="Click to Join Event" id="<?php echo $id; ?>"  data-toggle="modal" data-target="#event_detail_modal<?php echo $id; ?>"><?php echo '<img width="300" height="100" src="' . $src . '">' ?>
                                        <p><?php echo $row['eventTitle']; ?></p></button>
                                         <?php include("join_event_modal.php");
									}
									
									?>
                                </div>
                                
                                <div class="tab-pane fade" id="testContest">
                                    <?php  $user_query=mysql_query("select * from event where eventCategory ='Contest' AND eventStatus = 'Validated' order by totalParticipant DESC limit 9")or die(mysql_error());
									for($i=1; $i<$row=mysql_fetch_assoc($user_query); $i++){
										$id=$row['eventId'];
										$image='../../upload/'.$row['eventBanner'];  
										$imageData = base64_encode(file_get_contents($image));
										$src = 'data: '.mime_content_type($image).';base64,'.$imageData;
										?><button class="alert alert-default" title="Click to Join Event" id="<?php echo $id; ?>"  data-toggle="modal" data-target="#event_detail_modal<?php echo $id; ?>"><?php echo '<img width="300" height="100" src="' . $src . '">' ?>
                                        <p><?php echo $row['eventTitle']; ?></p></button>
                                         <?php include("join_event_modal.php");
									}
									
									?>
                                </div>
                                
                                <div class="tab-pane fade" id="testFestival">
                                    <?php  $user_query=mysql_query("select * from event where eventCategory ='Festival' AND eventStatus = 'Validated' order by totalParticipant DESC limit 9")or die(mysql_error());
									for($i=1; $i<$row=mysql_fetch_assoc($user_query); $i++){
										$id=$row['eventId'];
										$image='../../upload/'.$row['eventBanner'];  
										$imageData = base64_encode(file_get_contents($image));
										$src = 'data: '.mime_content_type($image).';base64,'.$imageData;
										?><button class="alert alert-default" title="Click to Join Event" id="<?php echo $id; ?>"  data-toggle="modal" data-target="#event_detail_modal<?php echo $id; ?>"><?php echo '<img width="300" height="100" src="' . $src . '">' ?>
                                        <p><?php echo $row['eventTitle']; ?></p></button>
                                         <?php include("join_event_modal.php");
									}
									
									?>
                                </div>
                                
                                <div class="tab-pane fade" id="testPC_Fair">
                                    <?php  $user_query=mysql_query("select * from event where eventCategory ='PC_Fair' AND eventStatus = 'Validated' order by totalParticipant DESC limit 9")or die(mysql_error());
									for($i=1; $i<$row=mysql_fetch_assoc($user_query); $i++){
										$id=$row['eventId'];
										$image='../../upload/'.$row['eventBanner'];  
										$imageData = base64_encode(file_get_contents($image));
										$src = 'data: '.mime_content_type($image).';base64,'.$imageData;
										?><button class="alert alert-default" title="Click to Join Event" id="<?php echo $id; ?>"  data-toggle="modal" data-target="#event_detail_modal<?php echo $id; ?>"><?php echo '<img width="300" height="100" src="' . $src . '">' ?>
                                        <p><?php echo $row['eventTitle']; ?></p></button>
                                         <?php include("join_event_modal.php");
									}
									
									?>
                                </div>
                                
                                <div class="tab-pane fade" id="testSport">
                                    <?php  $user_query=mysql_query("select * from event where eventCategory ='Sport' AND eventStatus = 'Validated' order by totalParticipant DESC limit 9")or die(mysql_error());
									for($i=1; $i<$row=mysql_fetch_assoc($user_query); $i++){
										$id=$row['eventId'];
										$image='../../upload/'.$row['eventBanner'];  
										$imageData = base64_encode(file_get_contents($image));
										$src = 'data: '.mime_content_type($image).';base64,'.$imageData;
										?><button class="alert alert-default" title="Click to Join Event" id="<?php echo $id; ?>"  data-toggle="modal" data-target="#event_detail_modal<?php echo $id; ?>"><?php echo '<img width="300" height="100" src="' . $src . '">' ?>
                                        <p><?php echo $row['eventTitle']; ?></p></button>
                                         <?php include("join_event_modal.php");
									}
									
									?>
                                </div>
                                
                                <div class="tab-pane fade" id="testCareer_Development">
                                    <?php  $user_query=mysql_query("select * from event where eventCategory ='Career_Development' AND eventStatus = 'Validated' order by totalParticipant DESC limit 9")or die(mysql_error());
									for($i=1; $i<$row=mysql_fetch_assoc($user_query); $i++){
										$id=$row['eventId'];
										$image='../../upload/'.$row['eventBanner'];  
										$imageData = base64_encode(file_get_contents($image));
										$src = 'data: '.mime_content_type($image).';base64,'.$imageData;
										?><button class="alert alert-default" title="Click to Join Event" id="<?php echo $id; ?>"  data-toggle="modal" data-target="#event_detail_modal<?php echo $id; ?>"><?php echo '<img width="300" height="100" src="' . $src . '">' ?>
                                        <p><?php echo $row['eventTitle']; ?></p></button>
                                         <?php include("join_event_modal.php");
									}
									
									?>
                                </div>
                                
                                <div class="tab-pane fade" id="testMulticultural">
                                    <?php  $user_query=mysql_query("select * from event where eventCategory ='Multicultural' AND eventStatus = 'Validated' order by totalParticipant DESC limit 9")or die(mysql_error());
									for($i=1; $i<$row=mysql_fetch_assoc($user_query); $i++){
										$id=$row['eventId'];
										$image='../../upload/'.$row['eventBanner'];  
										$imageData = base64_encode(file_get_contents($image));
										$src = 'data: '.mime_content_type($image).';base64,'.$imageData;
										?><button class="alert alert-default" title="Click to Join Event" id="<?php echo $id; ?>"  data-toggle="modal" data-target="#event_detail_modal<?php echo $id; ?>"><?php echo '<img width="300" height="100" src="' . $src . '">' ?>
                                        <p><?php echo $row['eventTitle']; ?></p></button>
                                         <?php include("join_event_modal.php");
									}
									
									?>
                                </div>
                                <div class="tab-pane fade" id="testTalk">
                                    <?php  $user_query=mysql_query("select * from event where eventCategory ='Talk' AND eventStatus = 'Validated' order by totalParticipant DESC limit 9")or die(mysql_error());
									for($i=1; $i<$row=mysql_fetch_assoc($user_query); $i++){
										$id=$row['eventId'];
										$image='../../upload/'.$row['eventBanner'];  
										$imageData = base64_encode(file_get_contents($image));
										$src = 'data: '.mime_content_type($image).';base64,'.$imageData;
										?><button class="alert alert-default" title="Click to Join Event" id="<?php echo $id; ?>"  data-toggle="modal" data-target="#event_detail_modal<?php echo $id; ?>"><?php echo '<img width="300" height="100" src="' . $src . '">' ?>
                                        <p><?php echo $row['eventTitle']; ?></p></button>
                                         <?php include("join_event_modal.php");
									}
									
									?>
                                </div>
                                
                                <div class="tab-pane fade" id="testOther">
                                    <?php  $user_query=mysql_query("select * from event where eventCategory ='Other' AND eventStatus = 'Validated' order by totalParticipant DESC limit 9")or die(mysql_error());
									
									for($i=1; $i<$row=mysql_fetch_assoc($user_query); $i++){
										$id=$row['eventId'];
										$image='../../upload/'.$row['eventBanner'];  
										$imageData = base64_encode(file_get_contents($image));
										$src = 'data: '.mime_content_type($image).';base64,'.$imageData;
										?><button class="alert alert-default" title="Click to Join Event" id="<?php echo $id; ?>"  data-toggle="modal" data-target="#event_detail_modal<?php echo $id; ?>"><?php echo '<img width="300" height="100" src="' . $src . '">' ?>
                                        <p><?php echo $row['eventTitle']; ?></p></button>
                                         <?php include("join_event_modal.php");
									}
									
									?>
                                </div>
                                
                            </div>
        
     	
        	
            
        </div>
        
	</div>
    <!-- close panel-info -->
