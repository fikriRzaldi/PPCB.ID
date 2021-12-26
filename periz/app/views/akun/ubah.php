<article>
    <h3 class="headingform"><?= $data['judul'] ?></h3>

    <form action="<?= BASEURL; ?>/akun/ubahData" method="POST" class="formisi">
        <table>
            <input type="hidden" value="<?= $data['akun']['id_akun'] ?>" readonly name="id_akun" id="id_akun">
            <tr>
                <td class="placehold"><label for="username">Username</label></td>
                <td>:</td>
                <td><input type="text" name="username" id="username" value="<?= $data['akun']['username']; ?>"></td>
            </tr>
            <tr>
                <td class="placehold"><label for="passwrod">Password</label></td>
                <td>:</td>
                <td><input type="text" name="password" id="password" value="<?= $data['akun']['password']; ?>"></td>
            </tr>
            <tr>
                <td> <button class="button_ubah" type="submit">Ubah</button></td>

            </tr>
        </table>
        <a href="<?= BASEURL; ?>/akun/index/"><button class="button_kembali">Kembali</button></a>
</article>