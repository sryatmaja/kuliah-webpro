<!DOCTYPE html>
<html>
<head>
    <title>Hitung Total Bayar</title>
</head>
<body>
    <h1>Hitung Total Bayar</h1>

    <form method="post" action="<?= base_url('bayar/hitung_total_bayar'); ?>">
        <label for="total_belanja">Total Belanja:</label>
        <input type="text" name="total_belanja">
        <br>
        <label for="status_member">Status Member:</label>
        <select name="status_member">
            <option value="member">Member</option>
            <option value="non-member">Non-Member</option>
        </select>
        <br>
        <input type="submit" value="Hitung Total Bayar">
    </form>
</body>
</html>
