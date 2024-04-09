<?php

class DB
{
    private $servername = "localhost";
    private $username = "user";
    private $password = "password";
    private $dbname = "db";
    private $conn;

    // это конструктор этого класса, если что
    public function __construct() {
        // Создаем подключение
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        // Если подключение грустное то ошибка
        if ($this->conn->connect_error) {
            die("Connection error" . $this->conn->connect_error);
        }

        echo "Connection success";
    }

    public function closeConnection() {
        $this->conn->close();
        echo "Connection is closed...";
    }

    public function addUser($username, $login, $password) {

        // SQL запрос для добавления пользователя
        $sql = "INSERT INTO users (login, password) VALUES ('$login', '$password')";

        if ($this->conn->query($sql) === TRUE) {
            echo "Add success";
        } else {
            echo "Add error" . $this->conn->error;
        }
    }

    public function deleteUserByID($userId) {

        // SQL запрос для удаления пользователя по id
        $sql = "DELETE FROM users WHERE id = $userId";

        if ($this->conn->query($sql) === TRUE) {
            echo "Delete success";
        } else {
            echo "Delete error" . $this->conn->error;
        }
    }

    public function deleteUserByLogin($login) {

        // SQL запрос для удаления пользователя по id
        $sql = "DELETE FROM users WHERE login = $login";

        if ($this->conn->query($sql) === TRUE) {
            echo "Delete success";
        } else {
            echo "Delete error" . $this->conn->error;
        }
    }


}

    // Создали где-то экземпляр для подключения
    //$databaseConnection = new DBConnector();


