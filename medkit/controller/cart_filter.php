<?php
// session_start();
include("../model/conn.php");
class validation{
	public $conn;
	function __construct(){
		$obj = new connection;
		$this->conn = $obj->connect();
	}
	function insert_cart(){
		session_start();
		$set = $_SESSION['email'];
		$id = $_POST['pro_ID'];
		$name = $_POST['proname'];
		$com = $_POST['com'];
		$img = $_POST['img'];
		$price = $_POST['pri'];
		$qty = 1;
		$total = $price * $qty;

		if(isset($_SESSION['email'])){
			$sql1 = "SELECT * FROM CART WHERE PRO_ID = $id AND EMAIL = '$set'";
			$return1 = mysqli_query($this->conn, $sql1);
			if($return1->num_rows>0){
				echo '<script type="text/javascript">alert("Product has already inserted");window.location.href = "../views/cart.php";</script>';
			}
			else{
				$sql = "INSERT INTO CART (CART_NAME, CART_IMG, CART_PRICE, CART_TOTAL, CART_QUANTITY, EMAIL, PRO_ID) VALUES ('$name', '$img', $price, $total, $qty, '$set', $id)";
				$result = mysqli_query($this->conn, $sql);
				if($result){
					header("Location: ../views/cart.php");
					// echo "error".mysqli_error($this->conn);
				}
			}
		}
		else{
			header("Location: ../views/login.php");
		}
	}

