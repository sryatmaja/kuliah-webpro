<!DOCTYPE html>
<html>
<head>
    <title>Cek Bilangan</title>
</head>
<body>
    <h1>Cek Bilangan</h1>
    <form action="<?= base_url('modul_5/tes_akhir1_hitung') ?>" method="post">
        <label for="angka">Masukkan angka:</label>
        <input type="text" name="angka" id="angka" required>
        <button type="submit">Cek</button>
    </form>
</body>
</html>
