<!DOCTYPE html>
<html>
    <head>
        <title>Desain Website</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php
            include ('header.php');
            include ('menu.php');
        ?>
        <div class="row">
            <div class="leftcolumn">
                <div class="card">
                    <h2>Selamat Datang Sayang</h2>
                    <p>Silahkan pilih menu untuk mengakses halaman web saya</p>
                    <img src="gambar contoh.jfif" height="400" width="1020">
                    <p>Minecraft adalah sebuah permainan bak pasir yang dikembangkan oleh pengembang permainan Swedia Mojang Studios.
                        Permainan ini dibuat oleh Markus "Notch" Persson dalam bahasa pemrograman Java. Minecraft ini adalah game favorit saya.</p>
                </div>
            </div>
            <?php
                include ('konten_kanan.php');
            ?>
        </div>
        <?php
        include ('footer.php')
        ?>
    </body>
</html>
