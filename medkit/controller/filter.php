<?php
include("../model/conn.php");
// include("../views/ayurvedic.php");

class Filter{
    public $conn;
    function __construct(){
        $obj = new connection;
        $this->conn = $obj->connect();
    }
    function pro(){
        $company = $_POST['brand'];
        $pro_name = $_POST['pro_name'];
        //  $company = "patanjali";
        // $pro_name ="saundarya";
        if($company != "" || $pro_name != ""){
            $query = "SELECT * FROM PRODUCTS WHERE PRO_COMPANY = '$company' OR PRO_NAME = '$pro_name'";

            $result = mysqli_query($this->conn,$query) or die ('error');
            if(mysqli_num_rows($result) > 0){
                include("loction: ../views/pro_filter.php");
            }
        }
    }
}
// $obj=new Filter();
// $obj->pro();
$filt = new Filter;
if(isset($_POST['2ndfilter'])){
    $filt->pro();
}
?>