<?php   
class DbConfig {
	private $_host = "localhost";
	private $_username ="root";
	private $_password ="";
	private $_database ="zencode";
	
	protected $dbConnection;  

	public function __construct() {
             if(!isset($this->dbConnection)){

				$this->dbConnection = new PDO ("mysql:host=" . $this->_host . ";dbname=" . $this->_database, $this->_username, $this->_password);
				if(!$this->dbConnection){
					echo"Cannot connect the Database Server";   
					exit;
				}
			 }
	 return $this->dbConnection;  
	}
}