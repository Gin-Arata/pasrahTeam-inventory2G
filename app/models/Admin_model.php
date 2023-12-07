<?php

class Admin_model {
    private $tableBarang = 'barang';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllBarang() {
        $this->db->query("SELECT * FROM $this->tableBarang");
        return $this->db->resultSet();
    }

    public function getBarangById($id_barang) {
        $this->db->query("SELECT * FROM $this->tableBarang WHERE id_barang = :id_barang");
        $this->db->bind('id_barang', $id_barang);
        return $this->db->single();
    }

}