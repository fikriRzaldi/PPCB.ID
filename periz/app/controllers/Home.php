<?php

class Home extends Controller
{
    public function index()
    {
        $data['judul'] = 'Home';
        $data['head'] = $this->model('Header_model')->getHeader();
        $data['footer'] = $this->model('Footer_model')->getFooter();
        $data['aside'] = $this->model('Aside_model')->getAside();
        $data['home'] = $this->model('Home_model')->getHome();
        $data['nav'] = $this->model('Navigasi_model')->getNavigasi();
        $data['nav'] = $this->model('Navigasi_model')->getNavigasi();
        $data['child'] = $this->model('Navigasi_model')->getChild();
        $this->view('templates/header', $data);
        $this->view('templates/nav', $data);
        $this->view('home/index', $data);
        $this->view('templates/aside', $data);
        $this->view('templates/footer', $data);
    }

    public function dataHome()
    {
        $data['judul'] = 'Edit Data Home';
        $data['head'] = $this->model('Header_model')->getHeader();
        $data['footer'] = $this->model('Footer_model')->getFooter();
        $data['home'] = $this->model('Home_model')->getHome();
        $data['aside'] = $this->model('Aside_model')->getAside();
        $data['nav'] = $this->model('Navigasi_model')->getNavigasi();
        $data['child'] = $this->model('Navigasi_model')->getChild();
        $this->view('templates/header', $data);
        $this->view('templates/nav', $data);
        $this->view('home/dataHome', $data);
        $this->view('templates/aside', $data);
        $this->view('templates/footer', $data);
    }

    public function ubah()
    {
        $data['judul'] = 'Edit Home Information';
        $data['head'] = $this->model('Header_model')->getHeader();
        $data['footer'] = $this->model('Footer_model')->getFooter();
        $data['home'] = $this->model('Home_model')->getHome();
        $data['aside'] = $this->model('Aside_model')->getAside();
        $data['nav'] = $this->model('Navigasi_model')->getNavigasi();
        $data['child'] = $this->model('Navigasi_model')->getChild();
        $this->view('templates/header', $data);
        $this->view('templates/nav', $data);
        $this->view('home/ubah', $data);
        $this->view('templates/aside', $data);
        $this->view('templates/footer', $data);
    }

    public function ubahData()
    {
        if ($this->model('Home_model')->ubahDataHome($_POST) > 0) {
            header('Location: ' . BASEURL . '/home/dataHome');
            exit;
        } else {
            header('Location: ' . BASEURL . '/home/dataHome');
            exit;
        }
    }
}
