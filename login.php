<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
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
                            <li class="nav-item">
                                <a class="nav-link" href="signup.php">Sign Up</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="login.php">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="users.php">User List</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>

        <div class="container pt-5">
            <form class="form-row" action="login.php" method="POST">
                <div class="col-md-6">
                    <div class="form-group">
                        <!-- <label for="name">Your Name</label> -->
                        <input type="text" class="form-control" id="name" name= "name" aria-describedby="nameH" placeholder="Enter Name" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <!-- <label for="email">Email address</label> -->
                        <input type="password" class="form-control" id="password" name= "password" aria-describedby="passwordH" placeholder="Enter Password">
                    </div>
                </div>
                <p>Don't have an account? <a href="signup.php">Sign up now</a>.</p>
                <div class="col-md-12 text-center">
                    <button type="submit" name= "submit" class="btn btn-primary">Sign in</button>
                </div>
            </form>
        </div>







        <?php 
            
            if (isset($_POST['submit'])):

                echo "submited";
                // grap form values
                $username = $_POST['name'];
                $password = trim($_POST['password']);
            
                
            
                // attempt login if no errors on form
             
                //$password = md5($password);
                $link = mysqli_connect("127.0.0.1", "asad", "asad", "flow");
                $query = "SELECT * FROM user WHERE name='$username' ";
                $results = mysqli_query($link, $query);
                $row = mysqli_fetch_assoc($results);
                if(password_verify($password,$row['password'])){
                    echo " // You are a validated user. // ";
                }
                else{
                    echo " // no // ";
                }
                    
                // if (mysqli_num_rows($results) > 0):
                //     // check if user is admin or user
                //     echo mysqli_num_rows($results);
                //     $logged_in_user = mysqli_fetch_assoc($results);
                //     echo "success";
                //     // if ($logged_in_user['user_type'] == 'admin') {
        
                //     //     $_SESSION['user'] = $logged_in_user;
                //     //     $_SESSION['success']  = "You are now logged in";
                //     //     echo "success";	  
                //     // }else{
                //     //     $_SESSION['user'] = $logged_in_user;
                //     //     $_SESSION['success'  = "You are now logged in";
        
                //     //     echo "not success";
                //     // }
                
                // else:
                //     echo ("Wrong username/password combination");
                // endif;
            endif;
        ?>

        <script src="style/script.js"></script>
    </body>
</html>