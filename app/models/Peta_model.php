<?php

class Peta_model
{
    private $dbh;
    private $stmt;

    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=petakurir';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage()); //hentikan pake die
        }
    }
    public function getAllPeta()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM tb_peta');
        $this->stmt->execute();

        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
