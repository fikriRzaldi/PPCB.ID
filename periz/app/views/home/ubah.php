<article>
    <h3 class="headingform"><?= $data['judul'] ?></h3>
    <form action="<?= BASEURL; ?>/home/ubahData" method="POST" class="formisi">
        <table>
            <input type="hidden" value="<?= $data['home']['id_home'] ?>" readonly name="id_home" id="id_home">
            <tr>
                <td><label for="text">Text</label></td>
                <td>:</td>
                <td><input type="text" name="text" id="text" value="<?= $data['home']['text']; ?>"></td>
            </tr>
            <tr>
                <td><label for="sub_text">Sub Text</label></td>
                <td>:</td>
                <td><input type="text" name="sub_text" id="sub_text" value="<?= $data['home']['sub_text']; ?>"></td>
            </tr>
            <tr>
                <td><label for="image">Image</label></td>
                <td>:</td>
                <td><input type="text" name="image" id="image" value="<?= $data['home']['image']; ?>"></td>
            </tr>
            <tr>
                <td><label for="head_link">Link</label></td>
                <td>:</td>
                <td><input type="text" name="head_link" id="head_link" value="<?= $data['home']['head_link']; ?>"></td>
            </tr>
            <tr>
                <td> <button class="button_ubah" type="submit">UBAH</button></td>
            </tr>
        </table>
        <a href="<?= BASEURL; ?>/Home/index/"><button class="button_kembali">Kembali</button></a>
</article>