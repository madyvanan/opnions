<?php
require_once ('Crud.php');

class PollManagement extends Crud { 
   
	public $where;
	public $usernsme;
	public $password;
	
	private $tableName ='poll_qna';
	private $result_tableName ='results';
	private $fieldNames;
	private $fieldValues;
	

	/* class constructor */
	function __construct() {
		parent::__construct();
    }
	

	
	public function getPollQnas(){
		
			$sqlqry = "SELECT `PollqID`, `PollQus`, `PollAns_1`, `PollAns_2`, `PollAns_3`, `PollAns_4` 
			           FROM `{$this->tableName}` WHERE Status=:stats ORDER BY PollqID ASC";
			$where = array(':stats'=>'1');	
			$data = $this->getAllData($sqlqry,$where);
			return $data; 
	}
	
	public function putPollData($pollData=array()){
		$ids=array();
		foreach($pollData as $key=>$val){
		$this->fieldValues = array(
		               ':usrid'=>$_SESSION['user_id'],
			           ':pollqid'=>$key,
					   ':pollans1'=>((int)$val==1)?'1':'0',
					   ':pollans2'=>((int)$val==2)?'1':'0',
					   ':pollans3'=>((int)$val==3)?'1':'0',
					   ':pollans4'=>((int)$val==4)?'1':'0',
					   ':currdate'=>date('Y-m-d h:i:s')
					);
			$this->fieldNames = "`UserID`, `PollqID`, `Ans_1`, `Ans_2`, `Ans_3`, `Ans_4`, `CreatedOn`";
			$values = implode(",",array_keys($this->fieldValues));
			$query="INSERT INTO `{$this->result_tableName}` ( {$this->fieldNames} ) VALUES ( {$values} )";
			//echo $query.'<pre>';die;
			$ids[]=$this->setData($query,$this->fieldValues);			
		}
		return $ids;
	}
	
	public function getResultOfPoll($user_id=0,$offset=0,$length=10){	//`ResultID`, `UserID`, 	
			$sqlqry = "SELECT a.`ResultID`, a.`PollqID`, b.`PollQus`, a.`Ans_1`, a.`Ans_2`, 
							a.`Ans_3`, a.`Ans_4`			
							FROM `{$this->result_tableName}` AS a
							LEFT JOIN `poll_qna` AS b ON a.`PollqID` = b.`PollqID`
							WHERE a.UserID=:userid AND a.Status=:stats";			
			$new_where = array(':userid'=>$user_id,':stats'=>'1');	
			
			$data['total_count'] = $this->getTotalCount($sqlqry,$new_where);
			
			if($length!=0){
				$sqlqry.=" LIMIT ".$offset.", ".$length;
			}
			
			$data['data'] = $this->getAllData($sqlqry,$new_where);			
			return $data; 
	}
	 
}