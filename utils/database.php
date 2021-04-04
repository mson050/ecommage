<?php

// define('HOST', 'localhost');
// define('DB_NAME', 't3h');
// define('DB_USER', 'root');
// define('DB_PASSWORD', 'root');

class DB {
    const HOST = 'localhost';
    const DB_NAME = 'first_week';
    const DB_USER = 'root';
    const DB_PASSWORD = '';

    // private $connection = null;

    public function getConnection()
    {
        $connection = new mysqli(self::HOST, self::DB_USER, self::DB_PASSWORD, self::DB_NAME);
        if ($connection->connect_error) {
            die('Can not connect to DB');
            return null;
        }
        return $connection;
    }

    public function queryFirst($table, $column, $value)
    {
        $sql = "SELECT * FROM {$table} WHERE {$column} = '{$value}' LIMIT 1";
        $connection = $this->getConnection();
        $result = $connection->query($sql);

        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        }
        return null;
    }
  
  

    public function store($table, $data)
    {
        $columns = [];
        $values = [];
        foreach ($data as $key => $value) {
            $columns[] = $key;
            $values[] = "'{$value}'";
        }
        $columnsStr = implode(',', $columns);
        $valuesStr = implode(',', $values);
        $sql = "INSERT INTO {$table} ({$columnsStr}) VALUES ({$valuesStr})";
        $connection = $this->getConnection();
        $result = $connection->query($sql);
        if ($result === true) {
            return true;
        }
        return false;
    }

    public function update($table, $data, $id)
    {
        $updateFields = [];
        foreach ($data as $key => $value) {
            $updateFields[] = "{$key}='{$value}'";
        }
        $updateFieldsStr = implode(',', $updateFields);
        $sql = "UPDATE {$table} SET {$updateFieldsStr} WHERE id = {$id}";
        $connection = $this->getConnection();
        $result = $connection->query($sql);
        if ($result === true) {
            return true;
        }
        return false;
    }

    public function delete($table, $id)
    {
        $sql = "DELETE FROM {$table} WHERE id = $id";
        $connection = $this->getConnection();
        $result = $connection->query($sql);
        if ($result === true) {
            return true;
        }
        return false;
    }

}
