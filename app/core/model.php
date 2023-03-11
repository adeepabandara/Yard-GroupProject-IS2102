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


    public function delete($table, $where)
    {
        $sql = "DELETE FROM $table WHERE $where";
        $result = $this->runQuery($sql);
        return $result;
    }


    public function getBatchPrice($product_code, $quantity)
    {
        $sql = "SELECT batch_id, selling_price, LEAST(quantity_remaining, $quantity) as quantity
            FROM (
                SELECT batch_table.*, SUM(quantity_remaining) OVER (ORDER BY grn_date , batch_sequence, batch_id) as running_total
                FROM batch_table
                WHERE product_code = $product_code AND quantity_remaining > 0
            ) subquery
            WHERE running_total - quantity_remaining < $quantity
            ORDER BY grn_date, batch_sequence, batch_id";
        
        $result = $this->runQuery($sql);
        return $result;
    }
    

}