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
        $this->view('template/headerAdmin');
        $this->view('admin/barang');
        $this->view('template/footerAdmin');
    }

    public function user() {
        $this->view('template/headerAdmin');
        $this->view('admin/user');
        $this->view('template/footerAdmin');
    }
}