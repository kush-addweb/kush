<?php
include("conn.php");
$obj = new connection;
$conn = $obj->connect();
$cat_id = $_POST['category'];
?>