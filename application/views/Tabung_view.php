<html>
<head>
    <title>Hitung Luas dan Volume Tabung</title>
</head>
<body>
    <h2>Hitung Luas dan Volume Tabung</h2>

    <p>Jari-jari Tabung: <?php echo $model->jari2; ?></p>
    <p>Tinggi Tabung: <?php echo $model->tinggi; ?></p>
    <p>Luas Tabung: <?php echo $model->hitungLuas(); ?></p>
    <p>Volume Tabung: <?php echo $model->hitungVolume(); ?></p>
</body>
</html>