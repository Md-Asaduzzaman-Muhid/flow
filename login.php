<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Page</title>
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
                            <?php if(!empty($_SESSION['username'])): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="users.php"><?php echo $_SESSION['username']; ?> </a>
                            </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>

        <div class="container pt-5">
            <form class="form-row" action="common/dbconfig.php" method="POST">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="text" class="form-control" id="email" name= "email" aria-describedby="emailH" placeholder="Enter Email" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="password">Your Password</label>
                        <input type="password" class="form-control" id="password" name= "password" aria-describedby="passwordH" placeholder="Enter Password" required>
                    </div>
                </div>
                <p>Don't have an account? <a href="signup.php">Sign up now</a>.</p>
                <div class="col-md-12 text-center">
                    <button type="submit" name= "sign-in" class="btn btn-primary">Sign in</button>
                </div>
            </form>
        </div>
        <script src="style/script.js"></script>
    </body>
</html>