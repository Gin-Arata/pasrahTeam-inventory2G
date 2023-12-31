<?php
// Prevent user to access this page if not logged in
if (isset($_SESSION['userRole'])) {
    if ($_SESSION['userRole'] == 'user') {
        header('Location: ' . BASEURL2 . '/user');
        exit;
    }
} else {
    header('Location: ' . BASEURL2 . '/login');
    exit;
}

class Admin extends Controller
{
    public function index()
    {
        $data['peminjaman'] = $this->model('Admin_model')->getAllPeminjaman();
        $data['totalBarang'] = $this->model('Admin_model')->totalBarang();
        $data['totalUser'] = $this->model('Admin_model')->totalUser();

        $this->view('template/headerAdmin');
        $this->view('admin/index', $data);
        $this->view('template/footerAdmin');
    }

    public function inventarisir()
    {
        $data['asal'] = $this->model('Admin_model')->getAllAsalBarang();

        $this->view('template/headerAdmin');
        $this->view('admin/inventarisir', $data);
        $this->view('template/footerAdmin');
    }

    public function barang()
    {
        $data['barang'] = $this->model('Admin_model')->getAllBarang();

        $this->view('template/headerAdmin');
        $this->view('admin/barang', $data);
        $this->view('template/footerAdmin');
    }

    public function user()
    {
        $data['user'] = $this->model('Admin_model')->getAllUser();

        $this->view('template/headerAdmin');
        $this->view('admin/user', $data);
        $this->view('template/footerAdmin');
    }

    public function history()
    {
        $data['history'] = $this->model('Admin_model')->getAllHistory();

        $this->view('template/headerAdmin');
        $this->view('admin/historyBarang', $data);
        $this->view('template/footerAdmin');
    }

    public function perizinan()
    {
        $data['perizinanByDate'] = $this->model('Admin_model')->getPeminjamanByDate();

        $this->view('template/headerAdmin');
        $this->view('admin/perizinan', $data);
        $this->view('template/footerAdmin');
    }

    public function detailPerizinan($id, $tanggalPinjam, $tanggalKembali)
    {
        $data['detailPerizinan'] = $this->model('Admin_model')->getPeminjamanByDateId($id, $tanggalPinjam, $tanggalKembali);

        if (empty($data['detailPerizinan'])) {
            header('Location: ' . BASEURL2 . '/admin/perizinan');
            exit;
        } else {
            $this->view('template/headerAdmin');
            $this->view('admin/detailPerizinan', $data);
            $this->view('template/footerAdmin');
        }
    }

    public function detailHistory($id_user)
    {
        $data['detailHistory'] = $this->model('Admin_model')->getPeminjamanById($id_user);

        $this->view('template/headerAdmin');
        $this->view('admin/detailHistory', $data);
        $this->view('template/footerAdmin');
    }

    // method tambah barang
    public function tambahBarang()
    {
        if ($this->model('Admin_model')->tambahBarang($_POST, $_FILES) > 0) {
            Flasher::setFlash('Data Barang', 'Berhasil', 'ditambahkan!', 'success');
            header('Location: ' . BASEURL2 . '/admin/inventarisir');
            exit;
        } else {
            Flasher::setFlash('Data Barang', 'Gagal', 'ditambahkan!', 'danger');
            header('Location: ' . BASEURL2 . '/admin/inventarisir');
            exit;
        }
    }

    // method hapus barang
    public function hapusBarang($id_barang)
    {
        if ($this->model('Admin_model')->hapusBarang($id_barang) > 0) {
            Flasher::setFlash('Data Barang', 'Berhasil', 'dihapus!', 'success');
            header('Location: ' . BASEURL2 . '/admin/barang');
            exit;
        } else {
            Flasher::setFlash('Data Barang', 'Gagal', 'dihapus!', 'danger');
            header('Location: ' . BASEURL2 . '/admin/barang');
            exit;
        }
    }

