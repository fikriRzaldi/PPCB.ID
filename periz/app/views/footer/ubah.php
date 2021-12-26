<article>
    <h3 class="headingform"><?= $data['judul'] ?></h3>
    <form action="<?= BASEURL; ?>/footer/ubahData" method="POST" class="formisi">
        <table>
            <input type="hidden" value="<?= $data['footer']['id_footer'] ?>" readonly name="id_footer" id="id_footer">
            <tr>
                <td><label for="copyright">Copyright</label></td>
                <td>:</td>
                <td><input type="text" name="copyright" id="copyright" value="<?= $data['footer']['copyright']; ?>"></td>
            </tr>
            <tr>
                <td><label for="facebook">Facebook</label></td>
                <td>:</td>
                <td><input type="text" name="facebook" id="facebook" value="<?= $data['footer']['facebook']; ?>"></td>
            </tr>
            <tr>
                <td><label for="instagram">Instagram</label></td>
                <td>:</td>
                <td><input type="text" name="instagram" id="instagram" value="<?= $data['footer']['instagram']; ?>"></td>
            </tr>
            <tr>
                <td><label for="twitter">Twitter</label></td>
                <td>:</td>
                <td><input type="text" name="twitter" id="twitter" value="<?= $data['footer']['twitter']; ?>"></td>
            </tr>
            <tr>
                <td><label for="nama_web">Nama Web</label></td>
                <td>:</td>
                <td><input type="text" name="nama_web" id="nama_web" value="<?= $data['footer']['nama_web']; ?>"></td>
            </tr>
            <tr>
                <td><label for="slogan">Slogan</label></td>
                <td>:</td>
                <td><input type="text" name="slogan" id="slogan" value="<?= $data['footer']['slogan']; ?>"></td>
            </tr>
            <tr>
                <td><label for="keterangan">Keterangan</label></td>
                <td>:</td>
                <td><input type="text" name="keterangan" id="keterangan" value="<?= $data['footer']['keterangan']; ?>"></td>
            </tr>
            <tr>
                <td> <button class="button_ubah" type="submit">UBAH</button></td>
            </tr>
        </table>
        <a href="<?= BASEURL; ?>/Footer/index/"><button class="button_kembali">Kembali</button></a>
</article>