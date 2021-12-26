<?php

class Home_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getHome()
    {
        $this->db->query('SELECT * FROM home');
        return $this->db->single();
    }

    public function ubahDataHome($data)
    {
        $query = "UPDATE home SET                  
                 text=:text, 
                 sub_text=:sub_text,
                 image=:image,
                 head_link=:head_link
                 WHERE id_home=:id_home";
        $this->db->query($query);
        $this->db->bind('text', $data['text']);
        $this->db->bind('sub_text', $data['sub_text']);
        $this->db->bind('image', $data['image']);
        $this->db->bind('head_link', $data['head_link']);
        $this->db->bind('id_home', $data['id_home']);
        $this->db->execute();

        return $this->db->rowCount();
    }
}
