<article>
    <h3 class="headingform"><?= $data['judul'] ?></h3>
    <form action="<?= BASEURL; ?>/aside/add" method="POST" class="formisi">
        <table>
            <tr>

                <td><input type="hidden" value="<?= $this->model('Aside_model')->autoIncrement(); ?>" readonly name="id_aside" id="id_aside"></td>
            </tr>
            <tr>
                <td><label for="aside_faq">Aside FAQ</label></td>
                <td>:</td>
                <td><input type="text" name="aside_faq" id="aside_faq"></td>
            </tr>
            <tr>
                <td><label for="faq_answer">FAQ Answer</label></td>
                <td>:</td>
                <td><input type="text" name="faq_answer" id="faq_answer"></td>
            </tr>
            <tr>
                <td colspan="3">
                    <button class="buttonsimpan" type="submit">Simpan</button>
                </td>
            </tr>
        </table>
    </form>
    <a href="<?= BASEURL; ?>/Aside/index/"><button class="button_kembali">Kembali</button></a>
</article>