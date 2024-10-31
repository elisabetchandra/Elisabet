<!DOCTYPE html>
<html>
    <head>
        <title>Profil Website Layout</title>
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
                    <h2>Contact Us</h2>
                    <div class="container">
                        <form action="/action_page.php">
                            <div>
                                <div class="col.25">
                                    <label for="fname">Name</label>
                                </div>
                                <div class="col.75">
                                    <input type="text" id="fname" name="nama" placeholder="Nama Lengkap. .">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col.25">
                                    <label for="lname">Telephone</label>
                                </div>
                                <div class="col.75">
                                    <input type="text" id="fname" name="hp" placeholder="No Hp. .">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col.25">
                                    <label for="subject">Message</label>
                                </div>
                                <div class="col.75">
                                    <textarea id="subject" name="pesan" placeholder="Tulis Pesan. ." style="height: 200px;"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <input type="submit" value="kirim">
                            </div>
                        </form>
                    </div>    
                </div>
            </div>
            <?php 
                include ('konten_kanan.php')
            ?>
        </div>        
        <?php 
            include ('footer.php')
        ?>
    </body>
</html>
