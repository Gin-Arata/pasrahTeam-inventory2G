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
            <a href="<?= BASEURL2 ?>/forgotpass/resetpass/<?= $_SESSION['idUser'] ?>" class="btn btn-primary btn-block reset-btn" id="resetpass">Reset Password</a>
            <a href="<?= BASEURL2 ?>/logout" class="btn btn-primary btn-block logout-btn" id="logout">Logout</a>
        </div>