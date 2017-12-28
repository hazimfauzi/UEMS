<!-- Modal -->

<div class="modal fade" id="ticket_modal<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">
          <center>
            <h2><strong><?php echo $row['eventTitle']; ?></strong></h2>
          </center>
        </h4>
      </div>
      <div class="modal-body">
        <div class="panel panel-info">
          <div class="panel-heading"> <?php echo '<img width="540" height="200" src="' . $src . '">' ?> </div>
          <!-- /.panel-heading -->
          <div class="panel-body"> <div class="col-lg-9"
          	<p><strong>Title : </strong><?php echo $row['eventTitle']; ?></p>
            <p><strong>Date : </strong><?php echo $row['startDate']; ?> until <?php echo $row['endDate']; ?></p>
            <strong>Location :</strong><br/>
            <?php echo $row['eventLocation']; ?>,<br/>
            Universiti Teknikal Malaysia Melaka, Hang Tuah Jaya,<br/>
            76100 Durian Tunggal, Melaka,<br/>
            Malaysia.<br/>
          </div>
          <div class="col-lg-3"> 
          	<p><strong>Your QR Code</strong></p>
		  	<div class="panel panel-primary"><?php echo '<img width="100" height="100" src="' . $qrCode . '">' ?> </div>
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