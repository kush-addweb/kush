<?php
include("../model/conn.php");
class Product{

    public $conn;

    function __construct(){
        $obj = new connection;
        $this->conn = $obj->connect();
    }
    function ayurved(){
        // header("Loction: ../views/ayurvedic.php");
        $cat=$_GET['cat'];
        $sql = "SELECT * FROM PRODUCTS WHERE CAT_ID = $cat";
        $pro = mysqli_query($this->conn,$sql);
        return $pro;
        // while($row=$pro->fetch_assoc())
        // {
        //     echo $row['PRO_NAME'];
        // }
    }
    function pro(){
    
        $company = $_POST['brand'];
        $pro_name = $_POST['pro_name'];
        // $company = "patanjali";
        // $pro_name ="saundarya";
        if($company != "" || $pro_name != ""){
            $query = "SELECT * FROM PRODUCTS WHERE PRO_COMPANY = '$company' OR PRO_NAME = '$pro_name'";

            $result = mysqli_query($this->conn,$query) or die ('error');
            if(mysqli_num_rows($result) > 0){
                include("loction: ../views.php/pro_filter.php");
                // while($row = $result->fetch_assoc()){
                //     echo $row['PRO_NAME'];
                // }
                return $result;
            }
        }
    }
}
$obj1 = new Product;
// if(isset($_POST['products'])){
if(isset($_POST['filter_pro'])){
$result4 = $obj1->pro();
}
else{
$result = $obj1->ayurved();
$result1 = $obj1->ayurved();
$result2 = $obj1->ayurved();
$result3 = $obj1->ayurved();
}
?>