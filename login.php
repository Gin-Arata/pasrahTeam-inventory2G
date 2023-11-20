<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="bg"></div>
    <div class=" wrapper">
        <div class="form-title">Login </div>
        <form>
            <!-- <div class="number"> -->
            <label>NIP/NIM</label>
            <div class="form-group form-field">
                <input type="text" class="form-control" id="NIP/NIM" placeholder="ex : 1234567890" required>
            </div>
            <!-- </div> -->
            <!-- <div class="password"> -->
            <label>PASSWORD</label>
            <div class="form-group form-field">
                <input type="password" class="form-control" id="password" placeholder="ex : polinemajos!" required>
            </div>
            <!-- </div> -->
            <div class="form-group form-field">
                <input type="submit" class="btn btn-primary btn-block" value="Login" title="Login Now">
            </div>
            <div class="link">Don't have an account? <a href="#" title="Register">Register Now</a></div>
            <div class="link"><a href="#" title="Register">Forgot password?</a></div>
        </form>
    </div>
    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>