<!-- application/views/modul_7/index.php -->

<h2>Data Mobil</h2>

<table border="1">
    <tr>
        <th>Nomor TNKB</th>
        <th>Nama Pemilik</th>
        <th>Nomor Mesin</th>
        <th>Nomor Sasis</th>
        <th>Jenis Mobil</th>
        <th>Kapasitas Mesin Mobil</th>
        <th>Tahun Pembuatan Mobil</th>
        <th>Aksi</th>
    </tr>

    <?php foreach ($items as $item): ?>
        <tr>
            <td><?php echo $item->nomor_tnkb; ?></td>
            <td><?php echo $item->nama_pemilik; ?></td>
            <td><?php echo $item->nomor_mesin; ?></td>
            <td><?php echo $item->nomor_sasis; ?></td>
            <td><?php echo $item->jenis_mobil; ?></td>
            <td><?php echo $item->kapasitas_mesin_mobil; ?></td>
            <td><?php echo $item->tahun_pembuatan_mobil; ?></td>
            <td>
                <a href="<?php echo base_url('modul_7/read/' . $item->id); ?>">Lihat</a> |
                <a href="<?php echo base_url('modul_7/update/' . $item->id); ?>">Edit</a> |
                <a href="<?php echo base_url('modul_7/delete/' . $item->id); ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<br>

<a href="<?php echo base_url('modul_7/create'); ?>">Tambah Data</a>
