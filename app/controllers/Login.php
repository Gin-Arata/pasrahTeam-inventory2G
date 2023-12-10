<?php

class Login extends Controller
{
    public function index()
    {
        $this->view('login/login');
    }
    public function prosesLogin()
    {
        $nim = $_POST['nim'];
        $password = $_POST['password_user'];
        $row = $this->model('User_model')->getUser($nim);

        $_SESSION['level'] = $row['level'];

        if ($row['level'] == 'admin') {
            header('location: ' . BASEURL2 . '/admin');
        } else if ($row['level'] == 'user') {
            $_SESSION['username'] =  $row['username'];
            header('location: ' . BASEURL2 . '/User');
        } else {
            echo "Salah";
            header('location: ' . BASEURL2 . '/Login');
        }
    }
}