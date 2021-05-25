<?php

include("../model/conn.php");
class pro_details{
	public $conn;
	function __construct(){
		$obj = new connection;
		$this->conn = $obj->connect();
	}
	function pro_fetch(){
		$prod = $_GET['pro'];
		$_SESSION['pass'] = $pass;
		
		$sql = "SELECT * FROM PRODUCTS WHERE PRO_ID = $prod";
		$result = mysqli_query($this->conn, $sql);
		return $result;
	}
}


$data = new pro_details;
$sub_data=$data->pro_fetch();

?>