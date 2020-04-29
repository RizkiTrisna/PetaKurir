<?php

class Peta_model
{
    private $table = 'tb_peta';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPeta()
    {
        $this->db->query("SELECT * FROM $this->table");
        return $this->db->resultSet();
    }

    public function getDetail($index){
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_peta=:id_peta');
        $this->db->bind('id_peta',$index);
        return $this->db->single();
    }
}
