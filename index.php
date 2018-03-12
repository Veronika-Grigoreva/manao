<?php
try {
    require_once "application/Manao.php";

    //создание объекта главного класса приложения
    $app = new Manao();
} catch (Exception $exception) {
    echo '<pre>' . $exception->getMessage() . '</pre>';
}