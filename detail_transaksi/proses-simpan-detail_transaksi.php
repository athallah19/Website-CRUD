<?php 

include '../koneksi/koneksi.php';

$id_transaksi = $_POST['id_transaksi'];
$id_pelanggan = $_POST['id_pelanggan'];
$jumlah = $_POST['jumlah'];

$result = mysqli_query ($koneksi, "INSERT INTO detail_transaksi VALUES('','$id_transaksi','$id_pelanggan', '$jumlah')");

?>

<script language="JavaScript">
    alert('Tambah data berhasil!!');
    document.location ='tampil-detail_transaksi.php';
</script>
