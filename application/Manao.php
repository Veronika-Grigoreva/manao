<?php

require_once "core/Router.php";

abstract class Manao
{
    /**
     * конструктор
     */
    public function run()
    {
        //инициализируем объект класса маршрутизатора
        $router = new Router();
        //попытка вызвать контроллер
        $router->runController();
    }

    /**
     * метод автозагрузки модели
     */
    public function getModel($modelName)
    {
        $modelName = ucfirst($modelName);
        $modelPath = 'application' . DIRECTORY_SEPARATOR . 'models' . DIRECTORY_SEPARATOR . $modelName . '.php';
        if (file_exists($modelPath)) {
            require_once $modelPath;
        } else {
            return false;
        }
        $model = new $modelName();

        return $model;
    }
}
