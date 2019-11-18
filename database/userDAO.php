<?php
include_once "connectionInfo.php";


class UserDAO extends DefaultDAO
{
    const INSERT_USER_DATA_SQL_QUERY = "INSERT INTO users (firstname, secondname, password, role, email) VALUES (?,?,?,?,?)";
    const GET_USER_DATA_SQL_QUERY = "SELECT * FROM users where email=?";

    function addUser(User $user)
    {
        $connection = $this->getSqlConnection();
        $stmt = $connection->prepare(self::INSERT_USER_DATA_SQL_QUERY);
        echo $user->email;
        $stmt->bind_param('sssss',$user->firstName, $user->secondName, $user->password, $user->role, $user->email);
        $stmt->execute() or die('Запрос не удался: ' . $stmt->error);
        $this->closeSqlConnection($connection);
        echo "SUCCESS";
    }

    function getUserByEmail($email, $password)
    {
        $query = "SELECT * FROM users WHERE e-mail=?;";
    }


}