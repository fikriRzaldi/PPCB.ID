<article>
    <h3 class="headingform"><?= $data['judul'] ?></h3>
    <form action="<?= BASEURL; ?>/aside/ubahData" method="POST" class="formisi">
        <table>
            <input type="hidden" value="<?= $data['asideid']['id_aside'] ?>" readonly name="id_aside" id="id_aside">
            <tr>
                <td><label for="aside_faq">Aside FAQ</label></td>
                <td>:</td>
                <td><input type="text" name="aside_faq" id="aside_faq" value="<?= $data['asideid']['aside_faq']; ?>"></td>
            </tr>
            <tr>
                <td><label for="faq_answer">FAQ Answer</label></td>
                <td>:</td>
                <td><input type="text" name="faq_answer" id="faq_answer" value="<?= $data['asideid']['faq_answer']; ?>"></td>
            </tr>
            <tr>
                <td> <button class="button_ubah" type="submit">UBAH</button></td>
            </tr>
        </table>
        <a href="<?= BASEURL; ?>/Aside/index/"><button class="button_kembali">Kembali</button></a>
</article>