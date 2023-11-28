<?php

class Admin extends Controller {
    public function index() {
        $this->view('template/headerAdmin');
        $this->view('admin/index');
        $this->view('template/footerAdmin');
    }
}