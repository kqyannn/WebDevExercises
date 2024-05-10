<?php
    // Initialization of variables
    $name = $_POST["name"];
    $gender = $_POST["gender"];
    $age = $_POST["age"];
    $personality = $_POST["personality"];
    $OS = $_POST["OS"];
    $min_age = $_POST["min_age"];
    $max_age = $_POST["max_age"];
    if($gender == 'M')
        $seek_gender = 'F';
    else
        $seek_gender = 'M';

    // Added extra.php for validating user inputs
    include("extra.php");
    if(validate($name, $gender, $age, $personality, $OS, $min_age, $max_age, $seek_gender)) { 
        include("top.html"); ?>
        <h1>Thank You!</h1>
        <p>Welcome to NerdLuv, <?=$name?>!</p>
        <p>Now <a href="matches.php">log in to see your matches!</a></p>
    <?php } else {
        error_exit();
    }
    // Input data into singles.txt file
    $signup_info = $name . ',' . $gender . ',' . $age . ',' . $personality . ',' . $OS . ',' . $min_age . ',' . $max_age;
    $prevcontent = file_get_contents("singles.txt");
	file_put_contents("singles.txt", $signup_info . "\n" . $prevcontent);

    include("bottom.html"); 
?>