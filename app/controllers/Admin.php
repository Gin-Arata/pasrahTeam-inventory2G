<?php

class Admin extends Controller {
    public function index() {
        $this->view('template/headerAdmin');
        $this->view('admin/index');
        $this->view('template/footerAdmin');
    }

    public function inventarisir() {
        $this->view('template/headerAdmin');
        $this->view('admin/inventarisir');
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
}