<article>
    <h3 class="headingform"><?= $data['judul'] ?></h3>
    <form action="<?= BASEURL; ?>/perusahaan/ubahData" method="POST" class="formisi">
        <table>
            <input type="hidden" value="<?= $data['perusahaan']['id_perusahaan'] ?>" readonly name="id_perusahaan" id="id_perusahaan">
            <tr>
                <td><label for="nama_perusahaan">Nama Perusahaan</label></td>
                <td>:</td>
                <td><input type="text" name="nama_perusahaan" id="nama_perusahaan" value="<?= $data['perusahaan']['nama_perusahaan']; ?>"></td>
            </tr>
            <tr>
                <td> <button class="button_ubah" type="submit">UBAH</button></td>
            </tr>
        </table>
        <a href="<?= BASEURL; ?>/Perusahaan/index/"><button class="button_kembali">Kembali</button></a>
</article>