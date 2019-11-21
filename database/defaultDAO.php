<?php
abstract class DefaultDAO{

    function getSqlConnection()
    {
        $host = 'localhost'; // адрес сервера
        $database = 'tatiana_website'; // имя базы данных
        $user = 'root'; // имя пользователя
        $password = 'root'; // пароль
        $link = mysqli_connect($host, $user, $password, $database)
        or die("Ошибка " . mysqli_error($link));
        return $link;
    }

    function closeSqlConnection($link)
    {
        mysqli_close($link);
    }
}