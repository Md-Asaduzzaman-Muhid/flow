<?php 

$DB_HOST = '127.0.0.1';
$USER_NAME = 'asad';
$USER_PASSWORD = 'asad';
$DB_NAME = 'flow'; 
$db = mysqli_connect($DB_HOST, $USER_NAME, $USER_PASSWORD, $DB_NAME);




        //login 
        if (isset($_POST['sign-in'])):

            echo "submited";
            // grap form values
            session_start();
            $useremail = $_POST['email'];
            $password = trim($_POST['password']);
        // $link = mysqli_connect("127.0.0.1", "asad", "asad", "flow");
            $query = "SELECT * FROM user WHERE email='$useremail' ";
            $results = mysqli_query($db, $query);
            $row = mysqli_fetch_assoc($results);
            if(password_verify($password,$row['password'])){
                echo " // You are a validated user. // ";
                echo "phone: ".$row['phone'];
                $_SESSION['userphone']= $row['phone'];
                $_SESSION['username']= $row['name'];
                echo "phones: ".$_SESSION['userphone'];
                echo "path:".session_save_path();
                echo "ID:".session_id();
                echo "name:".session_name();
                print_r($_SESSION);
            }
            else{
                echo " // oh no  ... you are not valid// ";
            }
            //$_SESSION = array();
            header( "Location: ../index.php" );
            //session_destroy();
            
        endif;

//signup

        if ( isset( $_POST['signup'] )) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $dob = $_POST['dob'];
            $passwordNotHashed = $_POST['password'];
            $password = password_hash($passwordNotHashed, PASSWORD_DEFAULT);
            $image = $_FILES['image']['name'];
            $target = "images/".basename($image);
            $sql = "INSERT INTO user (name, email, phone ,dob ,image, password ) VALUES ('$name', '$email','$phone', '$dob', '$image', '$password' )";
            if(mysqli_query($db, $sql)){
                echo "Records added successfully.";
                if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                    echo "Image uploaded successfully";
                }else{
                    echo "Failed to upload image";
                }
            } else{
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
            }
            header( "Location: ../index.php" );
        }


?>







?>



