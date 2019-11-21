<?php
require_once "../database/userDAO.php";
require_once "../utils/sessionExecutor.php";

 $userDAO = new UserDAO();
 $userArray = $userDAO->getUsersByLimit(10);
 $currentRole = SessionExecutor::isUserAuthorized()? SessionExecutor::getUserData()['role'] : "none";
 echo json_encode(array("currentRole" => $currentRole,"usersList" => $userArray));