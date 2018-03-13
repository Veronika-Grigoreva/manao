<?php

class Router
{
    /**
     * хост
     */
    private $host;

    /**
     * путь (url) без get параметров
     */
    private $path;

    /**
     * конструктор
     */
    public function __construct()
    {
        $this->setHost();
        $this->setPath();
    }

    /**
     * записываем хост в свойство
     */
    private function setHost()
    {
        $this->host = $_SERVER['HTTP_HOST'];
    }

    /**
     * записываем url в свойство
     */
    private function setPath()
    {
        $this->path = explode("/", substr($_SERVER['PATH_INFO'], 1));
    }

    /**
     * метод автозагрузки контроллера
     */
    private static function loadController($className)
    {
        $controllerPath = 'application' . DIRECTORY_SEPARATOR . 'controllers' . DIRECTORY_SEPARATOR . $className . '.php';
        if (file_exists($controllerPath)) {
            require_once $controllerPath;
        } else {
            exit('Not found 404');
        }
    }

    /**
     * поиск и запуск необходимых контроллера и его метода из папки controllers
     */
    public function runController()
    {
        if (isset($this->path[0]) && $this->path[0]) {
            $controllerName = ucfirst($this->path[0]);
        } else {
            $controllerName = 'Index';
        }

        if (isset($this->path[1]) && $this->path[1]) {
            $methodName = $this->path[1];
        } else {
            $methodName = 'index';
        }

        //подключение контроллера
        self::loadController($controllerName);

        //создаем объект необходимого класса контроллера
        $controller = new $controllerName();
        $controller->$methodName();
    }
}
