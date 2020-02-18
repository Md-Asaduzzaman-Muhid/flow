<?php 
        // if(!isset($_COOKIE["atl_user_data"])){ 
        //     setcookie("atl_user_data", "Atl User Data", time()+60 );
        //    // echo "Item is created " . $_COOKIE["atl_user_data"];  
        // } else{ 
        //     echo "Item is a  " . $_COOKIE["atl_user_data"]; 
        // } 
        
        // session_start();
        // echo "path: ".session_save_path();
        // echo "ID: ".session_id();
        // echo "name: ".session_name();
        // if($_SESSION):
        //     print_r($_SESSION);
        // endif;
        // session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once 'includes/head.php'; ?>
    </head>
    <body>
        <?php require_once 'includes/header.php'; ?>
        <div class="container py-5">
            <h1>Home Page</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam, ad.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae quo nemo illum ipsa temporibus aliquam veritatis beatae corporis perspiciatis exercitationem!</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui facere culpa repudiandae.</p>
            <div class="row">
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
        <?php require_once 'includes/footer.php'; ?>
        <script src="style/script.js"></script>
    </body>
</html>