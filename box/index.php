<?php $thisPage="Home"; ?>
<!DOCTYPE html>
<html dir="ltr" lang="en-GB">
	<head>
		<title>box</title>
		<?php include('includes/head.php'); ?>
	</head>
	<body class="perpage" onload="setTimeout(function() { window.scrollTo(0, 1) }, 100)">
		<div class="wrapper">
			<header>
				<!--
<ul>
					<li class="settings"><a href=""><i class="icon-cog"></i><span>Settings</span></a></li>
					<li class="tempToggle"><button id="result">Oi!</button></li>
				</ul>
-->
				<div class="toggle">
					<div>
						<a href="" class="toggleJesus"><i class="icon-cog"></i><span>Settings</span></a>
						<a href="" class="toggleSusej">Susej</a>
					</div>
					
				</div>
				<button id="result">Oi!</button>
			</header>
			<div class="section front">
				<div class="channels">
					<ul>
						<li class="channel">
							<h1>BBC 1</h1>
							<div class="gutter">
								<!-- Group <article>s (programmes) into 'h-group's -->
								<div class="h-group">
									<article class="food">
										<dl>
											<dt>Masterchef</dt>
											<dd class="p-time"><span class="hour">8</span>:<span class="minutes">00</span></dd>
											<dd class="p-details">
												<ul>
													<li class="replay"><a href="">Now on replay</a></li>
												</ul>
											</dd>
										</dl>
									</article>
								</div>
								<div class="h-group">
									<article>
										<dl>
											<dt>Great Bear Steakout and Chips</dt>
											<dd class="p-time"><span class="hour">9</span>:<span class="minutes">00</span></dd>
											<dd class="p-details">
												<ul>
													<li class="replay"><a href="">Now on replay</a></li>
												</ul>
											</dd>
										</dl>
									</article>
								</div>
								<div class="h-group">	
									<article class="news">
										<dl>
											<dt>BBC News</dt>
											<dd class="p-time"><span class="hour">10</span>:<span class="minutes">00</span></dd>
										</dl>
									</article>
									<article class="news">
										<dl>
											<dt>Regional News and Weather</dt>
											<dd class="p-time"><span class="hour">10</span>:<span class="minutes">20</span></dd>
										</dl>
									</article>
									<article class="quiz">
										<dl>
											<dt>A Question of Sport</dt>
											<dd class="p-time"><span class="hour">10</span>:<span class="minutes">35</span></dd>
										</dl>
									</article>
								</div>
								<div class="h-group">
									<article class="film">
										<dl>
											<dt>Munich</dt>
											<dd class="p-time"><span class="hour">11</span>:<span class="minutes">05</span></dd>
											<dd class="p-details">
												<ul>
													<li class="replay"><a href="">Now on replay</a></li>
												</ul>
											</dd>
										</dl>
									</article>
								</div>	
							</div>	
						</li>
						<li class="channel">
							<h1>BBC 2</h1>
							<div class="gutter">
								<div class="h-group">
									<article>
										<dl>
											<dt>Coast</dt>
											<dd class="p-time"><span class="hour">8</span>:<span class="minutes">00</span></dd>
											<dd class="p-details">
												<ul>
													<li class="replay"><a href="">Now on replay</a></li>
												</ul>
											</dd>
										</dl>
									</article>
								</div>
								<div class="h-group">	
									<article>
										<dl>
											<dt>This World</dt>
											<dd class="p-time"><span class="hour">9</span>:<span class="minutes">00</span></dd>
										</dl>
									</article>
								</div>	
								<div class="h-group">	
									<article class="quiz">
										<dl>
											<dt>Mastermind</dt>
											<dd class="p-time"><span class="hour">10</span>:<span class="minutes">00</span></dd>
										</dl>
									</article>
									<article class="news">
										<dl>
											<dt>Newsnight</dt>
											<dd class="p-time"><span class="hour">10</span>:<span class="minutes">30</span></dd>
											<dd class="p-details">
												<ul>
													<li class="hd">HD</li>
													<li class="replay"><a href="">Now on replay</a></li>
												</ul>
											</dd>
										</dl>
									</article>
								</div>
								<div class="h-group">
									<article class="sport">
										<dl>
											<dt>Snooker: The World Championship</dt>
											<dd class="p-time"><span class="hour">11</span>:<span class="minutes">20</span></dd>
										</dl>
									</article>
								</div>	
							</div>	
						</li>
						<li class="channel">
							<h1>ITV1</h1>
							<div class="gutter">
								<div class="h-group">
									<article>
										<dl>
											<dt>Food Glorious Food</dt>
											<dd class="p-time"><span class="hour">8</span>:<span class="minutes">00</span></dd>
										</dl>
									</article>
									<article>
										<dl>
											<dt>Scott &amp; Bailey</dt>
											<dd class="p-time"><span class="hour">8</span>:<span class="minutes">45</span></dd>
										</dl>
									</article>
								</div>
								<!-- Every hour gets an 'h-group' <div> regardless of whether any programmes exist in that hour -->
								<div class="h-group">
									
								</div>
								<div class="h-group">	
									<article class="news">
										<dl>
											<dt>ITV News</dt>
											<dd class="p-time"><span class="hour">10</span>:<span class="minutes">00</span></dd>
										</dl>
									</article>
									<article class="news">
										<dl>
											<dt>ITV News Lundun</dt>
											<dd class="p-time"><span class="hour">10</span>:<span class="minutes">30</span></dd>
										</dl>
									</article>
									<article>
										<dl>
											<dt>We Love the Monkees</dt>
											<dd class="p-time"><span class="hour">10</span>:<span class="minutes">35</span></dd>
										</dl>
									</article>
								</div>
								<div class="h-group">
									<article>
										<dl>
											<dt>The Dales</dt>
											<dd class="p-time"><span class="hour">11</span>:<span class="minutes">55</span></dd>
										</dl>
									</article>
								</div>	
							</div>	
						</li>
						<li class="channel">
							<h1>Channel 4</h1>
							<div class="gutter">
								<div class="h-group">
									<article>
										<dl>
											<dt>Masterchef</dt>
											<dd class="p-time"><span class="hour">8</span>:<span class="minutes">00</span></dd>
										</dl>
									</article>
								</div>
								<div class="h-group">	
									<article>
										<dl>
											<dt>Great Bear Steakout</dt>
											<dd class="p-time"><span class="hour">9</span>:<span class="minutes">00</span></dd>
										</dl>
									</article>
								</div>
								<div class="h-group">	
									<article class="news">
										<dl>
											<dt>Channel 4</dt>
											<dd class="p-time"><span class="hour">10</span>:<span class="minutes">05</span></dd>
										</dl>
									</article>
									<article class="news">
										<dl>
											<dt>Regional News and Weather</dt>
											<dd class="p-time"><span class="hour">10</span>:<span class="minutes">15</span></dd>
										</dl>
										<a href="" class="awesome"></a>
									</article>
									<article class="quiz">
										<dl>
											<dt>A Question of Sport</dt>
											<dd class="p-time"><span class="hour">10</span>:<span class="minutes">35</span></dd>
										</dl>
									</article>
									<article class="quiz">
										<dl>
											<dt>Filling time</dt>
											<dd class="p-time"><span class="hour">10</span>:<span class="minutes">45</span></dd>
										</dl>
									</article>
								</div>
								<div class="h-group">
									<article class="film">
										<dl>
											<dt>The Adventures of Baron Munchausen</dt>
											<dd class="p-time"><span class="hour">11</span>:<span class="minutes">05</span></dd>
										</dl>
									</article>
								</div>	
							</div>	
						</li>
						<li class="channel">
							<h1>Five</h1>
							<div class="gutter">
								<div class="h-group">
									<article>
										<dl>
											<dt>Coast</dt>
											<dd class="p-time"><span class="hour">8</span>:<span class="minutes">00</span></dd>
										</dl>
									</article>
									<article>
										<dl>
											<dt>This World</dt>
											<dd class="p-time"><span class="hour">8</span>:<span class="minutes">30</span></dd>
										</dl>
									</article>
								</div>
								<div class="h-group">	
									
								</div>
								<div class="h-group">	
									<article>
										<dl>
											<dt>Mastermind</dt>
											<dd class="p-time"><span class="hour">10</span>:<span class="minutes">00</span></dd>
										</dl>
									</article>
									<article>
										<dl>
											<dt>Newsnight</dt>
											<dd class="p-time"><span class="hour">10</span>:<span class="minutes">30</span></dd>
										</dl>
									</article>
								</div>
								<div class="h-group">	
									<article class="sport">
										<dl>
											<dt>Snooker: The World Championship</dt>
											<dd class="p-time"><span class="hour">11</span>:<span class="minutes">00</span></dd>
										</dl>
									</article>
								</div>	
							</div>	
						</li>
					</ul>
				</div>
			</div>
			<div class="section back">
				<div class="controls">
					<ul>
						<li class="selected"><a href="">Channel per page view</a></li>
						<li><a href="vert.php">Vertical multi-channel view</a></li>
						<li><a href="horz.php">Horizontal multi-channel view</a></li>
						<li>
							<button class="sd-time">12 hour</button>
							<button class="dd-time">24 hour</button>
						</li>
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