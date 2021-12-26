<?php

class Perusahaan_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getPerusahaan()
    {
        $this->db->query('SELECT * FROM perusahaan');
        return $this->db->resultSet();
    }

    public function getPerusahaanById($id_perusahaan)
    {
        $this->db->query('SELECT * FROM perusahaan WHERE id_perusahaan=:id_perusahaan');
        $this->db->bind('id_perusahaan', $id_perusahaan);
        return $this->db->single();
    }


    public function ubahDataPerusahaan($data)
    {
        $query = "UPDATE perusahaan SET                  
                 nama_perusahaan=:nama_perusahaan                                  
                 WHERE id_perusahaan=:id_perusahaan ";
        $this->db->query($query);
        $this->db->bind('nama_perusahaan', $data['nama_perusahaan']);
        $this->db->bind('id_perusahaan', $data['id_perusahaan']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function tambahDataPerusahaan($data)
    {
        $query = "INSERT INTO perusahaan
        VALUES 
            (:id_perusahaan, :nama_perusahaan)";
        $this->db->query($query);
        $this->db->bind('id_perusahaan', $data['id_perusahaan']);
        $this->db->bind('nama_perusahaan', $data['nama_perusahaan']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataPerusahaan($id_perusahaan)
    {
        $query = "DELETE FROM perusahaan WHERE id_perusahaan=:id_perusahaan";
        $this->db->query($query);
        $this->db->bind('id_perusahaan', $id_perusahaan);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function autoIncrement()
    {
        $this->db->query("SELECT id_perusahaan FROM perusahaan ORDER BY id_perusahaan DESC");
        $id = $this->db->single();
        $kode = $id['id_perusahaan'];
        $get = substr($kode, 2, 3);
        $tambah = (int) $get + 1;

        if (strlen($tambah) == 1) {
            $format = "CO00" . $tambah;
        } elseif (strlen($tambah) == 2) {
            $format = "CO0" . $tambah;
        } else {
            $format = "CO" . $tambah;
        }
        return $format;
    }
}
