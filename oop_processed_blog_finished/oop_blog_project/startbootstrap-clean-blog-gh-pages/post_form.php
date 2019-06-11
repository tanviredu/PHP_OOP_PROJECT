<div class="container" style="margin-right: 300px;">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        
        <form name="blogpost" id="contactForm" validate action="" method="POST">
                  <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                      <h4>Title</h4>
                      <input type="text" class="form-control"  id="name" name="title" required data-validation-required-message="Enter your title.">
                      <p class="help-block text-danger"></p>
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                    </br>
                    </br>

                      <h4>Content</h4>
                      <!--textarea rows="15" class="form-control" placeholder="Post" id="message" required name="content" data-validation-required-message="Please enter a message."></textarea-->
                      <textarea style="width: 1000px;height: 600px;" name="content"></textarea>

                      <p class="help-block text-danger"></p>
                    </div>
                  </div>
                  <br>
                  <div id="success"></div>
                  <div class="form-group">
                    <input type="submit" class="btn btn-primary" id="sendMessageButton" name="post" value="post">
                  </div>
        </form>
      </div>
    </div>
  </div>

  <hr>


 
 <?php 

 //here goes only the method
 global $input;
 $input->blog_input();
 ?> 