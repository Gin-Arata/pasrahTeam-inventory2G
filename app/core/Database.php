<?php

class Database {
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbName = DB_NAME;

    private $dbh;
    private $stmt;

    public function __construct() {
        // Koneksi database
        $dsn = "mysql:host=$this->host;dbname=$this->dbName";

        // Option Config
        $option = [
            PDO::ATTR_PERSISTENT => true, // Agar koneksi database terjaga terus
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION // Menampilkan error
        ];

        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $option);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    // Persiapan query
    public function query($query) {
        $this->stmt = $this->dbh->prepare($query);
    }

    // Berfungsi untuk menghindari SQL Injection
    public function bind($param, $value, $type=null) {
        if(is_null($type)) {
            switch(true) {
                case is_int($value) :
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value) :
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value) :
                    $type = PDO::PARAM_NULL;
                    break;
                default :
                    $type = PDO::PARAM_STR;
                    break;
            }
        }

        $this->stmt->bindValue($param, $value, $type);
    }

    // Eksekusi query
    public function execute() {
        $this->stmt->execute();
    }

    // Menentukan banyak data yang akan diambil

    // Jika ingin mengambil banyak data
    public function resultSet() {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Jika ingin mengambil satu data
    public function single() {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }
}