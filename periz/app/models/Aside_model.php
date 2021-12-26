<?php

class Aside_model
{
    private $db;
    private $table = 'aside';

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAside()
    {
        $this->db->query('SELECT * FROM aside');
        return $this->db->resultSet();
    }

    public function ubahDataAside($data)
    {
        $query = "UPDATE aside SET                  
                 aside_faq=:aside_faq,                 
                 faq_answer=:faq_answer                
                 WHERE id_aside=:id_aside ";
        $this->db->query($query);
        $this->db->bind('aside_faq', $data['aside_faq']);
        $this->db->bind('faq_answer', $data['faq_answer']);
        $this->db->bind('id_aside', $data['id_aside']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function tambahDataAside($data)
    {
        $query = "INSERT INTO aside
        VALUES 
            (:id_aside, :aside_faq, :faq_answer)";
        $this->db->query($query);
        $this->db->bind('id_aside', $data['id_aside']);
        $this->db->bind('aside_faq', $data['aside_faq']);
        $this->db->bind('faq_answer', $data['faq_answer']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getAsideById($id_aside)
    {
        $this->db->query('SELECT * FROM aside WHERE id_aside=:id_aside');
        $this->db->bind('id_aside', $id_aside);
        return $this->db->single();
    }

    public function hapusDataAside($id_aside)
    {
        $query = "DELETE FROM aside WHERE id_aside=:id_aside";
        $this->db->query($query);
        $this->db->bind('id_aside', $id_aside);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function autoIncrement()
    {
        $this->db->query("SELECT id_aside FROM " . $this->table . " ORDER BY id_aside DESC");
        $id = $this->db->single();
        $kode = $id['id_aside'];
        $get = substr($kode, 3, 3);
        $tambah = (int) $get + 1;

        if (strlen($tambah) == 1) {
            $format = "asd00" . $tambah;
        } elseif (strlen($tambah) == 2) {
            $format = "asd0" . $tambah;
        } else {
            $format = "asd" . $tambah;
        }
        return $format;
    }
}
