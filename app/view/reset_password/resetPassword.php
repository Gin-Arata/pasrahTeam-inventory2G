<!DOCTYPE html>
<html>

<head>
    <title>Reset Password</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/reset-password.css">
</head>

<body>
    <div class="bg"></div>
    <div class="container">
        <div class="row mt-2">
            <div class="col-12">
                <?php Flasher::flash(); ?>
            </div>
        </div>
        <form method="post" action="<?= BASEURL2 ?>/forgotpass/prosesResetPass/<?= $data['id_user'] ?>">
            <h1 class="page-heading">RESET PASSWORD</h1>

            <label for="password">NEW PASSWORD</label>
            <input type="password" class="form-control" name="password" placeholder="New Password" required>

            <label for="password_confirmation">REPEAT PASSWORD</label>
            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password"
                required>
            <input type="submit" class="btn btn-primary btn-block" id="Submit" value="Submit" title="Submit">

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