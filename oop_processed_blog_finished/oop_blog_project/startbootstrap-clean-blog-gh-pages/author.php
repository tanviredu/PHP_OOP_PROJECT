<?php include 'header.php' ?>
<?php include 'nav.php' ?>
<?php require_once('include/database.php');
      require_once('include/user.php');
      require_once('include/blog.php');
      require_once('include/input.php');
      global $user;
?>

  <header class="masthead" style="background-image: url('img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Blog</h1>
            <span class="subheading">Writer Blog</span>
          </div>
        </div>
      </div>
    </div>
  </header>



 <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Username</th>
    </tr>
  </thead>
  <tbody>
    
<?php $user->get_all_users();?>
    
    
  </tbody>
</table>

  

  <?php include 'footer.php' ?>