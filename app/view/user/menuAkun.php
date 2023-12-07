<link rel="stylesheet" href="<?= BASEURL; ?>/css/user/userAkun.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
    integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">

<form>
    <div class="container">

        <div class="profile-container">
            <label for="nim">NIM:</label>
            <div class="hidden-textbox">
                <?php echo $nim; ?>
            </div>

            <label for="nama">Nama:</label>
            <div class="hidden-textbox">
                <?php echo $nama; ?>
            </div>
        </div>

        <?php
        // Assuming you have a function to get the image URL based on NIM
        // $imageURL = getImageURLByNIM($nim);
        ?>

        <img src="<?= $imageURL; ?>" alt="Avatar" class="avatar">
        <input type="reset" class="btn btn-primary btn-block" id="resetpass" value="Reset Password">
        <input type="logout" class="btn btn-primary btn-block" id="logout" value="Log Out" readonly>
    </div>
</form>