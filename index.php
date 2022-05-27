<?php
   include 'koneksi.php'
?>
<html>

<head>
    <title>iNET</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <!-- bagian header template -->
    <header>
        <h1 class="judul">iNET</h1>
    </header>
    <!-- akhir bagian header template -->

    <div class="wrap">
        <!-- bagian sidebar website -->
        <aside class="sidebar">
            <div class="widget">
                <!-- bagian login user -->
                <h2>Masuk</h2>
                <hr>
                <div class="in">
                    <form class="form" action="loadinglogin.php" method="POST">
                        <div class="kotak">
                            <label for="username">Masukan Nama Pengguna</label>
                            <input type="text" name="username" placeholder="Masukan Alamat E-mail Anda">
                        </div>
                        <div class="kotak">
                            <label for="password">Kata Sandi</label>
                            <input type="password" name="password" placeholder="Masukan Kata Sandi Anda">
                        </div>
                        <div class="kotak">
                            <input type="submit" value="Masuk">
                            <a href="daftar.php"><input type="button" value="Daftar"></a>
                        </div>
                    </form>
                </div>
                <!-- akhir bagian login user -->
            </div>
            <div class="widget">
                <h2>Daftar Operator</h2>
                <hr>
                <img src="operator.jpg">
                <p></p>
            </div>
        </aside>
        <!-- akhir bagian sidebar website -->

        <!-- bagian konten Blog -->
        <div class="blog">
            <div class="conteudo">
                <div class="post-info">
                    Di Posting Oleh <b>iNET</b>
                </div>
                <img src="paket-data-internet.png">
                <h1> Pembelian Paket Data Online Seluruh Operator Termurah di se-Indonesia </h1>
                <hr>
                <p>
                    Pusing mikirin paket data sudah mau habis ? Bingung mau beli dimana ? Beli saja di iNET. Penjualan Paket Data seluruh Operator Termurah se-Indonesia.
                </p>
            </div>
        </div>
        <!-- akhir bagian konten Blog -->
    </div>

</body>

</html>