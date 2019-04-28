<?php
require_once ('Crud.php');

class UserManagement extends Crud {  
   
	public $where;
	public $usernsme;
	public $password;
	
	private $tableName ='users';
	private $fieldNames;
	private $fieldValues;
	private $aesencpKey='ZenCode';
	

	/* class constructor */
	function __construct() {
		parent::__construct();
    }
	
	public function userLogin($usernsme,$password){
		
			$sqlqry = "SELECT `UserID`, `FirstName`, `LastName`, `Email`, AES_DECRYPT(`Password`,'".$this->aesencpKey."') AS Password, `Address`, `IsAdmin`, `Status` 
						FROM `{$this->tableName}` WHERE `Email`=:email AND `Status`=:stats";
			$where = array(':email'=>$usernsme,':stats'=>'1');	
			$data = $this->getData($sqlqry,$where);
			$usr_data=array('user_id'=>$data['UserID'],
							'FirstName'=>$data['FirstName'],
							'LastName'=>$data['LastName'],
							'Email'=>$data['Email'],
							'Role'=>((int)$data['IsAdmin']==1)?'user':'admin'
			                 );			
			if($data['Password']==$password){
				return $usr_data;  
			}else{
				return array();
			}
	}
	
	public function getUsersOnlyPolled(){
		
			$sqlqry = "SELECT `UserID`, `FirstName`, `LastName`, `Email` 
					   FROM `{$this->tableName}` 
					   WHERE `UserID` IN ( SELECT DISTINCT `UserID` FROM `results` GROUP BY `UserID` )";
			$where = array(':stats'=>'1');	
			$data = array();  
			$data = $this->getAllData($sqlqry,$where);
			return $data;
	}
	
	function searchUserId($id, $array) {
	   foreach ($array as $key => $val) {
		   if ($val['UserID'] == $id) {
			   return TRUE;
		   }
	   }
	   return FALSE;
	}
	
	public function userPolledCheck(){
		$data = $this->getUsersOnlyPolled();
		$checked = $this->searchUserId($_SESSION['user_id'],$data);
		return $checked;  
	}
      
}