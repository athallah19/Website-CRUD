<?php 

include '../koneksi/koneksi.php';

$id_pelanggan = $_POST['id_pelanggan'];
$tanggal = $_POST['tanggal'];

$result = mysqli_query ($koneksi, "INSERT INTO transaksi VALUES('','$id_pelanggan','$tanggal')");

?>

<script language="JavaScript">
    alert('Input data berhasil!');
    document.location ='tampil-transaksi.php';
</script>
