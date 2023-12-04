<?php

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
        $this->view('template/headerUser');
        $this->view('user/menuPeminjaman');
        $this->view('template/footerUser');
    }
    public function formPeminjaman()
    {
        $this->view('template/headerUser');
        $this->view('user/formPeminjaman');
        $this->view('template/footerUser');
    }
    public function menuPengembalian()
    {
        $this->view('template/headerUser');
        $this->view('user/menuPengembalian');
        $this->view('template/footerUser');
    }
}
