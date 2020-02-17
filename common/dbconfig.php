<?php 
class dbConfig{
    private $DB_HOST = '127.0.0.1';
    private $USER_NAME = 'asad';
    private $USER_PASSWORD = 'asad';
    private $DB_NAME = 'flow'; 
    public $conn;
    
    public function dbConnection(){
        $this->conn = null;
       // echo "connection";
        try{
            $this->conn = mysqli_connect($this->DB_HOST, $this->USER_NAME, $this->USER_PASSWORD, $this->DB_NAME);
           // echo "get in config";
        }  catch (exception $ex){
            echo "connection error".$ex;
        }
        return $this->conn;
    }
}

//         //login 
//         if (isset($_POST['sign-in'])):
//             echo "submited";
//             session_start();
//             $useremail = $_POST['email'];
//             $password = trim($_POST['password']);
//         // $link = mysqli_connect("127.0.0.1", "asad", "asad", "flow");
//             $query = "SELECT * FROM user WHERE email='$useremail' ";
//             $results = mysqli_query($db, $query);
//             $row = mysqli_fetch_assoc($results);
//             if(password_verify($password,$row['password'])){
//                 echo " // You are a validated user. // ";
//                 echo "phone: ".$row['phone'];
//                 $_SESSION['userphone']= $row['phone'];
//                 $_SESSION['username']= $row['name'];
//                 echo "phones: ".$_SESSION['userphone'];
//                 echo "path:".session_save_path();
//                 echo "ID:".session_id();
//                 echo "name:".session_name();
//                 print_r($_SESSION);
//             }
//             else{
//                 echo " // oh no  ... you are not valid// ";
//             }
//             //$_SESSION = array();
//             header( "Location: ../index.php" );
//             //session_destroy();
            
//         endif;

// //signup
//         if ( isset( $_POST['signup1'] )) {
//             $name = $_POST['name'];
//             $email = $_POST['email'];
//             $phone = $_POST['phone'];
//             $dob = $_POST['dob'];
//             $passwordNotHashed = $_POST['password'];
//             $password = password_hash($passwordNotHashed, PASSWORD_DEFAULT);
//             $image = $_FILES['image']['name'];

//             $target = "images/".basename($image);
//             $sql = "INSERT INTO user (name, email, phone ,dob ,image, password ) VALUES ('$name', '$email','$phone', '$dob', '$image', '$password' )";
//             if(mysqli_query($db, $sql)){
//                 echo "Records added successfully.";
//                 if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
//                     echo "Image uploaded successfully";
//                 }else{
//                     echo "Failed to upload image";
//                 }
//             } else{
//                 echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
//             }
//             header( "Location: ../index.php" );
//         }


?>


