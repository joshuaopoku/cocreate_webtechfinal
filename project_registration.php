<?php
    require 'connection.php';
    session_start();
    $email=mysqli_real_escape_string($conn,$_POST['uemail']);
   
   
    $user_authentication_query="select user_id,user_email from user_profile where user_email='$email' and user_pass='$password'";
    $user_authentication_result=mysqli_query($conn,$user_authentication_query) or die(mysqli_error($conn));
    $rows_fetched=mysqli_num_rows($user_authentication_result);
    if($rows_fetched==0){
  
        <script>
            window.alert("Wrong username or password");
        </script>
        <meta http-equiv="refresh" content="1;url=index.php" />
        
        //header('location: login');
        //echo "Wrong email or password.";
    }else{
        $row=mysqli_fetch_array($user_authentication_result);
        $_SESSION['uemail']=$email;
        $_SESSION['user_id']=$row['user_id']; 
        header('location: homepage.php');
    }

?>