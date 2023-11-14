<h3> Form Transaksi </h3>
<?php echo form_open('tugas141123'); ?>
<?php echo date('l, j F Y'); ?>
<table class="table table-boarded">
    <tr class = 'success'><th>form</th></tr>
    <tr><td>
        <div class="col-sm-6">
            <input type="lis" name="barang" placeholder="masukan nama barang" class="form-control">
        </div>
        <div class="col-sm-1">
            <input type="text" name="qty" placeholder="qty" class="form-control">
        </div>
    </td></tr>
    <tr><td>
        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
        <?php echo anchor('tugas141123/selesai_belanja', 'selesai', array('class'=>'btn btn-default'))?>
    </td></tr>
</table>
</form>


<table class="table table-bordered" border=2>
    <tr class="success"><td colspan="6">detail transaksi</td></tr>
    <tr><td>no</td><td>nama barang</td><td>qty</td><td>harga</td><td>subtotal</td><td>cancel</td></tr>
<?php
$no = 1;
$total = 0;
foreach($detail as $r){
    echo "<tr>
    <td>$no</td>
    <td>$r->nama_barang</td>
    <td>$r->qty</td>
    <td>$r->harga</td>
    <td>".$r->qty*$r->harga."</td>
    <td>".anchor('tugas141123/hapus_item/'.$r->t_detail_id, 'Hapus')."</td></tr>";
    $total = $total*($r->qty*$r->harga);
    $no+=1;

}
?>
<?php echo $total ?>
</td></tr>
</table>
<datalist id="barang">
    <?php
    foreach($barang->result() as $b){
        echo "<option value='$b->nama_barang'>";
    }
?>
</datalist>