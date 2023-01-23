<?php

class Model extends Database
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get($table, $where = null, $order = null, $limit = null)
    {
        $sql = "SELECT * FROM $table";
        if ($where != null) {
            $sql .= " WHERE $where";
        }
        if ($order != null) {
            $sql .= " ORDER BY $order";
        }
        if ($limit != null) {
            $sql .= " LIMIT $limit";
        }
        $result = $this->runQuery($sql);
        return $result;
    }

<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes
    public function insert($table, $data)
    {
        $sql = "INSERT INTO $table SET ";

        foreach ($data as $column => $value) {
            $sql .= "$column = '$value', ";
        }
        $sql = substr($sql, 0, -2);
        $result = $this->runQuery($sql);
        return $result;
    }


<<<<<<< Updated upstream
=======
    public function update($table, $data, $where)
    {
        $sql = "UPDATE $table SET ";
        foreach ($data as $key => $value) {
            $sql .= "$key = '$value', ";
        }
        
        $sql = substr($sql, 0, -2);
        $sql .= " WHERE $where";
        $result = $this->runQuery($sql);
        return $result;
    }

>>>>>>> Stashed changes
    public function delete($table, $where)
    {
        $sql = "DELETE FROM $table WHERE $where";
        $result = $this->runQuery($sql);
        return $result;
    }
<<<<<<< Updated upstream
=======

>>>>>>> Stashed changes
}