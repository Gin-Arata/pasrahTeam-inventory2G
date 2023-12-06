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
        $this->view('template/headerAdmin');
        $this->view('admin/user');
        $this->view('template/footerAdmin');
    }
}