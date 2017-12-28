<!-- Modal -->

<div class="modal fade" id="editModal<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Edit Event</h4>
      </div>
      <div class="modal-body">
      <div class="panel panel-info">
      <div class="panel-heading"> <?php echo '<img width="540" height="200" src="' . $src . '">' ?> </div>
      <!-- /.panel-heading -->
      <div class="panel-body">
      <form  method="POST" action="edit_event.php" enctype="multipart/form-data">
        <div class="form-group">
          <label >Event Title</label>
          <input type="hidden" id="inputEmail" name="id" value="<?php echo $row['eventId']; ?>" required>
          <input class="form-control" size="68" type="text" id="inputEmail" value="<?php echo $row['eventTitle']; ?>" name="eventTitle"  placeholder="What your event title?" required>
        </div><p></p>
        <div class="form-group">
          <label>Category</label><br/>
          <select class="form-control" name="eventCategory" required>
            <option><?php echo $row['eventCategory']; ?></option>
            <option>Career_Development</option>
            <option>Multicultural</option>
            <option>Student_Life</option>
            <option>Academics</option>
            <option>Festival</option>
            <option>Contest</option>
            <option>PC_Fair</option>
            <option>Sport</option>
            <option>Talk</option>
            <option>Other</option>
          </select>
        </div>
        <div class="form-group">
          <label>Location</label><br/>
          <select class="form-control" name="eventLocation" required>
            <option><?php echo $row['eventLocation']; ?></option>
            <option>UTeM MAIN HALL</option>
            <option>UTeM SPORT CENTRE</option>
            <option>UTeM MOSQUE & ISLAMIC CENTRE</option>
            <option>COMPUTER CENTRE, CRIM & ICNet(PKomp)</option>
            <option>STUDENT CENTRE(PPP)</option>
            <option>UTeM LIBRARY</option>
            <option>CENTRE FOR CO-CURRICULAR ACTIVITIES</option>
            <option>STUDENT HEALTH CENTRE</option>
          </select>
        </div><p></p>
        <div class="form-group">
          <label>Start Time</label>
          <input class="form-control" type="time" placeholder="Selact Time" value="<?php echo $row['startTime']; ?>" name="startTime" required>
        </div>
        <div class="form-group">
          <label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp End Time</label>
          <input class="form-control" type="time" placeholder="Selact Time" value="<?php echo $row['endTime']; ?>" name="endTime" required>
        </div><p></p>
        <div class="form-group">
          <label>Start Date</label>
          <input class="form-control" type="date" placeholder="Selact date" value="<?php echo $row['startDate']; ?>" name="startDate" required>
        </div>
        <div class="form-group">
          <label>End Date</label>
          <input class="form-control" type="date" placeholder="Selact Date" value="<?php echo $row['endDate']; ?>" name="endDate" required>
        </div><p></p>
        <div class="form-group">
          <label >Max Participant</label>
          <input class="form-control" type="text" size="68" id="inputPassword" name="totalParticipant" value="<?php echo $row['maxParticipant']; ?>" placeholder="Max people can join your event" required>
        </div>
        <div class="form-group">
          <label >Event Description</label>
          <textarea class="form-control" type="text" spellcheck="true" id="inputPassword" name="eventDescription"  placeholder="Tell people what's special about your event." required><?php echo $row['eventDescription']; ?></textarea>
        </div>
        </div>
        <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
        </div>
        <div class="modal-footer">
        <div class="pull-right">
          <div class="form-group">
            <div class="forms">
              <button name="submit" type="submit<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-save icon-large"></i>Save</button>
              <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!-- /.modal-content --> 
</div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal --> 

