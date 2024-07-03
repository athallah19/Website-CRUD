<?php 

include '../koneksi/koneksi.php';

$nama = $_POST['nama'];
$harga = $_POST['harga'];

$result = mysqli_query ($koneksi, "INSERT INTO produk VALUES('','$nama','$harga')");

?>

<script language="JavaScript">
    alert('Input data berhasil!');
    document.location ='tampil-produk.php';
</script>
