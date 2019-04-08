<?php
/**
 * Created by PhpStorm.
 * User: moriso
 * Date: 29/04/2019
 * Time: 12:06
 */

require 'config.php';
if (isset($_REQUEST['login'])){
    if (isset($_REQUEST['email']) and $_REQUEST['password']){
        $email = $_REQUEST['email'];
        $password = sha1($_REQUEST['password']);
        $sql = 'SELECT * FROM `ethan`.`users` WHERE email="'.$email.'" AND `password` ="'.$password.'"';
        $query = mysqli_query($conn, $sql);
        if (mysqli_error($conn)){
            include "errorLog.php";
        }
        else{
            if (mysqli_num_rows($query) > 0){
                $row = mysqli_fetch_assoc($query);
                $_SESSION['username'] = $row['username'];
                $_SESSION['userid'] = $row['id'];
                header('location:orders');
                echo 'click <a href="orders">here</a> if not automatically redirected';
                exit();
            }
            else{
                $login_error = 'login failed.Either password or email is incorrect';
            }
        }
        
    }
}
?>
<!doctype html>
<html lang="en">
<head>
	<title>login</title>
	<?php
	include "links.php";
	?>
    <style>
        body{
            background:rgba(230, 230, 230,0.5);
        }
    </style>
</head>
<body>
<?php
include "header.php";
?>
<div class="header">
    <h4> <i class="fa fa-user-circle  pull-left"></i>Login</h4>
</div>

<form action="login" name="login-form" id="login-form" method="POST" enctype="multipart/form-data" onsubmit="return validate()">
    <div class="input_group">
        <?php
        if (isset($login_error)){
            echo '<div class="important"><em>'.$login_error.'</em></div>';
        }
        ?>
        <span id="message"><?php if(isset($success)){echo $success;}?></span>
        <span id="message"><?php if(isset($error)){echo $error;}?></span>
        <label for="email">Email:</label>
        <input type="email" name="email" placeholder="eg. youremail@gmail.com" id="email">
        <span class="error_msg" id="email_error"></span>
    </div>
    <div class="input_group">
        <span id="message"><?php if(isset($success)){echo $success;}?></span>
        <span id="message"><?php if(isset($error)){echo $error;}?></span>
        <label for="password">Password:</label>
        <input type="password" name="password" placeholder="password" id="password">
        <span class="error_msg" id="password_error"></span>
    </div>
    <input type="submit" name="login" value="Login" class="button">
    <!-- <p> Don't have an account? <a href="#" class="link" id="signup-link">Create account</a></p> -->
    <a href="forgotpassword/forgotpassword.php" class="link">Forgot password?</a>
</form>
<?php include "footer.php";?>
</body>
</html>