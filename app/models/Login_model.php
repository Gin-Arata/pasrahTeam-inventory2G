<?php

class Login_model {
    private $tableUser = 'user';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getUserByNIM($data) {
        $this->db->query("SELECT * FROM $this->tableUser WHERE nomor_induk = :nim_user");
        $this->db->bind('nim_user', htmlspecialchars($data['user_nim']));
        return $this->db->single();
    }
}