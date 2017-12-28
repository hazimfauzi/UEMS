<div class="chat-panel panel panel-default">
  <div class="panel-heading"> <i class="fa fa-comments fa-fw"></i> Comments
    <div class="btn-group pull-right"> <a href="details_organizer.php<?php echo '?createdBy='.$createdBy; ?>"> <i class="fa fa-refresh fa-fw"></i> Refresh </a> </div>
  </div>
  <!-- /.panel-heading -->
  
  <div class="panel-body">
    <ul class="chat">
    
      <?php  $comment_query=mysql_query("SELECT * FROM comment WHERE createdBy = '$createdBy' ORDER BY commentTime DESC ")or die(mysql_error());
				for($i=1; $i<$rowC=mysql_fetch_assoc($comment_query); $i++){
					$commentId=$rowC['commentId'];
					
					if($rowC['userId'] != $session_id){?>
      
      
      
      <li class="left clearfix"> <span class="chat-img pull-left"> <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle" /> </span>
        <div class="chat-body clearfix">
          <div class="header"> <strong class="primary-font"><?php echo $rowC['userId']; ?></strong> <small class="pull-right text-muted"> <i class="fa fa-clock-o fa-fw"></i><?php echo date('D, d M h:i A',strtotime($rowC['commentTime'])); ?></small> </div>
          <p><?php echo $rowC['comment']; ?></p>
        </div>
      </li>
      <?php } else { ?>
      <li class="right clearfix"> <span class="chat-img pull-right"> <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar" class="img-circle" /> </span>
        <div class="chat-body clearfix">
          <div class="header"> <small class=" text-muted"> <i class="fa fa-clock-o fa-fw"></i><?php echo date('D, d M h:i A',strtotime($rowC['commentTime'])); ?></small> <strong class="pull-right primary-font">Me</strong> </div>
          <p><?php echo $rowC['comment']; ?></p>
        </div>
      </li>
      <?php }}?>
    </ul>
  </div>
  <!-- /.panel-body -->
  
  <div class="panel-footer">
    <form  method="POST" action="save_comment.php" enctype="multipart/form-data">
      <div class="input-group">
        <input type="text"   id="btn-input" name="comment" class="form-control input-sm" placeholder="Type your message here..." />
        <input type="hidden" id="inputEmail" name="createdBy" value="<?php echo $createdBy; ?>" required>
        <input type="hidden" id="inputEmail" name="userId" value="<?php echo $session_id; ?>" required>
        <span class="input-group-btn">
        <button name="submit" type="submit" class="btn btn-warning btn-sm" id="btn-chat"> Send </button>
        </span> </div>
    </form>
  </div>
  <!-- /.panel-footer --> 
</div>
<!-- /.panel .chat-panel -->