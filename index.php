<?php require_once 'includes/header.php'; ?>
        <div id="carouselExampleIndicators" class="carousel slide position-relative" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="<?php echo $home; ?>images/slider.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo $home; ?>images/slider.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo $home; ?>images/slider.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <img src="<?php echo $home; ?>images/plane.png" alt="object" class="img-fluid position-absolute" id= "bird">
        </div>
        <div class="container py-5">
            <h1>Home Page</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam, ad.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae quo nemo illum ipsa temporibus aliquam veritatis beatae corporis perspiciatis exercitationem!</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui facere culpa repudiandae.</p>
            <div class="row">
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                       
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
        <?php require_once "includes/footer.php"; ?>
        <script src="style/script.js"></script>
    </body>
</html>