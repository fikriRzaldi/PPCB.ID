<?php

class Perusahaan extends Controller
{
    public function index()
    {
        $data['judul'] = 'Data Perusahaan';
        $data['head'] = $this->model('Header_model')->getHeader();
        $data['footer'] = $this->model('Footer_model')->getFooter();
        $data['perusahaan'] = $this->model('Perusahaan_model')->getPerusahaan();
        $data['aside'] = $this->model('Aside_model')->getAside();
        $data['nav'] = $this->model('Navigasi_model')->getNavigasi();
        $data['child'] = $this->model('Navigasi_model')->getChild();
        $this->view('templates/header', $data);
        $this->view('templates/nav', $data);
        $this->view('perusahaan/index', $data);
        $this->view('templates/aside', $data);
        $this->view('templates/footer', $data);
    }
    public function ubah($id_perusahaan)
    {
        $data['judul'] = 'Ubah Data Perushaaan';
        $data['head'] = $this->model('Header_model')->getHeader();
        $data['footer'] = $this->model('Footer_model')->getFooter();
        $data['perusahaan'] = $this->model('Perusahaan_model')->getPerusahaanById($id_perusahaan);
        $data['aside'] = $this->model('Aside_model')->getAside();
        $data['nav'] = $this->model('Navigasi_model')->getNavigasi();
        $data['child'] = $this->model('Navigasi_model')->getChild();
        $this->view('templates/header', $data);
        $this->view('templates/nav', $data);
        $this->view('perusahaan/ubah', $data);
        $this->view('templates/aside', $data);
        $this->view('templates/footer', $data);
    }
    public function tambah()
    {
        $data['judul'] = 'Tambah Data Perushaaan';
        $data['head'] = $this->model('Header_model')->getHeader();
        $data['footer'] = $this->model('Footer_model')->getFooter();
        $data['aside'] = $this->model('Aside_model')->getAside();
        $data['nav'] = $this->model('Navigasi_model')->getNavigasi();
        $data['child'] = $this->model('Navigasi_model')->getChild();
        // $data['auto'] = $this->model('Transaksi_model')->autoIncrement();
        $this->view('templates/header', $data);
        $this->view('templates/nav', $data);
        $this->view('perusahaan/tambah', $data);
        $this->view('templates/aside', $data);
        $this->view('templates/footer', $data);
    }

    public function add()
    {
        if ($this->model('Perusahaan_model')->tambahDataPerusahaan($_POST) > 0) {
            header('Location: ' . BASEURL . '/perusahaan');
            exit;
        }
    }

    public function hapus($id_perusahaan)
    {
        if ($this->model('Perusahaan_model')->hapusDataPerusahaan($id_perusahaan) > 0) {
            header('Location: ' . BASEURL . '/perusahaan');
            exit;
        }
    }

    public function ubahData()
    {
        if ($this->model('Perusahaan_model')->ubahDataPerusahaan($_POST) > 0) {
            header('Location: ' . BASEURL . '/perusahaan');
            exit;
        } else {
            header('Location: ' . BASEURL . '/perusahaan');
            exit;
        }
    }
}
