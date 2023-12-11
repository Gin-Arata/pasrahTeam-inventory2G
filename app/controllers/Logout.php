<?php

class Logout {
    public function index() {
        session_start();
        session_unset();
        session_destroy();
        header('Location: ' . BASEURL2 . '/login');
        exit;
    }
}