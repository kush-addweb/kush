<?php   
include("../model/conn.php");

class reg{

    public $conn;
    function __construct()
    {
        $obj=new connection();
        $this->conn = $obj->connect();
    }
    function register()
    {
            $firstname = $_POST['fname'];
            $lastname = $_POST['lname'];
            $email = $_POST['email'];
            $password = $_POST['pass'];
            $con_password = $_POST['con_pass'];
            $address = $_POST['address'];
            $state = $_POST['state'];
            $genter = $_POST['gender'];
            $dob = $_POST['dob'];
            $phone = $_POST['ph_no'];

            // if ($password == $con_password){
            $sql = "SELECT * FROM USER WHERE EMAIL='$email'";
            $result = mysqli_query($this->conn,$sql);
            if ($result->num_rows>0) {
                  echo "user already exists!";
            }
            else
                {
                    $qy = "INSERT INTO USER (FIRSTNAME, LASTNAME, EMAIL, PASSWORD,ADDRESS,STATE,GENDER,DOB,PHONE_NO) VALUES 
                    ('$firstname', '$lastname', '$email', '$password', '$address', '$state', '$genter', '$dob', '$phone')";
                    $result = mysqli_query($this->conn, $qy);
                    if($result)
                    {
                        header("Location: ../views/login.php");
                    }
                    else{
                        echo "not inserted".$this->conn->connect_error;
                    }
                }
           
            // }
            // else{
            //     // $error = "password is not metched";
                
            //     echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            //     <strong>Holy guacamole!</strong>Passwords Do not match.
            //     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            //   </div>';
            //   include_once('../views/register.php');
               


            // }
            // header("location:.html");

            // $query = "SELECT * FROM user WHERE username ='$username'";

            // $r = $this->conn->query($query);

            // if ($r->num_rows > 0) {
            //     echo "user already exist";
            // }
            //  else {
            //     $qy = "INSERT INTO userinfo (username, email, password, rpassword) VALUES ('$username', '$email', '$password', '$rpassword')";
            //     mysqli_query($this->conn, $qy);
            //     header("location:login.php");
            // }
    }
    function log(){
        $email = $_POST['log_e_mail'];
        $pass = $_POST['log_password'];

        $sql = "SELECT * FROM USER WHERE EMAIL = '$email' AND PASSWORD = '$pass'";
        $result = mysqli_query($this->conn,$sql);
        if($result->num_rows>0)
        {
            session_start();
            $_SESSION['email'] = $email; 
            $_SESSION['pass'] = $pass;
            
            // echo "wellcome";
            /* Redirect browser */  
            header("Location: ../index.php");
        }
        else{
            // header("Location: ../views/login.php"); 
            echo '<script type="text/javascript">alert("e-mail or password is not metched");window.location.href = "../views/login.php";</script>';
        }  
    }   
}
?>
<?php
$obj = new reg();
if (isset($_POST["register"])){
    $obj->register();
}
else if(isset($_POST["login"])){
    $obj->log();
}
?>
</body>
</html>