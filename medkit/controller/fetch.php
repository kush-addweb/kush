<?php
include("model/conn.php");
class reg{

    public $conn;
    function __construct()
    {
        $obj=new connection();
        $this->conn = $obj->connect();
    }
    function fetch(){
        $sql = "SELECT CAT_ID,CAT_NAME,CAT_IMG,CAT_BACK_IMG FROM CATEGORY";
        $result = mysqli_query($this->conn,$sql);
        return $result;
    }
    // function index_pro(){
    //     $sql = "SELECT * FROM PRODUCTS ORDER BY RAND() LIMIT 3";
    //     $result = mysqli_query($this->conn,$sql);
    //     if($result){
    //         while($row = $result->fetch_assoc()){
    //             echo $row['PRO_NAME']."<br>";
    //             echo $row['PRO_ID']."<br>";
    //             echo $row['PRO_COMPANY']."<br><br>";
    //         }
    //     }
    //     else{
    //         echo "no".mysqli_error($this->conn);
    //     }
    // }
}
$obj = new reg();
$resultnew = $obj->fetch();
// $resultnew1 = $obj->index_pro();
?>