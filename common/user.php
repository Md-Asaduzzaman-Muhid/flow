<?php
require_once 'dbconfig.php';
class user{
    private $conn;
    
    public function __construct(){
        $dbConfig = new dbConfig();
        $this->conn = $dbConfig->dbConnection();
    }
    public function index(){
        $query = "SELECT * FROM user ";

        return $result = $this->conn->query($query);
    }
    public function signup(){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $dob = $_POST['dob'];
        $passwordNotHashed = $_POST['password'];
        $password = password_hash($passwordNotHashed, PASSWORD_DEFAULT);
        $image = $_FILES['image']['name'];
        $target = "images/".basename($image);
        $query = " INSERT INTO user (name, email, phone ,dob ,image, password ) VALUES ('$name', '$email','$phone', '$dob', '$image', '$password' )";
        if(mysqli_query($this->conn, $query)){
            echo "Records added successfully.";
            if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                echo "Image uploaded successfully";
            }else{
                echo "Failed to upload image";
            }
        } else{
            echo "ERROR: Could not able to execute $query ";
        }
    }
    public function login(){
        echo "submited";
        session_start();
        $useremail = $_POST['email'];
        $password = trim($_POST['password']);
        $query = "SELECT * FROM user WHERE email='$useremail' ";
        $results = mysqli_query($this->conn, $query);
        $row = mysqli_fetch_assoc($results);
        if(password_verify($password,$row['password'])){
            echo " // You are a validated user. // ";
            echo "phone: ".$row['phone'];
        }
        else{
            echo " // oh no  ... you are not valid// ";
        }
    }
}


?>