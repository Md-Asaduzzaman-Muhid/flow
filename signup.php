<?php
    require_once 'common/user.php';
    $objUser = new user();
    $id = 0;
    if(isset($_GET['id'])){
        $row = $objUser->user($_GET['id']);
        $id = $_GET['id'];
    }
    //echo $id;
    if ( isset( $_POST['signup'] )) {
        $objUser->signup($_POST['id']);
    }  
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once 'includes/head.php'; ?>
    </head>
    <body>
        <?php require_once 'includes/header.php'; ?>
        <h1 class="text-center py-5">Sign Up</h1>
        <div class="form-area py-5">
            <div class="container">
                <?php if(isset($error)): ?> <p><?php echo $error; ?></p><?php endif; ?>
                <form class="form-row" method="POST" action = "signup.php" enctype="multipart/form-data">
                    <input type="hidden" name = 'id' value = "<?php if(isset($_GET['id'])){echo $_GET['id'];} ?>" >
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name= "name" aria-describedby="nameH" placeholder="Enter Name" value= "<?php if(isset($row['name'])){echo $row['name'];} ?>" required>
                            <small id="nameH" class="form-text text-muted">We'll never share your name with anyone else.</small>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name= "email" aria-describedby="emailH" placeholder="Enter email" value= "<?php if(isset($row['email'])){echo $row['email'];} ?>" required>
                            <small id="emailH" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="phone" name= "phone" aria-describedby="phoneH" placeholder="Enter Phone" value= "<?php if(isset($row['phone'])){echo $row['phone'];} ?>">
                            <small id="phoneH" class="form-text text-muted">We'll never share your contact with anyone else.</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" type="date" name="dob" id="dob" value= "<?php if(isset($row['dob'])){echo $row['dob'];} ?>">
                            <small id="dobH" class="form-text text-muted">We'll never share your dob with anyone else.</small>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="file" name="image" id="image" accept="image/x-png,image/gif,image/jpeg,image/png" value= "<?php if(!empty($_FILES['image']['tmp_name'])){echo $_FILES['image']['tmp_name'];} ?>" >
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
                        <button type="submit" name= "signup" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
        <?php require_once 'includes/footer.php'; ?>
        <script src="style/script.js"></script>
    </body>
</html>