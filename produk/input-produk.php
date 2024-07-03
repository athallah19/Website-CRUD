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

    <title>Aplikasi CRUD - Tambah Produk</title>
</head>

<body>
    <header class="hdr-box flex-row">
        <div class="hdr-content flex-row">
            <div class="hdr-content2">
                <i class="bi bi-file-earmark-code-fill" style="font-size: 19px; color: white;"></i><h1>Aplikasi CRUD dengan HTML, CSS, PHP, dan MySQL - Athallah XII-RPL A</h1>
            </div>
    
        </div>
    </header>
        
    <ul class="breadcrumbs flex-row">
        <li class="judul flex-row"><i class="bi bi-boxes" style="font-size: 28px; margin-right: 10px; color: #252525;"></i><h1>Produk</h1></li>
        <li class="link flex-row">
            <a href="../index.php"><i class="bi bi-house-door-fill"></i></a> > <a href="tampil-produk.php">Produk</a> > <a href="">Tambah Produk</a>
        </li>
    </ul>
    
    <main class="table-wrap">
        <form action="proses-simpan-produk.php" method="post" class="form">

            <label class="label" for="nama-produk">Nama Produk : </label>
            <input class="control" type="text" id="nama-produk" name="nama">

            <label class="label label-2" for="harga-produk">Harga Produk : </label>
            <input class="control number" type="number" id="harga-produk" name="harga" >

            <button class="button-control" type="submit" value="submit" name="proses">Simpan</button>

        </form>
    </main>

    <!-- <footer class="ftr-box flex-row">
        <div class="ftr-content flex-row">
            <div class="ftr-content2 flex-row">
                <p>© 2023 - <a href="https://www.instagram.com/athallah_019/" target="__blank">athallah_019</a>. All rights reserved.</p>
            </div>
    
        </div>
    </footer> -->

</body>

</html>