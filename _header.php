<?php

function view_header($param) {
    ?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Balerupa</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" type="text/css" href="style/m8slider-0.1.css">
    <script type="text/javascript" src="script/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="script/m8slider-0.1.js"></script>
</head>
<body>
    <div class="container">
        <div class="left">
            <div style="background-image:url('img/brand.png');height:39px;margin-bottom:50px;width:127px"></div>
            <?php
            if ($param['page'] != 'home') {
                ?>
            <div style="background-image:url('img/logo.png');height:138px;width:139px"></div>
                <?php
            }
            ?>
        </div>
        <div class="right">
            <div class="nav">
                <ul>
                    <li style="width:70px"<?php echo $param['page'] == 'home' ? ' class="active"' : ''; ?>>
                        <a href="home.php">Home</a>
                    </li>
                    <li style="width:80px"<?php echo $param['page'] == 'about' ? ' class="active"' : ''; ?>>
                        <a href="about.php">About Us</a>
                    </li>
                    <li style="width:140px"<?php echo $param['page'] == 'studio' ? ' class="active"' : ''; ?>>
                        <a href="studio.php">Creative Studio</a>
                    </li>
                    <li style="width:90px"<?php echo $param['page'] == 'bimbel' ? ' class="active"' : ''; ?>>
                        <a href="bimbel.php">Bimbel SR</a>
                    </li>
                    <li style="width:132px"<?php echo $param['page'] == 'sanggar' ? ' class="active"' : ''; ?>>
                        <a href="sanggar.php">Sanggar Budaya</a>
                    </li>
                    <li style="width:90px"<?php echo $param['page'] == 'yayasan' ? ' class="active"' : ''; ?>>
                        <a href="yayasan.php">Yayasan</a>
                    </li>
                    <li style="width:80px"<?php echo $param['page'] == 'produk' ? ' class="active"' : ''; ?>>
                        <a href="produk.php">Produk</a>
                    </li>
                    <li style="width:70px"<?php echo $param['page'] == 'contact' ? ' class="active"' : ''; ?>>
                        <a href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="body">

    <?php
}
