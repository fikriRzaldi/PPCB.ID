<?php

class Aside extends Controller
{
    public function index()
    {
        $data['judul'] = 'Aside Informations';
        $data['head'] = $this->model('Header_model')->getHeader();
        $data['footer'] = $this->model('Footer_model')->getFooter();
        $data['aside'] = $this->model('Aside_model')->getAside();
        $data['nav'] = $this->model('Navigasi_model')->getNavigasi();
        $data['child'] = $this->model('Navigasi_model')->getChild();
        $this->view('templates/header', $data);
        $this->view('templates/nav', $data);
        $this->view('aside/index', $data);
        $this->view('templates/aside', $data);
        $this->view('templates/footer', $data);
    }
    public function ubah($id_aside)
    {
        $data['judul'] = 'Edit Aside Info';
        $data['head'] = $this->model('Header_model')->getHeader();
        $data['footer'] = $this->model('Footer_model')->getFooter();
        $data['asideid'] = $this->model('Aside_model')->getAsideById($id_aside);
        $data['aside'] = $this->model('Aside_model')->getAside();
        $data['nav'] = $this->model('Navigasi_model')->getNavigasi();
        $data['child'] = $this->model('Navigasi_model')->getChild();
        $this->view('templates/header', $data);
        $this->view('templates/nav', $data);
        $this->view('aside/ubah', $data);
        $this->view('templates/aside', $data);
        $this->view('templates/footer', $data);
    }
    public function tambah()
    {
        $data['head'] = $this->model('Header_model')->getHeader();
        $data['judul'] = 'Tambah Konten Aside';
        $data['footer'] = $this->model('Footer_model')->getFooter();
        $data['aside'] = $this->model('Aside_model')->getAside();
        $data['nav'] = $this->model('Navigasi_model')->getNavigasi();
        $data['child'] = $this->model('Navigasi_model')->getChild();
        $data['auto'] = $this->model('Transaksi_model')->autoIncrement();
        $this->view('templates/header', $data);
        $this->view('templates/nav', $data);
        $this->view('aside/tambah', $data);
        $this->view('templates/aside', $data);
        $this->view('templates/footer', $data);
    }

    public function add()
    {
        if ($this->model('Aside_model')->tambahDataAside($_POST) > 0) {
            header('Location: ' . BASEURL . '/aside');
            exit;
        }
    }

    public function hapus($id_aside)
    {
        if ($this->model('Aside_model')->hapusDataAside($id_aside) > 0) {
            header('Location: ' . BASEURL . '/aside');
            exit;
        }
    }

    public function ubahData()
    {
        if ($this->model('Aside_model')->ubahDataAside($_POST) > 0) {
            header('Location: ' . BASEURL . '/aside');
            exit;
        } else {
            header('Location: ' . BASEURL . '/aside');
            exit;
        }
    }

    public function autoIncrement()
    {
        $this->db->query("SELECT id_aside FROM aside ORDER BY id_aside DESC");
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
