<article>
    <h3 class="headingform"><?= $data['judul'] ?></h3>
    <form action="<?= BASEURL; ?>/perusahaan/add" method="POST" class="formisi">
        <table>
            <tr>

                <td><input type="hidden" value="<?= $this->model('Perusahaan_model')->autoIncrement(); ?>" readonly name="id_perusahaan" id="id_perusahaan"></td>
            </tr>
            <tr>
                <td><label for="nama_perusahaan">Nama Perusahaan</label></td>
                <td>:</td>
                <td><input type="text" name="nama_perusahaan" id="nama_perusahaan"></td>
            </tr>
            <tr>
                <td colspan="3">
                    <button class="buttonsimpan" type="submit">Simpan</button>
                </td>
            </tr>
        </table>
    </form>
    <a href="<?= BASEURL; ?>/Perusahaan/index/"><button class="button_kembali">Kembali</button></a>
</article>