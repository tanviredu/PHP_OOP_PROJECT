<?php require_once('include/database.php');
      require_once('include/user.php');
      require_once('include/blog.php');
      require_once('include/input.php');
?>

<?php include 'header.php'?>
  <link rel="stylesheet" href="login.css">

    <div class="text-center" style="padding:50px 0;margin-left: 40px;margin-top: 100px;">
        <div class="logo">Blog Login</div>
        <!-- Main Form -->
        <div class="login-form-1">
            <form id="login-form" class="text-left" action="" method="POST">
                <div class="login-form-main-message"></div>
                <div class="main-login-form">
                    <div class="login-group">
                        <div class="form-group">
                            <label for="lg_username" class="sr-only">Username</label>
                            <input type="text" class="form-control" id="lg_username" name="username" placeholder="username">
                        </div>
                        <div class="form-group">
                            <label for="lg_password" class="sr-only">Password</label>
                            <input type="password" class="form-control" id="lg_password" name="password" placeholder="password">
                        </div>
                        <div class="form-group login-group-checkbox">
                            <input type="checkbox" id="lg_remember" name="lg_remember">
                            <label for="lg_remember">remember</label>
                        </div>
                    </div>
                    <input type="submit" name="login" value="->" class="login-button">
                </div>
                <div class="etc-login-form">
                                        <p>new user? <a href="reg.php">create new account</a></p>
                </div>
            </form>
        </div>
        <!-- end:Main Form -->
    </div>


<?php 
global $input;
$input->login_input();
?>

<?php include 'footer.php'?>