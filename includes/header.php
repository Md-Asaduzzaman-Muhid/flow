<?php 
    require_once 'common/config.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once 'head.php'; ?>
    </head>
    <body>
        <header class="header navbar-light bg-light">
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="<?php echo $home; ?>">Home</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo $home; ?>signup">Sign Up</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo $home; ?>login">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo $home; ?>users_list">All User</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>