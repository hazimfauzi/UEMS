<div class="navbar-default sidebar" role="navigation">
  <div class="sidebar-nav navbar-collapse">
    <ul class="nav" id="side-menu">
      .
      <center>
        <a href="index.php"><img src="../../img/logo.png" alt=""></a>
      </center>
      <form action="search.php" method="get">
        <li class="sidebar-search">
          <div class="input-group custom-search-form">
            <input  type="text" class="form-control" name="k" placeholder="Search Event">
            <span class="input-group-btn">
            <button class="btn btn-default" type="submit"> <i class="fa fa-search"></i> </button>
            </span> </div>
          <!-- /input-group --> 
        </li>
      </form>
      <li>
        <center>
          <a href="index.php"><font size="4" color="black">Organizer Page</font></a>
        </center>
      </li>
      <li> <a href="index.php"><i class="fa fa-home fa-fw"></i> Home</a> </li>
      <li> <a href="#"><i class="fa fa-calendar fa-fw"></i> Event<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
          <li> <a href="add_event.php"><i class="fa fa-plus fa-fw"></i>Create Event</a> </li>
          <li> <a href="view_event.php"><i class="fa fa-globe fa-fw"></i>All Event</a> </li>
          <li> <a href="browse_event.php"><i class="fa fa-search fa-fw"></i>Browse Event</a> </li>
          <li> <a href="view_my_event.php"><i class="fa fa-tag fa-fw"></i>My Event</a> </li>
          <li> <a href="my_ticket.php"><i class="fa fa-ticket fa-fw"></i>My Ticket</a> </li>
        </ul>
        <!-- /.nav-second-level --> 
      </li>
      <li> <a href="#"><i class="fa fa-tasks fa-fw"></i> Attendance<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
          <li> <a href="#"><i class="fa fa-check-square-o fa-fw"></i>Live Event <span class="fa arrow"></span></a>
            <ul class="nav nav-third-level">
              <?php 
									$live_query=mysql_query("select * from event where createdBy= '$session_id' AND eventStatus='Validated' AND startDate >= '$now' order by startDate DESC")or die(mysql_error());
									while($row=mysql_fetch_assoc($live_query)){?>
              <li> <a href="attendance.php<?php echo '?eventId='.$row['eventId']; ?>"><i class="fa fa-arrow-circle-o-right fa-fw"></i><?php echo $row['eventTitle']; ?></a> </li>
              <?php } ?>
            </ul>
            <!-- /.nav-third-level --> 
          </li>
          <li> <a href="#"><i class="fa fa-check-square-o fa-fw"></i>Past Event <span class="fa arrow"></span></a>
            <ul class="nav nav-third-level">
              <?php 
									$past_query=mysql_query("select * from event where createdBy= '$session_id' AND eventStatus='Validated' AND startDate < '$now' order by startDate DESC")or die(mysql_error());
									while($row2=mysql_fetch_assoc($past_query)){?>
              <li> <a href="attendance.php<?php echo '?eventId='.$row2['eventId']; ?>"><i class="fa fa-arrow-circle-o-right fa-fw"></i><?php echo $row2['eventTitle']; ?></a> </li>
              <?php } ?>
            </ul>
            <!-- /.nav-third-level --> 
          </li>
        </ul>
        <!-- /.nav-second-level --> 
      </li>
      <li> <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Report<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
          <li> <a href="#">View Report</a> </li>
          <li> <a href="#">Print Report</a> </li>
        </ul>
        <!-- /.nav-second-level --> 
      </li>
    </ul>
  </div>
  <!-- /.sidebar-collapse --> 
</div>
<!-- /.navbar-static-side -->
</nav>
