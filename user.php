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
                <!-- bagian user -->
                <h2>Hai <?php
                session_start();
                echo $_SESSION['username'];
                ?>, 
                </h2>
                <hr>
                <div class="btn">
                <a href="logout.php"><input type="button" value="Logout"></a>
                </div>
                <!-- akhir bagian user -->
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
                <h1> Pembelian Paket Data </h1>
                <hr>
                <form action="user.php" method="post">
                <div class="kotak">
                    <label for="Nama">Masukan Nama</label>
                    <input type="text" name="name" placeholder="Nama Pembeli">
                    </div>
                    <div class="kotak">
                    <label for="hohptjn">Masukan Nomor Handphone Tujuan</label>
                    <input type="text" name="nohptjn" placeholder="Nomor Tujuan Pengisian">
                    </div>
                    <div class="kotak">
                    <label>Pilih Operator Selular : </label>
                    <select name="operator">
                    <option>Pilih Operator Selular</option>
                    <option>-----TELKOMSEL--------</option>
                    <option value="Best Deal Combo 14GB">Best Deal Combo 14GB</option>
                    <option value="Best Deal Combo 25GB">Best Deal Combo 25GB</option>
                    <option>---------Xl---------</option>
                    <option value="Xtra Combo VIP 10GB">Xtra Combo VIP 10GB</option>
                    <option value="tra Combo VIP 20GB">Xtra Combo VIP 20GB</option>
                    <option>-----SMARTFREN------</option>
                    <option value="Kuota 5GB">Kuota 5GB</option>
                    <option value="Kuota 14GB">Kuota 14GB</option>
                    </select></div>
                    <div class="kotak">
                        <input type="submit" value="Bayar"><input type="reset" value="Reset">
                    </div>
                </form>
            </div>
        </div>
        <!-- akhir bagian konten Blog -->
    </div>

</body>

</html>