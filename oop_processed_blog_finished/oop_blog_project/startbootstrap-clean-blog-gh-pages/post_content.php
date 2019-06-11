 <?php require_once('include/database.php');
      require_once('include/user.php');
      require_once('include/blog.php');
      require_once('include/input.php');
?>

<?php 
  global $blog;
?>

<article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <?php 
  $blog->fetch_all_post();
?>
          

                  </div>
      </div>
    </div>
  </article>

  <hr>
