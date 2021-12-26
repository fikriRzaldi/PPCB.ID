<?php

class Navigasi extends Controller
{
    public function index()
    {
        $data['judul'] = 'Manage Navigation';
        $data['head'] = $this->model('Header_model')->getHeader();
        $data['footer'] = $this->model('Footer_model')->getFooter();
        $data['aside'] = $this->model('Aside_model')->getAside();
        $data['nav'] = $this->model('Navigasi_model')->getNavigasi();
        $data['child'] = $this->model('Navigasi_model')->getChild();

        $this->view('templates/header', $data);
        $this->view('templates/nav', $data);
        $this->view('navigasi/index', $data);
        $this->view('templates/aside', $data);
        $this->view('templates/footer', $data);
    }
    public function ubah($id_nav)
    {
        $data['judul'] = 'Edit Navigation';
        $data['head'] = $this->model('Header_model')->getHeader();
        $data['footer'] = $this->model('Footer_model')->getFooter();
        $data['navigasi'] = $this->model('Navigasi_model')->getNavigasiById($id_nav);
        $data['aside'] = $this->model('Aside_model')->getAside();
        $data['nav'] = $this->model('Navigasi_model')->getNavigasi();
        $data['child'] = $this->model('Navigasi_model')->getChild();
        $this->view('templates/header', $data);
        $this->view('templates/nav', $data);
        $this->view('navigasi/ubah', $data);
        $this->view('templates/aside', $data);
        $this->view('templates/footer', $data);
    }

    public function ubahChild($id_child)
    {
        $data['judul'] = 'Edit Sub Menu';
        $data['head'] = $this->model('Header_model')->getHeader();
        $data['footer'] = $this->model('Footer_model')->getFooter();
        $data['childId'] = $this->model('Navigasi_model')->getChildById($id_child);
        $data['aside'] = $this->model('Aside_model')->getAside();
        $data['nav'] = $this->model('Navigasi_model')->getNavigasi();
        $data['child'] = $this->model('Navigasi_model')->getChild();
        $this->view('templates/header', $data);
        $this->view('templates/nav', $data);
        $this->view('navigasi/ubahChild', $data);
        $this->view('templates/aside', $data);
        $this->view('templates/footer', $data);
    }

    public function ubahData()
    {
        if ($this->model('Navigasi_model')->ubahDataNavigasi($_POST) > 0) {
            header('Location: ' . BASEURL . '/navigasi');
            exit;
        } else {
            header('Location: ' . BASEURL . '/navigasi');
            exit;
        }
    }

    public function ubahDataChild()
    {
        if ($this->model('Navigasi_model')->ubahDataChild($_POST) > 0) {
            header('Location: ' . BASEURL . '/navigasi');
            exit;
        } else {
            header('Location: ' . BASEURL . '/navigasi');
            exit;
        }
    }
}
