<?php

class User_model {
    private $tableBarang = 'barang';

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
}