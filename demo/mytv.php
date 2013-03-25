<?php $thisPage="MyTV"; ?>
<!DOCTYPE html>
<html dir="ltr" lang="en-GB">
	<head>
		<title>My TV &ndash; TV Guide App</title>
		<?php include('includes/head.php'); ?>
	</head>
	<body id="myTV">
		<div id="ipadScreen">
			<div id="deviceBar"></div>
			<div id="mask">
				<div id="weekBar">
					<ul id="date">
						<li class="dateSelected">20 <span class="month">Jun</span></li>
						<li class="dateInfo">Today</li>
					</ul>
					<ul id="weekDays">
						<li class="selected"><a href="" title="Monday">Mon</a></li>
						<li><a href="" title="Tuesday">Tue</a></li>
						<li><a href="" title="Wednesday">Wed</a></li>
						<li><a href="" title="Thursday">Thu</a></li>
						<li><a href="" title="Friday">Fri</a></li>
						<li><a href="" title="Saturday">Sat</a></li>
						<li><a href="" title="Sunday">Sun</a></li>
					</ul>
					<div id="controls">
						<div id="features">
							<ul class="toggle">
								<li><a href="" class="selected" id="toggleScrollCol">Scroll</a></li>
								<li><a href="" id="toggleScrollAll">Scroll</a></li>
							</ul>
							<ul class="toggle">
								<li><a href="" class="selected" id="toggleDay">B/W</a></li>
								<li><a href="" id="toggleNight">W/B</a></li>
							</ul>
						</div>
					</div>	
				</div>
				
				<div id="scrollingBox">
					<span class="gradient topGradient"></span>
					<div id="scrollHorz">
						<div class="column">
							
								<h3>Film</h3>
								
								<div class="scrollColumn">
									
									<div class="programme">
										<ul>
											<li class="time">
												<span class="progHour">7</span><span class="minutes">:00</span>
												<span class="channel">Five</span>
											</li>
											<li class="image">
												
												<img src="content/images/tga-image.gif" alt=""/>
											</li>
											<li class="title">
												Beauty and the Beast
											</li>
											
											<li class="description">
												This powerful thriller from writer/director Neil LaBute provides Samuel L Jackson with a really decent leading role. The In the Company of Men director is once more focused on the ugly side of human nature with the tale of a black cop tormenting his new neighbours because of their interracial relationship.
											</li>
											<li class="info programmeDetails">
												<ul>
													<li class="hd" title="High Definition">HD</li>
													<li class="subtitled" title="Subtitled">S</li>
													<li class="videoplus" title="VIDEO Plus+">(60126827)</li>
												</ul>
											</li>
										</ul>
									</div>
									<div class="programme">
										<ul>
											<li class="time">
												<span class="progHour">7</span><span class="minutes">:00</span>
												<span class="channel">Film 4</span>
											</li>
											<li class="image">
												
												<img src="content/images/tga-image.gif" alt=""/>
											</li>
											<li class="title">
												You've seen it a million times before
											</li>
											
											<li class="description">
												This powerful thriller from writer/director Neil LaBute provides Samuel L Jackson with a really decent leading role. The In the Company of Men director is once more focused on the ugly side of human nature with the tale of a black cop tormenting his new neighbours because of their interracial relationship.
											</li>
											<li class="info programmeDetails">
												<ul>
													<li class="hd" title="High Definition">HD</li>
													<li class="subtitled" title="Subtitled">S</li>
													<li class="videoplus" title="VIDEO Plus+">(60126827)</li>
												</ul>
											</li>
										</ul>
									</div>
									
								</div>
						
						</div>
						
						
						
						<div class="column">
							<h3>Comedy</h3>
							<div class="scrollColumn">
								<div class="programme">
									<ul>
										<li class="time">
											<span class="progHour">9</span><span class="minutes">:00</span>
											<span class="channel">BBC Three</span>				
										</li>
										<li class="image">
											
											<img src="content/images/tga-image.gif" alt=""/>
										</li>
										<li class="title">
											Two Pints of Lager and a Packet of Crisps
										</li>
										
										<li class="description">
											This powerful thriller from writer/director Neil LaBute provides Samuel L Jackson with a really decent leading role. The In the Company of Men director is once more focused on the ugly side of human nature with the tale of a black cop tormenting his new neighbours because of their interracial relationship.
										</li>
										<li class="info programmeDetails">
											<ul>
												<li class="hd" title="High Definition">HD</li>
												<li class="subtitled" title="Subtitled">S</li>
												<li class="videoplus" title="VIDEO Plus+">(60126827)</li>
											</ul>
										</li>
									</ul>
								</div>
								<div class="programme">
									<ul>
										<li class="time">
											<span class="progHour">10</span><span class="minutes">:00</span>
											<span class="channel">BBC Four</span>
											<span class="favourite">&#10029; <!-- or &#9829; --></span>						
										</li>
										<li class="image">
											
											<img src="content/images/tga-image.gif" alt=""/>
										</li>
										<li class="title">
											Rev
										</li>
										
										<li class="description">
											This powerful thriller from writer/director Neil LaBute provides Samuel L Jackson with a really decent leading role. The In the Company of Men director is once more focused on the ugly side of human nature with the tale of a black cop tormenting his new neighbours because of their interracial relationship.
										</li>
										<li class="info programmeDetails">
											<ul>
												<li class="hd" title="High Definition">HD</li>
												<li class="subtitled" title="Subtitled">S</li>
												<li class="videoplus" title="VIDEO Plus+">(60126827)</li>
											</ul>
										</li>
									</ul>
								</div>
								
								
							</div>
						</div>
						
						<div class="column">
							<h3>Sport</h3>
							<div class="scrollColumn">
								<div class="programme">
									<ul>
										<li class="time">
											<span class="progHour">10</span><span class="minutes">:00</span>
											<span class="favourite">&#10029; <!-- or &#9829; --></span>						
										</li>
										<li class="image">
											<img src="content/images/tga-image.gif" alt=""/>
										</li>
										<li class="title">
											Lakeview Terrace
										</li>
										
										<li class="description">
											This powerful thriller from writer/director Neil LaBute provides Samuel L Jackson with a really decent leading role. The In the Company of Men director is once more focused on the ugly side of human nature with the tale of a black cop tormenting his new neighbours because of their interracial relationship.
										</li>
										<li class="info programmeDetails">
											<ul>
												<li class="hd" title="High Definition">HD</li>
												<li class="subtitled" title="Subtitled">S</li>
												<li class="videoplus" title="VIDEO Plus+">(60126827)</li>
											</ul>
										</li>
									</ul>
								</div>
								<div class="programme">
									<ul>
										<li class="time">
											<span class="progHour">10</span><span class="minutes">:00</span>
											<span class="favourite">&#10029; <!-- or &#9829; --></span>						
										</li>
										<li class="image">
											<img src="content/images/tga-image.gif" alt=""/>
										</li>
										<li class="title">
											Lakeview Terrace
										</li>
										
										<li class="description">
											This powerful thriller from writer/director Neil LaBute provides Samuel L Jackson with a really decent leading role. The In the Company of Men director is once more focused on the ugly side of human nature with the tale of a black cop tormenting his new neighbours because of their interracial relationship.
										</li>
										<li class="info programmeDetails">
											<ul>
												<li class="hd" title="High Definition">HD</li>
												<li class="subtitled" title="Subtitled">S</li>
												<li class="videoplus" title="VIDEO Plus+">(60126827)</li>
											</ul>
										</li>
									</ul>
								</div>
								<div class="programme">
									<ul>
										<li class="time">
											<span class="progHour">10</span><span class="minutes">:00</span>
											<span class="favourite">&#10029; <!-- or &#9829; --></span>						
										</li>
										<li class="image">
											<img src="content/images/tga-image.gif" alt=""/>
										</li>
										<li class="title">
											Lakeview Terrace
										</li>
										
										<li class="description">
											This powerful thriller from writer/director Neil LaBute provides Samuel L Jackson with a really decent leading role. The In the Company of Men director is once more focused on the ugly side of human nature with the tale of a black cop tormenting his new neighbours because of their interracial relationship.
										</li>
										<li class="info programmeDetails">
											<ul>
												<li class="hd" title="High Definition">HD</li>
												<li class="subtitled" title="Subtitled">S</li>
												<li class="videoplus" title="VIDEO Plus+">(60126827)</li>
											</ul>
										</li>
									</ul>
								</div>
								
							</div>
						</div>
						
						
						<div class="column">
							<h3>Docs</h3>
							<div class="scrollColumn">
								
								<div class="programme">
									<ul>
										<li class="time">
											<span class="progHour">10</span><span class="minutes">:00</span>
											<span class="favourite">&#10029; <!-- or &#9829; --></span>						
										</li>
										<li class="image">
											<img src="content/images/tga-image.gif" alt=""/>
										</li>
										<li class="title">
											Lakeview Terrace
										</li>
										
										<li class="description">
											This powerful thriller from writer/director Neil LaBute provides Samuel L Jackson with a really decent leading role. The In the Company of Men director is once more focused on the ugly side of human nature with the tale of a black cop tormenting his new neighbours because of their interracial relationship.
										</li>
										<li class="info programmeDetails">
											<ul>
												<li class="hd" title="High Definition">HD</li>
												<li class="subtitled" title="Subtitled">S</li>
												<li class="videoplus" title="VIDEO Plus+">(60126827)</li>
											</ul>
										</li>
									</ul>
								</div>
								<div class="programme">
									<ul>
										<li class="time">
											<span class="progHour">10</span><span class="minutes">:00</span>
											<span class="favourite">&#10029; <!-- or &#9829; --></span>						
										</li>
										<li class="image">
											<img src="content/images/tga-image.gif" alt=""/>
										</li>
										<li class="title">
											Lakeview Terrace
										</li>
										
										<li class="description">
											This powerful thriller from writer/director Neil LaBute provides Samuel L Jackson with a really decent leading role. The In the Company of Men director is once more focused on the ugly side of human nature with the tale of a black cop tormenting his new neighbours because of their interracial relationship.
										</li>
										<li class="info programmeDetails">
											<ul>
												<li class="hd" title="High Definition">HD</li>
												<li class="subtitled" title="Subtitled">S</li>
												<li class="videoplus" title="VIDEO Plus+">(60126827)</li>
											</ul>
										</li>
									</ul>
								</div>
								<div class="programme">
									<ul>
										<li class="time">
											<span class="progHour">10</span><span class="minutes">:00</span>
											<span class="favourite">&#10029; <!-- or &#9829; --></span>						
										</li>
										<li class="image">
											<img src="content/images/tga-image.gif" alt=""/>
										</li>
										<li class="title">
											Lakeview Terrace
										</li>
										
										<li class="description">
											This powerful thriller from writer/director Neil LaBute provides Samuel L Jackson with a really decent leading role. The In the Company of Men director is once more focused on the ugly side of human nature with the tale of a black cop tormenting his new neighbours because of their interracial relationship.
										</li>
										<li class="info programmeDetails">
											<ul>
												<li class="hd" title="High Definition">HD</li>
												<li class="subtitled" title="Subtitled">S</li>
												<li class="videoplus" title="VIDEO Plus+">(60126827)</li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
						</div>
						
				
					</div>
					
					
				</div>
				<!-- End of mask -->
				
					
			</div>
			<!-- End of mask -->
			
			<!-- Include app's tab bar at bottom of iPad screen -->
			<?php include('includes/apptabbar.php'); ?>
		</div>
	</body>
</html>
