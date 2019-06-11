<?php include 'header.php'?>
<!-- Navigation -->
<?php include 'nav.php'?>
<?php require_once('include/database.php');
      require_once('include/user.php');
      require_once('include/blog.php');
      require_once('include/input.php');
?>
  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/contact-bg.jpg')">
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"></script>
    <script>tinymce.init({selector:'textarea'});</script>
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1>Post Your Thought</h1>
            <span class="subheading">Post Whats in Your Mind</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <!--h4 style="text-align:center;" class="display-4">Post Your Thought</h4-->
  <?php include 'post_form.php' ?>

  <!-- Footer -->
 <?php include 'footer.php' ?>