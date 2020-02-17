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
        try{
            mysqli_query($this->conn, $query);
            echo "Records added successfully.";
            try{
                move_uploaded_file($_FILES['image']['tmp_name'], $target);
                echo "Image uploaded successfully";
            }catch(exception $ex){
                echo "Failed to upload image  $ex";
            }
        } catch(exception $ex){
            echo "ERROR: Could not able to execute $ex ";
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
        try{
            password_verify($password,$row['password']);
            echo " // You are a validated user. // ";
            echo "phone: ".$row['phone'];
        }catch(exception $ex){
            echo " // oh no  ... you are not valid// $ex";
        }
        session_destroy();
    }
    public function update($id){
        $query = "SELECT * FROM user WHERE id='$id' ";
        $results = mysqli_query($this->conn, $query);
        $row = mysqli_fetch_assoc($results);
        if ( isset( $_POST['update'] )) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $dob = $_POST['dob'];
            $passwordNotHashed = $_POST['password'];
            $password = password_hash($passwordNotHashed, PASSWORD_DEFAULT);
            $image = $_FILES['image']['name'];
            $target = "images/".basename($image);
            $query1 = " UPDATE user SET name = '$name', email = '$email', phone= '$phone' ,dob= '$dob' ,image = '$image', password= '$password' WHERE id= '$id' ";
            try{
                mysqli_query($this->conn, $query1);
                try{
                    move_uploaded_file($_FILES['image']['tmp_name'], $target);
                    echo "Image uploaded successfully";
                }catch(exception $ex){
                    echo "Failed to upload image";
                }
                header("Refresh:0");
            } catch(exception $ex){
                echo "ERROR: Could not able to execute $ex";
            } 
        }
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