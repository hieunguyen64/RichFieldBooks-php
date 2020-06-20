<?php
class ModelDb
{
    public $conn = null;

    public function __construct()
    {
        $this->conn = new PDO("mysql:host=" . HOST . ";dbname=" . DB, USER, PASSWORD);
        $this->conn->query("set names utf8");

    }

    public function sqlSelect($sql, $arr = array())
    {
        $stm = $this->conn->prepare($sql);
        $stm->execute($arr);
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function sqlUpdate($sql, $arr = array())
    {
        $stm = $this->conn->prepare($sql);
        $stm->execute($arr);
        return $stm->rowCount();
    }
}
