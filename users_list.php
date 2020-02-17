<?php 
    require_once 'common/user.php';
    $objUser = new user();
    $result =  $objUser->index();
    $row1 = $result->fetch_assoc();
    print_r($row1);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once 'common/head.php'; ?>
    </head>
    <body>
        <?php require_once 'common/header.php'; ?>
        <div class="container pb-5">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Date of Birth</th>
                    <th scope="col">Image</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <th><?php echo $row["name"]; ?></th>
                        <th><?php echo $row["email"]; ?></th>
                        <th><?php echo $row["phone"]; ?></th>
                        <th><?php echo $row["dob"]; ?></th>
                        <th> <img src="images/<?php echo $row["image"]; ?>" alt="image users" class="img-fluid" style= "height:45px"> </th>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
        <?php require_once 'common/footer.php'; ?>
        <script src="style/script.js"></script>
    </body>
</html>