<?php
    require_once 'common/user.php';
    $objUser = new user();
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $row = $objUser->update($id);
       // print_r($row);
        if ( isset( $_POST['update'] )) {
            $objUser->update($id);
        }
     }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once 'includes/head.php'; ?>
    </head>
    <body>
        <?php require_once 'includes/header.php'; ?>
        <div class="container py-5">
            <form class="form-row" method="POST" enctype="multipart/form-data">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name= "name" aria-describedby="nameH" placeholder="Enter Name" value= "<?php if(isset($row['name'])){echo $row['name'];}else{$row['name'] = '';} ?>" required>
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
                        <input type="text" class="form-control" id="phone" name= "phone" aria-describedby="phoneH" placeholder="Enter Phone" value= "<?php if(isset($row['phone'])){echo $row['phone'];} ?>" >
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
                        <input type="file" name="image" id="image" accept="image/x-png,image/gif,image/jpeg,image/png" required>
                        <small id="phoneH" class="form-text text-muted">We'll never share your image with anyone else.</small>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" id="password" placeholder="Enter New Password" required>
                        <small id="passH" class="form-text text-muted">We'll never share your password with anyone else.</small>
                    </div>
                </div>

                <div class="col-md-12 text-center">
                    <button type="submit" name= "update" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
        <?php require_once 'includes/footer.php'; ?>
        <script src="style/script.js"></script>
    </body>
</html>