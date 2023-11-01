<!DOCTYPE html>
<html>
<head>
    <title>Input Data Pembayaran</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Input Data Pembayaran</h1>
        <form method="post" action="<?= base_url('modul_4/tes_akhir2_hitung'); ?>" class="mt-4">
            <div class="form-group">
                <label for="totalBelanja">Total Pembelian:</label>
                <input type="text" class="form-control" name="totalBelanja" id="totalBelanja">
            </div>
            <div class="form-group">
                <label for="isMember">Status Member:</label>
                <select class="form-control" name="isMember" id="isMember">
                    <option value="1">Member</option>
                    <option value="0">Non-Member</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Hitung Total Bayar</button>
        </form>
    </div>
    <div class="footer" style="text-align: center;">
        <p>Made with love by Bakti Surya Atmaja</p>
    </div>  
</body>
</html>