	function fetch_cat(){
		session_start();
		$set = $_SESSION['email'];
		
		$sql2 = "SELECT * FROM CART WHERE EMAIL = '$set'";
		$return2 = mysqli_query($this->conn, $sql2);

		if($return2->num_rows>0){
			return $return2;
		}
		else{
			echo "Record is not found";
		}
	}
	function cart_update(){
		session_start();
		$set = $_SESSION['email'];
		$qty = $_POST['qty'];
		$price = $_POST['price'];
		$total = $_POST['total'];
		$id = $_POST['id'];
		$total1 = $qty * $price;

		if($set){
			$sql = "UPDATE CART SET CART_QUANTITY = $qty, CART_TOTAL = $total1 WHERE CART_ID = $id";
			$result = mysqli_query($this->conn,$sql);
			if($result){
				header("Location: ../views/cart.php");
				// echo "updated";
			}
			else{
				echo "not update".mysqli_error($this->conn);
			}
		}
	}
	function remove_cart(){
		$get = $_GET['remove'];
		$sql = "DELETE FROM CART WHERE CART_ID = $get";
		$result = mysqli_query($this->conn, $sql);

		if($result){
			header("Location: ../views/cart.php");
		}
	}
	function fetch_wish(){
		session_start();
		$set = $_SESSION['email'];
		$sql3 = "SELECT * FROM WISHLIST WHERE EMAIL = '$set'";
		$return3 = mysqli_query($this->conn, $sql3);

		if($return3->num_rows>0){
			return $return3;
		}
		else{
			echo "Record is not found";
		}
	}
	function remove_wish(){
		$get = $_GET['rem_wish'];
		$sql = "DELETE FROM WISHLIST WHERE WISH_ID = $get";
		$result = mysqli_query($this->conn, $sql);

		if($result){
			header("Location: ../views/wishlist.php");
		}
	}
	function insert_wish(){
		session_start();
		$set = $_SESSION['email'];
		$proname = $_POST['proname'];
		$proprice = $_POST['pri'];
		$proimg = $_POST['img'];
		$proid = $_POST['pro_ID'];

		if(isset($_SESSION['email'])){
			$sql1 = "SELECT * FROM WISHLIST WHERE PRO_ID = $proid AND EMAIL = '$set'";
			$return1 = mysqli_query($this->conn, $sql1);
			if($return1->num_rows>0){
				echo '<script type="text/javascript">alert("Product has already in wishlist");window.location.href = "../views/wishlist.php";</script>';
			}
			else{
				$sql = "INSERT INTO WISHLIST (WISH_IMG, WISH_NAME, WISH_PRICE, PRO_ID, EMAIL) VALUES ('$proimg', '$proname', $proprice, $proid, '$set')";
				$result = mysqli_query($this->conn, $sql);
				if($result){
					header("Location: ../views/wishlist.php");
					// echo "error".mysqli_error($this->conn);
				}
			}
		}
		else{
			header("Location: ../views/login.php");
		}
	}
	function wish_cart(){
		session_start();
		$set = $_SESSION['email'];
		$wishname1 = $_POST['wishname'];
		$wishprice1 = $_POST['wishprice'];
		$proimg1 = $_POST['img'];
		$proid1 = $_POST['proid'];
		$qty1 = 1;
		$total1 = $qty1 * $wishprice1;

		if(isset($_SESSION['email'])){
			$sql1 = "SELECT * FROM CART WHERE PRO_ID = $proid1 AND EMAIL = '$set'";
			$return1 = mysqli_query($this->conn, $sql1);
			if($return1->num_rows>0){
				echo '<script type="text/javascript">alert("Product has already in wishlist");window.location.href = "../views/wishlist.php";</script>';
			}
			else{
				$sql = "INSERT INTO CART (CART_NAME, CART_IMG, CART_PRICE, CART_TOTAL, CART_QUANTITY, EMAIL, PRO_ID) VALUES ('$wishname1', '$proimg1', $wishprice1, $total1, $qty1, '$set', $proid1)";
				$result = mysqli_query($this->conn, $sql);
				if($result){
					header("Location: ../views/cart.php");
					// $sql2 = "DELETE FROM WISHLIST WHERE PRO_ID = $proid1";
					// $result2 = mysqli_query($this->conn, $sq2);
					// if(!$result){
					// 	// header("Location: ../views/wishlist.php");
					// 	echo "error".mysqli_error($result2);
					// }
					// else{
					// 	echo "Product can not delete :: ".mysqli_error($this->conn);
					// }
					// header("Location: ../views/cart.php");
					// echo "error".mysqli_error($this->conn);
				}
				else{
					echo "error :: ".mysqli_error($this->conn);
				}
			}
		}
		else{
			header("Location: ../views/login.php");
		}
	}
	function buy_pro(){
		$id = $_GET['id'];

		if($_GET['id']){
			header("location: ../views/checkout.php?id1=$id");
		}
	}
	function get_data(){
		$id1 = $_GET['id1'];
		$sql = "SELECT * FROM CART WHERE CART_ID = $id1";
		$return2 = mysqli_query($this->conn,$sql);

		if($return2){
			return $return2;
		}
	}
	function insert_checkout(){
		session_start();
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$set = $_SESSION['email'];
		$pro_id = $_POST['pro_id'];
		$add1 = $_POST['add1'];
		$add2 = $_POST['add2'];
		$city = $_POST['city'];
		$state = $_POST['state'];
		$pin = $_POST['pin'];
		$email = $_POST['email'];
		$pno = $_POST['pno'];
		$note = $_POST['note'];
		$pro_name = $_POST['pro_name'];
		$pro_qty = $_POST['pro_qty'];
		$pro_total = $_POST['total'];
		
		// echo "fname: ".$fname."<br>";
		// echo "lname : ".$lname."<br>";
		// echo "set : ".$set."<br>";
		// echo "pro_id : ".$pro_id."<br>";
		// echo "add1 : ".$add1."<br>";
		// echo "add2 : ".$add2."<br>";
		// echo "city : ".$city."<br>";
		// echo "state : ".$state."<br>";
		// echo "pin : ".$pin."<br>";
		// echo "email : ".$email."<br>";
		// echo "pno : ".$pno."<br>";
		// echo "note : ".$note."<br>";
		// echo "pro_name : ".$pro_name."<br>";
		// echo "pro_qty : ".$pro_qty."<br>";
		// echo "pro_total : ".$pro_total."<br>";

		$sql = "INSERT INTO CHECKOUT (CHECK_FNAME, CHECK_LNAME, EMAIL, PRO_ID, CHECK_ADD1, CHECK_ADD2, CHECK_CITY, CHECK_STATE, CHECK_PIN,CHECK_EMAIL,CHECK_NUMBER, CHECK_NOTE, PRO_NAME, PRO_QTY, TOTAL_PRI) VALUES ('$fname', '$lname', '$set', $pro_id, '$add1', 'add2', '$city', '$state', $pin, '$email', $pno, '$note', '$pro_name', $pro_qty, $pro_total)";
		$result = mysqli_query($this->conn, $sql);
		if($result){
			echo '<script type="text/javascript">alert("Product has already inserted");window.location.href = "../views/cart.php";</script>100.00	';
			header("location: ../views/cart.php");
		}
		else{
			"error".mysqli_error($this->connb);
		}
	}
	
}
$filt = new validation;
if(isset($_POST['but'])){
	$result1 = $filt->insert_cart();
}
elseif(isset($_GET['remove'])){
	$filt->remove_cart();
}
elseif(isset($_GET['rem_wish'])){
	$filt -> remove_wish();
}
elseif(isset($_POST['wish-but'])){
	$result = $filt->wish_cart();	
}
elseif(isset($_POST['update'])){
	$filt -> cart_update();
}
elseif(isset($_GET['id'])){
	$filt -> buy_pro();
}
elseif(isset($_GET['id1'])){
	$return3 = $filt -> get_data();
}
elseif(isset($_POST['insert-but'])){
	$filt -> insert_checkout();
}
elseif(isset($_SESSION['email'])){
	$obj = $filt->fetch_wish();
}

// $filt->fetch_wish();
elseif(isset($_POST['wish'])){
	$obj = $filt->insert_wish();
}

$result2 = $filt->fetch_cat();
// if(isset($_SESSION['email'])){
// 	$result = $filt->show();
// }
?>