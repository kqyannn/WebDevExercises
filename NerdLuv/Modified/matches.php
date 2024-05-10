<?php include("top.html"); ?>
    <!-- Form for user name input -->
    <form action="http://localhost/NerdLuv/matches-submit.php" method="get">
        <fieldset>
            <legend>Returning User:</legend>
            <p>
                <strong>Name:</strong>
                <input type="text" name="name" size="16" />
            </p>
            <p>
                <input type="submit" value="View My Matches"  />
            </p>
        </fieldset>
    </form>
    <br />
<?php include("bottom.html"); ?>