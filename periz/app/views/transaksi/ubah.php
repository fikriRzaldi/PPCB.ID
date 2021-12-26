<article>
    <h3 class="headingform"><?= $data['judul'] ?></h3>
    <form action="<?= BASEURL; ?>/transaksi/ubahData" method="POST" class="formisi">
        <table>
            <input type="hidden" value="<?= $data['trns']['id_transaksi'] ?>" readonly name="id_transaksi" id="id_transaksi">
            <tr>
                <td class="placehold">Nama Perusahaan</td>
                <td>:</td>
                <td><input type="text" name="nama_perusahaan" id="nama_perusahaan" value="<?= $data['trns']['nama_perusahaan']; ?>" readonly></td>
            </tr>
            <tr>
                <td class="placehold">Nama Izin</td>
                <td>:</td>
                <td><input type="text" name="nama_izin" id="nama_izin" value="<?= $data['trns']['nama_izin']; ?>"></td>
            </tr>
            <tr>
                <td class="placehold">Alamat Perusahaan</td>
                <td>:</td>
                <td><input type="text" name="alamat_perusahaan" id="alamat_perusahaan" value="<?= $data['trns']['alamat_perusahaan']; ?>"></td>
            </tr>
            <tr>
                <td class="placehold">Merk Usaha</td>
                <td>:</td>
                <td><input type="text" name="merk_usaha" id="merk_usaha" value="<?= $data['trns']['merk_usaha']; ?>"></td>
            </tr>
            <tr>
                <td class="placehold">Nama Pemilik</td>
                <td>:</td>
                <td><input type="text" name="nama_pemilik" id="nama_pemilik" value="<?= $data['trns']['nama_pemilik']; ?>"></td>
            </tr>
            <tr>
                <td class="placehold">Nama Penanggung Jawab</td>
                <td>:</td>
                <td><input type="text" name="nama_penanggung_jawab" id="nama_penanggung_jawab" value="<?= $data['trns']['nama_penanggung_jawab']; ?>"></td>
            </tr>
            <tr>
                <td class="placehold">Jumlah Karyawan</td>
                <td>:</td>
                <td><input type="number" name="jumlah_karyawan" id="jumlah_karyawan" value="<?= $data['trns']['jumlah_karyawan']; ?>"></td>
            </tr>
            <tr>
                <td class="placehold">Status</td>
                <td>:</td>
                <td><select name="id_status" id="id_status">
                        <option value="st001">Approved</option>
                        <option value="st002">Declined</option>
                    </select></td>
            </tr>
            <tr>
                <td class="placehold"> <button type="submit" class="button_ubah">UBAH</button></td>
            </tr>
        </table>
    </form>
    <a href="<?= BASEURL; ?>/transaksi/index/"><button class="button_kembali">Kembali</button></a>
</article>