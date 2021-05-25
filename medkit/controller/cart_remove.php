<?php
inclde("../model/conn.php");
class delete{
	public $conn;
	function __construct(){
		$com = new connection;
		$this->conn = $com->connect();
	}
	function remove(){
		$id = $_GET['remove'];
		echo $id;
	}
}
$rev = new delete;
$rev->remove();
?>