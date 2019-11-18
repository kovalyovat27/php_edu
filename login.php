<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userData = new UserData($_POST["e-mail"], $_POST["secondname"], $_POST["role"], $_POST["password"], $_POST["repassword"]);
    if ($userData->isUserDataValid()) {
        $user = $userData->buildUser();
        echo $user -> getInfo();
    }
}