<?php
require('config/config.php');
if(!isset($_SESSION['user_id'])){
    header('location:login.php?redirect=' . base64_encode('opinion'));	
}
require_once (DAO_PATH .'PollManagement.php');
$pollManagement = new PollManagement();
$pollqnas = $pollManagement->getPollQnas();
require_once (DAO_PATH .'UserManagement.php');
$userManagmnt = new UserManagement();
if(isset($_POST) && !empty($_POST)){
	$smsg=NULL;
    if($userManagmnt->userPolledCheck()!=TRUE){	
		$polls = array();
		$poll_qna= array(); 
		$i=1;
		foreach($_POST as $key=>$val){		
			$polls[$_POST['poll_qus_'.$i]] = $_POST['poll_ans_'.$i]; 
		 $i++;
		}	
		
		$polls = array_filter($polls);
		if(COUNT($polls)<COUNT($pollqnas)){
			$smsg='Please answer all the questions';
		}else{
			$polled = $pollManagement->putPollData($polls);
			if(COUNT($polled)==COUNT($pollqnas)){
				$smsg='Poll has been Saved';
			}else{
				$smsg='Something wrong please check your database.';
			}
		}		
	} else {
		header('location:index.php?redirect=' . base64_encode('opinion'));
	}	
}
require('header.php');
?>    
    <!-- Services Section Start -->
    <section id="services" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="section-title wow fadeInDown animated" data-wow-delay="0.3s">Choose Your option</h2>
            <?php if(isset($smsg) && $smsg!=NULL){ ?>
			<h5><a href="login.php" style='curser:none'><?php echo $smsg;?></a></h5>
			<?php } ?>
		  </div>
        </div>
		<form action="opinion.php" method="post" class="opnion-form">
        <div class="row">
		  <?php foreach($pollqnas as $polans){ ?>
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="service-box">
			    <input type="hidden" name="poll_qus_<?php echo $polans['PollqID'];?>" value="<?php echo $polans['PollqID'];?>">
                <strong><?php echo $polans['PollQus'];?></strong><br />				
				<label><input type="radio" name="poll_ans_<?php echo $polans['PollqID'];?>" value="1">&nbsp;<?php echo $polans['PollAns_1'];?></label><br />
				<label><input type="radio" name="poll_ans_<?php echo $polans['PollqID'];?>" value="2">&nbsp;<?php echo $polans['PollAns_2'];?></label><br />
				<label><input type="radio" name="poll_ans_<?php echo $polans['PollqID'];?>" value="3">&nbsp;<?php echo $polans['PollAns_3'];?></label><br />
				<label><input type="radio" name="poll_ans_<?php echo $polans['PollqID'];?>" value="4">&nbsp;<?php echo $polans['PollAns_4'];?></label>
            </div>
          </div>
		  <?php } ?> 
        </div>
		<div class="row pull-right">
			<div class="form-group">
                <button type="submit" class="btn btn-common">Submit Here</button>
            </div>
		</div>
		</form>
      </div>
    </section>
    <!-- Services Section End -->
<?php require('footer.php') ?>
