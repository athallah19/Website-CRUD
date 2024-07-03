<?php
include '../koneksi/koneksi.php';

$id=$_POST['id'];
$id_pelanggan=$_POST['id_pelanggan'];
$tanggal=$_POST['tanggal'];

$query = mysqli_query($koneksi, "UPDATE transaksi SET id_pelanggan='$id_pelanggan', tanggal='$tanggal' WHERE id='$id'");

?>
<script language="JavaScript">
    alert('EDIT DATA BERHASIL!!!');
    document.location='tampil-transaksi.php';
</script>