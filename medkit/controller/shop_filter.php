<?php
include("../model/conn.php");
// include("../views/shop_filter.php");
class shop_conn{
    public $conn;
    function __construct(){
        $obj = new connection;
        $this->conn = $obj->connect(); 
    }
   
    function Selected(){

            if(!empty($_POST['brand']) && !empty($_POST['catagory']))
            {
                $company = $_POST['brand'];
                //$name = $_POST['pro_name'];
                $cat_name = $_POST['catagory'];
                // echo $company;
                // echo $cat_name;
                // $company = "patanjali";
                // $name = "saundarya";
                
                $sql = "SELECT * FROM PRODUCTS WHERE PRO_ID = $company AND CAT_ID=$cat_name";
                $result = mysqli_query($this->conn,$sql);
                if(mysqli_num_rows($result) > 0){
                    header("Loction: ../views/shop-grid.php");
                    return $result;
                }
            }
            else if(!empty($_POST['brand']))
            {
                $company = $_POST['brand'];
                $sql = "SELECT * FROM PRODUCTS WHERE PRO_ID = $company";
                $result = mysqli_query($this->conn,$sql);
                if(mysqli_num_rows($result) > 0){
                    header("Loction: ../views/shop-grid.php");
                    return $result;
                }
            }
            else if(!empty($_POST['catagory'])) 
            {
                $cat_name = $_POST['catagory'];
                $sql = "SELECT * FROM PRODUCTS WHERE CAT_ID=$cat_name";
                $result = mysqli_query($this->conn,$sql);
                if(mysqli_num_rows($result) > 0){
                    header("Loction: ../views/shop-grid.php");
                    return $result;
                }
            }
            else
            {
                $all = "SELECT * FROM PRODUCTS";
                $result = mysqli_query($this->conn,$all);
                header("Loction: ../views/shop-grid.php");
                return $result;
            }
    
    }
    function fetch_cat(){
        $sql = "SELECT * FROM CATEGORY";
        $query = mysqli_query($this->conn,$sql);
        return $query;
    }
    function fetch_pro(){
        $sql = "SELECT * FROM PRODUCTS";
        $query1 = mysqli_query($this->conn,$sql);
        return $query1;
    }
}
$filt = new shop_conn;
//$pass = $filt->all_pro();
// $result = $filt->shop_filter();
$result1 = $filt->fetch_cat();
$result2 = $filt->fetch_pro();
$result = $filt->Selected();
$result3 = $filt->Selected();
//print_r($result2);
?>