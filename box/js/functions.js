<?php $thisPage="Listings"; ?>
<!DOCTYPE html>
<html dir="ltr" lang="en-GB">
	<head>
		<title>box</title>
		<?php include('includes/head.php'); ?>
	</head>
	<body>
		<div class="wrapper">
			<div class="section front">	
				<header>
					<ul>
						<li><a href="" class="exposeBack topControl"><i class="icon-reorder"></i><span>Back</span></a></li>
						<li><a href="" class="exposeCalendar"><span class="calday">Today</span><span class="calnumber">31</span></a></li>
						<li><a href="" class="exposeColumns topControl"><i class="icon-columns"></i><span>Choose columns</span></a></li>
					</ul>
				</header>
				<div class="container">
					<div class="channels">
						<ul>
							<li class="channel">
								<h1>BBC 1</h1>
								<div id="bbc1" class="gutter"></div>
							</li>
							<li class="channel">
								<h1>BBC 2</h1>
								<div id="bbc2" class="gutter"></div>
							</li>
							<li class="channel">
								<h1>BBC 3</h1>
								<div id="bbc3" class="gutter"></div>
							</li>
							<li class="channel">
								<h1>BBC 4</h1>
								<div id="bbc4" class="gutter"></div>
							</li>
							<li class="channel">
								<h1>CBBC</h1>
								<div id="cbbc" class="gutter"></div>
							</li>
							<li class="channel">
								<h1>CBeebies</h1>
								<div id="cbeebies" class="gutter"></div>
							</li>
							<li class="channel">
								<h1>BBC News</h1>
								<div id="news" class="gutter"></div>
							</li>
							<li class="channel">
								<h1>BBC Parliament</h1>
								<div id="parliament" class="gutter"></div>
							</li>
						</ul>
					</div>
				</div>
				<div class="calendar">
					<!-- <img src="images/appfeatured-3.gif" alt="Temporary" /> -->
					<table border="0" cellpadding="0" cellspacing="0">
						<tr>
							<th>Wed</th>
							<th>Thu</th>
							<th>Fri</th>
							<th>Sat</th>
							<th>Sun</th>
							<th>Mon</th>
							<th>Tue</th>
						</tr>
						<tr>
							<td>
								<a href="">
									<span class="calnumber">29</span>
								</a>	
							</td>
							<td class="">
								<a href="">
									<span class="calnumber">30</span>
								</a>	
							</td>
							<td class="active today">
								<a href="">
									<span class="calnumber">31</span>
								</a>	
							</td>
							<td>
								<a href="">
									<span class="calnumber">1</span>
								</a>	
							</td>
							<td>
								<a href="">
									<span class="calnumber">2</span>
								</a>	
							</td>
							<td>
								<a href="">
									<span class="calnumber">3</span>
								</a>	
							</td>
							<td>
								<a href="">
									<span class="calnumber">4</span>
								</a>	
							</td>	
						</tr>
						<tr>
							<td>
								<a href="">
									<span class="calnumber">5</span>
								</a>	
							</td>
							<td>
								<a href="">
									<span class="calnumber">6</span>
								</a>	
							</td>
							<td>
								<a href="">
									<span class="calnumber">7</span>
								</a>	
							</td>
							<td class="inactive">
								<a href="">
									<span class="calnumber">8</span>
								</a>	
							</td>
							<td class="inactive">
								<a href="">
									<span class="calnumber">9</span>
								</a>	
							</td>
							<td class="inactive">
								<a href="">
									<span class="calnumber">10</span>
								</a>	
							</td>
							<td class="inactive">
								<a href="">
									<span class="calnumber">11</span>
								</a>	
							</td>	
						</tr>
					</table>
				</div>
			</div>
			<div class="section back">
				<?php include('includes/controls.php'); ?>
			</div>
			<div class="overlay">
				<div class="page">
					<!--article class="film">
						<dl>
							<dt>Those Magnificent Men in Their Flying Machines <span class="year">(1965)</span></dt>
							<dd class="p-time"><span class="hour">9</span>:<span class="minutes">00</span> &ndash; <span class="hour">10</span>:<span class="minutes">30</span></dd>
							<dd class="p-channel">BBC 1</dd>
							<dd class="p-details">
								<ul>
									<li class="replay"><a href="">Catch-up</a></li>
									<li class="hd">HD</li>
									<li class="widescreen">W</li>
									<li class="subtitles">S</li>
									<li class="repeat">R</li>
									<li class="length">120 mins</li>
								</ul>
							</dd>
						</dl>
						<figure>
							<img src="images/appfeatured-2.jpg" alt="Road" />
							<figcaption>Philip Larkin had it right...</figcaption>
						</figure>
						<div class="col">
							<p>A rare event for cult movie fans, BBC Four, that doyen of sophiscated European TV and film (yeah, right) brings this cinematic classic to the viewers of post-watershed crap TV.</p>
							<p>Hey, I could write TV reviews for a living. A few superlatives here, a few choice words there. Easy. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
							<p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
						</div>
					</article-->
          <article class="film">
							<dl style="width:90%">
								<dt id="p-name"></dt>
								<dd id="p-time"></dd>
								<dd id="p-channel"></dd>
								<dd id="p-details">
									<ul>
										<!--li class="hd">HD</li>
										<li class="widescreen">W</li>
										<li class="subtitles">S</li-->
										<li class="repeat"></li>
										<li class="replay"></li>
										<li class="length"></li>
									</ul>
								</dd>
							</dl>
							<figure>
								<img id="p-img" src="" alt="" />
								<figcaption></figcaption>
							</figure>
							<div id="p-desc" class="col"></div>
								
						</article>
					<a href="" class="closeOverlay">Close</a>
				</div>
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
