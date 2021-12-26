<?php

class Header_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getHeader()
    {
        $this->db->query('SELECT * FROM header');
        return $this->db->single();
    }

    public function getHeaderById($id_header)
    {
        $this->db->query('SELECT * FROM header WHERE id_header=:id_header');
        $this->db->bind('id_header', $id_header);
        return $this->db->single();
    }


    public function ubahDataHeader($data)
    {
        $query = "UPDATE header SET                  
                 logo=:logo,                 
                 nama_web=:nama_web, 
                 sub_text=:sub_text, 
                 alamat=:alamat 
                 WHERE id_header=:id_header ";
        $this->db->query($query);
        $this->db->bind('logo', $data['logo']);
        $this->db->bind('nama_web', $data['nama_web']);
        $this->db->bind('sub_text', $data['sub_text']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('id_header', $data['id_header']);
        $this->db->execute();

        return $this->db->rowCount();
    }
}
