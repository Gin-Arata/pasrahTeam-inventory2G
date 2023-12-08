<?php

class Admin_model
{
    private $tableBarang = 'barang';
    private $tableUser = 'user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllBarang()
    {
        $this->db->query("SELECT * FROM $this->tableBarang");
        return $this->db->resultSet();
    }

    public function getAllUser()
    {
        $this->db->query("SELECT * FROM $this->tableUser");
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

        $this->db->query("INSERT INTO $this->tableBarang(nama_barang, kode_barang, maintainer_barang, jumlah_barang, asal_barang, keterangan_barang, gambar_barang) VALUES(:nama_barang, :kode_barang, :maintainer_barang, :jumlah_barang, :asal_barang, :keterangan_barang, :gambar_barang)");
        $this->db->bind('nama_barang', htmlspecialchars($data['nama_barang']));
        $this->db->bind('kode_barang', htmlspecialchars($data['kode_barang']));
        $this->db->bind('maintainer_barang', htmlspecialchars($data['maintainer_barang']));
        $this->db->bind('jumlah_barang', htmlspecialchars($data['jumlah_barang']));
        $this->db->bind('asal_barang', htmlspecialchars($data['asal_barang']));
        $this->db->bind('keterangan_barang', htmlspecialchars($data['keterangan_barang']));
        $this->db->bind('gambar_barang', htmlspecialchars($gambar_barang));
        return $this->db->execute();

    }

}