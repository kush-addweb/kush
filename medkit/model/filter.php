<?php
include("conn.php");
$obj = new connection;
$conn = $obj->connect();
$cat_id = $_POST['category'];

$qry = "SELECT * FROM PRODUCTS where CAT_ID = '$cat_id'";
// echo "ID:".$cat_id;
$result = mysqli_query($conn,$qry);

// if($result->num_rows>0)
// {
echo '<option value="">Select All Brand</option>';
    while($row = $result->fetch_assoc())
    {
        echo '<option value='.$row['PRO_ID'].'>'.$row['PRO_COMPANY'].'</option>';
        // echo $row['PRO_NAME'];
    }
// }
// else{
//     echo "not found.".$conn->error;
// }
?>