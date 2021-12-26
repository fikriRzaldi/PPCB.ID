<article>
    <h3 class="headingform"><?= $data['judul'] ?></h3>
    <table class="formdetail">
        <tr>
            <td class="placehold">Text</td>
            <td>:</td>
            <td><?= $data['home']['text'] ?></td>
        </tr>
        <tr>
            <td class="placehold">Sub Text</td>
            <td>:</td>
            <td><?= $data['home']['sub_text'] ?></td>
        </tr>
        <tr>
            <td class="placehold">image</td>
            <td>:</td>
            <td><?= $data['home']['image'] ?></td>
        </tr>
        <tr>
            <td class="placehold">Link</td>
            <td>:</td>
            <td><?= $data['home']['head_link'] ?></td>
        </tr>
        <tr>
            <td class="placehold">
                <a href="<?= BASEURL; ?>/home/ubah/<?= $data['home']['id_home']; ?>"><button class="button_ubah">Ubah</button></a>
            </td>
        </tr>
    </table>
</article>