

<!-- Modal -->
<div class="modal fade" id="view_eventBanner<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
     <div class="modal-dialog"><?php echo '?id='.$id; ?>">
        <div class="modal-content">
             <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"><center>Delete Admin</center></h4>
             </div>
            <div class="modal-body">
            		<?php
$no=$_GET['id'];


include('dbcon.php');

 $sql = "SELECT eventBanner FROM event WHERE eventId=$ido  ";
 $result = mysql_query("$sql");
 $row = mysql_fetch_assoc($result);
 mysql_close($con);
 
 header("Content-type: image/jpeg");
 echo $row['eventBannner'];

?>
            </div>
            <div class="modal-footer">
                <a class="btn btn-danger" href="delete_admin.php<?php echo '?id='.$id; ?>"><i class="icon-check"></i>&nbsp;Yes</a>
				<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;No</button>
            </div>
        </div>
        <!-- /.modal-content -->
     </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->	
	
