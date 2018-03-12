<?php

require_once "application/core/Controller.php";

class Index extends Controller
{
    /**
     * конструктор
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * главная страница
     */
    public function index()
    {
        echo 'Ура! Первый метод!';
    }
}
