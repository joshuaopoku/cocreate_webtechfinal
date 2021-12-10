<?php
    require 'connection.php';
    session_start();
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- My Links and CSS -->
    <link rel="shortcut icon" href="img/Co-create favi.png" sizes="96x96" type="image/png">
    <link rel="stylesheet" type="text/css" href="signin.css">
    <title>Sign In to Co-create</title>
  </head>
  <body>
    <section class="Form my-4 mx-5"><!-- Form Section Start -->
        <div class="container"><!-- Log in Form Container -->
            <div class="row no-gutters">
                <div class="col-lg-5 image-column">
                    <img src="img/collaborate.jpg" class="img-fluid collab-img" alt="A Collaboration image">
                </div>
                <div class="col-lg-7 px-5 pt-5">
                    <h1 class="font-weight-bold py-3 logo-font">Co-create</h1>
                    <h4>Sign into your account</h4>
                    <form action="login_submit.php" method="POST">
                        <div class="form-row"><!-- Email Address Row -->
                            <div class="col-lg-7">
                                <input type="email" placeholder="johndoe@gmail.com" class="form-control my-3 p-4" id="uemail" name="uemail">
                            </div>
                        </div>
                        <div class="form-row"><!-- Password Row -->
                            <div class="col-lg-7">
                                <input type="password" placeholder="********" class="form-control my-3 p-4" id="upass" name="upass">
                            </div>
                        </div>
                        <div class="form-row"><!-- Sign-in Button Row -->
                            <div class="col-lg-7">
                                <button type="submit" class="btn1 mt-3 mb-5" id="sign-in">Sign In</button>
                            </div>
                        </div>
                        <a href="forgot.php" class="log-link">Forgot password?</a>
                        <p>Don't have an account? <a href="signup.php" class="log-link">Register here!</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>




    <script src="Bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="Bootstrap/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="Bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="index.js"></script>
  </body>
</html>