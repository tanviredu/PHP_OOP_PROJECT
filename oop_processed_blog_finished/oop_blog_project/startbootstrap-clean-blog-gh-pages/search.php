<?php include 'header.php' ?>
<?php include 'nav.php' ?>
<?php require_once('include/database.php');
      require_once('include/user.php');
      require_once('include/blog.php');
      require_once('include/input.php');
      global $databse;
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

<center>
<form class="form-user" action="" method="POST">
  <label><h1 class="display-4">Search Post </h1></label><br />
  <input style="width:500px;height: 70px;" type="text" name="name" class="from-control" placeholder="Enter name"><br /><br />
  <input style="width:500px;height: 70px;" type="submit" name="search" value="search" class="btn btn-danger">
</form>

</br>
</br>
</br>


<div class="container container-fluid" style="width: 1000px;margin-top:100px">
            <div class="card">
                <!--img class="card-img-top" src="img/4.jpg"-->
                <label><h2 class="display-4"><b>Post List</b></h2></label>
                <hr>
                
                <div class="card-body">
                    
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Time</th>
      <th scope="col">username</th>
      <th scope="col">title</th>
    </tr>
  </thead>

<?php 
    $name = "";
    if (isset($_POST['search'])){
      $name = $_POST['name'];
    }
    $query7 = "SELECT * FROM blog WHERE content LIKE '%$name%'";
    $result7 = $database->query($query7);
    
    
    while($data7 = mysqli_fetch_assoc($result7)){
    // make the table      
  
  
?>

<tbody>
    <tr>
      <td><?php echo $data7['time']; ?></td>
      <td><?php echo $data7['username']; ?></td>
      <td><?php echo $data7['title']; ?></td>

        
    </tr>
    
  </tbody>
                        
                        <?php  } ?>
</table>
              
</div>
            </div>
        
        </div>

    
  
  

  <?php include 'footer.php' ?>