<html>
<head><title>Demo helper</title></head>
<body>
<h2>Demo menggunakan Helper</h2>
<p>
Elemen-elemen Array:<br/>
<?php
foreach ($data as $elemen) {
echo $elemen ." ";
}
?>
</p>
Pengambilan Acak Pertama
<?php echo random_element($data); ?><br />
Pengambilan Acak Kedua
<?php echo random_element($data); ?><br />
Pengambilan Acak Ketiga
<?php echo random_element($data); ?>
</body>
</html>