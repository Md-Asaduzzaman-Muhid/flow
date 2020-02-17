<?php
require_once 'common/user.php';
$objUser = new user();
//print_r($objUser);
if ( isset( $_POST['sign-in'] )) {
    $objUser->login();
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once 'common/head.php'; ?>
    </head>
    <body>
        <?php require_once 'common/header.php'; ?>
        <div class="container py-5">
            <form class="form-row" action ="login.php" method="POST">
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
        <?php require_once 'common/footer.php'; ?>
        <script src="style/script.js"></script>
    </body>
</html>