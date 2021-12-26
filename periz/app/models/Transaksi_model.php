<?php

class Transaksi_model
{
    private $table = 'transaksi';
    private $table2 = 'status';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getNameTransaksi()
    {
        $this->db->query('select transaksi.id_perusahaan, transaksi.id_transaksi, transaksi.nama_izin, transaksi.merk_usaha, perusahaan.nama_perusahaan, status.* FROM transaksi INNER JOIN perusahaan on transaksi.id_perusahaan=perusahaan.id_perusahaan INNER JOIN status ON transaksi.id_status=status.id_status');
        return $this->db->resultSet();
    }
    // public function getAllTransaksi()
    // {
    //     $this->db->query('select * from ' . $this->table);
    //     return $this->db->resultSet();
    // }

    public function getAllTransaksi()
    {
        $this->db->query('select transaksi.*, perusahaan.nama_perusahaan, status.* FROM transaksi INNER JOIN perusahaan on transaksi.id_perusahaan=perusahaan.id_perusahaan INNER JOIN status ON transaksi.id_status=status.id_status');
        return $this->db->resultSet();
    }

    public function getStatus()
    {
        $this->db->query('select * from status');
        return $this->db->resultSet();
    }

    public function getTransaksiById($id_transaksi)
    {
        $this->db->query('select transaksi.*, perusahaan.nama_perusahaan, status.* FROM transaksi INNER JOIN perusahaan on transaksi.id_perusahaan=perusahaan.id_perusahaan INNER JOIN status ON transaksi.id_status=status.id_status where id_transaksi=:id_transaksi');
        $this->db->bind('id_transaksi', $id_transaksi);
        return $this->db->single();
    }

    public function tambahDataTransaksi($data)
    {
        $query = "INSERT INTO transaksi
        VALUES 
                 (:id_transaksi, :nama_izin, :alamat_perusahaan, :merk_usaha, :nama_pemilik, :nama_penanggung_jawab, :jumlah_karyawan, :id_status, :id_perusahaan)";
        $this->db->query($query);
        $this->db->bind('id_transaksi', $data['id_transaksi']);
        $this->db->bind('nama_izin', $data['nama_izin']);
        $this->db->bind('alamat_perusahaan', $data['alamat_perusahaan']);
        $this->db->bind('merk_usaha', $data['merk_usaha']);
        $this->db->bind('nama_pemilik', $data['nama_pemilik']);
        $this->db->bind('nama_penanggung_jawab', $data['nama_penanggung_jawab']);
        $this->db->bind('jumlah_karyawan', $data['jumlah_karyawan']);
        $this->db->bind('id_status', $data['id_status']);
        $this->db->bind('id_perusahaan', $data['id_perusahaan']);


        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataTransaksi($id_transaksi)
    {
        $query = "DELETE FROM " . $this->table . " WHERE id_transaksi=:id_transaksi";
        $this->db->query($query);
        $this->db->bind('id_transaksi', $id_transaksi);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function ubahDataTransaksi($data)
    {
        $query = "UPDATE transaksi SET  
                 nama_izin=:nama_izin,
                 alamat_perusahaan=:alamat_perusahaan,
                 merk_usaha=:merk_usaha,
                 nama_pemilik=:nama_pemilik,
                 nama_penanggung_jawab=:nama_penanggung_jawab,
                 jumlah_karyawan=:jumlah_karyawan,                
                 id_status=:id_status 
                 WHERE id_transaksi=:id_transaksi";
        $this->db->query($query);
        $this->db->bind('nama_izin', $data['nama_izin']);
        $this->db->bind('alamat_perusahaan', $data['alamat_perusahaan']);
        $this->db->bind('merk_usaha', $data['merk_usaha']);
        $this->db->bind('nama_pemilik', $data['nama_pemilik']);
        $this->db->bind('nama_penanggung_jawab', $data['nama_penanggung_jawab']);
        $this->db->bind('jumlah_karyawan', $data['jumlah_karyawan']);
        $this->db->bind('id_status', $data['id_status']);
        $this->db->bind('id_transaksi', $data['id_transaksi']);
        $this->db->execute();

        return $this->db->rowCount();
    }


    public function autoIncrement()
    {
        $this->db->query("SELECT id_transaksi FROM " . $this->table . " ORDER BY id_transaksi DESC");
        $id = $this->db->single();
        $kode = $id['id_transaksi'];
        $get = substr($kode, 3, 3);
        $tambah = (int) $get + 1;

        if (strlen($tambah) == 1) {
            $format = "trn00" . $tambah;
        } elseif (strlen($tambah) == 2) {
            $format = "trn0" . $tambah;
        } else {
            $format = "trn" . $tambah;
        }
        return $format;
    }
}
// insert multiple table
// BEGIN;
// INSERT INTO transaksi (id_transaksi, nama_izin, alamat_perusahaan, merk_usaha, nama_pemilik, nama_penanggung_jawab, jumlah_karyawan, id_status, id_perusahaan)
//   VALUES('test', 'test', '', '', '', '', '','st001','CO001');
// INSERT INTO status (id_status, approval) 
//   VALUES('st004','cancel');
// INSERT INTO akun (id_akun, username, password) 
//   VALUES('a001','udin', '12345');
// COMMIT;