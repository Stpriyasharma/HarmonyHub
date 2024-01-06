<?php
session_start();
include('db_connect.php');
$msg = false;
if (isset($_POST['User_name'])) {
    $user_name = $_POST['User_name'];
   $user_password = $_POST['User_password'];

   $query = "select * from user where user ='".$user_name."'AND password = '".$user_password."'limit 1";
   $result =  mysqli_query($con,$query);

   if(mysqli_num_rows($result) ==1){
    header('Location: welcome.php');
   }else{
    $msg = "Incorrect Password";
   }
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="style.css">
        <title>Music Player Login</title>
    </head>
<body>
    <header>
        <div class="left_bx1">
            <div class="content">
                <form method="post">
                    <h3>Login</h3>
                    <div class="card">
                        <label for="name">Name</label>
                        <input type="text" name="User_name" placeholder="Enter Your User_name" required>
                    </div>
                    <div class="card">
                        <label for="password">Password</label>
                        <input type="password" name="User_password" placeholder="Enter Your password" required>
                    </div>
                    <input type="submit" value="Login" class="submit">
                    <div class="check">
                        <input type="checkbox" name="" id=""><span>Don't forget me</span>
                    </div>
                    <p>Don't have a account yet? <a href="signup.php">Sign Up</a></p>
                    
                </form>
            </div>
        </div>
        <div class="right_bx1">
            <img src="ss.jpeg" alt="">
            <!-- <h3>Incorrect password</h3> -->
            <?php
              echo('<h3>'.$msg.'</h3>');
            ?>
        </div>
    </header>
</body>
</html>
