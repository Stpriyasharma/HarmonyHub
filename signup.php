<?php
session_start();

include('db_connect.php');
$msg = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
   $user_name = $_POST['User_name'];
   $user_email =$_POST['User_email'];
   $user_password = $_POST['User_password'];
   $user_re_password = $_POST['User_re-password'];

   if(!empty($user_name) && !empty($user_email) && !empty($user_password) && !is_numeric($user_name)){
   if($user_password === $user_re_password){
    $query ="insert into user(user,email,password) VALUES ('$user_name',' $user_email','$user_password')";
    mysqli_query($con,$query);
    header("Location:index.php");
   }else{
    $msg = "Password Not Match";
   }
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
        <title>Music Player signup</title>
    </head>
<body>
    <header>
        <div class="left_bx1">
            <div class="content">
                <form method="post">
                    <h3>signup</h3>
                    <div class="card">
                        <label for="name">Name</label>
                        <input type="text" name="User_name" placeholder="Enter Your User_name" required>
                    </div>
                    <div class="card">
                    <label for="email">Email</label>
                    <input type="email" name="User_email" placeholder="Enter Your email" required>
                </div>
                   
                    <div class="card">
                        <label for="password">password</label>
                        <input type="password" name="User_password" placeholder="Enter Your password" required>
                    </div>
                    <div class="card">
                        <label for="re-password">re-password</label>
                        <input type="re-password" name="User_re-password" placeholder="Enter Your re-password" required>
                    </div>
                     
                    <input type="submit" value="Sign Up" class="submit">
                    <div class="check">
                        <input type="checkbox" name="" id=""><span>Don't forget me</span>
                    </div>
                    <p>You have a account? <a href="index.php">Login</a></p>
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
