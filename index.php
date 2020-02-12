<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Raw</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href= "style/style.css">
    </head>
    <body>
        <h1 class="text-center py-5">Sign Up</h1>
        <div class="form-area">
            <div class="container">
                <form class="form-row" method="POST">

                    <div class="col-md-6">
                        <div class="form-group">
                            <!-- <label for="name">Your Name</label> -->
                            <input type="text" class="form-control" id="name" name= "name" aria-describedby="nameH" placeholder="Enter Name">
                            <small id="nameH" class="form-text text-muted">We'll never share your name with anyone else.</small>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <!-- <label for="email">Email address</label> -->
                            <input type="email" class="form-control" id="email" name= "email" aria-describedby="emailH" placeholder="Enter email">
                            <small id="emailH" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <!-- <label for="subject">Subject</label> -->
                            <input type="text" class="form-control" id="subject" name= "subject" aria-describedby="subjectH" placeholder="Enter Subject">
                            <small id="subjectH" class="form-text text-muted">We'll never share your contact with anyone else.</small>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <!-- <label for="message">Write Your Message</label> -->
                            <textarea class="form-control" id="message" name= "message" rows="5" placeholder="Enter Message"></textarea>
                            <small id="messageH" class="form-text text-muted">We'll never share your message with anyone else.</small>
                        </div>
                    </div>
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>
                    
                
                </form>
            </div>
        </div>



















        <?php
            $link = mysqli_connect("127.0.0.1", "asad", "asad", "flow");

            if (!$link) {
                echo "Error: Unable to connect to MySQL." . PHP_EOL;
                echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
                echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
                exit;
            }

            echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
            echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

            mysqli_close($link);
        ?>


        <script src="style/script.js"></script>
    </body>
</html>