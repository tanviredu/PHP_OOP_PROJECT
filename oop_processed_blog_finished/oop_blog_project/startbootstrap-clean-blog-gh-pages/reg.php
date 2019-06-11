<?php require_once('include/database.php');
      require_once('include/user.php');
      require_once('include/blog.php');
      require_once('include/input.php');
?>
<?php include 'header.php'?>

<link rel="stylesheet" href="home.css">
<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="#">Registration</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>

            </ul>

        </div>
    </div>
</nav>
<center>
<main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h4 class="display-4">REGISTER</h4></div>
                    <div class="card-body">
                        <form name="my-form" action="" method="POST">
                            
                            <div class="form-group row">
                                <label for="full_name" class="col-md-4 col-form-label text-md-right">First name </label>
                                <div class="col-md-6">
                                    <input type="text" id="first_name" class="form-control" name="firstname">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">Last name</label>
                                <div class="col-md-6">
                                    <input type="text" id="last_name" class="form-control" name="lastname">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="user_name" class="col-md-4 col-form-label text-md-right">Username</label>
                                <div class="col-md-6">
                                    <input type="text" id="user_name" class="form-control" name="username">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="phone_number" class="col-md-4 col-form-label text-md-right">Password</label>
                                <div class="col-md-6">
                                    <input type="text" id="password" class="form-control" name="password">
                                </div>
                            </div>


                           <input type="submit" value="register" style="margin-left: 130px;;width: 350px;" class="btn btn-danger" name="register">
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </center>
    </div>

</main>

<?php 
global $input;
$input->register_input();

?>

<?php include 'footer.php'?>