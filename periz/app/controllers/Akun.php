<?php

class Akun extends Controller
{
    public function index()
    {
        $data['judul'] = 'Data Admin Website';
        $data['head'] = $this->model('Header_model')->getHeader();
        $data['footer'] = $this->model('Footer_model')->getFooter();
        $data['akun'] = $this->model('Akun_model')->getAkun();
        $data['aside'] = $this->model('Aside_model')->getAside();
        $data['nav'] = $this->model('Navigasi_model')->getNavigasi();
        $data['child'] = $this->model('Navigasi_model')->getChild();
        $this->view('templates/header', $data);
        $this->view('templates/nav', $data);
        $this->view('akun/index', $data);
        $this->view('templates/aside', $data);
        $this->view('templates/footer', $data);
    }
    public function ubah($id_akun)
    {
        $data['judul'] = 'Ubah Data Admin';
        $data['head'] = $this->model('Header_model')->getHeader();
        $data['footer'] = $this->model('Footer_model')->getFooter();
        $data['akun'] = $this->model('Akun_model')->getAkunById($id_akun);
        $data['aside'] = $this->model('Aside_model')->getAside();
        $data['nav'] = $this->model('Navigasi_model')->getNavigasi();
        $data['child'] = $this->model('Navigasi_model')->getChild();
        $this->view('templates/header', $data);
        $this->view('templates/nav', $data);
        $this->view('akun/ubah', $data);
        $this->view('templates/aside', $data);
        $this->view('templates/footer', $data);
    }
    public function tambah()
    {
        $data['judul'] = 'Tambah Data Admin';
        $data['head'] = $this->model('Header_model')->getHeader();
        $data['footer'] = $this->model('Footer_model')->getFooter();
        $data['aside'] = $this->model('Aside_model')->getAside();
        $data['nav'] = $this->model('Navigasi_model')->getNavigasi();
        $data['child'] = $this->model('Navigasi_model')->getChild();
        $data['auto'] = $this->model('Akun_model')->autoIncrement();
        $this->view('templates/header', $data);
        $this->view('templates/nav', $data);
        $this->view('akun/tambah', $data);
        $this->view('templates/aside', $data);
        $this->view('templates/footer', $data);
    }

    public function add()
    {
        if ($this->model('Akun_model')->tambahDataAkun($_POST) > 0) {
            header('Location: ' . BASEURL . '/akun');
            exit;
        }
    }

    public function hapus($id_akun)
    {
        if ($this->model('Akun_model')->hapusDataAkun($id_akun) > 0) {
            header('Location: ' . BASEURL . '/akun');
            exit;
        }
    }

    public function ubahData()
    {
        if ($this->model('Akun_model')->ubahDataAkun($_POST) > 0) {
            header('Location: ' . BASEURL . '/akun');
            exit;
        } else {
            header('Location: ' . BASEURL . '/akun');
            exit;
        }
    }
}
