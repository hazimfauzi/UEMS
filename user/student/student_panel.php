<div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-film fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php $query=mysql_query("select count(eventId) from event where eventStatus='Pending'")
															or die(mysql_error());
		                                          $row=mysql_fetch_array($query);echo $row[0];?>
                                    </div>
                                    <div>New Event!</div>
                                </div>
                            </div>
                        </div>
                        <a href="validate_event.php">
                            <div class="panel-footer">
                                <span class="pull-left">Need Approve!!!</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-flag-checkered fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php $query=mysql_query("select count(eventId) from event")
															or die(mysql_error());
		                                          $row=mysql_fetch_array($query);echo $row[0];?>
                                    </div>
                                    <div>Total Event!</div>
                                </div>
                            </div>
                        </div>
                        <a href="view_event.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php $query=mysql_query("select count(userId) from user where level='Organizer'")
															or die(mysql_error());
		                                          $row=mysql_fetch_array($query);echo $row[0];?>
                                    </div>
                                    <div>Total Organizer!</div>
                                </div>
                            </div>
                        </div>
                        <a href="view_organizer.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-group fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php $query=mysql_query("select count(userId) from user where level='Student'")
															or die(mysql_error());
		                                          $row=mysql_fetch_array($query);echo $row[0];?>
                                    </div>
                                    <div>Total Student!</div>
                                </div>
                            </div>
                        </div>
                        <a href="view_student.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->