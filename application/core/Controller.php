<?php

require_once "application/Manao.php";

abstract class Controller
{
    /**
     * конструктор
     */
    public function __construct()
    {

    }

    /**
     * перехватываем вызов несуществующих методов
     */
    public function __call($name, $arguments)
    {
        exit('Not found 404');
    }

    protected function renderView($path, $data = false)
    {
        $viewPath = 'application' . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . $path . '.php';
        if (file_exists($viewPath)) {
            require_once $viewPath;
        } else {
            return false;
        }
    }
}
