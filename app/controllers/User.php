<?php

if (isset($_SESSION['userRole'])) {
    if ($_SESSION['userRole'] == 'admin') {
        header('Location: ' . BASEURL2 . '/admin');
        exit;
    }
} else {
    header('Location: ' . BASEURL2 . '/login');
    exit;
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
        for ($j = 0; $j < count($_POST['idBarang']); $j++) {
            for ($i = 0; $i < count($_POST['jumlah_dipinjam']); $i++) {
                if ($_POST['jumlah_dipinjam'][$i] == "") {
                    continue;
                } else {
                    $data['selectedBarang'][$j] = $this->model('User_model')->getBarangById($_POST['idBarang'][$j]);
                    $data['jumlahBarang'][$j] = $_POST['jumlah_dipinjam'][$i];
                }
            }
        }
        // for ($i = 0; $i < count($_POST['jumlah_dipinjam']); $i++) {
        //     $data['selectedBarang'][$i] = $this->model('User_model')->getBarangById($_POST['idBarang'][$i]);
        // }
        // for ($i = 0; $i < count($_POST['jumlah_dipinjam']); $i++) {
        // }


        $this->view('template/headerUser');
        $this->view('user/formPeminjaman', $data);
        $this->view('template/footerUser');
    }

    // function prosesPinjam
    public function prosesPinjam()
    {
        for ($i = 0; $i < count($_POST['jumlahBarang']); $i++) {
            $data[$i] = [
                'id_barang' => $_POST['idBarang'][$i],
                'jumlah_barang' => $_POST['jumlahBarang'][$i],
                'id_user' => $_POST['idUser'],
                'mulai_pinjam' => $_POST['mulai_pinjam'],
                'batas_pinjam' => $_POST['batas_pinjam'],
                'alasan_pinjam' => $_POST['alasan_pinjam']
            ];

            if ($this->model('User_model')->insertPeminjaman($data[$i]) > 0) {
                Flasher::setFlash('Peminjaman', 'Berhasil', '!', 'success');
            } else {
                Flasher::setFlash('Peminjaman', 'Gagal', '!', 'danger');
            }
        }

        header('Location: ' . BASEURL2 . '/user/menuPeminjaman');
    }

    public function menuPengembalian()
    {
        $data['tablePeminjaman'] = $this->model('User_model')->getAllPeminjamanById($_SESSION['idUser']);

        $this->view('template/headerUser');
        $this->view('user/menuPengembalian', $data);
        $this->view('template/footerUser');
    }

    public function prosesPengembalian() {
        for($i = 0; $i < count($_POST['idPeminjaman']); $i++) {
            $data[$i] = [
                'idPeminjaman' => $_POST['idPeminjaman'][$i],
                'status' => 'Dikembalikan'
            ];

            $this->model('User_model')->updatePeminjamanStatus($data[$i]);

            $dataBarang[$i] = $this->model('User_model')->getAllBarangByIdPeminjaman($data[$i]);

            $dataBarang[$i] = [
                'id_barang' => $dataBarang[$i][0]['id_barang'],
                'jumlah_dipinjam' => $dataBarang[$i][0]['jumlah_dipinjam']
            ];

            if($this->model('User_model')->updateJumlahBarang($dataBarang[$i]) > 0) {
                Flasher::setFlash('Pengembalian', 'Berhasil', 'dilakukan!', 'success');
            } else {
                Flasher::setFlash('Pengembalian', 'Gagal', 'dilakukan!', 'danger');
            }
        }
        header('Location: ' . BASEURL2 . '/user/menuPengembalian');
    }

    public function menuHistory()
    {
        $data['peminjaman'] = $this->model('User_model')->getAllPeminjamanByIdUser($_SESSION['idUser']);

        $this->view('template/headerUser');
        $this->view('user/menuHistory', $data);
        $this->view('template/footerUser');
    }

    public function menuAkunUser() {
        $data['user'] = $this->model('User_model')->getUserById($_SESSION['idUser']);

        $this->view('template/headerUser');
        $this->view('user/menuAkun', $data);
        $this->view('template/footerUser');
    }


}
