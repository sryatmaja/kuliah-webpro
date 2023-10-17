<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator PPN</title>
</head>
<body>
    <form method="post" action="<?= base_url('ppn/hitung'); ?>"> 
    <!-- error? ke config.php di folder config, trus ubah base urlnya biar actionnya ga ngehasilin substring -->
        <label for="total_pembelian">Total Pembelian: </label>
        <!-- input untuk memasukkan total pembelian -->
        <input type="text" name="total_pembelian" id="total_pembelian" required>
        <button type="submit">Hitung</button>
    </form>
</body>
</html>
