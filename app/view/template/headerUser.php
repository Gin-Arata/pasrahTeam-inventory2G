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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="Sidebar.css">
  <!-- Boxicons CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
  <!-- CSS External -->
  <link rel="stylesheet" href="<?= BASEURL; ?>/css/user/userSidebar.css">
  <!-- <link rel="stylesheet" href="<?= BASEURL; ?>/css/user/.css"> -->

  <!-- CSS Data Table -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
</head>

<body>

  <div class="sidebar">
    <div class="logo-details">

      <div class="logo_name">MENU</div>
      </a>
      <i class='bx bx-right-arrow-alt' id="btn"></i>
    </div>
    <ul class="nav-list">
      <li class="<?php echo $currentPage === 'Peminjaman' ? 'active' : ''; ?>">
        <a href="<?= BASEURL2 ?>/user/menuPeminjaman">
          <i class=' bx bx-plus-circle'></i>
          <span class="links_name">Peminjaman</span>
        </a>
        <span class="tooltip">Pengajuan Peminjaman</span>
      </li>

      <li class="<?php echo $currentPage === 'Pengembalian' ? 'active' : ''; ?>">
        <a href="<?= BASEURL2 ?>/user/menuPengembalian">
          <i class='bx bx-box'></i>
          <span class="links_name">Pengembalian</span>
        </a>
        <span class="tooltip">Pengembalian</span>
      </li>

      <li class="<?php echo $currentPage === 'Histori' ? 'active' : ''; ?>">
        <a href="<?= BASEURL2 ?>/user/menuHistory">
          <i class='bx bx-history'></i>
          <span class="links_name">Histori</span>
        </a>
        <span class="tooltip">Histori</span>
      </li>

      <li class="<?php echo $currentPage === 'User' ? 'active' : ''; ?>">
        <a href="menuAkunUser">
          <i class='bx bx-user'></i>
          <span class="links_name">User</span>
        </a>
        <span class="tooltip">User</span>
      </li>
      <a href="<?= BASEURL2 ?>/logout" style="text-decoration: none;">
        <li class="Logout">
          <input type="submit" class="btn btn-primary btn-block" value="Logout">
          <i class='bx bx-log-out' id=log_out></i>
        </li>
      </a>
    </ul>
  </div>
  <section class="home-section">
    <a href="<?= BASEURL2 ?>/user/index">
      <div class="text">INVENTARIS JTI POLINEMA</div>
    </a>
  </section>