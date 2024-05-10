<?php include("top.html"); 
    // Declarations and initialization
    $name = $_GET["name"];
    $gender;
    $min_age;
    $max_age;
    $os;
    $personality;

    // Search user
    $profiles = file("singles.txt");
    $found = false;
    for($i = 0; $i < count($profiles)-1; $i++) {
        $profile_info = explode(",", $profiles[$i]);
        $name2 = $profile_info[0];
        if($name2 == $name) {
            $gender = $profile_info[1];
            $min_age = $profile_info[5];
            $max_age = $profile_info[6];
            $os = $profile_info[4];
            $personality = $profile_info[3];
            $found = true;
            break;
        }
    }
    // Display if user is not found
    if(!$found) { ?>
        <h1>User not found.</h1>
        <p>You can <a href="signup.php">signup here!</a></p>
        <?php include("bottom.html");
	    exit(1);
    }
?>
    <h1>Matches for <?=$name?></h1>

    <!-- Displaying matching persons --> 
    <?php 
        $matches = 0;
        for($j = 0; $j < count($profiles)-1; $j++) {
            $profile_info2 = explode(",", $profiles[$j]);
            if($profile_info2[1] != $gender && $profile_info2[2] >= $min_age && $profile_info2[2] <= $max_age
                && $profile_info2[4] == $os) {
                $personality2 = $profile_info2[3];
                for($k = 0; $k < 3; $k++) {
                    if($personality2[$k] == $personality[$k]) { 
                        $sepa_name = explode(" ",strtolower($profile_info2[0])); ?>
                        <div class="match">
                            <p>
                                <img src="images/<?=$sepa_name[0]?>_<?=$sepa_name[1]?>.jpg" width="150px"/><?=$profile_info2[0]?>
                                <ul>
                                    <li><strong>gender:</strong><?=$profile_info2[1]?></li>
                                    <li><strong>age:</strong><?=$profile_info2[2]?></li>
                                    <li><strong>type:</strong><?=$profile_info2[3]?></li>
                                    <li><strong>OS:</strong><?=$profile_info2[4]?></li>
                                </ul>
                            </p>
                        </div>
                    <?php 
                        $matches++;
                        break;
                    }
                }
            }
        }
        // Display if no match is found
        if($matches == 0) { ?>
            <p>No matches found :(</p>
        <?php }
include("bottom.html"); ?>