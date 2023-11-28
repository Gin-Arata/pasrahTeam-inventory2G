<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Inventaris</title>
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
    <!-- Bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
        integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <!-- CSS External -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/admin/adminSidebar.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/admin/adminIndex.css">
    <!-- JS Fontawesome -->
    <script src="https://kit.fontawesome.com/b450899c31.js" crossorigin="anonymous"     ></script>
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-main mt-3">
            <a href="<?= BASEURL2 ?>/admin">
                <div class="sidebar-content"><img src="<?= BASEURL ?>/img/icon/home.png" alt="Home Logo">
                    <p>Home</p>
                </div>
            </a>
            <a href="">
                <div class="sidebar-content"><img src="<?= BASEURL ?>/img/icon/add-file.png" alt="Add barang Logo">
                    <p>Inventarisir</p>
                </div>
            </a>
            <a href="">
                <div class="sidebar-content"><img src="<?= BASEURL ?>/img/icon/to-do.png" alt="List barang Logo">
                    <p>Daftar Barang</p>
                </div>
            </a>
            <a href="">
                <div class="sidebar-content"><img src="<?= BASEURL ?>/img/icon/result.png" alt="Home Logo" width="25">
                    <p>Perizinan</p>
                </div>
            </a>
            <a href="">
                <div class="sidebar-content"><img src="<?= BASEURL ?>/img/icon/group.png" alt="Home Logo" width="25">
                    <p>Daftar User</p>
                </div>
            </a>
        </div>

        <div class="sidebar-footer">
            <a href="<?= BASEURL2 ?>/logout">
                <div class="sidebar-content"><img src="<?= BASEURL ?>/img/icon/logout.png" alt="Logout logo">
                    <p>Logout</p>
                </div>
            </a>
        </div>
    </div>