<?php
    require 'connection.php';
    session_start();
    $email=mysqli_real_escape_string($conn,$_POST['uemail']);
    $regex_email="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,3})$/";
    if(!preg_match($regex_email,$email)){
        echo "Incorrect email. Redirecting you back to login page...";
        ?>
        <meta http-equiv="refresh" content="2;url=index.php" />
        <?php
    }
    $password=md5(md5(mysqli_real_escape_string($conn,$_POST['upass'])));
    if(strlen($password)<6){
        echo "Password should have at least 6 characters. Redirecting you back to login page...";
        ?>
        <meta http-equiv="refresh" content="2;url=index.php" />
        <?php
    }
    $user_authentication_query="select user_id,user_email from user_profile where user_email='$email' and user_pass='$password'";
    $user_authentication_result=mysqli_query($conn,$user_authentication_query) or die(mysqli_error($conn));
    $rows_fetched=mysqli_num_rows($user_authentication_result);
    if($rows_fetched==0){
        //no user
        //redirecting to same login page
        ?>
        <script>
            window.alert("Wrong username or password");
        </script>
        <meta http-equiv="refresh" content="1;url=index.php" />
        <?php
        //header('location: login');
        //echo "Wrong email or password.";
    }else{
        $row=mysqli_fetch_array($user_authentication_result);
        $_SESSION['uemail']=$email;
        $_SESSION['user_id']=$row['user_id']; 
        header('location: homepage.php');
    }
?>