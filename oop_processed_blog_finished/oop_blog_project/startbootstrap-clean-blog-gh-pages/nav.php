 <?php  session_start(); ?>
 <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="index.html">Blog Project</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="post.php">All Post</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="create_post.php">Create Post</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="author.php">Author List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="search.php">Search Post</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Welcome <?php echo $_SESSION['username']; ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>