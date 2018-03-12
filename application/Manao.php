<?php

require_once "core/Router.php";

class Manao
{
    /**
     * конструктор
     */
    public function __construct()
    {
        //инициализируем объект класса маршрутизатора
        $router = new Router();
        //попытка вызвать контроллер
        $router->runController();
    }

}
