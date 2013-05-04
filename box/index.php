<?php $thisPage="Home"; ?>
<!DOCTYPE html>
<html dir="ltr" lang="en-GB">
	<head>
		<title>box</title>
		<?php include('includes/head.php'); ?>
		
		<link rel="stylesheet" type="text/css" href="css/testquarterhour.css" media="all" />
	</head>
	<body>
		<div class="wrapper">
			<div class="section front">	
				<header>
					<ul>
						<li><a href="" class="exposeBack topControl"><i class="icon-reorder"></i><span>Back</span></a></li>
						<li></li>
						<li></li>
					</ul>
				</header>
				<div class="container">
					<div class="search">
						<form>
							<ul>
								<li><input type="text" placeholder="Find something to watch" /></li>
								<li><input type="submit" value="Search" /></li>
							</ul>	
						</form>
						<div class="options">
							<ul class="controls">
								<li class="wide"><a href="listings.php">What's on</a></li>
								<li><a href="">Film</a></li>
								<li><a href="">Sport</a></li>
								<li><a href="">Children</a></li>
								<li><a href="">News</a></li>
								<li><a href="">Factual</a></li>
								<li><a href="">Comedy</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>	
			<div class="section back">
				<?php include('includes/controls.php'); ?>
			</div>
		</div>
		
		<script type="text/javascript">
			var carousel = new Carousel('.channels');
			carousel.init();
			
			var a=$(".controls a");
			for(var i=0;i<a.length;i++)
			{
			    a[i].onclick=function()
			    {
			        window.location=this.getAttribute("href");
			        return false
			    }
			}
		</script>
	</body>
</html>	