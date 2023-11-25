<?php

$token = $_GET["token"];

$token_hash = hash("sha256", $token);

$mysqli = require __DIR__ . "/database.php";

$sql = "SELECT * FROM user
        WHERE reset_token_hash = ?";

$stmt = $mysqli->prepare($sql);

$stmt->bind_param("s", $token_hash);

$stmt->execute();

$result = $stmt->get_result();

$user = $result->fetch_assoc();

if ($user === null) {
    die("token not found");
}

if (strtotime($user["reset_token_expires_at"]) <= time()) {
    die("token has expired");
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Reset Password</title>
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

        <form method="post" action="process-reset-password.php">
            <h1 class="page-heading">RESET PASSWORD</h1>
            <input type="hidden" name="token" value="<?= htmlspecialchars($token) ?>">

            <label for="password">NEW PASSWORD</label>
            <input type="password" class="form-control" name="password" placeholder="New Password" required>

            <label for="password_confirmation">REPEAT PASSWORD</label>
            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password"
                required>
            <input type="submit" class="btn btn-primary btn-block" id="Submit" value="Submit" title="Submit">
            <div class="link">Login <a href="login.php" title="login">Here</a></div>

            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


        </form>
        <div class="copyright">
            <p>2023 &copy; PasrahTeam</p>
        </div>

    </div>


</body>

</html>