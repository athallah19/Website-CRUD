<?php
include '../koneksi/koneksi.php';

$id=$_POST['id'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];

$query = mysqli_query($koneksi, "UPDATE pelanggan SET nama='$nama', alamat='$alamat' WHERE id='$id'");

?>
<script language="JavaScript">
    alert('EDIT DATA BERHASIL!!!');
    document.location='tampil-pelanggan.php';
</script>