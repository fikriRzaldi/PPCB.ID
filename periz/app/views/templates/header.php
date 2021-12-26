<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: ' . BASEURL . '/login');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--fonts-->
    <script src="https://kit.fontawesome.com/bc4341256a.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title><?= $data['judul']; ?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/d_style.css">
    <link rel="icon" href="<?= BASEURL; ?>/img/ppcb.png" type="image/ico">

</head>
<?php

?>


<body>
    <header>
        <div class="sisikiri">
            <span class="containimg">
                <img id="logowebsite" src="<?= BASEURL; ?>/img/<?= $data['head']['logo']; ?>.png" />
            </span>
            <span class="containheadinfo">
                <div class="namaweb"><?= $data['head']['nama_web']; ?></div>
                <div class="slogan"><?= $data['head']['sub_text']; ?></div>
                <div class="alamat"><?= $data['head']['alamat']; ?></div>
            </span>
        </div>
        </div>
    </header>