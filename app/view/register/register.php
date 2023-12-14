<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
</head>

<body>
    <div class="background-web"></div>
    <div class="container">
        <form id="Form1" method="POST" action="<?php echo BASEURL;?>">
            <h3>REGISTER</h3>
            <label>Nama</label>
            <div class="form-group form-field">
                <input id="nama_user" type="text" class="form-control" placeholder="ex : Yunila Tati" required>
            </div>
            <label>NIP/NIM</label>
            <div class="form-group form-field">
                <input type="text" name="nomorinduk" class="form-control" id="nomor-induk" placeholder="ex : 1234567890" required>
            </div>
            <label>Email</label>
            <div class="form-group form-field">
                <input type="email" name="email" class="form-control" id="email" placeholder="ex : bungasepatu@gmail.com" required>
            </div>
            <div class="form-group form-field">
                <input type="button" class="btn btn-primary btn-block" id="Next1" value="Next" title="Next">
            </div>
            <div class="link">Already have account?? <a href="<?= BASEURL2; ?>/login" title="Login">Login here</a></div>
        </form>

        <form id="Form2" method="POST" action="<?php echo BASEURL2;?>/register/register">
            <h3>REGISTER</h3>
            <label>Password</label>
            <input type="hidden" name="nomorindukreal" id="nomorindukreal">
            <input type="hidden" name="emailreal" id="emailreal">
            <input type="hidden" name="nameUser" id="nameUser">
            <div class="form-group form-field">
                <input type="password" name="password" class="form-control" id="password" placeholder="ex : polinemajos!" required>
            </div>
            <label>Confirm Password</label>
            <div class="form-group form-field">
                <input type="password" name="cpassword" class="form-control" id="password" placeholder="ex : polinemajos!" required>
            </div>
            <div class="form-group form-field">
                <input type="button" class="btn btn-primary btn-block" id="Back1" value="Back" title="Back">
                <input type="submit" class="btn btn-primary btn-block" id="Submit" value="Submit" title="Register">
            </div>
            <div class="link">Already have account?? <a href="<?= BASEURL2; ?>/login" title="Login">Login here</a></div>
        </form>
        <!-- <div class="step-row">
            <div id="progress"></div>
            <div class="step-col"><small>Step 1</small></div>
            <div class="step-col"><small>Step 2</small></div>
            <div class="step-col"><small>Step 3</small></div>
        </div> -->
    </div>
    <script>
    
        $('#Next1').on('click', function() {
            // Ambil nilai dari formulir pertama
            var nomorIndukValue = $('#nomor-induk').val();
            var emailValue = $('#email').val();
            var namaValue = $('#nama_user').val();

            // Simpan nilai dalam variabel JavaScript
            var formData1 = {
                nomorInduk: nomorIndukValue,
                email: emailValue,
                namaUser:namaValue
            };
            $('#nomorindukreal').val(formData1.nomorInduk);
            $('#emailreal').val(formData1.email);
            $('#nameUser').val(formData1.namaUser);
        });
</script>
    <footer class="copyright">
        <p>&copy; 2023 PasrahTeam</p>
    </footer>
    <!-- Bootstrap JS and Popper.js -->
    <script src="<?= BASEURL; ?>/js/register.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>