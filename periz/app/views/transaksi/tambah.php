<article>
    <h3 class="headingform"><?= $data['judul'] ?></h3>
    <form action="<?= BASEURL; ?>/transaksi/add" method="POST" class="formisi">
        <table>
            <tr>

                <td><input type="hidden" value="<?= $this->model('Transaksi_model')->autoIncrement(); ?>" readonly name="id_transaksi" id="id_transaksi"></td>
            </tr>
            <tr>
                <td class="placehold"><label for="nama_perushaan">Nama Perusahaan</label></td>
                <td>:</td>
                <td><select name="id_perusahaan" id="id_perusahaan">
                        <?php foreach ($data['trns'] as $trns) : ?>
                            <?php echo $trns['nama_perusahaan']; ?>
                            <option value="<?= $trns['id_perusahaan']; ?>"><?= $trns['nama_perusahaan']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="placehold"><label for="nama_izin">Nama Izin</label></td>
                <td>:</td>
                <td><input type="text" name="nama_izin" id="nama_izin"></td>
            </tr>
            <tr>
                <td class="placehold"><label for="alamat_perusahaan">Alamat Perusahaan</label></td>
                <td>:</td>
                <td><input type="text" name="alamat_perusahaan" id="alamat_perusahaan"></td>
            </tr>
            <tr>
                <td class="placehold"><label for="merk_usaha">Merk Usaha</label></td>
                <td>:</td>
                <td><input type="text" name="merk_usaha" id="merk_usaha"></td>
            </tr>
            <tr>
                <td class="placehold"><label for="nama_pemilik">Nama Pemilik</label></td>
                <td>:</td>
                <td><input type="text" name="nama_pemilik" id="nama_pemilik"></td>
            </tr>
            <tr>
                <td class="placehold"><label for="nama_penanggung_jawab">Nama Penanggung Jawab</label></td>
                <td>:</td>
                <td><input type="text" name="nama_penanggung_jawab" id="nama_penanggung_jawab"></td>
            </tr>
            <tr>
                <td class="placehold"><label for="jumlah_karyawan">Jumlah Karyawan</label></td>
                <td>:</td>
                <td><input type="number" name="jumlah_karyawan" id="jumlah_karyawan"></td>
            </tr>
            <tr>
                <td class="placehold"><label for="id_status">Status</label></td>
                <td>:</td>
                <td><select name="id_status" id="id_status">
                        <?php foreach ($data['sts'] as $trns) : ?>
                            <?php echo $trns['nama_perusahaan']; ?>
                            <option value="<?= $trns['id_status']; ?>"><?= $trns['approval']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <button class="buttonsimpan" type="submit" onclick="return alert('Data berhasil disimpan'); ">Simpan</button>
                </td>
            </tr>
        </table>

    </form>
    <a href="<?= BASEURL; ?>/transaksi/index/"><button class="button_kembali">Kembali</button></a>
</article>