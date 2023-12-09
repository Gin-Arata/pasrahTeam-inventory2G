<?php

class Admin_model
{
    private $tableBarang = 'barang';
    private $tableUser = 'user';
    private $tablePeminjaman = 'peminjaman';
    private $tableAsalBarang = 'asal_barang';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // method total barang
    public function totalBarang()
    {
        $this->db->query("SELECT COUNT(id_barang) as total_barang FROM $this->tableBarang");
        return $this->db->single();
    }

    // method total user
    public function totalUser()
    {
        $this->db->query("SELECT COUNT(id_user) as total_user FROM $this->tableUser");
        return $this->db->single();
    }

    public function getAllBarang()
    {
        $this->db->query("SELECT * FROM $this->tableBarang AS b INNER JOIN $this->tableAsalBarang AS a ON b.id_asal = a.id_asal");
        return $this->db->resultSet();
    }

    public function getAllUser()
    {
        $this->db->query("SELECT * FROM $this->tableUser");
        return $this->db->resultSet();
    }

    public function getAllAsalBarang() {
        $this->db->query("SELECT * FROM $this->tableAsalBarang");
        return $this->db->resultSet();
    }

    public function getAllPeminjaman() {
        $this->db->query("SELECT * FROM $this->tablePeminjaman as p INNER JOIN $this->tableUser as u ON p.id_user = u.id_user INNER JOIN $this->tableBarang as b ON p.id_barang = b.id_barang");
        return $this->db->resultSet();
    }

    public function getBarangById($id_barang)
    {
        $this->db->query("SELECT * FROM $this->tableBarang WHERE id_barang = :id_barang");
        $this->db->bind('id_barang', $id_barang);
        return $this->db->single();
    }

    // functon tambah barnag
    public function tambahBarang($data, $img)
    {
        $gambar_barang = $img['gambar_barang']['name'];

        $targetDirImg = $_SERVER['DOCUMENT_ROOT'] . '/pasrahTeam-inventory2G/public/img/barang/';
        $tmpFile = $img['gambar_barang']['tmp_name'];
        move_uploaded_file($tmpFile, $targetDirImg . $gambar_barang);

        $this->db->query("INSERT INTO $this->tableBarang(nama_barang, kode_barang, maintainer_barang, jumlah_barang, keterangan_barang, gambar_barang, id_asal) VALUES(:nama_barang, :kode_barang, :maintainer_barang, :jumlah_barang, :keterangan_barang, :gambar_barang, :id_asal)");
        $this->db->bind('nama_barang', htmlspecialchars($data['nama_barang']));
        $this->db->bind('kode_barang', htmlspecialchars($data['kode_barang']));
        $this->db->bind('maintainer_barang', htmlspecialchars($data['maintainer_barang']));
        $this->db->bind('jumlah_barang', htmlspecialchars($data['jumlah_barang']));
        $this->db->bind('keterangan_barang', htmlspecialchars($data['keterangan_barang']));
        $this->db->bind('gambar_barang', htmlspecialchars($gambar_barang));
        $this->db->bind('id_asal', htmlspecialchars($data['asal_barang']));
        return $this->db->execute();
    }

    // function edit barang
    public function editBarang($data, $img)
    {
        // Get the current image file
        $this->db->query("SELECT gambar_barang FROM $this->tableBarang WHERE id_barang = :id_barang");
        $this->db->bind('id_barang', $data['id_barang']);
        $currentImage = $this->db->single();

        // Delete the current image file
        $currentImagePath = $_SERVER['DOCUMENT_ROOT'] . '/pasrahTeam-inventory2G/public/img/barang/' . $currentImage['gambar_barang'];
        if (file_exists($currentImagePath)) {
            unlink($currentImagePath);
        }

        // Upload the new image file
        $gambar_barang = $img['edit_gambar']['name'];
        $targetDirImg = $_SERVER['DOCUMENT_ROOT'] . '/pasrahTeam-inventory2G/public/img/barang/';
        $tmpFile = $img['edit_gambar']['tmp_name'];
        move_uploaded_file($tmpFile, $targetDirImg . $gambar_barang);

        // Update the database
        $this->db->query("UPDATE $this->tableBarang SET nama_barang = :nama_barang, maintainer_barang = :maintainer_barang, jumlah_barang = :jumlah_barang, keterangan_barang = :keterangan_barang, gambar_barang = :gambar_barang WHERE id_barang = :id_barang");
        $this->db->bind('id_barang', $data['id_barang']);
        $this->db->bind('nama_barang', htmlspecialchars($data['edit_nama']));
        $this->db->bind('maintainer_barang', htmlspecialchars($data['edit_maintain']));
        $this->db->bind('jumlah_barang', htmlspecialchars($data['edit_jumlah']));
        $this->db->bind('keterangan_barang', htmlspecialchars($data['edit_keterangan']));
        $this->db->bind('gambar_barang', htmlspecialchars($gambar_barang));
        return $this->db->execute();
    }

