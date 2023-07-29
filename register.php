<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = $_POST['name'];
   $email = $_POST['email'];
   $pass = $_POST['password'];
   $cpass = $_POST['cpassword'];

   $select = " SELECT * FROM login WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO login(name,email, password) VALUES('$name','$email','$pass')";
         mysqli_query($conn, $insert);
         header('location:login.php');
      }
   }

};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="images/est.png">
    <link rel="stylesheet" href="anm.css" class="css">
    <title>SIGN UP</title>
</head>
<body>
<form action="" method="post">
    <div class="box-r">
        
        <div class="form">
            <h1>SIGN UP</h1>
            <?php
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                };
            };
            ?>
            <div class="inputBox">
                <input type="text" name="name" required="required">
                <span>ENTER YOUR NAME</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="email" name="email" required="required">
                <span>ENTER YOUR EMAIL</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" name="password" required="required">
                <span>ENTER YOUR PASSWORD</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" name="cpassword" required="required">
                <span>CONFIRM YOUR PASSWORD</span>
                <i></i>
            </div>
            <input type="submit" name="submit" value="REGISTER" class="form-btn">
            <div class="links-r">
                <p>Already have an account? <a href="login.php">LOGIN</a></p>
            </div>
        </div>
        
    </div>
    </form>    
</body>
</html>