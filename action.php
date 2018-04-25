<html>
<head>
    <title>Example Result</title>
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1 id="testHeadline">Lawn Love, action.</h1>
    <p id="resultElement"><?php
        if (isset($_REQUEST['username'])) {
            echo htmlentities($_REQUEST['username']);
        } else {
            echo "No username provided.";
        }
        ?></p>

</div>
</body>
</html>