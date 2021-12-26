<?php

class Login extends Controller
{
    public function index()
    {
        $data['judul'] = 'Home';
        $this->view('login/index', $data);
    }

    public function cekLogin()
    {

        [$user, $value] = $this->model("Login_model")->prosesLogin($_POST);
        if ($value > 0) {
            session_start();
            $_SESSION['username'] = $user;
            if (isset($_SESSION['username'])) {
                header('Location: ' . BASEURL . '/home');
            }
            return;
        } else {
            header("Location:  http://localhost/periz/public/login");
            return;
        }
    }
}
