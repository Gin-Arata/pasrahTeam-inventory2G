<?php

class User_model
{
    private $tableUser = 'user';
    private $tableBarang = 'barang';
    private $tablePeminjaman = 'peminjaman';

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllBarang()
    {
        $this->db->query('SELECT * FROM ' . $this->tableBarang);
        return $this->db->resultSet();
    }

    // method get barang by id
    public function getBarangById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->tableBarang . ' WHERE id_barang=:id_barang');
        $this->db->bind('id_barang', $id);
        return $this->db->resultSet();
    }

    public function getAllPeminjaman()
    {
        $this->db->query("SELECT * FROM $this->tablePeminjaman as p INNER JOIN $this->tableUser as u ON p.id_user = u.id_user INNER JOIN $this->tableBarang as b ON p.id_barang = b.id_barang");
        return $this->db->resultSet();
    }

    // Get user by id
    public function getUserById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->tableUser . ' WHERE id_user=:id_user');
        $this->db->bind('id_user', $id);
        return $this->db->single();
    }

    // method insert peminjaman berdasarkan input id barang
    public function insertPeminjaman($data)
    {
        $this->db->query("INSERT INTO $this->tablePeminjaman (id_barang, id_user, waktu_pinjam, waktu_pengembalian, jumlah_dipinjam, keterangan_pinjam) VALUES (:id_barang, :id_user, :mulai_pinjam, :batas_pinjam, :jumlah_dipinjam, :alasan_pinjam)");

        $this->db->bind('id_barang', $data['id_barang']);
        $this->db->bind('id_user', $data['id_user']);
        $this->db->bind('mulai_pinjam', $data['mulai_pinjam']);
        $this->db->bind('batas_pinjam', $data['batas_pinjam']);
        $this->db->bind('jumlah_dipinjam', $data['jumlah_barang']);
        $this->db->bind('alasan_pinjam', $data['alasan_pinjam']);

        $this->db->execute();

        $this->db->query("UPDATE $this->tableBarang SET jumlah_barang = jumlah_barang - :jumlah_dipinjam WHERE id_barang = :id_barang");
        $this->db->bind('jumlah_dipinjam', $data['jumlah_barang']);
        $this->db->bind('id_barang', $data['id_barang']);

        $this->db->execute();

        return $this->db->rowCount();
    }


    // function get all barang by id peminjaman
    public function getAllBarangByIdPeminjaman($data) {
        $this->db->query("SELECT * FROM $this->tablePeminjaman JOIN $this->tableBarang ON $this->tablePeminjaman.id_barang = $this->tableBarang.id_barang WHERE id_peminjaman = :id_peminjaman");
        $this->db->bind('id_peminjaman', $data['idPeminjaman']);
        return $this->db->resultSet();
    }

    // function update jumlah Barang
    public function updateJumlahBarang($data) {
        $this->db->query("UPDATE $this->tableBarang SET jumlah_barang = jumlah_barang + :jumlah_dikembalikan WHERE id_barang = :id_barang");
        $this->db->bind('jumlah_dikembalikan', $data['jumlah_dipinjam']);
        $this->db->bind('id_barang', $data['id_barang']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    // function update peminjaman
    public function updatePeminjamanStatus($data) {
        $this->db->query("UPDATE $this->tablePeminjaman SET status_pinjam = :status_pinjam WHERE id_peminjaman = :id_peminjaman");
        $this->db->bind('status_pinjam', $data['status']);
        $this->db->bind('id_peminjaman', $data['idPeminjaman']);
        $this->db->execute();
    }

    // function get all peminjaman by id
    public function getAllPeminjamanById($id_user) {
        $this->db->query("SELECT * FROM $this->tablePeminjaman JOIN $this->tableBarang ON $this->tablePeminjaman.id_barang = $this->tableBarang.id_barang WHERE id_user = :id_user AND status_pinjam = 'Disetujui'");
        $this->db->bind('id_user', $id_user);
        return $this->db->resultSet();
    }

    // function get all peminjaman by id
    public function getAllPeminjamanByIdUser($id_user) {
        $this->db->query("SELECT * FROM $this->tablePeminjaman JOIN $this->tableBarang ON $this->tablePeminjaman.id_barang = $this->tableBarang.id_barang WHERE id_user = :id_user");
        $this->db->bind('id_user', $id_user);
        return $this->db->resultSet();
    }

    // function proses pengembalian
   public function prosesPengembalian($id_peminjaman) {
        $this->db->query("UPDATE $this->tablePeminjaman SET status_pinjam = 'Selesai' WHERE id_peminjaman = :id_peminjaman");
        $this->db->bind('id_peminjaman', $id_peminjaman);
        $this->db->execute();

        return $this->db->rowCount();
   }
}