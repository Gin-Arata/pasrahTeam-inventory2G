<?php

if(isset($_SESSION['userRole'])){
    if($_SESSION['userRole'] == 'admin'){
        header('Location: '.BASEURL2.'/admin');
        exit;
    } else if($_SESSION['userRole'] == 'user'){
        header('Location: '.BASEURL2.'/user');
        exit;
    }
}

class Login extends Controller
{
    public function index()
    {
        $this->view('login/login');
    }

    public function prosesLogin()
    {
        $data['userData'] = $this->model('Login_model')->getUserByNIM($_POST);
        $hashedPassInput = md5($_POST['user_pass']);

        if ($data['userData']['password_user'] == $hashedPassInput) {
            $_SESSION['idUser'] = $data['userData']['id_user'];
            $_SESSION['userName'] = $data['userData']['nama_user'];
            $_SESSION['userRole'] = $data['userData']['level'];

            if ($data['userData']['level'] == 'admin') {
                header('Location: ' . BASEURL2 . '/admin');
                exit;
            } else if ($data['userData']['level'] == 'user') {
                header('Location: ' . BASEURL2 . '/user');
                exit;
            }
        } else {
            Flasher::setFlash('Login', 'Gagal,', 'Nomor Induk atau Password salah!', 'danger');
            header('Location: ' . BASEURL2 . '/login');
            exit;
        }
    }
}