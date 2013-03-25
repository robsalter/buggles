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
					<div id="appDetails" class="oneHalf">
						<h1>TV is for</h1>
						<div id="appIcon"></div>
						<h2 id="strapline">Because TV listings deserve to look good, too</h2>
						<dl id="quote">
							<dt>Television is an invention that permits you to be entertained in your living room by people you wouldn't have in your home</dt>
							<dd>David Frost</dd>
						</dl>
					</div>
					<div id="loading" class="oneHalf">	
						<p>Loading TV listings...</p>
						<div id="appLoading">
							<span></span>
						</div>
					</div>	
					
					<div id="controls" class="six">
						<ul class="toggle">
							<li><a href="" class="selected" id="toggleFilm">Film</a></li>
							<li><a href="" id="toggleComedy">Comedy</a></li>
							<li><a href="" id="toggleSport">Sport</a></li>
							<li><a href="" id="toggleDocs">Docs</a></li>
						</ul>
						<a href="" class="edit">Edit your favourite categories</a>
					</div>	
						
					<div id="scrollingBox" class="six">
						<span class="gradient topGradient"></span>
						<div id="scrollHorz">
							<div class="column">
								
									<h3>Film</h3>
									
									<div class="scrollColumn">
										
										<div class="programme film">
											<ul>
												<li class="time">
													<span class="progHour">7</span><span class="minutes">:00</span>
												</li>
												<li class="image">
													<span class="channel">Five</span>
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
										<div class="programme film">
											<ul>
												<li class="time">
													<span class="progHour">7</span><span class="minutes">:00</span>
												</li>
												<li class="image">
													<span class="channel">Film 4</span>
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
									<div class="programme film">
										<ul>
											<li class="time">
												<span class="progHour">9</span><span class="minutes">:00</span>				
											</li>
											<li class="image">
												<span class="channel">BBC Three</span>
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
									<div class="programme film">
										<ul>
											<li class="time">
												<span class="progHour">10</span><span class="minutes">:00</span>
												<span class="favourite">&#10029; <!-- or &#9829; --></span>						
											</li>
											<li class="image">
												<span class="channel">BBC Four</span>
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
									<div class="programme film">
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
									<div class="programme film">
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
									<div class="programme film">
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
									<div class="programme film">
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
									<div class="programme film">
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
									<div class="programme film">
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
									
									<div class="programme film">
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
									<div class="programme film">
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
									<div class="programme film">
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
									<div class="programme film">
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
									<div class="programme film">
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
									<div class="programme film">
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
			</div>
			<!-- End of mask -->
			
			<!-- Include app's tab bar at bottom of iPad screen -->
			<?php include('includes/apptabbar.php'); ?>
		</div>
	</body>
</html>
