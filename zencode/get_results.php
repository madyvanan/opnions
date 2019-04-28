<?php 
require('config/config.php');
if(!isset($_SESSION['user_id'])){
    header('location:login.php?redirect=' . base64_encode('results'));	
}
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){    
	require_once (DAO_PATH .'PollManagement.php');
	$pollManagement = new PollManagement();
	$user_id = $_POST['user_id']; 
	$length = $_POST['length'];
	$offset = $_POST['start'];
	$pollResults = $pollManagement->getResultOfPoll($user_id,$offset,$length);
	$data = array();
		$i=1;
	foreach($pollResults['data']  as $k=>$v){
		$data[] = array(			   
						$i,
						$v['PollQus'],
						((int)$v['Ans_1']==1)?'<i class="fa fa-check" style="color:green;"></i>':'<i class="fa fa-times" style="color:red;"></i>',
						((int)$v['Ans_2']==1)?'<i class="fa fa-check" style="color:green;"></i>':'<i class="fa fa-times" style="color:red;"></i>',
						((int)$v['Ans_3']==1)?'<i class="fa fa-check" style="color:green;"></i>':'<i class="fa fa-times" style="color:red;"></i>',
						((int)$v['Ans_4']==1)?'<i class="fa fa-check" style="color:green;"></i>':'<i class="fa fa-times" style="color:red;"></i>'
				);
	$i++;
	}

	$results = array(
					"draw"=> (int)$_POST['draw'],
					"recordsTotal"=>$pollResults['total_count'],
					"recordsFiltered"=>$pollResults['total_count'],
					"data"=>$data 
				);
	echo json_encode($results);die; 
}else{
	echo'400: Bad request';
}
?>