<?php
include '../koneksi/koneksi.php';

$id=$_POST['id'];
$nama=$_POST['nama'];
$harga=$_POST['harga'];

$query = mysqli_query($koneksi, "UPDATE produk SET nama='$nama', harga='$harga' WHERE id='$id'");

?>
<script language="JavaScript">
    alert('EDIT DATA BERHASIL!!!');
    document.location='tampil-produk.php';
</script>