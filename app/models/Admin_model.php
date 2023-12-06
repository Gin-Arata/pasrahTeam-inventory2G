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

}