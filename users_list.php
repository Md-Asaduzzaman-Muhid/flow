<?php 
    require_once 'common/user.php';
    $objUser = new user();
    $result =  $objUser->index();
    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $objUser->delete($id);
        header( "Location: users_list.php" );
        exit;
    }
    
    
   // print_r($result);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once 'includes/head.php'; ?>
    </head>
    <body>
        <?php require_once 'includes/header.php'; ?>
        <div class="container py-5">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Date of Birth</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = $result->fetch_assoc()):?>
                    <tr>
                        <th><?php echo $row["name"]; ?></th>
                        <th><?php echo $row["email"]; ?></th>
                        <th><?php echo $row["phone"]; ?></th>
                        <th><?php echo $row["dob"]; ?></th>
                        <th> <img src="images/<?php echo $row["image"]; ?>" alt="image users" class="img-fluid" style= "height:45px"> </th>
                        <th><a href="edit_user.php?id=<?php echo $row["id"]; ?>">Edit</a> <a href="users_list.php?delete=<?php echo $row["id"]; ?>" class="text-danger">Delete</a> </th>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
        <?php require_once 'includes/footer.php'; ?>
        <script src="style/script.js"></script>
    </body>
</html>