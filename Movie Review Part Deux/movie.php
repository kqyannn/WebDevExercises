<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<!-- saved from url=(0079)https://courses.cs.washington.edu/courses/cse190m/10su/homework/2/skeleton.html -->
<html xmlns="http://www.w3.org/1999/xhtml">
	<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Rancid Tomatoes</title>
		<link rel="review icon" href="http://www.cs.washington.edu/education/courses/cse190m/10su/homework/2/rotten.gif" />
		
		<link href="movie.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<div id="banner">
			<img src="http://www.cs.washington.edu/education/courses/cse190m/10su/homework/2/banner.png" alt="Rancid Tomatoes" />
		</div>

		<?php 
			$movie = $_GET["film"];
			$info = file("$movie/info.txt");
			$title = $info[0];
			$year = trim($info[1]);
		?>

		<h1 id="movie_title"><?=$title . "($year)";?></h1>
		<div id="content">
			<div id="overview">
				<div>
					<img src="<?=$movie?>/overview.png" alt="general overview" />
				</div>
				<dl>
					<?php
						$overview = file("$movie/overview.txt");
						for($i = 0; $i < count($overview); $i++) {
							$detailsCut = explode(":", $overview[$i]); ?>
							<dt><?=$detailsCut[0];?></dt>
							<dd>
							<?php if($detailsCut[0] == "STARRING" || $detailsCut[0] == "PRODUCER") {
								$casts = explode(", ", $detailsCut[1]);
								foreach($casts as $casts2) { ?>
								<?=$casts2;?>
								<br/>
							<?php }
							} else { ?>
								<?=$detailsCut[1];?>
								<br/>
							<?php } ?>
							</dd>
					<?php } ?>
				</dl>
			</div>

			<div id="reviews">
				<div id="rev_rating">
					<?php
						$rancidRating = $info[2];
						if($rancidRating >= 60 && $rancidRating <= 100) { ?>
							<img src="http://www.cs.washington.edu/education/courses/cse190m/10su/homework/2/freshbig.png" alt="Fresh" />
							<?=$rancidRating . "%"; ?>
					<?php } elseif($rancidRating < 60 && $rancidRating >= 0) { ?>
							<img src="http://www.cs.washington.edu/education/courses/cse190m/10su/homework/2/rottenbig.png" alt="Rotten" />
							<?=$rancidRating . "%"; ?>
					<?php } ?>
				</div>
				
				<div id="user_reviews">
					<?php
						$reviews = glob("$movie/review*.txt");
						$revCount = count($reviews);
						$left = round($revCount / 2);
						if($left % 2 == 0) {
							$right = ($revCount - $left);
						} else {
							$right = ($revCount - $left) + 1;
						}
					?>
					<div class="reviews">
						<?php
							for($j = 0; $j < $left; $j++) { ?>
								<p class="user_rev">
									<?php $indivReview = file($reviews[$j]);
									$userRevDetail = $indivReview[0];
									$userRev = $indivReview[1];
									$username = $indivReview[2];
									$userContact = $indivReview[3];
									
									if(trim($userRev) == "ROTTEN") { ?>
										<img src="http://www.cs.washington.edu/education/courses/cse190m/10su/homework/2/rotten.gif" alt="Rotten" />
									<?php } elseif(trim($userRev) == "FRESH"){ ?>
										<img src="http://www.cs.washington.edu/education/courses/cse190m/10su/homework/2/fresh.gif" alt="Fresh" />
								<?php } ?>
									<q><?=$userRevDetail?></q>
								</p>
								<p class="user_info">
									<img src="http://www.cs.washington.edu/education/courses/cse190m/10su/homework/2/critic.gif" alt="Critic" />
									<?=$username?> <br/>
									<?=$userContact?>
								</p>
							<?php } ?> 
					</div>
					<div class="reviews">
						<?php
							for($k = $right; $k < $revCount; $k++) { ?>
								<p class="user_rev">
									<?php $indivReview = file($reviews[$k]);
									$userRevDetail = $indivReview[0];
									$userRev = $indivReview[1];
									$username = $indivReview[2];
									$userContact = $indivReview[3];
									
									if(trim($userRev) == "ROTTEN") { ?>
										<img src="http://www.cs.washington.edu/education/courses/cse190m/10su/homework/2/rotten.gif" alt="Rotten" />
									<?php } elseif(trim($userRev) == "FRESH"){ ?>
										<img src="http://www.cs.washington.edu/education/courses/cse190m/10su/homework/2/fresh.gif" alt="Fresh" />
								<?php } ?>
									<q><?=$userRevDetail?></q>
								</p>
								<p class="user_info">
									<img src="http://www.cs.washington.edu/education/courses/cse190m/10su/homework/2/critic.gif" alt="Critic" />
									<?=$username?> <br/>
									<?=$userContact?>
								</p>
							<?php } ?> 
					</div>
				</div>			
			</div>	
			<p id="page_num">(1-<?=$revCount?>) of 88</p>
		</div>
		
		<div id="validators">
			<a href="https://webster.cs.washington.edu/validate.php"><img src="http://www.cs.washington.edu/education/courses/cse190m/10su/homework/2/w3c-xhtml.png" alt="Valid XHTML 1.1" /></a> <br />
			<a href="https://webster.cs.washington.edu/validate-css.php"><img src="http://www.cs.washington.edu/education/courses/cse190m/10su/homework/2/w3c-css.png" alt="Valid CSS!" /></a>
		</div>
</body></html>