<?php $thisPage="Home"; ?>
<!DOCTYPE html>
<html dir="ltr" lang="en-GB">
	<head>
		<title>box</title>
		<?php include('includes/head.php'); ?>
	</head>
	<body class="multi" onload="setTimeout(function() { window.scrollTo(0, 1) }, 100)">
		<div class="wrapper">
			<header>
				<div class="toggle">
					<div>
						<a href="" class="toggleJesus">Jesus</a>
						<a href="" class="toggleSusej">Susej</a>
					</div>	
				</div>
			</header>
			<div class="section front">
				<div class="grid">
					<div class="g-row">
						<div class="g-progs g-times channels">
							<ul>
								<li class="g-prog">20:00</li>
								<li class="g-prog">21:00</li>
								<li class="g-prog">22:00</li>
								<li class="g-prog">23:00</li>
							</ul>
						</div>
					</div>
					<div class="g-row">	
						<div class="g-channels">
							<div class="g-channel">
								<p>BBC 1</p>
							</div>	
						</div>
						<div class="g-progs channels">
							<ul>
								<li class="g-prog">
									<article>
										<dl>
											<dt>Masterchef</dt>
											<dd class="p-time">20:00</dd>
										</dl>
									</article>
								</li>
								<li class="g-prog">
									<p>rhbarb</p>
								</li>
								<li class="g-prog">
									<p>rhunbra</p>
								</li>
								<li class="g-prog">
									<p>blads</p>
								</li>
							</ul>
						</div>
					</div>
					<div class="g-row">
						<div class="g-channels">
							<div class="g-channel">
								<p>BBC 2</p>
							</div>	
						</div>
						<div class="g-progs channels">
							<ul>
								<li class="g-prog">
									<p>bla</p>
								</li>
								<li class="g-prog">
									<p>rhbarb</p>
								</li>
								<li class="g-prog">
									<p>rhunbra</p>
								</li>
								<li class="g-prog">
									<p>blads</p>
								</li>
							</ul>
						</div>
					</div>
					<div class="g-row">
						<div class="g-channels">
							<div class="g-channel">
								<p>ITV 1</p>
							</div>	
						</div>
						<div class="g-progs channels">
							<ul>
								<li class="g-prog">
									<p>bla</p>
								</li>
								<li class="g-prog">
									<p>rhbarb</p>
								</li>
								<li class="g-prog">
									<p>rhunbra</p>
								</li>
								<li class="g-prog">
									<p>blads</p>
								</li>
							</ul>
						</div>
					</div>
					<div class="g-row">
						<div class="g-channels">
							<div class="g-channel">
								<p>C4</p>
							</div>	
						</div>
						<div class="g-progs channels">
							<ul>
								<li class="g-prog">
									<p>bla</p>
								</li>
								<li class="g-prog">
									<p>rhbarb</p>
								</li>
								<li class="g-prog">
									<p>rhunbra</p>
								</li>
								<li class="g-prog">
									<p>blads</p>
								</li>
							</ul>
						</div>
					</div>
					<div class="g-row">
						<div class="g-channels">
							<div class="g-channel">
								<p>C5</p>
							</div>	
						</div>
						<div class="g-progs channels">
							<ul>
								<li class="g-prog">
									<p>bla</p>
								</li>
								<li class="g-prog">
									<p>rhbarb</p>
								</li>
								<li class="g-prog">
									<p>rhunbra</p>
								</li>
								<li class="g-prog">
									<p>blads</p>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>	
			<div class="section back">
				<div class="controls">
					<ul>
						<li><a href="index.php">Channel per page view</a></li>
						<li><a href="vert.php">Vertical multi-channel view</a></li>
						<li class="selected"><a href="">Horizontal multi-channel view</a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<script type="text/javascript">
			var carousel = new Carousel(".channels");
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