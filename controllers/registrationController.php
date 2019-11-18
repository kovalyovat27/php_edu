<?php
require_once "../entities/userData.php";
require_once "../database/userDAO.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo $_POST["email"];
    $userData = new UserData($_POST["firstname"], $_POST["secondname"], $_POST["email"], $_POST["role"], $_POST["password"], $_POST["repassword"]);
    if ($userData->isUserDataValid()) {
        $user = $userData->buildUser();
        $userDao = new UserDAO();
        $userDao->addUser($user);

    } else {
        $userData->getInfo();
    }
}
?>