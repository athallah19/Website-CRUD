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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../asset/style.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="../asset/logo.png" type="image/x-icon">

    <title>Aplikasi CRUD - Produk</title>
</head>

<body>
    <?php 
        include "../koneksi/koneksi.php";
        if (isset($_POST['kata_kunci'])) {
                    $kata_kunci=trim($_POST['kata_kunci']);
                    $kolom="";
                    if ($_POST['kolom']=="id")
                    {
                        $kolom="id";
                    }else if ($_POST['kolom']=="nama"){
                        $kolom="nama";
                    }else {
                        $kolom="nama";
                    }
                    $sql="select * from produk where $kolom like '%" .$kata_kunci."%' order by id asc";
                }else {
                    $sql="select * from produk order by id asc";
                }
                $query = mysqli_query($koneksi,$sql);
    ?>

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
            <a href="../index.php"><i class="bi bi-house-door-fill"></i></a> > <a href="">Produk</a>
        </li>
    </ul>

    <section class="tambah-data">
        <a class="btn-tambah-data flex-row" href="input-produk.php"><i class="bi bi-plus-circle"></i></i>Tambah Produk</a> 
        <?php if (mysqli_num_rows($query) < 1) { ?><p class="kosong">Tidak ada Produk ~</p><?php } ?>
    </section>
    
    <main class="table-wrap" style="margin-top: 20px;">
        <table>
            <tr>
                <th class="id">ID Produk</th>
                <th>Nama Produk</th>
                <th>Harga Produk</th>
                <th class="aksi">Aksi</th>
            </tr>
            <?php
            
        
            $no = 1;
            while($data = mysqli_fetch_array($query)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['harga']; ?></td>
                <td>
                    <div class="action ">
                        <a class="edit" href="edit-produk.php?id=<?php echo $data['id']; ?>"><i class="bi bi-pencil-fill"></i></a>
                        <a class="hapus" href="proses-hapus-produk.php?id=<?php echo $data['id']; ?>"onclick=
                        "return confirm('Anda yakin ingin menghapus data <?php echo $data['id']; ?> ini ?')"><i class="bi bi-trash3-fill"></i></a>
                    </div>   
                </td>
                <?php } ?>
                
            </tr>
        </table>
    </main>

    <br><br><br>

    <!-- <footer class="ftr-box flex-row">
        <div class="ftr-content flex-row">
            <div class="ftr-content2 flex-row">
                <p>© 2023 - <a href="https://www.instagram.com/athallah_019/" target="__blank">athallah_019</a>. All rights reserved.</p>
            </div>
    
        </div>
    </footer> -->

</body>

</html>