    // method edit barang
    public function editBarang()
    {
        if ($this->model('Admin_model')->editBarang($_POST, $_FILES) > 0) {
            Flasher::setFlash('Data Barang', 'Berhasil', 'diubah!', 'success');
            header('Location: ' . BASEURL2 . '/admin/barang');
            exit;
        } else {
            Flasher::setFlash('Data Barang', 'Gagal', 'diubah!', 'danger');
            header('Location: ' . BASEURL2 . '/admin/barang');
            exit;
        }
    }

    // method tambah User
    public function tambahUser()
    {
        if ($this->model('Admin_model')->tambahUser($_POST) > 0) {
            Flasher::setFlash('Data User', 'Berhasil', 'ditambahkan!', 'success');
            header('Location: ' . BASEURL2 . '/admin/user');
            exit;
        } else {
            Flasher::setFlash('Data User', 'Gagal', 'ditambahkan!', 'danger');
            header('Location: ' . BASEURL2 . '/admin/user');
            exit;
        }
    }

    // method edit User
    public function editUser()
    {
        if ($this->model('Admin_model')->editUser($_POST) > 0) {
            Flasher::setFlash('Data User', 'Berhasil', 'diubah!', 'success');
            header('Location: ' . BASEURL2 . '/admin/user');
            exit;
        } else {
            Flasher::setFlash('Data User', 'Gagal', 'diubah!', 'danger');
            header('Location: ' . BASEURL2 . '/admin/user');
            exit;
        }
    }

    // method hapus User
    public function hapusUser($id_user)
    {
        if ($this->model('Admin_model')->hapusUser($id_user) > 0) {
            Flasher::setFlash('Data User', 'Berhasil', 'dihapus!', 'success');
            header('Location: ' . BASEURL2 . '/admin/user');
            exit;
        } else {
            Flasher::setFlash('Data User', 'Gagal', 'dihapus!', 'danger');
            header('Location: ' . BASEURL2 . '/admin/user');
            exit;
        }
    }

    // method konfirmasi peminjaman
    public function updateStatusPinjam()
    {
        $this->model('Admin_model')->updateStatusPeminjaman($_POST);

        header('Location: ' . BASEURL2 . '/admin');
    }

    // method konfirmasi peminjaman untuk perizinan
    public function updateStatusPinjamPerizinan()
    {
        $this->model('Admin_model')->updateStatusPeminjaman($_POST);

        header('Location: ' . BASEURL2 . '/admin/detailPerizinan/' . $_POST['id_user'] . '/' . $_POST['tanggalPinjam'] . '/' . $_POST['tanggalKembali']);
    }

    // method Tambah asal barang
    public function tambahAsalBarang()
    {
        if ($this->model('Admin_model')->tambahAsalBarang($_POST) > 0) {
            Flasher::setFlash('Data Asal Barang', 'Berhasil', 'ditambahkan!', 'success');
            header('Location: ' . BASEURL2 . '/admin/inventarisir');
            exit;
        } else {
            Flasher::setFlash('Data Asal Barang', 'Gagal', 'ditambahkan!', 'danger');
            header('Location: ' . BASEURL2 . '/admin/inventarisir');
            exit;
        }
    }

    // method pesan tolak peminjaman
    public function tolakPinjam()
    {
        $this->model('Admin_model')->tolakPeminjaman($_POST);

        header('Location: ' . BASEURL2 . '/admin');
    }

    // method pesan tolak perizinan
    public function tolakPerizinan()
    {
        if ($this->model('Admin_model')->tolakPeminjaman($_POST) > 0) {
            Flasher::setFlash('Peminjaman', 'Berhasil', 'ditolak!', 'success');
            header('Location: ' . BASEURL2 . '/admin/detailPerizinan/' . $_POST['id_user'] . '/' . $_POST['tanggalPinjam'] . '/' . $_POST['tanggalKembali']);
        } else {
            Flasher::setFlash('Peminjaman', 'Gagal', 'ditolak!', 'danger');
            header('Location: ' . BASEURL2 . '/admin/detailPerizinan/' . $_POST['id_user'] . '/' . $_POST['tanggalPinjam'] . '/' . $_POST['tanggalKembali']);
        }
    }
}