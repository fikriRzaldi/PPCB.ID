<?php

class Header extends Controller
{
    public function index()
    {
        $data['judul'] = 'Header Info';
        $data['head'] = $this->model('Header_model')->getHeader();
        $data['footer'] = $this->model('Footer_model')->getFooter();
        $data['aside'] = $this->model('Aside_model')->getAside();
        $data['nav'] = $this->model('Navigasi_model')->getNavigasi();
        $data['child'] = $this->model('Navigasi_model')->getChild();
        $this->view('templates/header', $data);
        $this->view('templates/nav', $data);
        $this->view('header/index', $data);
        $this->view('templates/aside', $data);
        $this->view('templates/footer', $data);
    }
    public function ubah($id_header)
    {
        $data['judul'] = 'Edit Header Info';
        $data['head'] = $this->model('Header_model')->getHeader();
        $data['footer'] = $this->model('Footer_model')->getFooter();
        $data['headId'] = $this->model('Header_model')->getHeaderById($id_header);
        $data['aside'] = $this->model('Aside_model')->getAside();
        $data['nav'] = $this->model('Navigasi_model')->getNavigasi();
        $data['child'] = $this->model('Navigasi_model')->getChild();
        $this->view('templates/header', $data);
        $this->view('templates/nav', $data);
        $this->view('header/ubah', $data);
        $this->view('templates/aside', $data);
        $this->view('templates/footer', $data);
    }

    public function ubahData()
    {
        if ($this->model('Header_model')->ubahDataHeader($_POST) > 0) {
            header('Location: ' . BASEURL . '/Header');
            exit;
        } else {
            header('Location: ' . BASEURL . '/Header');
            exit;
        }
    }

    public function logout()
    {
        session_start();
        session_destroy();
        header('Location: ' . BASEURL . '/login');
    }
}
