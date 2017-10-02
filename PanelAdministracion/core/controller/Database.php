<?php
class Database {


	
	public static $db;
	public static $con;
	function Database(){
		$this->user="b7db3f88f3f62e";
		$this->pass="1cf10bdf";
		$this->host="us-cdbr-iron-east-05.cleardb.net";
		$this->ddbb="heroku_bd06eed689454bf";
	}

	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>
