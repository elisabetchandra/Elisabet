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
                    <h2>Welcome to the Minecraft Store, where all adventures begin! 🌟</h2>
                    <h5>Prepare yourself, hero! It's time to embark on an adventure and create the world of your dreams! 🛠️🌄✨</h5>
                    <table class="table">
                        <tr>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <th>Minecraft: Java & Bedrock Edition Deluxe Collection</th>
                            <th>$39.99</th>
                            <th>Experience all the different ways to explore, survive, and build in Minecraft with Minecraft: 
                                Deluxe Collection for PC, with Java & Bedrock and the Minecraft Launcher all included! 
                                Play the Bedrock Edition on a PC to browse endless community created content in the Minecraft Marketplace, 
                                discover new play styles through different maps, and express yourself with Character Creator items and emotes.</th>
                        </tr>
                        <tr>
                            <th>Minecraft Dungeons Ultimate Edition</th>
                            <th>$39.99</th>
                            <th>Experience the complete story of Minecraft Dungeons from the beginning to the End! Experience Minecraft Dungeons: 
                                Ultimate Edition, which includes the base game and all six DLCs. 
                                Picking up the Ultimate Edition means you get the full experience at a lower price than if purchased separately. 
                                Get your copy today!</th>
                        </tr>
                        <tr>
                            <th>Minecraft Legends Deluxe Edition</th>
                            <th>$49.99</th>
                            <th>Raise your banner high with six additional skins in the Deluxe Edition!
                                The piglins are threatening to consume the Overworld. Are you the hero this gentle land needs? 
                                Explore lush biomes to make alliances with new friends and familiar mobs, then face the piglins in epic battles. 
                                But be warned – they always fight back.</th>
                        </tr>
                    </table>
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
