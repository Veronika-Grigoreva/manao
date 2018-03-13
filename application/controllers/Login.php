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
        $testModel = Manao::getModel('test');
        if ($testModel) {
            $this->renderView('login');
        } else {
            echo 'Model not found';
        }
    }
}
