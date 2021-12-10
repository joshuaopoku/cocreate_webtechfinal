<?php
    require 'connection.php';
    session_start();
    if(isset($_SESSION['uemail'])){
        header('location: homepage.php');
    }
?>


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- My Links and CSS -->
    <link rel="shortcut icon" href="img/Co-create favi.png" sizes="96x96" type="image/png">
    <link rel="stylesheet" type="text/css"  href="signup.css">
    <title>Sign Up to Co-create</title>
  </head>
  <body>
    <section class="Form my-4 mx-5"><!-- Form Section Start -->
        <div class="container"><!-- Log in Form Container -->
            <div class="row no-gutters">
                <div class="col-lg-5">
                    <img src="img/collaborate.jpg" class="img-fluid collab-img" alt="A Collaboration image">
                </div>
                <div class="col-lg-7 px-5 pt-5">
                    <h1 class="font-weight-bold py-3 logo-font">Co-create</h1>
                    <h4>Create your account profile</h4>
                    <form action="user_registration.php" name="userForm" method="POST">
                        <div class="form-row"><!-- Full Name Row -->
                            <div class="col-lg-7">
                                <input type="text" placeholder="Full Name" class="form-control my-3 p-4" id="fullname" name="fullname" required="true">
                            </div>
                        </div>
                        <div class="form-row"><!-- Username Row -->
                            <div class="col-lg-7">
                                <input type="text" placeholder="Username" class="form-control my-3 p-4" id="uname" name="uname">
                            </div>
                        </div>
                        <div class="form-row"><!-- Email Address Row -->
                            <div class="col-lg-7">
                                <input type="email" placeholder="Email Address" class="form-control my-3 p-4" id="uemail" name="uemail" required="true">
                            </div>
                        </div>
                        <div class="form-row"><!-- Date of Birth Row -->
                            <div class="col-lg-7">
                                <p>Date of Birth</p>
                                <input type="date" placeholder="Date of Birth" class="form-control my-3 p-4" id="udate" name="udate" required="true">
                            </div>
                        </div>
                        <div class="form-row"><!-- Password Row -->
                            <div class="col-lg-7">
                                <input type="password" placeholder="Password (min. 6 characters)" class="form-control my-3 p-4" id="upass" name="upass" required="true">
                            </div>
                        </div>
                        <div class="form-row"><!-- Gender Row -->
                            <div class="col-lg-7">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="MALE">
                                    <label class="form-check-label" for="inlineRadio1">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="FEMALE">
                                    <label class="form-check-label" for="inlineRadio2">Female</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row"><!-- Sign-up Button Row -->
                            <div class="col-lg-7">
                                <button type="submit" class="btn1 mt-3 mb-5" id="sign-up">Sign Up</button>
                            </div>
                        </div>
                        <p>By creating an account, you agree to our <b style="color: hotpink;">Terms and Conditions.</b></p>
                        <p id="par-log">Already have an account? <a href="index.php" class="log-link">Sign In</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>




    <script src="Bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="Bootstrap/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="Bootstrap/js/bootstrap.min.js"></script>
    <!-- <script type="text/javascript" src="signup.js"></script> -->
  </body>
</html>