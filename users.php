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
                                <a class="nav-link" href="users.php">User List</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>









        <?php
            $link = mysqli_connect("127.0.0.1", "asad", "asad", "flow");
            $sql = "SELECT * FROM user ";
            if ($result = $mysqli->query($sql)) {
                while ($row = $result->fetch_assoc()) {
                    $field1name = $row["name"];
                    $field2name = $row["email"];
                    $field3name = $row["phone"];
                    $field4name = $row["dob"];
                    $field5name = $row["image"]; 
             
                    echo '<tr> 
                              <td>'.$field1name.'</td> 
                              <td>'.$field2name.'</td> 
                              <td>'.$field3name.'</td> 
                              <td>'.$field4name.'</td> 
                              <td>'.$field5name.'</td> 
                          </tr>';
                }
                $result->free();
            }


        ?>
        <script src="style/script.js"></script>
    </body>
</html>