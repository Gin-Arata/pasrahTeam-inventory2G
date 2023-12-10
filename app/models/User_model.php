<?php
class User_model {
    private $db;
    private $table = "user";

    public function __construct() {
        $this->db = new Database;
    }

    public function getUser($nim)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE nomor_induk=:nomor_induk');
        $this->db->bind('nomor_induk', $nim);
        return $this->db->single();
    }

    
    public function meminjamBarang($data) {
        $this->db->query('INSERT INTO peminjaman (id_peminjaman, id_user, id_barang, waktu_pinjam, waktu_pengembalian, jumlah_dipinjam, keterangan_pinjam, status_pinjam) VALUES(:id_peminjaman, :id_user, :id_barang, :waktu_pinjam, :waktu_pengembalian, :jumlah_dipinjam, :keterangan_pinjam, :status_pinjam)');
        $this->db->bind(':id_peminjaman', $data['id_peminjaman']);
        $this->db->bind(':id_user', $data['id_user']);
        $this->db->bind(':id_barang', $data['id_barang']);
        $this->db->bind(':waktu_pinjam', $data['waktu_pinjam']);
        $this->db->bind(':waktu_pengembalian', $data['waktu_pengembalian']);
        $this->db->bind(':jumlah_dipinjam', $data['jumlah_dipinjam']);
        $this->db->bind(':keterangan_pinjam', $data['keterangan_pinjam']);
        $this->db->bind(':status_pinjam', $data['status_pinjam']);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    
    public function returnItem($data) {
        $this->db->query('UPDATE mengembalikanBarang SET end_date = :end_date WHERE user_id = :user_id AND item_id = :item_id AND end_date IS NULL');
        $this->db->bind(':user_id', $data['user_id']);
        $this->db->bind(':item_id', $data['item_id']);
        $this->db->bind(':end_date', $data['end_date']);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    
} 