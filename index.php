<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home of Forms World</title>
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
        <div class="container pt-5">
            <h1>Home Page</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam, ad.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae quo nemo illum ipsa temporibus aliquam veritatis beatae corporis perspiciatis exercitationem!</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui facere culpa repudiandae.</p>
        </div>
        <?php
        session_start();
        echo "path:".session_save_path();
        echo "ID:".session_id();
        echo "name:".session_name();
        if($_SESSION):
            print_r($_SESSION);
        endif;
        session_destroy();
        ?>

        <script src="style/script.js"></script>
    </body>
</html>