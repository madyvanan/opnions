<?php
require_once ('E:/xampp/htdocs/zencode/config/DbConfig.php');  

class Crud extends DbConfig {
    public $query;
    public $pdoStmt;
    public $rows;
    public $row;
	public $where;
	public $fields;
	public $values;
	

	/* class constructor */
	function __construct() {
		parent::__construct();
    }
    
	public function setData($query,$fieldValues){			
        try{
                $pdoStmt = $this->dbConnection->prepare($query);
                $pdoStmt->execute ( $fieldValues );
				$lastid = $this->dbConnection->lastInsertId();
                return $lastid;  
        } catch (PDOException $e ){
            echo( "Error in function setData() - " . $e->getMessage () );
        }  
    }
	
    public function getData($query,$where=array()){
        try{
                $pdoStmt = $this->dbConnection->prepare($query);
                $pdoStmt->execute ( $where );
                $row = array(); 
                $row = $pdoStmt->fetch( PDO::FETCH_ASSOC );
                return $row;  
        } catch (PDOException $e ){
            echo( "Error in function getData() - " . $e->getMessage () );
        }  
    }

    public function getAllData($query,$where=array()){
        try{
                $pdoStmt = $this->dbConnection->prepare($query);
                $pdoStmt->execute ( $where );
                $rows = array(); 
                $rows = $pdoStmt->fetchAll ( PDO::FETCH_ASSOC );				
                return $rows;  
        } catch (PDOException $e ){
            echo( "Error in function getAllData() - " . $e->getMessage () );
        }  
    }
	public function getTotalCount($query,$where=array()){
        try{
                $pdoStmt = $this->dbConnection->prepare($query);
                $pdoStmt->execute ( $where );                				
                return $pdoStmt->rowCount();  
        } catch (PDOException $e ){
            echo( "Error in function getTotalCount() - " . $e->getMessage () );
        }  
    }
	public function updateData($query,$where=array()){
        try{
                $pdoStmt = $this->dbConnection->prepare($query);
                $pdoStmt->execute ( $where );
                $affected_rows = $pdoStmt->rowCount();		
                return $affected_rows;  
        } catch (PDOException $e ){
            echo( "Error in function updateData() - " . $e->getMessage () );
        }  
	}
	
}