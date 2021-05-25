<?php
include("../model/conn.php");
class Upate{
	public $conn;
	function __construct(){
		$obj = new connection;
		$this->conn = $obj->connect();
	}
	function update(){       
	    $q = $_POST['q'];
		echo $q;
	 }
}
$upate = new Update;
if(isset($_POST['q'])){
	$update->update();
}
?>