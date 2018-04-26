
<html>
<head>
    <title>Example Form</title>
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1 id="testHeadline">Lawn Love, yo.</h1>
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
</body>
</html>