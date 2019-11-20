<?php
include_once "connectionInfo.php";
include_once "defaultDAO.php";
include_once "../entities/user.php";

class UserDAO extends DefaultDAO
{
    const INSERT_USER_DATA_SQL_QUERY = "INSERT INTO users (firstname, secondname, password, role, email) VALUES (?,?,?,?,?)";
    const GET_USER_BY_EMAIL_SQL_QUERY = "SELECT * FROM users WHERE email=? LIMIT 1";

    function addUser(User $user)
    {
        $connection = $this->getSqlConnection();
        $stmt = $connection->prepare(self::INSERT_USER_DATA_SQL_QUERY);
        $stmt->bind_param('sssss', $user->firstName,
            $user->secondName,
            $user->password,
            $user->role,
            $user->email);
        $stmt->execute() or die('Запрос не удался: ' . $stmt->error);
        $this->closeSqlConnection($connection);
    }

    function isUserWithSuchEmailPresent($email)
    {
        $connection = $this->getSqlConnection();
        $stmt = $connection->prepare(self::GET_USER_BY_EMAIL_SQL_QUERY);
        $stmt->bind_param('s', $email);
        $stmt->execute() or die('Запрос не удался: ' . $stmt->error);
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $this->closeSqlConnection($connection);
            return true;
        }
        $this->closeSqlConnection($connection);
        return false;
    }

    function getUserWithSuchEmail($email)
    {
        $connection = $this->getSqlConnection();
        $stmt = $connection->prepare(self::GET_USER_BY_EMAIL_SQL_QUERY);
        $stmt->bind_param('s', $email);
        $stmt->execute() or die('Запрос не удался: ' . $stmt->error);
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $user = $this->extractUserFromRow($row);
                $this->closeSqlConnection($connection);
                return $user;
            }
        }
        $this->closeSqlConnection($connection);
        return null;
    }

    function extractUserFromRow($row)
    {
        return new User($row["firstname"],
            $row["secondname"],
            $row["email"],
            $row["role"],
            $row["password"]);
    }

}