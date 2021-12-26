<article>
    <h3 class="headingform"><?= $data['judul'] ?></h3>
    <table class="formdetail">
        <tr>
            <td class="placehold">Nama Logo</th>
            <td>:</td>
            <td><?= $data['head']['logo']; ?></td>
        </tr>
        <tr>
            <td class="placehold">Nama Web</td>
            <td>:</td>
            <td><?= $data['head']['nama_web']; ?></td>
        </tr>
        <tr>
            <td class="placehold">Sub Text</td>
            <td>:</td>
            <td><?= $data['head']['sub_text']; ?></td>
        </tr>
        <tr>
            <td class="placehold">Alamat</td>
            <td>:</td>
            <td><?= $data['head']['alamat']; ?></td>
        </tr>
        <tr>
            <td class="placehold">
                <a href="<?= BASEURL; ?>/header/ubah/<?= $data['head']['id_header']; ?>"><button class="button_ubah">Ubah</button></a>
            </td>
        </tr>
    </table>
</article>