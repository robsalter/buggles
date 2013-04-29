<?php $thisPage="Test"; ?>
<!DOCTYPE html>
<html dir="ltr" lang="en-GB">
	<head>
		<title>box (test panels)</title>
		<?php include('includes/head.php'); ?>
		
		<link rel="stylesheet" type="text/css" href="css/testpanels.css" media="all" />
	</head>
	<body class="testpanels" onload="setTimeout(function() { window.scrollTo(0, 1) }, 100)">
		<div class="wrapper">
			<div class="section front">
				<header>
					<a href="" class="exposeBack">show back</a>
					<a href="" class="exposeOverlay">show overlay</a>
					<a href="" class="exposeCalendar">show calendar</a>
				</header>
				<div class="container">
					<div class="channels">
						<p>top</p>
					</div>	
				</div>
				<div class="calendar">
					<p>Oi!</p>
				</div>
				<div class="overlay">
					<p><a href="" class="closeOverlay">Close</a></p>
				</div>
			</div>
			
			<div class="section back">
				<p>back</p>
			</div>
		</div>
	</body>
</html>			