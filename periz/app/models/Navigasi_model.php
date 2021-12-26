<?php

class Navigasi_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getNavigasiAll()
    {
        $this->db->query('SELECT navchild.*, navigasi.* FROM navchild RIGHT JOIN navigasi on navchild.id_nav=navigasi.id_nav;');
        return $this->db->resultSet();
    }

    public function getNavigasi()
    {
        $this->db->query('SELECT * FROM navigasi');
        return $this->db->resultSet();
    }

    public function getNavigasiById($id_nav)
    {
        $this->db->query('SELECT * FROM navigasi WHERE id_nav=:id_nav');
        $this->db->bind('id_nav', $id_nav);
        return $this->db->single();
    }


    public function ubahDataNavigasi($data)
    {
        $query = "UPDATE navigasi SET                  
                 nav_main=:nav_main,                 
                 nav_link=:nav_link                  
                 WHERE id_nav=:id_nav";
        $this->db->query($query);
        $this->db->bind('nav_main', $data['nav_main']);
        $this->db->bind('nav_link', $data['nav_link']);
        $this->db->bind('id_nav', $data['id_nav']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getChild()
    {
        $this->db->query('SELECT * FROM navchild');
        return $this->db->resultSet();
    }

    public function getChildById($id_child)
    {
        $this->db->query('SELECT * FROM navchild WHERE id_child=:id_child');
        $this->db->bind('id_child', $id_child);
        return $this->db->single();
    }


    public function ubahDataChild($data)
    {
        $query = "UPDATE navchild SET                  
                 child_name=:child_name,                 
                 child_link=:child_link                  
                 WHERE id_child=:id_child ";
        $this->db->query($query);
        $this->db->bind('child_name', $data['child_name']);
        $this->db->bind('child_link', $data['child_link']);
        $this->db->bind('id_child', $data['id_child']);
        $this->db->execute();

        return $this->db->rowCount();
    }
}
