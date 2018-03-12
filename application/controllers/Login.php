<?php

require_once "application/core/Controller.php";

class Login extends Controller
{
    /**
     * конструктор
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * страница авторизации
     */
    public function index()
    {
        echo 'Страница авторизации';
    }
}
