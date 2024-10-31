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
                    <h2>Newest News</h2>
                    <h5>30 September 2024</h5>
                    <img src="Capture.PNG" height="400" width="1020">
                    <p>New on Realms: Phobiaphobia
                        Have a manageable amount of fear, twelve maps are here!
                        Why was six scared of seven? Heptaphobia – the fear of the number seven! Today we are going to venture into the world of phobias, 
                        which there are many more than one would imagine (if you have nomatophobia, the fear of names, please don’t look towards the upper left of this text blurb). 
                        As with hippopotomonsrosesquippedaliophobia (the fear of long words), it seems our mental health experts have decided exposure is the best therapy, 
                        so today’s release will focus on curing your ailments by confronting them headfirst. I will, however, avoid triggering your macrophobia (fear of long waits) and jump right into it!
                        SHADOW OF THE SKELETON KING
                    </p>
                    <p>by pigwa, TheWorfer27, & eepyhana</p>
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
