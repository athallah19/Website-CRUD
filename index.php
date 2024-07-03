<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("location: login.php");
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="asset/style.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="asset/logo.png" type="image/x-icon">

    <title>Aplikasi CRUD - Dashboard</title>
    
    <style>
        .hdr-content22 h1 {
            font-size: 17px;
            font-weight: 500;
        }

        .hdr-content22 a {
            font-size: 16px;
            font-weight: 500;
            text-decoration: none;
            color: #ffff;
        }

        .hdr-content22 {
            width: 1100px;
            display: flex;
            align-items: center;
            flex-direction: row;
            gap: 10px;
            color: #ffff;
        }
        
        .link2 {
            display: flex;
            gap: 15px;
            margin: auto;
        }

        .link2 a {
            font-size: 18px;
            color: #252525;
            font-weight: 400;
        }

        .link2 .bi {
            font-size: 17px; 
            margin-right: 5px;
            color: #252525;
        }
    </style>
</head>

<body>
    <header class="hdr-box flex-row">
        <div class="hdr-content flex-row">
            <div class="hdr-content22">
            <h1><i class="bi bi-house-door-fill" style="font-size: 19px; margin-right: 2px; color: white;"></i> My Dashboard</h1> |
                <a href="logout.php"><i class="bi bi-door-open-fill" style="font-size: 18px; margin-right: 2px; color: white;"></i> Logout</a>
            </div>
    
        </div>
    </header>

    <ul class="breadcrumbs flex-row">
    
        <li class="judul flex-row"><i class="bi bi-person-badge" style="font-size: 28px; margin-right: 10px; color: #252525;"></i><h1>Selamat Datang, <strong><?php echo $username; ?></strong>!</h1></li>
        <li class="link flex-row">
        <a href="produk/tampil-produk.php"><i class="bi bi-boxes" style="font-size: 20px; margin-right: 5px; color: #252525;"></i>Produk</a> | 
            <a href="pelanggan/tampil-pelanggan.php"><i class="bi bi-people" style="font-size: 20px; margin-right: 5px; color: #252525;"></i>Pelanggan</a> | 
            <a href="transaksi/tampil-transaksi.php"><i class="bi bi-cart3" style="font-size: 20px; margin-right: 5px; color: #252525;"></i>Transaksi</a> | 
            <a href="detail_transaksi/tampil-detail_transaksi.php"><i class="bi bi-person-lines-fill" style="font-size: 20px; margin-right: 5px;"></i>Detail Transaksi</a>
        </li>
    </ul>
    
    <main class="table-wrap">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor inci
        didunt ut labore et dolore magna aliqua. Faucibus vitae aliquet nec ullamcorper.
        Fermentum iaculis eu non diam phasellus. Sed tempus urna et pharetra. Sapien nec
        sagittis aliquam malesuada bibendum arcu vitae elementum. Odio eu feugiat pretium 
        nibh ipsum consequat nisl vel pretium. Adipiscing elit pellentesque habitant morbi 
        tristique. Risus pretium quam vulputate dignissim suspendisse in. Dictumst quisque 
        sagittis purus sit amet volutpat consequat mauris nunc. Vestibulum morbi blandit cursus risus at 
        ultrices mi tempus imperdiet. Tristique risus nec feugiat in fermentum posuere urna nec tincidunt. Malesuada fames ac turpis egestas. Viverra mauris in 
        aliquam sem fringilla ut morbi. Nunc pulvinar sapien et ligula ullamcorper malesuada proin. Massa placerat 
        duis ultricies lacus. Pharetra pharetra massa massa ultricies mi quis hendrerit dolor magna. Elementum sagittis vitae et leo duis ut. Iaculis eu non diam phasellus vestibulum lorem sed risus ultricies.
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