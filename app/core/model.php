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


    public function lastId($table,$where)
    {
        $sql ="SELECT MAX($where) AS max_id FROM $table";
        $result = $this->runQuery($sql);
        return $result;
    }


    public function getjoin($table1, $table2, $joinOn, $where = null, $order = null, $limit = null)
    {
        $sql = "SELECT * FROM $table1 JOIN $table2 ON $joinOn";
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


    public function getjoin1($table1,$table2,$table3,$joinOn1,$joinOn2,$where = null, $order = null, $limit = null)
{
    $sql = "SELECT * FROM $table1 
            JOIN $table2 ON $joinOn1";

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


public function getjoin4($table1, $table2, $table3, $table4, $table5, $joinOn1, $joinOn2, $joinOn3, $joinOn4, $where = null, $order = null, $limit = null)
{
    $sql = "SELECT * FROM $table1 
            JOIN $table2 ON $joinOn1 
            JOIN $table3 ON $joinOn2
            JOIN $table4 ON $joinOn3
            LEFT JOIN $table5 ON 1=1";

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


    public function delete($table, $where)
    {
        $sql = "DELETE FROM $table WHERE $where";
        $result = $this->runQuery($sql);
        return $result;
    }


    public function checkData($table, $condition = NULL)
    {
        $result = $this->get($table, $condition);
        
        if ($result->num_rows > 0) {
            return $result;
        } else {
            return null;
        }
    }



}