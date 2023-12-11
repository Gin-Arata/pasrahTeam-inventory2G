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


}