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


    public function signup($id){
        $name= $email = $phone= $dob = $password = $image = '';
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $dob = $_POST['dob'];
        $passwordNotHashed = $_POST['password'];
        $password = password_hash($passwordNotHashed, PASSWORD_DEFAULT);
        $image = $_FILES['image']['name'];
        $target = "images/".basename($image);
        $error ='';
        if(isset( $_POST['signup'] ) && (empty($id))):
            $queryInsert = " INSERT INTO user (name, email, phone ,dob ,image, password ) VALUES ('$name', '$email','$phone', '$dob', '$image', '$password' )";
            try{
                mysqli_query($this->conn, $queryInsert);
                echo "Records added successfully.";
                move_uploaded_file($_FILES['image']['tmp_name'], $target);
                echo "Image uploaded successfully";
            } catch(exception $ex){
                echo "ERROR: Could not able to execute $ex ";
            }
        elseif(isset( $_POST['signup'] ) && !(empty($id))):
            $query = "SELECT * FROM user WHERE id ='$id' ";
            $results = mysqli_query($this->conn, $query);
            $row = mysqli_fetch_assoc($results);
            $queryUpdate = " UPDATE user SET name = '$name', email = '$email', phone= '$phone' ,dob= '$dob' ,image = '$image', password= '$password' WHERE id= '$id' ";
            try{
                mysqli_query($this->conn, $queryUpdate);
                move_uploaded_file($_FILES['image']['tmp_name'], $target);
                echo "Image uploaded successfully";
            } catch(exception $ex){
                echo "ERROR: Could not able to execute $ex";
            }
            return $row;
        endif; 
    }


    public function login(){
        echo "submited";
        session_start();
        $useremail = $_POST['email'];
        $password = trim($_POST['password']);
        $query = "SELECT * FROM user WHERE email='$useremail' ";
        $results = mysqli_query($this->conn, $query);
        $row = mysqli_fetch_assoc($results);
        try{
            password_verify($password,$row['password']);
            echo " // You are a validated user. // ";
            echo "phone: ".$row['phone'];
        }catch(exception $ex){
            echo " // oh no  ... you are not valid// $ex";
        }
       // session_destroy();
    }


    public function user($id){
        $query = "SELECT * FROM user WHERE id='$id' ";
        $results = mysqli_query($this->conn, $query);
        $row = mysqli_fetch_assoc($results);
        return $row;
    }


    public function delete($id){
        $query = "DELETE FROM user WHERE id='$id' ";
        try{
            mysqli_query($this->conn, $query);
            echo "success";
            
        }catch (exception $ex){
            echo "connection error".$ex;
        }
        
    }
}


?>