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
                $addbalance = (int)$_POST["money"];

                if(file_exists("balance.txt")) {
                    $prevbalance = (int)file_get_contents("balance.txt");
                    $totalbalance = $addbalance + $prevbalance;
                    file_put_contents("balance.txt", $totalbalance);
                } else {
                    file_put_contents("balance.txt", $addbalance);
                }
            ?>

            <h2><div>Deposit of <span style="color: rgb(0, 195, 0);">$<?=$addbalance?></span> was successful!</div></h2>

            <div class="buttons">
                <button onclick="location.href='index.php'">Go back home</button>
            </div>
        </fieldset>
    </body>
</html>