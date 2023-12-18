<!-- application/views/modul_7/create.php -->

<h2>Tambah Data Mobil</h2>

<form method="post" action="<?php echo base_url('modul_7/create'); ?>">
    <label for="nomor_tnkb">Nomor TNKB:</label>
    <input type="text" name="nomor_tnkb" required><br>

    <label for="nama_pemilik">Nama Pemilik:</label>
    <input type="text" name="nama_pemilik" required><br>

    <label for="nomor_mesin">Nomor Mesin:</label>
    <input type="text" name="nomor_mesin" required><br>

    <label for="nomor_sasis">Nomor Sasis:</label>
    <input type="text" name="nomor_sasis" required><br>

    <label for="jenis_mobil">Jenis Mobil:</label>
    <input type="text" name="jenis_mobil" required><br>

    <label for="kapasitas_mesin_mobil">Kapasitas Mesin Mobil:</label>
    <input type="text" name="kapasitas_mesin_mobil" required><br>

    <label for="tahun_pembuatan_mobil">Tahun Pembuatan Mobil:</label>
    <input type="text" name="tahun_pembuatan_mobil" required><br>

    <input type="submit" value="Simpan">
</form>

<br>

<a href="<?php echo base_url('modul_7/index'); ?>">Kembali ke Daftar</a>
