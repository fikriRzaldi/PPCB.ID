<?php

class Footer_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getFooter()
    {
        $this->db->query('SELECT * FROM footer');
        return $this->db->single();
    }

    public function ubahDataFooter($data)
    {
        $query = "UPDATE footer SET                  
                 copyright=:copyright,                 
                 facebook=:facebook, 
                 instagram=:instagram, 
                 twitter=:twitter,
                 nama_web=:nama_web,
                 slogan=:slogan,
                 keterangan=:keterangan
                 WHERE id_footer=:id_footer ";
        $this->db->query($query);
        $this->db->bind('copyright', $data['copyright']);
        $this->db->bind('facebook', $data['facebook']);
        $this->db->bind('instagram', $data['instagram']);
        $this->db->bind('twitter', $data['twitter']);
        $this->db->bind('nama_web', $data['nama_web']);
        $this->db->bind('slogan', $data['slogan']);
        $this->db->bind('keterangan', $data['keterangan']);
        $this->db->bind('id_footer', $data['id_footer']);
        $this->db->execute();

        return $this->db->rowCount();
    }
}
