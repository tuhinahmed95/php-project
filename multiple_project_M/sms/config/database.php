<?php  
/**
 * This is the database connection file
 */
class Database{
	private $host;
	private $user;
	private $pass;
	private $db_name;

	public $link;
	public $error;
	
	public function __construct(){
		$this->config();
		$this->connectDB();
	}

	public function config(){
		$this->host = 'localhost';
		$this->user = 'root';
		$this->pass = '';
		$this->db_name = 'sms';
	}

	// Database connect method
	public function connectDB(){
		$this->link = new mysqli($this->host,$this->user,$this->pass,$this->db_name);
		if (!$this->link) {
			$this->error = "Connection fail".$this->link->connect_error;
		}
	}

	// query data
	public function query($data){
		$result = $this->link->query($data) or die($this->link->error.__LINE__);
		if($result){
			return $result;
		}else{
			return false;
		}

	}


}
