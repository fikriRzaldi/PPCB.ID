<?php

class Transaksi extends Controller
{
    public function index()
    {
        $data['judul'] = 'Transaksi';
        $data['head'] = $this->model('Header_model')->getHeader();
        $data['footer'] = $this->model('Footer_model')->getFooter();
        $data['trns'] = $this->model('Transaksi_model')->getNameTransaksi();
        $data['aside'] = $this->model('Aside_model')->getAside();
        $data['nav'] = $this->model('Navigasi_model')->getNavigasi();
        $data['child'] = $this->model('Navigasi_model')->getChild();
        $this->view('templates/header', $data);
        $this->view('templates/nav', $data);
        $this->view('transaksi/index', $data);
        $this->view('templates/aside', $data);
        $this->view('templates/footer', $data);
    }

    public function detail($id_transaksi)
    {
        $data['judul'] = 'Detail Transaksi';
        $data['head'] = $this->model('Header_model')->getHeader();
        $data['footer'] = $this->model('Footer_model')->getFooter();
        $data['trns'] = $this->model('Transaksi_model')->getTransaksiById($id_transaksi);
        $data['aside'] = $this->model('Aside_model')->getAside();
        $data['nav'] = $this->model('Navigasi_model')->getNavigasi();
        $data['child'] = $this->model('Navigasi_model')->getChild();
        $this->view('templates/header', $data);
        $this->view('templates/nav', $data);
        $this->view('transaksi/detail', $data);
        $this->view('templates/aside', $data);
        $this->view('templates/footer', $data);
    }

    public function tambah()
    {
        $data['judul'] = 'Tambah Data Transaksi';
        $data['head'] = $this->model('Header_model')->getHeader();
        $data['footer'] = $this->model('Footer_model')->getFooter();
        $data['auto'] = $this->model('Transaksi_model')->autoIncrement();
        $data['trns'] = $this->model('Perusahaan_model')->getPerusahaan();
        $data['sts'] = $this->model('Transaksi_model')->getStatus();
        $data['aside'] = $this->model('Aside_model')->getAside();
        $data['nav'] = $this->model('Navigasi_model')->getNavigasi();
        $data['child'] = $this->model('Navigasi_model')->getChild();
        $this->view('templates/header', $data);
        $this->view('templates/nav', $data);
        $this->view('transaksi/tambah', $data);
        $this->view('templates/aside', $data);
        $this->view('templates/footer', $data);
    }

    public function add()
    {
        if ($this->model('Transaksi_model')->tambahDataTransaksi($_POST) > 0) {
            header('Location: ' . BASEURL . '/Transaksi');
            exit;
        }
    }

    public function hapus($id_transaksi)
    {
        if ($this->model('Transaksi_model')->hapusDataTransaksi($id_transaksi) > 0) {
            header('Location: ' . BASEURL . '/Transaksi');
            exit;
        }
    }

    public function ubah($id_transaksi)
    {
        $data['judul'] = 'Update Data Transaksi';
        $data['head'] = $this->model('Header_model')->getHeader();
        $data['footer'] = $this->model('Footer_model')->getFooter();
        $data['aside'] = $this->model('Aside_model')->getAside();
        $data['trns'] = $this->model('Transaksi_model')->getTransaksiById($id_transaksi);
        $data['nav'] = $this->model('Navigasi_model')->getNavigasi();
        $data['child'] = $this->model('Navigasi_model')->getChild();
        $this->view('templates/header', $data);
        $this->view('templates/nav', $data);
        $this->view('transaksi/ubah', $data);
        $this->view('templates/aside', $data);
        $this->view('templates/footer', $data);
    }

    public function ubahData()
    {
        if ($this->model('Transaksi_model')->ubahDataTransaksi($_POST) > 0) {
            header('Location: ' . BASEURL . '/transaksi/index');
            exit;
        } else {
            header('Location: ' . BASEURL . '/transaksi/index');
            exit;
        }
    }
}
