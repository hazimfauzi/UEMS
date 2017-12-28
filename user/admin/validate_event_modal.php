

<!-- Modal -->
<div class="modal fade" id="validateEvent<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
     <div class="modal-dialog">
        <div class="modal-content">
             <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"><center>Validate Event</center></h4>
             </div>
            <div class="modal-body">
            		Are you Sure want to validate <big><?php echo $row['eventTitle']; ?></big>
            </div>
            <div class="modal-footer">
                <a class="btn btn-info" href="validate_event_done.php<?php echo '?id='.$id; ?>"><i class="icon-check"></i>&nbsp;Yes</a>
				<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;No</button>
            </div>
        </div>
        <!-- /.modal-content -->
     </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->	
	
