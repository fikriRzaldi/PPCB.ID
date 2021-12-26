<?php

class Akun_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAkun()
    {
        $this->db->query('SELECT * FROM akun');
        return $this->db->resultSet();
    }

    public function getAkunById($id_akun)
    {
        $this->db->query('SELECT * FROM akun WHERE id_akun=:id_akun');
        $this->db->bind('id_akun', $id_akun);
        return $this->db->single();
    }


    public function ubahDataAkun($data)
    {
        $query = "UPDATE akun SET                  
                 username=:username,
                 password=:password                                  
                 WHERE id_akun=:id_akun ";
        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('id_akun', $data['id_akun']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function tambahDataAkun($data)
    {
        $query = "INSERT INTO akun
        VALUES 
            (:id_akun, :username, :password)";
        $this->db->query($query);
        $this->db->bind('id_akun', $data['id_akun']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataAkun($id_akun)
    {
        $query = "DELETE FROM akun WHERE id_akun=:id_akun";
        $this->db->query($query);
        $this->db->bind('id_akun', $id_akun);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function autoIncrement()
    {
        $this->db->query("SELECT id_akun FROM akun ORDER BY id_akun DESC");
        $id = $this->db->single();
        $kode = $id['id_akun'];
        $get = substr($kode, 3, 3);
        $tambah = (int) $get + 1;

        if (strlen($tambah) == 1) {
            $format = "ACC00" . $tambah;
        } elseif (strlen($tambah) == 2) {
            $format = "ACC0" . $tambah;
        } else {
            $format = "ACC" . $tambah;
        }
        return $format;
    }
}
