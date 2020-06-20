<?php

class ModelBooks extends ModelDb
{
    public function searchByName()
    {
        $name = 'php';
        $sql = "select * from book where book_name like ?";
        $arr = ['%' . $name . '%'];
        return $this->sqlSelect($sql, $arr);
    }

    public function getAllBooks()
    {
        $sql = "select * from book";
        return $this->sqlSelect($sql);
    }
}
