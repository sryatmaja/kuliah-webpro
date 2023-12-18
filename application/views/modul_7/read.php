<!-- application/views/item/read.php -->

<h2>Detail Mobil</h2>

<table border="1">
    <tr>
        <th>Nomor TNKB</th>
        <th>Nama Pemilik</th>
        <th>Nomor Mesin</th>
        <th>Nomor Sasis</th>
        <th>Jenis Mobil</th>
        <th>Kapasitas Mesin Mobil</th>
        <th>Tahun Pembuatan Mobil</th>
    </tr>
    <tr>
        <td><?php echo $item->nomor_tnkb; ?></td>
        <td><?php echo $item->nama_pemilik; ?></td>
        <td><?php echo $item->nomor_mesin; ?></td>
        <td><?php echo $item->nomor_sasis; ?></td>
        <td><?php echo $item->jenis_mobil; ?></td>
        <td><?php echo $item->kapasitas_mesin_mobil; ?></td>
        <td><?php echo $item->tahun_pembuatan_mobil; ?></td>
    </tr>
</table>

<br>

<a href="<?php echo base_url('modul_7/index'); ?>">Kembali ke Daftar</a>
