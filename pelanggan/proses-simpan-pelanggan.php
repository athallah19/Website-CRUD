<?php 

include '../koneksi/koneksi.php';

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];

$result = mysqli_query ($koneksi, "INSERT INTO pelanggan VALUES('','$nama','$alamat')");

?>

<script language="JavaScript">
    alert('Input data berhasil!');
    document.location ='tampil-pelanggan.php';
</script>
