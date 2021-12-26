<article>
    <h3 class="headingform"><?= $data['judul'] ?></h3>
    <form action="<?= BASEURL; ?>/header/ubahData" method="POST" class="formisi">
        <table>
            <input type="hidden" value="<?= $data['headId']['id_header'] ?>" readonly name="id_header" id="id_header">
            <tr>
                <td><label for="logo">Logo</label></td>
                <td>:</td>
                <td><input type="text" name="logo" id="logo" value="<?= $data['headId']['logo']; ?>"></td>
            </tr>
            <tr>
                <td><label for="nama_web">Nama Web</label></td>
                <td>:</td>
                <td><input type="text" name="nama_web" id="nama_web" value="<?= $data['headId']['nama_web']; ?>"></td>
            </tr>
            <tr>
                <td><label for="sub_text">Sub Text</label></td>
                <td>:</td>
                <td><input type="text" name="sub_text" id="sub_text" value="<?= $data['headId']['sub_text']; ?>"></td>
            </tr>
            <tr>
                <td><label for="alamat">Alamat</label></td>
                <td>:</td>
                <td><textarea cols="30" rows="5" name="alamat" id="alamat"><?= $data['headId']['alamat']; ?></textarea></td>

            </tr>
            <tr>
                <td> <button class="button_ubah" type="submit">UBAH</button></td>
            </tr>
        </table>
        <a href="<?= BASEURL; ?>/Header/index/"><button class="button_kembali">Kembali</button></a>
</article>