<?php

if (isset($_SESSION['userRole'])) {
    if ($_SESSION['userRole'] == 'admin') {
        header('Location: ' . BASEURL2 . '/admin');
        exit;
    }
}
class User extends Controller
{
    public function index()
    {
        $this->view('template/headerUser');
        $this->view('user/index');
        $this->view('template/footerUser');
    }

    public function menuPeminjaman()
    {
        $data['tabelBarang'] = $this->model('User_model')->getAllBarang();

        $this->view('template/headerUser');
        $this->view('user/menuPeminjaman', $data);
        $this->view('template/footerUser');
    }
    public function formPeminjaman()
    {
        for ($i = 0; $i < count($_POST['idBarang']); $i++) {
            $data['selectedBarang'][$i] = $this->model('User_model')->getBarangById($_POST['idBarang'][$i]);
        }


        $this->view('template/headerUser');
        $this->view('user/formPeminjaman', $data);
        $this->view('template/footerUser');
    }
    public function menuPengembalian()
    {
        $this->view('template/headerUser');
        $this->view('user/menuPengembalian');
        $this->view('template/footerUser');

    }
    public function menuHistory()
    {
        $this->view('template/headerUser');
        $this->view('user/menuHistory');
        $this->view('template/footerUser');
    }


}
