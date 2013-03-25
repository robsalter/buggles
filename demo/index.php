<?php $thisPage="Home"; ?>
<!DOCTYPE html>
<html dir="ltr" lang="en-GB">
	<head>
		<title>Listings &ndash; TV Guide App</title>
		<?php include('includes/head.php'); ?>
	</head>
	<body>
		<div id="ipadScreen">
			<div id="deviceBar"></div>
			<div id="mask">
				<div id="homePage">
					<img src="content/images/tga-loadingscreen.jpg" />
				</div>
			</div>
			<!-- End of mask -->
			
			<!-- Include app's tab bar at bottom of iPad screen -->
			<?php include('includes/apptabbar.php'); ?>
		</div>
	</body>
</html>
