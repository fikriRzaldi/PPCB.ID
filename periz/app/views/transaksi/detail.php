<article>
    <h3 class="headingform"><?= $data['judul'] ?></h3>
    <table class="formdetail">
        <tr>
            <td class="placehold">Nama Izin</td>
            <td>:</td>
            <td><?= $data['trns']['nama_izin']; ?></td>
        <tr>
        <tr>
            <td class="placehold">Nama Perusahaan</td>
            <td>:</td>
            <td><?= $data['trns']['nama_perusahaan']; ?></td>
        </tr>
        <tr>
            <td class="placehold">Alamat Perusahaan</td>
            <td>:</td>
            <td><?= $data['trns']['alamat_perusahaan']; ?></td>
        </tr>
        <tr>
            <td class="placehold">Merk Usaha</td>
            <td>:</td>
            <td><?= $data['trns']['merk_usaha']; ?></td>
        </tr>
        <tr>
            <td class="placehold">Nama Pemilik</td>
            <td>:</td>
            <td><?= $data['trns']['nama_pemilik']; ?></td>
        </tr>
        <tr>
            <td class="placehold">Nama Penanggung Jawab</td>
            <td>:</td>
            <td><?= $data['trns']['nama_penanggung_jawab']; ?></td>
        </tr>
        <tr>
            <td class="placehold">Jumlah Karyawan</td>
            <td>:</td>
            <td><?= $data['trns']['jumlah_karyawan']; ?></td>
        </tr>
        <tr>
            <td class="placehold">Status</td>
            <td>:</td>
            <td><?= $data['trns']['approval']; ?></td>
        </tr>
        <tr>
            <td colspan="3">
                <a href="<?= BASEURL; ?>/transaksi/ubah/<?= $data['trns']['id_transaksi']; ?>"><button class="button_update">Update</button></a>
                <a href="<?= BASEURL; ?>/transaksi/index/"><button class="button_kembali">Kembali</button></a>
            </td>
        </tr>
    </table>
</article>