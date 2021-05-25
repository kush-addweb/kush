<?php
include("../model/conn.php");
class comments{
	public $conn;
	function __construct(){
		$obj = new connection;
		$this->conn = $obj->connect();
	}
	function push_data(){
		$f_name = $_POST['fname'];
		$email = $_POST['e-mail'];
		$ph_num = $_POST['ph-num'];
		$com = $_POST['comments'];
		$sql = "INSERT INTO CONTACT (CON_FNAME,CON_EMAIL, CON_PH_NUMBER, CON_COM) VALUES ('$f_name', '$email', $ph_num, '$com')";
		$result = mysqli_query($this->conn,$sql);
		if($result){
		header("Location: ../views/contact.php");
		return $result;
		}
		// if($result){
		// 	echo "yes";
		// }
		// else{
		// 	echo "no".mysqli_error($result);
		// 	echo $this->conn->error;
			
		// }
		// return $result;
	}
}
$filt = new comments;
if(isset($_POST['submit'])){
	$comment = $filt->push_data();
}
?>