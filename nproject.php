<?php
    require 'connection.php';
    session_start();

    if( isset($_POST["submit"])){
      $name=mysqli_real_escape_string($conn,$_POST['pname']);
      $type=mysqli_real_escape_string($conn,$_POST['inlineFormSelectPref']);
      $desc=mysqli_real_escape_string($conn,$_POST['pdesc']);
      $query="insert into Project(project_name,project_type,project_des) values('$name','$type','$desc')";
      $user_authentication_result=mysqli_query($conn,$query) or die(mysqli_error($conn));
      // $rows_fetched=mysqli_num_rows($user_authentication_result);
      
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
    <link rel="stylesheet" type="text/css" href="homepage.css">
    <link rel="stylesheet" type="text/css" href="nproject.css">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <title>My Projects &#8211; Co-create</title>

  </head>

  <body>

    <!-- Top Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid sec-wrapper">
        <a class="navbar-brand logo-font" href="homepage.php">Co-Create</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mainnav-right" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="homepage.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="academic.php">Academic</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="social.php">Social</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="business.php">Business<sup id="sup-new">NEW</sup></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Account info
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="dashboard.php" target="_blank">My Dashboard</a></li>
                <li><a class="dropdown-item" href="nproject.php" target="_blank">Create Project</a></li>
                <li><a class="dropdown-item" href="index.php" id="log-out" value="logout">Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav><!-- Top Navigation end -->
    
    <div class="body-format">

      <main class="form-signin cp-main">
        <form name="Createnewproject" action="nproject.php" method="POST">
          <img class="mb-4 favi-logo" src="img/Co-create favi 2.svg" alt="" width="300" height="300">
          <h1 class="h3 mb-3 fw-normal head-text">Create New Project</h1>
      
          <div class="form-floating np-form">
            <input type="text" class="form-control" id="floatingInput" placeholder="New Project Name" name="pname">
            <label for="floatingInput">New Project Name (<small style="color: rgb(253, 53, 53); font-weight: 500;">required!</small>)</label>
          </div>
          <div class="form-floating np-form">
            <label class="visually-hidden" for="inlineFormSelectPref">Preference</label>
            <p>Project Type (<small style="color: rgb(253, 53, 53); font-weight: 500;">required!</small>)</p>
            <select class="form-select" id="inlineFormSelectPref" name="inlineFormSelectPref">
              <option disabled>Project Type ...</option>
              <option value="ACADEMIC" id="elist-pref">Academic</option>
              <option value="BUSINESS" class="elist-pref">Business</option>
              <option value="SOCIAL" class="elist-pref">Social</option>
            </select>
          </div>
          <div class="form-floating np-form">
            <p>New Project Description (<small style="color: rgb(253, 53, 53); font-weight: 500;">required!</small>)</p>
            <label for="exampleFormControlTextarea1 " class="form-label np-desc"></label>
            <textarea class="form-control desc-area" id="exampleFormControlTextarea1" rows="3" placeholder="New Project Description" name="pdesc"></textarea>
          </div>
          <div class="form-floating np-form">
            <div class="mb-3">
              <label for="formFile" class="form-label">Upload Project Logo / Cover Image</label>
              <input class="form-control" type="file" id="formFile" name="pimg">
            </div>
          </div>
      
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="yes" name="terms-agree" id="terms-agree"> I agree to Co-create's <b>Terms & Conditions</b>
            </label>
          </div>
          <button class="w-100 btn btn-lg btn-primary cp-btn" type="submit" id="cnp-btn" href="#" name="submit">Create My New Project</button>
          <p class="mt-5 mb-3 text-muted">&copy; Co-create, 2021</p>
        </form>
      </main>
    </div>  
   



    <script src="Bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="Bootstrap/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="Bootstrap/js/bootstrap.min.js"></script>
    <!-- <script type="text/javascript" src="homepage.js"></script>
    <script type="text/javascript" src="nproject.js"></script> -->
  
  </body>
</html>



