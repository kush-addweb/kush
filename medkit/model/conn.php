<?php
class connection{
    function connect(){
        $servername = "localhost";
        $username = "kush";
        $password = "kush";
        $database = "medkit";
        $conn = mysqli_connect($servername,$username,$password,$database);
        return $conn;
        // $sql = "CREATE DATABASE medkit";
        // $result = mysqli_query($conn,$sql);
        
        // $sql = "CREATE TABLE USER
        //     (ID INT(200) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        //     FIRSTNAME VARCHAR(30) NOT NULL,
        //     LASTNAME VARCHAR(30) NOT NULL,
        //     EMAIL VARCHAR(50) NOT NULL,
        //     PASSWORD VARCHAR(32) NOT NULL,
        //     -- Confirm Password VARCHAR(32),
        //     ADDRESS VARCHAR(100) NOT NULL,
        //     STATE VARCHAR(20) NOT NULL,
        //     GENDER VARCHAR(10) NOT NULL,
        //     DOB DATE NOT NULL,
        //     PHONE_NO INT(12) NOT NULL)";
        // $result = mysqli_query($conn,$sql);
        // if($result){
        //     echo "yes";
        // }
        // else{
        //     echo "no".mysqli_error($conn);
        // }

        // $sql = "CREATE TABLE CATEGORY (CAT_ID INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        // CAT_NAME TEXT(80) NOT NULL,
        // CAT_IMAGES LONGBLOB NOT NULL)";
        // $result = mysqli_query($conn,$sql);
        // return $result;
    }
}
?>