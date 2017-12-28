

<!-- Modal -->
<div class="modal fade" id="rate<?php echo $createdBy; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
     <div class="modal-dialog">
        <div class="modal-content">
             <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"><center>Rate Organizer</center></h4>
             </div>
            <div class="modal-body">
            		Do you think we are awesome? <big><?php echo $createdBy; ?></big>
            </div>
            <div class="modal-footer">
                <a class="btn btn-success" href="rate_like.php<?php echo '?createdBy='.$createdBy; ?>"><i class="fa fa-thumbs-o-up fa-2x"></i>Yes</a>
                <a class="btn btn-danger" href="rate_unlike.php<?php echo '?createdBy='.$createdBy; ?>"><i class="fa fa-thumbs-o-down fa-2x"></i>No</a>
            </div>
        </div>
        <!-- /.modal-content -->
     </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->	
	
