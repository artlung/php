
<html>
<head>
    <title>Example Form</title>
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-sm-6 offset-sm-3">
      <h1 id="testHeadline">ArtLung, yo.</h1>
      <form action="action.php" method="POST">
          <div  class="form-group">
              <label for="username">
                  Username
              </label>
              <input name="username" value="" id="username" class="form-control"/>
          </div>
          <div class="form-group">
              <input type="submit" value="Go" class="btn btn-primary btn-block" id="goButton"/>
          </div>
      </form>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <button type="button" name="button" class="btn btn-block" id="toggle-p">Toggle Paragraph</button>
      <div class="paragraph" style="display: none;">
        <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>
    </div>
  </div>
</div>
<script>
jQuery(document.body).ready(function () {
  $('#toggle-p').on('click', function () {
    if ($('.paragraph:visible').length) {
      $('.paragraph:visible').slideUp();
    } else {
      $('.paragraph:hidden').slideDown();
    }
  });
});
</script>
</body>
</html>
