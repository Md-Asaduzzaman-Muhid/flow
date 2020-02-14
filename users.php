<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Users</title>
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
                                <a class="nav-link" href="login.php">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="users.php">User List</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <?php
            $link = mysqli_connect("127.0.0.1", "asad", "asad", "flow");
            $sql = "SELECT * FROM user ";
        ?>
        <div class="container">
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
                    <?php if ($result = $link->query($sql)): while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <th><?php echo $row["name"]; ?></th>
                        <th><?php echo $row["email"]; ?></th>
                        <th><?php echo $row["phone"]; ?></th>
                        <th><?php echo $row["dob"]; ?></th>
                        <th> <img src="images/<?php echo $row["image"]; ?>" alt="image users" class="img-fluid" style= "height:45px"> </th>
                    </tr>
                    <?php endwhile; endif; ?>
                </tbody>
            </table>
        </div>
        



        



        
        <script src="style/script.js"></script>
    </body>
</html>