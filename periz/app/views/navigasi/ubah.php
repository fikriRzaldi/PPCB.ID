<article>
    <h3 class="headingform"><?= $data['judul'] ?></h3>
    <form action="<?= BASEURL; ?>/navigasi/ubahData" method="POST" class="formisi">
        <table>
            <input type="hidden" value="<?= $data['navigasi']['id_nav'] ?>" readonly name="id_nav" id="id_nav">
            <tr>
                <td><label for="nav_main">Nama Navigasi</label></td>
                <td>:</td>
                <td><input type="text" name="nav_main" id="nav_main" value="<?= $data['navigasi']['nav_main']; ?>"></td>
            </tr>
            <tr>
                <td><label for="nama_web">Link Navigasi</label></td>
                <td>:</td>
                <td><input type="text" name="nav_link" id="nav_link" value="<?= $data['navigasi']['nav_link']; ?>"></td>
            </tr>
            <tr>
                <td> <button class="button_ubah" type="submit">UBAH</button></td>
            </tr>
        </table>
        <a href="<?= BASEURL; ?>/Navigasi/index/"><button class="button_kembali">Kembali</button></a>
</article>