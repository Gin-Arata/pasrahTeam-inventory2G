<?php

class Admin extends Controller {
    public function index() {
        $data['peminjaman'] = $this->model('Admin_model')->getAllPeminjaman();
        $data['totalBarang'] = $this->model('Admin_model')->totalBarang();
        $data['totalUser'] = $this->model('Admin_model')->totalUser();

        $this->view('template/headerAdmin');
        $this->view('admin/index', $data);
        $this->view('template/footerAdmin');
    }

    public function inventarisir() {
        $data['asal'] = $this->model('Admin_model')->getAllAsalBarang();

        $this->view('template/headerAdmin');
        $this->view('admin/inventarisir', $data);
        $this->view('template/footerAdmin');
    }

    public function barang() {
        $data['barang'] = $this->model('Admin_model')->getAllBarang();

        $this->view('template/headerAdmin');
        $this->view('admin/barang', $data);
        $this->view('template/footerAdmin');
    }

    public function user() {
        $data['user'] = $this->model('Admin_model')->getAllUser();

        $this->view('template/headerAdmin');
        $this->view('admin/user', $data);
        $this->view('template/footerAdmin');
    }

    // method tambah barang
    public function tambahBarang() {
        $this->model('Admin_model')->tambahBarang($_POST, $_FILES);

        header('Location: ' . BASEURL2 . '/admin/inventarisir');
    }

    // method hapus barang
    public function hapusBarang($id_barang) {
        $this->model('Admin_model')->hapusBarang($id_barang);

        header('Location: ' . BASEURL2 . '/admin/barang');
    }

    // method edit barang
    public function editBarang() {
        $this->model('Admin_model')->editBarang($_POST, $_FILES);

        header('Location: ' . BASEURL2 . '/admin/barang');
    }

    // method tambah User
    public function tambahUser() {
        $this->model('Admin_model')->tambahUser($_POST);

        header('Location: ' . BASEURL2 . '/admin/user');
    }

    // method edit User
    public function editUser() {
        $this->model('Admin_model')->editUser($_POST);

        header('Location: ' . BASEURL2 . '/admin/user');
    }

    // method hapus User
    public function hapusUser($id_user) {
        $this->model('Admin_model')->hapusUser($id_user);

        header('Location: ' . BASEURL2 . '/admin/user');
    }
    
    // method konfirmasi peminjaman
    public function updateStatusPinjam() {
        $this->model('Admin_model')->updateStatusPeminjaman($_POST);

        header('Location: ' . BASEURL2 . '/admin');
    }

    // method Tambah asal barang
    public function tambahAsalBarang() {
        $this->model('Admin_model')->tambahAsalBarang($_POST);

        header('Location: ' . BASEURL2 . '/admin/inventarisir');
    }
}