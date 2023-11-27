<?php

class Controller {
    protected function view($view, $data = []) {
        require_once 'app/view/' . $view . '.php';
    }
}