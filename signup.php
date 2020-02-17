<?php
require_once 'common/user.php';
$objUser = new user();
if ( isset( $_POST['signup'] )) {
    $objUser->signup();
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once 'common/head.php'; ?>
    </head>
    <body>
        <?php require_once 'common/header.php'; ?>

        <h1 class="text-center py-5">Sign Up</h1>
        <div class="form-area pb-5">
            <div class="container">
                <form class="form-row" method="POST" action = "signup.php" enctype="multipart/form-data">

                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name= "name" aria-describedby="nameH" placeholder="Enter Name" value= "<?php if(isset($name)){echo $name;} ?>" required>
                            <small id="nameH" class="form-text text-muted">We'll never share your name with anyone else.</small>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name= "email" aria-describedby="emailH" placeholder="Enter email" required>
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
                            <input type="file" name="image" id="image" accept="image/x-png,image/gif,image/jpeg,image/png" required>
                            <small id="phoneH" class="form-text text-muted">We'll never share your image with anyone else.</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" type="password" name="password" id="password" placeholder="Enter Password" required>
                            <small id="passH" class="form-text text-muted">We'll never share your password with anyone else.</small>
                        </div>
                    </div>

                    <div class="col-md-12 text-center">
                        <button type="submit" name= "signup" class="btn btn-primary">Sign in</button>
                    </div>
                    
                
                </form>
            </div>
        </div>
        <?php require_once 'common/footer.php'; ?>
        <script src="style/script.js"></script>
    </body>
</html>