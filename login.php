 <?php
    // session_start();
    // include("../db.php");
    include_once('header.php');

    // echo $_SERVER['REQUEST_URI'];
?> 
<!-- <div class="loginout"> -->
<div class="row">
    <div class="col-md-10 offset-md-1">
        <div class="login">
            <div class="login-triangle"></div>
            
            <h2 class="login-header">Admin Login</h2>

            <form class="login-container" name="form1" action="Auth/process_login.php" method="post" novalidate>
            <input type="text" placeholder="Name" required name="username">
            <input type="password" placeholder="Password" name="password">
            <input class="loginbtn" type="submit" name="btnlogin" value="Log in">
            </form>
        </div>
    
    </div>
    <div class="col-md-1"></div>
</div>
   
<!-- </div> -->
  