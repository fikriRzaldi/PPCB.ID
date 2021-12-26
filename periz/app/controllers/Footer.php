<?php

class Footer extends Controller
{
    public function index()
    {
        $data['judul'] = 'Edit Footer Info';
        $data['head'] = $this->model('Header_model')->getHeader();
        $data['footer'] = $this->model('Footer_model')->getFooter();
        $data['aside'] = $this->model('Aside_model')->getAside();
        $data['nav'] = $this->model('Navigasi_model')->getNavigasi();
        $data['child'] = $this->model('Navigasi_model')->getChild();
        $this->view('templates/header', $data);
        $this->view('templates/nav', $data);
        $this->view('footer/index', $data);
        $this->view('templates/aside', $data);
        $this->view('templates/footer', $data);
    }

    public function ubah()
    {
        $data['judul'] = 'Edit Footer Info';
        $data['head'] = $this->model('Header_model')->getHeader();
        $data['footer'] = $this->model('Footer_model')->getFooter();
        $data['aside'] = $this->model('Aside_model')->getAside();
        $data['nav'] = $this->model('Navigasi_model')->getNavigasi();
        $data['child'] = $this->model('Navigasi_model')->getChild();
        $this->view('templates/header', $data);
        $this->view('templates/nav', $data);
        $this->view('footer/ubah', $data);
        $this->view('templates/aside', $data);
        $this->view('templates/footer', $data);
    }

    public function ubahData()
    {
        if ($this->model('Footer_model')->ubahDataFooter($_POST) > 0) {
            header('Location: ' . BASEURL . '/Footer');
            exit;
        } else {
            header('Location: ' . BASEURL . '/Footer');
            exit;
        }
    }
}
