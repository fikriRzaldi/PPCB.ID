<article>
    <h3 class="headingform"><?= $data['judul'] ?></h3>
    <form action="<?= BASEURL; ?>/akun/add" method="POST" class="formisi">
        <table>
            <tr>

                <td><input type="hidden" value="<?= $this->model('Akun_model')->autoIncrement(); ?>" readonly name="id_akun" id="id_akun"></td>
            </tr>
            <tr>
                <td class="placehold"><label for="username">Username</label></td>
                <td>:</td>
                <td><input type="text" name="username" id="username"></td>
            </tr>
            <tr>
                <td class="placehold"><label for="password">Password</label></td>
                <td>:</td>
                <td><input type="text" name="password" id="password"></td>
            </tr>
            <tr>
                <td colspan="3">
                    <button class="buttonsimpan" type="submit">Simpan</button>
                </td>
            </tr>
        </table>
    </form>
    <a href="<?= BASEURL; ?>/akun/index/"><button class="button_kembali">Kembali</button></a>
</article>