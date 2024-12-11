<?php

include_once('lib/functions/userFunction.php');

if(isset($_POST['btnLogin'])){
   $result = Authentication($_POST['Email'],$_POST['UserPass']);
   echo($result);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Style.css">
    <title>CRUSHIFY | Login & Registration</title>
</head>

<body style="background-image: url('images/ImgAll.jpg');">
 <div class="wrapper">
    <nav class="nav">
        <div class="nav-logo">
            <img src="images/CRUSHIFY - Copy.jpg" class="img">
        </div>
        <div class="nav-menu" id="navMenu">
            <ul>
                <li><a href="./lib/views/dashboards/home.php" class="link">Home</a></li>
                <li><a href="./lib/views/dashboards/FindMatch.php" class="link">Find Match</a></li>
                <li><a href="./lib/views/dashboards/inbox.php" class="link">Inbox</a></li>
                <li><a href="#" class="link">Notifications</a></li>
            </ul>
        </div>
        <div class="nav-button">
            <button class="btn white-btn" id="loginBtn" onclick="login()">Sign In</button>
            <button class="btn" id="registerBtn" onclick="register()">Sign Up</button>
        </div>
        <div class="nav-menu-btn">
        </div>
    </nav>
 
    <div class="form-box">
        <div class="login-container" id="login">
         <form action="" method="POST">
            <div class="top">
                <span>Don't have an account? <a href="#" onclick="register()">Sign Up</a></span>
                <header>Log in</header>
            </div>
            <div class="input-box">
                <input type="email" name="Email" class="input-field" id="UserEmail" placeholder="E-mail">
                <i class="fas fa-eye"></i> 
            </div>
            <div class="input-box">
                <input type="password" name="UserPass"class="input-field" id="UserPass"  placeholder="Password">
                
            </div>
            <div class="input-box">
                <input type="submit" class="submit"  name="btnLogin" value="login">
            </div>
            <div class="two-col">
                <div class="two">
                    <label><a href="#">Forgot password?</a></label>
                </div>
         </form>
            </div>
        </div>

        <!------------------- registration form -------------------------->
        <div class="register-container" id="register">
         <form action="lib/routes/user/registration.php" method="POST">
            <div class="top">
                <span>Have an account? <a href="#" onclick="login()">Log in</a></span>
                <header>Sign Up</header>
            </div>
            <div class="input-box">
                <input type="text" name="UserName"  id="UserName" class="input-field" placeholder="Name">
            </div>
            <div class="input-box">
                <input type="email" name="UserEmail" id="UserEmail"  class="input-field" placeholder="E-mail">
            </div>
            <div class="input-box">
                <input type="password" name="UserPass"  id="UserPass" class="input-field" placeholder="Password">
            </div>
            <div class="input-box">
                <input type="submit" class="submit" value="Register">
            </div>
            <div class="two-col">
                <div class="two">
                    <label><a href="#">Terms & conditions</a></label>
                </div>
            </div>
         </form>
        </div>
    </div>
</div>   
<script src="js/Script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>