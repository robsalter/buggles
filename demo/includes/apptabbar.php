			<div id="tabBar">
				<ul>
					<li class="<?php if ($thisPage=="Home") echo "selected"; ?>">
						<a href="index.php" id="home">
							Home
						</a>
					</li>
					<li class="<?php if ($thisPage=="MyTV") echo "selected"; ?>">
						<a href="mytv.php" id="myTV">
							MyTV
						</a>
					</li>
					<li class="<?php if ($thisPage=="Listings") echo "selected"; ?>">
						<a href="listings.php" id="tvListings">
							TV Listings
						</a>
					</li>
					<li class="<?php if ($thisPage=="Settings") echo "selected"; ?>">
						<a href="settings.php" id="settings">
							Settings
						</a>
					</li>
				</ul>
				<span class="overlay"></span>
			</div>