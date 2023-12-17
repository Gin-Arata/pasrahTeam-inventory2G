<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
</head>

<body>
    <div class="background-web"></div>
    <div class=" container" style="height: 460px;">
        <div class="row mt-3" style="z-index: 10;">
            <div class="col-12">
                <?php
                Flasher::flash();
                ?>
            </div>
        </div>
        <!-- <div class="form-title">LOG IN</div> -->
        <form action="<?= BASEURL2 ?>/login/prosesLogin" method="POST">
            <h3 id="log">LOG IN</h3>
            <label>NIP/NIM</label>
            <div class="form-group form-field">
                <input type="text" name="user_nim" class="form-control" id="NIP/NIM" placeholder="ex : 2241720000"
                    required>
            </div>
            <label>PASSWORD</label>
            <div class="form-group form-field">
                <input type="password" name="user_pass" class="form-control" id="password"
                    placeholder="ex : polinemajos!" required>
            </div>
            <div class="form-group form-field">
                <input type="submit" class="btn btn-primary btn-block" value="Login" title="Login Now">
            </div>
            <div class="link">Don't have an account? <a href="<?= BASEURL2; ?>/register" title="Register">Register
                    Now</a></div>
            <div class="link"><a href="<?= BASEURL2 ?>/forgotpass" title="ForgotPassword">Forgot password?</a></div>
        </form>
    </div>
    <footer class="copyright">
        <p>&copy; 2023 PasrahTeam</p>
    </footer>
    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>