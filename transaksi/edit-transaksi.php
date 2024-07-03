<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("location: ../login.php");
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../asset/style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="../asset/logo.png" type="image/x-icon">

    <title>Aplikasi CRUD - Edit Transaksi</title>
</head>

<body>
	<?php
		include "../koneksi/koneksi.php";
		
		$id = $_GET['id'];
		$query = mysqli_query($koneksi, "SELECT * FROM transaksi WHERE id='$id'")or die(mysqli_error());
		while($data = mysqli_fetch_array($query)){
	?>		

    <header class="hdr-box flex-row">
        <div class="hdr-content flex-row">
            <div class="hdr-content2">
                <i class="bi bi-file-earmark-code-fill" style="font-size: 19px; color: white;"></i><h1>Aplikasi CRUD dengan HTML, CSS, PHP, dan MySQL - Athallah XII-RPL A</h1>
            </div>
    
        </div>
    </header>
        
    <ul class="breadcrumbs flex-row">
        <li class="judul flex-row"><i class="bi bi-cart3" style="font-size: 28px; margin-right: 10px; color: #252525;"></i><h1>Transaksi</h1></li>
        <li class="link flex-row">
            <a href="../index.php"><i class="bi bi-house-door-fill"></i></a> > <a href="tampil-transaksi.php">transaksi</a> > <a href="">Edit Transaksi</a>
        </li>
    </ul>
    
    <main class="table-wrap">
		<form action="proses-edit-transaksi.php" method="post" class="form">
			<input style="display: none;" type="text" name="id" value="<?php echo $data['id'] ?>">
		
			<label class="label" for="id_pelanggan">ID Pelanggan : </label>
			<input class="control" type="text" name="id_pelanggan" value="<?php echo $data['id_pelanggan'] ?>">
		
			<label class="label label-2" for="tanggal-transaksi">Tanggal Transaksi : </label>
			<input class="control" type="date" id="tanggal-transaksi" name="tanggal" value="<?php echo $data['tanggal'] ?>">

			<input class="button-control" type="submit" value="Simpan"></td>
		</form>
    </main>

    <!-- <footer class="ftr-box flex-row">
        <div class="ftr-content flex-row">
            <div class="ftr-content2 flex-row">
                <p>© 2023 - <a href="https://www.instagram.com/athallah_019/" target="__blank">athallah_019</a>. All rights reserved.</p>
            </div>
    
        </div>
    </footer> -->

	<?php } ?>
</body>

</html>