<html>
<head>
    <title>Example Result</title>
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-sm-6 offset-sm-3">
      <h1 id="testHeadline">ArtLung, action.</h1>
      <p id="resultElement"><?php
          if (isset($_REQUEST['username'])) {
              echo htmlentities($_REQUEST['username']);
          } else {
              echo "No username provided.";
          }
          ?></p>
      </div>
  </div>
</div>
</body>
</html>
