<!DOCTYPE html>
<html>
    <head>
        <title>Land Bonk</title>
        <meta charset="utf-8" />
        <link href="style.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <?php 

        ?>
        <img src="images/doge.png" class="doge"/>
        <fieldset>
            <legend><img src="images/cheems.png" width="30px" height="30px"/> Land Bonk of the Dogebeans</legend>
            
            <h2><div>Ur Mone is:</div></h2>
            <?php 
                $balance;
                if(file_exists("balance.txt")) {
                    $balance = (int)file_get_contents("balance.txt");
                } else {
                    $balance = 0;
                }
            ?>
                <div id="mone">
                    <p style="color: rgb(0, 195, 0);">$<?=$balance?></p>
                </div>
                <div class="buttons">
                    <button onclick="location.href='index.php'">Go back home</button>
                </div>
        </fieldset>
    </body>
</html>