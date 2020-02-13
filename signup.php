<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Raw</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href= "style/style.css">
    </head>
    <body>
        <header class="header navbar-light bg-light">
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="index.php">Home</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item ">
                                <a class="nav-link" href="signup.php">Sign Up</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="users.php">User List</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>



        <h1 class="text-center py-5">Sign Up</h1>
        <div class="form-area">
            <div class="container">
                <form class="form-row" method="POST" action="signup.php" enctype="multipart/form-data">

                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name= "name" aria-describedby="nameH" placeholder="Enter Name" required>
                            <small id="nameH" class="form-text text-muted">We'll never share your name with anyone else.</small>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name= "email" aria-describedby="emailH" placeholder="Enter email">
                            <small id="emailH" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="phone" name= "phone" aria-describedby="phoneH" placeholder="Enter Phone">
                            <small id="phoneH" class="form-text text-muted">We'll never share your contact with anyone else.</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" type="datetime-local" name="dob" id="dob" >
                            <small id="dobH" class="form-text text-muted">We'll never share your dob with anyone else.</small>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="file" name="image" id="image" accept="image/x-png,image/gif,image/jpeg,image/png">
                            <small id="phoneH" class="form-text text-muted">We'll never share your image with anyone else.</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" type="password" name="password" id="password" placeholder="Enter Password" >
                            <small id="passH" class="form-text text-muted">We'll never share your password with anyone else.</small>
                        </div>
                    </div>

                    <div class="col-md-12 text-center">
                        <button type="submit" name= "submit" class="btn btn-primary">Sign in</button>
                    </div>
                    
                
                </form>
            </div>
        </div>
        

        <?php
             

            $link = mysqli_connect("127.0.0.1", "asad", "asad", "flow");
            if ( isset( $_POST['submit'] ) ) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $dob = $_POST['dob'];
                $passwordNotHashed = $_POST['password'];
                $password = password_hash($passwordNotHashed, PASSWORD_DEFAULT);
                $image = $_FILES['image']['name'];
                $target = "images/".basename($image);
                  
                
                $sql = "INSERT INTO user (name, email, phone ,dob ,image, password, updated_at ) VALUES ('$name', '$email','$phone', '$dob', '$image', '$password', 'NOW()' )";
                if(mysqli_query($link, $sql)){
                    echo "Records added successfully.";
                    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                        echo "Image uploaded successfully";
                    }else{
                        echo "Failed to upload image";
                    }
                } else{
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                }
            }
            
        ?>


        <script src="style/script.js"></script>
    </body>
</html>