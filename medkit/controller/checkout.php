<?php
include("../model/conn.php");
class checkout{
	public $conn;
	function __construct(){
		$obj = new connection;
		$this->conn = $obj->connect();
	}
	function insert_data(){
		$id = $_GET['id'];
		session_start();
		if(isset($_SESSION['email'])){
			$sql = "SELECT * FROM CART WHERE CART_ID = $id";
			$result = mysqli_query($this->conn,$sql);
			// while($row = $result->fetch_assoc()){
			// 	echo $row['CART_ID'];
			// 	echo $row['CART_NAME'];
			// 	echo $row['CART_PRICE'];
			// 	echo $row['CART_QUANTITY'];
			// 	echo $row['CART_TOTAL'];
			// }
			if($result->num_rows>0){
				header("location: ../views/checkout.php");
				print_r ($result);
			}
		}
		else{
			header("location: ../views/login.php");	
		}
		// session_start();
		// $set = $_SESSION['email'];
		// $country = $_POST['country'];
		// $fname = $_POST['fname'];
		// $lname = $_POST['lname'];
		// $add1 = $_POST['add1'];
		// $add2 = $_POST['add2']; 
		// $city = $_POST['city'];
		// $sate = $_POST['state'];
		// $pin = $_POST['pin'];
		// $email = $_POST['email'];
		// $pno = $_POST['id'];
		
		// echo $_GET['pri'];
		// echo "set :".$set."<br>";
		// echo "country :".$country."<br>";
		// echo "fname :".$fname."<br>";
		// echo "lname :".$lname."<br>";
		// echo "add1 :".$add1."<br>";
		// echo "add2 :".$add2."<br>";
		// echo "city :".$city."<br>";
		// echo "sate :".$sate."<br>";
		// echo "pin :".$pin."<br>";
		// echo "email :".$email."<br>";
		// echo "pno :".$pno."<br>";
		
		// if(isset($_SESSION['email'])){
		// 	$sql = "INSERT INTO CHECKOUT (CHECK_FNAME, CHECK_LNAME, EMAIL, 	CHECK_ADD1, CHECK_ADD2, CHECK_CITY, CHECK_STATE, CHECK_PIN, CHECK_EMAIL, CHECK_NUMBER) VALUES ('$fname', '$lname', '$set', '$add1', '$add2', '$city', '$state', $pin, 'email', $pno)";
		// 	$result = mysqli_query($this->conn, $sql);
		// 	if(!$result){
		// 		echo "error : ".mysqli_error($this->conn);
		// 	}
		// 	else{
		// 		header("location: ../views/cart.php");
		// 	}
		// }
		// else{
		// 	header("location: ../views/login.php");
		// }
	}
}
$result = new checkout();
if(isset($_GET['id'])){
	$result1 = $result->insert_data();
}
?>