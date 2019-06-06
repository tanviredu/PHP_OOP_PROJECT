<div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        
        <form name="sentMessage" id="contactForm" novalidate>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Title</label>
              <input type="text" class="form-control" placeholder="Title" id="name" required data-validation-required-message="Enter your title.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Content</label>
              <textarea rows="15" class="form-control" placeholder="Post" id="message" required data-validation-required-message="Please enter a message."></textarea>
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