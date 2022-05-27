<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:index.php'); }
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
                    <h2>Masuk</h2>
                    <hr>
                    <div class="in">
                            <div class="kotak">
                                <a href="index.php"><input type="button" value="Masuk"></a>
                            </div>
                    </div>
                </div>
                <div class="widget">
                    <h2>Daftar Operator</h2>
                    <hr>
                    <img src="operator.jpg">
                    <p></p>
                </div>
            </aside>
            <!-- akhir bagian sidebar website -->

            <!-- form pendaftaran -->
            <div class="blog">
                <div class="conteudo">
                    <h1>Form Pendaftaran iNET</h1>
                    <div class="in">
                        <form class="form" action="loadingdaftar.php" method="POST">
                            <div class="kotak">
                                <label for="username">Masukan Nama Pengguna</label>
                                <input type="text" name="username" placeholder="Masukan Nama Anda">
                            </div>
                            <div class="kotak">
                                <label for="nohp">Masukan Nomor Handphone</label>
                                <input type="text" name="nohp" placeholder="Masukan Nomor Handphone Anda">
                            </div>
                            <div class="kotak">
                                <label for="email">Masukan E-mail</label>
                                <input type="text" name="email" placeholder="Masukan Alamat E-mail Anda">
                            </div>
                            <div class="kotak">
                                <label for="password">Kata Sandi</label>
                                <input type="password" name="password" placeholder="Masukan Kata Sandi Anda">
                            </div>
                            <div class="kotak">
                                <input type="submit" value="Daftar"> <input type="reset" value="Reset">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- akhir form pendaftaran -->
        </div>

    </body>

    </html>