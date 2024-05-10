<!DOCTYPE html>
<html>
    <head>
        <title>Land Bonk</title>
        <meta charset="utf-8" />
        <link href="style.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <img src="images/doge.png" class="doge"/>
        <fieldset>
            <legend><img src="images/cheems.png" width="30px" height="30px"/> Land Bonk of the Dogebeans</legend>
            <?php 
                $minusbalance = (int)$_POST["money"];

                if(file_exists("balance.txt")) {
                    $prevbalance = (int)file_get_contents("balance.txt");
                    $newbalance = $prevbalance - $minusbalance;
                    if($newbalance <=0) {
                        ?><h2><div style="color: rgb(255, 25, 0);">U Not Enough Mone :(</div></h2><?php
                    }else{
                        ?><h2><div>You Get <span style="color: rgb(0, 195, 0);">$<?=$minusbalance?></span> successfully!!!</div></h2><?php
                        file_put_contents("balance.txt", $newbalance);
                    }
                } else {
                    ?><h2><div style="color: rgb(255, 25, 0);">U Not Enough Mone :(</div></h2><?php
                }
            ?>

            <div class="buttons">
                <button onclick="location.href='index.php'">Go back home</button>
            </div>
        </fieldset>
    </body>
</html>