<?php
include '../koneksi/koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($koneksi,"DELETE FROM produk WHERE id='$id'")or die(mysql_error());

?>
<script language="JavaScript">
    alert('HAPUS DATA BERHASIL!!!');
    document.location='tampil-produk.php';
</script>