<?php
    require 'connection.php';
    session_start();
    $fullname= mysqli_real_escape_string($conn,$_POST['fullname']);
    $username= mysqli_real_escape_string($conn,$_POST['uname']);
    $email=mysqli_real_escape_string($conn,$_POST['uemail']);
    $regex_email="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,3})$/";
    echo $_POST['fullname'];
    if(!preg_match($regex_email,$email)){
        echo "Incorrect email. Redirecting you back to registration page...";
        ?>
        <meta http-equiv="refresh" content="2;url=signup.php" />
        <?php
    }
    $password=md5(md5(mysqli_real_escape_string($conn,$_POST['upass'])));
    if(strlen($password)<6){
        echo "Password should have at least 6 characters. Redirecting you back to registration page...";
        ?>
        <meta http-equiv="refresh" content="2;url=signup.php" />
        <?php
    }
    $birthdate=$_POST['udate'];
    $gender=$_POST['inlineRadioOptions'];
    $duplicate_user_query="select user_id from user_profile where user_email='$email'";
    $duplicate_user_result=mysqli_query($conn,$duplicate_user_query) or die(mysqli_error($conn));
    $rows_fetched=mysqli_num_rows($duplicate_user_result);
    if($rows_fetched>0){
        //duplicate registration
        //header('location: signup.php');
        ?>
        <script>
            window.alert("Email already exists in our database!");
        </script>
        <meta http-equiv="refresh" content="1;url=signup.php" />
        <?php
    }else{
        $user_registration_query="insert into User_profile(fullname, username, user_email, user_dob, user_pass, gender) values ('$fullname','$username','$email','$birthdate','$password','$gender')";
        //die($user_registration_query);
        $user_registration_result=mysqli_query($conn,$user_registration_query) or die(mysqli_error($conn));
        echo "User successfully registered";
        $_SESSION['uemail']=$email;
        //The mysqli_insert_id() function returns the id (generated with AUTO_INCREMENT) used in the last query.
        $_SESSION['user_id']=mysqli_insert_id($conn); 
        //header('location: homepage.php');  //for redirecting
        ?>
        <meta http-equiv="refresh" content="3;url=homepage.php" />
        <?php
    }
    
?>