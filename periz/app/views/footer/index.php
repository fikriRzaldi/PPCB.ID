<article>
    <h3 class="headingform"><?= $data['judul'] ?></h3>
    <table class="formdetail">
        <tr>
            <td class="placehold">Copyright</td>
            <td>:</td>
            <td><?= $data['footer']['copyright'] ?></td>
        </tr>
        <tr>
            <td class="placehold">Facebook</td>
            <td>:</td>
            <td><?= $data['footer']['facebook'] ?></td>
        </tr>
        <tr>
            <td class="placehold">Instagram</td>
            <td>:</td>
            <td><?= $data['footer']['instagram'] ?></td>
        </tr>
        <tr>
            <td class="placehold">Twitter</td>
            <td>:</td>
            <td><?= $data['footer']['twitter'] ?></td>
        </tr>
        <tr>
            <td class="placehold">Nama Web</td>
            <td>:</td>
            <td><?= $data['footer']['nama_web'] ?></td>
        </tr>
        <tr>
            <td class="placehold">Slogan</td>
            <td>:</td>
            <td><?= $data['footer']['slogan'] ?></td>
        </tr>
        <tr>
            <td class="placehold">Keterangan</td>
            <td>:</td>
            <td><?= $data['footer']['keterangan'] ?></td>
        </tr>
        <tr>
            <td class="placehold">
                <a href="<?= BASEURL; ?>/footer/ubah/<?= $data['footer']['id_footer']; ?>"><button class="button_ubah">Ubah</button></a>
            </td>
        </tr>
    </table>
</article>