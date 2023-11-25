<!DOCTYPE html>
<html>

<head>
    <title>Forgot Password</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <link rel="stylesheet" href="resetpass.css">
</head>

<body>
    <div class="bg"></div>
    <div class="container">
        <form method="post" action="send-password-reset.php">
            <h1> FORGOT PASSWORD</h1>
            <label for="email"> ENTER YOUR EMAIL</label>

            <input type="email" class="form-control" name="email" id="email" placeholder="ex : bungasepatu@gmail.com"
                required>
            <input type="submit" class="btn btn-primary btn-block" id="Submit" value="Submit" title="Submit">
            <div class="link">Login <a href="login.php" title="login">Here</a></div>

        </form>
        <div class="copyright">
            <p>2023 &copy; PasrahTeam</p>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>

</html>