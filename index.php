<?php require_once("header.php"); ?>
			
			<div id="content">

				<section id="home" class="clearfix">
							
					<article class="wrap clearfix">
						<img src="library/images/img-logo@2x.png" title="Super Sweets by Mary Jane" alt="Super Sweets by Mary Jane"/>
						<div class="wrap">
							<h1>Raw, organic, sweetened with raw honey and laced with kale...super healthy, super yummy, Super Sweets.</h1>
						</div>
					</article>
					
					<div class="bottom-gradient"></div>
				</section> <!-- end #home -->
				

				<section id="about" class="clearfix">
				
					<article class="wrap clearfix">
																						
							<div id="in_the_know" class="eightcol offset3 clearfix">
								<h2>Get notified when we launch the website.</h2>
									<form id="registerform" action="<?=$_SERVER['PHP_SELF']; ?>" method="get">
										<!--[if IE]><label for="email" id="address-label">Email Address:</label><br/><![endif]-->
										<input type="text" placeholder="Enter your email" name="email" id="email" />
									
										<button class="signup" type="submit"><span id="getupdates">Submit</span></button>
						
									</form>
								<p id="response">
									<?php require_once('library/config-mcapi.php'); if($_GET['submit']){ echo configForm(); } ?>
								</p>
							</div>													
						
					</article>
				
				</section> <!-- end #about -->
				
				<section id="bottom" class="clearfix">
				
					<div class="top-gradient"></div>
				
				</section> <!-- end #bottom -->
			</div> <!-- end #content -->

<?php require_once("footer.php"); ?>