    // function hapus barang
    public function hapusBarang($id_barang)
    {   
        $this->db->query("SELECT gambar_barang FROM $this->tableBarang WHERE id_barang = :id_barang");
        $this->db->bind('id_barang', $id_barang);
        $currentImage = $this->db->single();

        // Delete the current image file
        $currentImagePath = $_SERVER['DOCUMENT_ROOT'] . '/pasrahTeam-inventory2G/public/img/barang/' . $currentImage['gambar_barang'];
        if (file_exists($currentImagePath)) {
            unlink($currentImagePath);
        }

        $this->db->query("DELETE FROM $this->tableBarang WHERE id_barang = :id_barang");
        $this->db->bind('id_barang', $id_barang);
        return $this->db->execute();
    }

    // function tambah user
    public function tambahUser($data) {
        $this->db->query("INSERT INTO $this->tableUser(nama_user, nomor_induk, email_user, password_user, level) VALUES(:nama_user, :nomor_induk, :email_user, :pass_user, :level_user)");
        $this->db->bind('nama_user', htmlspecialchars($data['nama_user']));
        $this->db->bind('nomor_induk', htmlspecialchars($data['nomor_induk']));
        $this->db->bind('email_user', htmlspecialchars($data['email_user']));
        $this->db->bind('pass_user', htmlspecialchars(md5($data['pass_user'])));
        $this->db->bind('level_user', htmlspecialchars($data['level_user']));
        return $this->db->execute();
    }

    // function hapus user
    public function hapusUser($id_user) {
        $this->db->query("DELETE FROM $this->tableUser WHERE id_user = :id_user");
        $this->db->bind('id_user', $id_user);
        return $this->db->execute();
    }

    // function edit user
    public function editUser($data) {
        $this->db->query("UPDATE $this->tableUser SET nama_user = :nama_user, nomor_induk = :nomor_induk, email_user = :email_user, password_user = :pass_user, level = :level_user WHERE id_user = :id_user");
        $this->db->bind('id_user', $data['id_user']);
        $this->db->bind('nama_user', htmlspecialchars($data['nama_user']));
        $this->db->bind('nomor_induk', htmlspecialchars($data['nomor_induk']));
        $this->db->bind('email_user', htmlspecialchars($data['email_user']));
        $this->db->bind('pass_user', htmlspecialchars(md5($data['pass_user'])));
        $this->db->bind('level_user', htmlspecialchars($data['level_user']));
        return $this->db->execute();
    }

    // function konfirmasi peminjaman
    public function updateStatusPeminjaman($data) {
        $this->db->query("UPDATE $this->tablePeminjaman SET status_pinjam = :status_pinjam WHERE id_peminjaman = :id_peminjaman");
        $this->db->bind('id_peminjaman', $data['id_pinjam']);
        $this->db->bind('status_pinjam', $data['status']);
        return $this->db->execute();
    }

    // function tambah asal barang
    public function tambahAsalBarang($data) {
        $this->db->query("INSERT INTO $this->tableAsalBarang(asal_barang) VALUES(:asal_barang)");
        $this->db->bind('asal_barang', htmlspecialchars($data['asalBarangBaru']));
        return $this->db->execute();
    }

    // function tolak pesan peminjaman
    public function tolakPeminjaman($data) {
        $this->db->query("UPDATE $this->tablePeminjaman SET status_pinjam = :status_pinjam, pesan_penolakan = :pesan_tolak WHERE id_peminjaman = :id_peminjaman");
        $this->db->bind('id_peminjaman', $data['id_pinjam']);
        $this->db->bind('status_pinjam', $data['status']);
        $this->db->bind('pesan_tolak', htmlspecialchars($data['pesan_tolak']));
        return $this->db->execute();
    }
}