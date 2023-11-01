<!DOCTYPE html>
<html>
<head>
    <title>Hasil Pembayaran</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .container {
            margin-top: 50px;
            text-align: center;
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
        }
        h1 {
            color: #007BFF;
        }
        .total-bayar {
            font-size: 24px;
            color: #28a745;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Hasil Pembayaran</h1>
        <p class="total-bayar">Total Bayar: <?php echo 'Rp ' . number_format($totalBayar, 2, ',', '.'); ?></p>
    </div>
    <div class="footer" style="text-align: center;">
        <p>Made with love by Bakti Surya Atmaja</p>
    </div>  
</body>
</html>
