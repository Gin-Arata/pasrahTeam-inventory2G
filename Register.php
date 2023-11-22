<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="background-web"></div>
    <div class="container">
        <form id="Form1" method="POST" action="">
            <h3>REGISTER</h3>
            <label>NIP/NIM</label>
            <div class="form-group form-field">
                <input type="text" class="form-control" id="nomor-induk" placeholder="ex : 1234567890!" required>
            </div>
            <label>Email</label>
            <div class="form-group form-field">
                <input type="email" class="form-control" id="email" placeholder="ex : bungasepatu@gmail.com" required>
            </div>
            <div class="form-group form-field">
                <input type="button" class="btn btn-primary btn-block" id="Next1" value="Next" title="Next">
            </div>
            <div class="link">Already have account?? <a href="login.php" title="Login">Login here</a></div>
        </form>

        <form id="Form2" method="POST" action="">
            <h3>REGISTER</h3>
            <label>Password</label>
            <div class="form-group form-field">
                <input type="password" class="form-control" id="password" placeholder="ex : polinemajos!" required>
            </div>
            <label>Confirm Password</label>
            <div class="form-group form-field">
                <input type="password" class="form-control" id="password" placeholder="ex : polinemajos!" required>
            </div>
            <div class="form-group form-field">
                <input type="button" class="btn btn-primary btn-block" id="Back1" value="Back" title="Back">
                <input type="submit" class="btn btn-primary btn-block" id="Submit" value="Submit" title="Register">
            </div>
            <div class="link">Already have account?? <a href="login.php" title="Login">Login here</a></div>
        </form>
        <!-- <div class="step-row">
            <div id="progress"></div>
            <div class="step-col"><small>Step 1</small></div>
            <div class="step-col"><small>Step 2</small></div>
            <div class="step-col"><small>Step 3</small></div>
        </div> -->
    </div>
    <footer class="copyright">
        <p>&copy; 2023 PasrahTeam</p>
    </footer>
    <script>
        var Form1 = document.getElementById("Form1");
        var Form2 = document.getElementById("Form2");

        var Next1 = document.getElementById("Next1");
        var Back1 = document.getElementById("Back1");
        var Submit = document.getElementById("Submit");

        // var progress = document.getElementById("progress");

        Next1.onclick = function () {
            Form1.style.left = "-450px";
            Form2.style.left = "40px";
            // progress.style.width = "240px";
        }
        Back1.onclick = function () {
            Form1.style.left = "40px";
            Form2.style.left = "450px";
            // progress.style.width = "120px";
        }
        Submit.onclick = function () {
            alert("Anda berhasil membuat akun");
            header("Location: login.php");
        }
    </script>
    <!-- </div> -->
    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>