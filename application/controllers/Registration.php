<?php

require_once "application/core/Controller.php";

class Registration extends Controller
{
    /**
     * конструктор
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * страница регистрации
     */
    public function index()
    {
        echo 'Ура! Первый метод!';
    }
}
