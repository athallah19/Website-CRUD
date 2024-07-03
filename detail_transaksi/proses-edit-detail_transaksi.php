<?php
include '../koneksi/koneksi.php';

$id=$_POST['id'];
$id_transaksi=$_POST['id_transaksi'];
$id_pelanggan=$_POST['id_pelanggan'];
$jumlah=$_POST['jumlah'];

$query = mysqli_query($koneksi, "UPDATE detail_transaksi SET id_transaksi='$id_transaksi', id_pelanggan='$id_pelanggan', jumlah='$jumlah' WHERE id='$id'");

?>
<script language="JavaScript">
    alert('EDIT DATA BERHASIL!!!');
    document.location='tampil-detail_transaksi.php';
</script>