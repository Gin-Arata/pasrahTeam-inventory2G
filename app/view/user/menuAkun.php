<link rel="stylesheet" href="<?= BASEURL; ?>/css/user/userAkun.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
</head>

<body>

    <form>
        <div class="container">
            <div class="profile-container">
                <div class="profile-info">
                    <label for="nim">NIM:</label>
                    <div class="hidden-textbox">
                        <?= $data['user']['nomor_induk'] ?>
                    </div>

                    <label for="nama">Nama:</label>
                    <div class="hidden-textbox">
                        <?= $data['user']['nama_user'] ?>
                    </div>
                </div>
            </div>


            <img src="<?= BASEURL ?>/img/icon/<?= $data['user']['profil_user'] ?>" alt="Avatar" class="avatar">
            <input type="reset" class="btn btn-primary btn-block" id="resetpass" value="Reset Password">
            <input type="logout" class="btn btn-primary btn-block" id="logout" value="Log Out" readonly>
        </div>