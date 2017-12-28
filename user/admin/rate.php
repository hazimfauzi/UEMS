<?php  $like_query=mysql_query("SELECT COUNT(rateId) FROM rate WHERE createdBy = '$createdBy' AND rate = 'Like'")or die(mysql_error());
	   $rowLike=mysql_fetch_array($like_query);
	   $unike_query=mysql_query("SELECT COUNT(rateId) FROM rate WHERE createdBy = '$createdBy' AND rate = 'Unlike'")or die(mysql_error());
	   $rowUnlike=mysql_fetch_array($unike_query);
	   $total_rate=$rowLike[0]+$rowUnlike[0];
	   if($total_rate==0){
		   $rate=0;
	   }else{
	   	   $rate=($rowLike[0]/$total_rate)*100;
	   }?>

<div class="panel panel-default">
  <div class="panel-heading">
  	<i class="fa fa-star fa-fw"></i>
    <strong>Our Rate</strong> 
    
    <span class="pull-right text-muted">
    </span> 
    
  </div>
  
  <div class="panel-body">
    <div class="progress progress-striped active">
      <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $rate; ?>%"> <?php echo round($rate); ?><span>% User Like Our Service</span> 
      </div>
    </div>
    <?php $user_query=mysql_query("SELECT * FROM rate WHERE createdBy = '$createdBy'")or die(mysql_error());
	   	  $row=mysql_fetch_array($user_query);
          
          if($row['userId']==$session_id){
			 echo "You ".$row['rate']." Our Service";
		  }else{?>
          
          
    <a  title="Click To Rate" id="<?php echo $createdBy; ?>"  data-toggle="modal" data-target="#rate<?php echo $createdBy; ?>">Rate Now <i class="fa fa-thumbs-o-up fa-2x"></i></a>
            <?php include('rate_now.php');} ?>
            
    <span class="pull-right text-muted"><h6>total user rate : <?php echo $total_rate; ?> </h6></span>
  </div>
</div>
