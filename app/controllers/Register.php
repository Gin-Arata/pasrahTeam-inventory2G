<?php

class Register extends Controller {
    public function index() {
        $this->view('register/register');
    }

    public function register(){
        if($this->model('User_model')->insertUser($_POST) > 0) {
            Flasher::setFlash('Pendaftaran', 'Berhasil!', 'Silahkan login', 'success');
            header('Location: '.BASEURL2.'/login');
        } else {
            Flasher::setFlash('Pengembalian', 'Gagal', 'dilakukan!', 'danger');
            header('Location: ' . BASEURL2 . '/register');
        }
    }
}