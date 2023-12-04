<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User's Page</title>
    <!-- import file php -->
    <?php
    // include 'userSidebar.php';
    ?>
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
    <!-- Bootstrap icon -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="Sidebar.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
    <!-- CSS External -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/user/Sidebar.css">
    <!-- <link rel="stylesheet" href="<?= BASEURL; ?>/css/user/.css"> -->
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar fixed-top">
        <div class="sidebar-main">
            <a href="index.php" class="<?= $currentPage === 'Home' ? 'active' : ''; ?>">
                <div class="sidebar-content"><img src="<?= BASEURL ?>/img/icon/home.png" alt="Home Logo">
                    <p>Home</p>
                </div>
            </a>
            <a href="MenuPeminjaman.php" class="<?= $currentPage === 'Peminjaman' ? 'active' : ''; ?>">
                <div class="sidebar-content"><img src="<?= BASEURL ?>/img/icon/add-file.png" alt="Add barang Logo">
                    <p>Peminjaman</p>
                </div>
            </a>
            <a href="MenuPengembalian.php" class="<?= $currentPage === 'Pengembalian' ? 'active' : ''; ?>">
                <div class="sidebar-content"><img src="<?= BASEURL ?>/img/icon/to-do.png" alt="List barang Logo">
                    <p>Pengembalian</p>
                </div>
            </a>
            <a href="History.php" class="<?= $currentPage === 'Histori' ? 'active' : ''; ?>">
                <div class="sidebar-content"><img src="<?= BASEURL ?>/img/icon/history.png" alt="History Logo">
                    <p>Histori</p>
                </div>
            </a>
            <a href="Akun.php" class="<?= $currentPage === 'User' ? 'active' : ''; ?>">
                <div class="sidebar-content"><img src="<?= BASEURL ?>/img/icon/group.png" alt="User Logo" width="25">
                    <p>User</p>
                </div>
            </a>
        </div>
        <section class="home-section">
            <a href="index.php">
                <div class="text">INVENTARIS JTI POLINEMA</div>
        </section>