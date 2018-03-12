<?php

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
}
