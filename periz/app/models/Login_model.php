<?php

class Login_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAkun()
    {
    }

    public function prosesLogin($data)
    {
        if (isset($_POST['login'])) {

            $query = "SELECT * FROM akun WHERE username = :username AND password = :password";
            $this->db->query($query);
            $this->db->bind('username', $data['username']);
            $this->db->bind('password', $data['password']);

            $this->db->execute();
            $user = $data['username'];
            $value = $this->db->rowCount();
            return [$user, $value];
        }
    }
}
