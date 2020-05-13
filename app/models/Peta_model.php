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
    public function cari($data){
        
        $this->db->query("SELECT * FROM " . $this->table . " WHERE nama_pemilik=:nama_pemilik");
        $this->db->bind('nama_pemilik',$data['cari_peta']);
        // var_dump($this->db);
        return $this->db->resultSet();
    }

    public function tambahDataPeta($data){
        $query = "INSERT INTO tb_peta(nama_pemilik, alamat_lengkap, kota, provinsi, nohp, lat, lon) 
        VALUES (:nama_pemilik, :alamat_lengkap, :kota, :provinsi, :nohp, :lat, :lon)
        ";

        $this->db->query($query);
        $this->db->bind('nama_pemilik', $data['nama_pemilik']);
        $this->db->bind('alamat_lengkap', $data['alamat_lengkap']);
        $this->db->bind('kota', $data['kota']);
        $this->db->bind('provinsi', $data['provinsi']);
        $this->db->bind('nohp', $data['nohp']);
        $this->db->bind('lat', $data['lat']);
        $this->db->bind('lon', $data['lon']);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function ubahDataPeta($data){
        $query = "UPDATE tb_peta SET
                nama_pemilik=:nama_pemilik,
                alamat_lengkap=:alamat_lengkap,
                kota=:kota, 
                provinsi=:provinsi, 
                nohp=:nohp, 
                lat=:lat, 
                lon=:lon
                WHERE id_peta =:id_peta
                ";

        $this->db->query($query);
        $this->db->bind('nama_pemilik', $data['nama_pemilik']);
        $this->db->bind('alamat_lengkap', $data['alamat_lengkap']);
        $this->db->bind('kota', $data['kota']);
        $this->db->bind('provinsi', $data['provinsi']);
        $this->db->bind('nohp', $data['nohp']);
        $this->db->bind('lat', $data['lat']);
        $this->db->bind('lon', $data['lon']);
        $this->db->bind('id_peta', $data['id_peta']);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function hapusDataPeta($id){
        $query = "DELETE FROM tb_peta WHERE id_peta=:id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
