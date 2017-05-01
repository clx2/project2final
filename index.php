<!DOCTYPE HTML>

<html>
	<head>
		<title>Miniport by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Nav -->
			<nav id="nav">
				<ul class="container">
					<li><a href="#top">Top</a></li>
					<li><a href="#work">Cat Facts</a></li>
					<li><a href="#portfolio">Cat Gifs</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</nav>

		<!-- Home -->
			<div class="wrapper style1 first">
				<article class="container" id="top">
					<div class="row">
						<div class="4u 12u(mobile)">
							<span class="image fit"><img src="images/cats.jpg" alt="" /></span>
						</div>
						<div class="8u 12u(mobile)">
							<header>
								<h1>A-Z Cats</h1>
							</header>
							<p>This site provides information about some more unusual cat breeds that you may not have heard of before, one for (almost) every letter of the alphabet </p>
							<a href="#work" class="button big scrolly">Click here to take a look!</a>
						</div>
					</div>
				</article>
			</div>

		<!-- Work -->

		<?php
		$cats = array("Abyssinian", "Bengal", "Cheetoh", "Devon Rex", "Egyptian Mau", "Foldex", "German Rex", "Highlander", "Javanese", "Kodkod", "LaPerm", "Manx", "Nebelung", "Ocelot", "Pixie Bob", "Ragamuffin", "Sphynx", "Toyger", "Ukranian Levkoy" , "Viverral", "York Chocolate Cat");
		?>

			<div class="wrapper style2">
				<article id="work">
					<header>
						<h2>A-Z breeds</h2>
						<p>Except for I, Q, W, X, and Z...</p>
					</header>

							<div class="container">
								<div class="row">
									<div class="4u 12u(mobile)">
										<article class="box style2">
											<a href="#" class="image featured"><img src="images/aby.jpg" alt="" /></a>
											<h3><a href="#"><?php echo $cats[0]?></a></h3>
											<p>This cat is named after the Arabic name for Ethiopia - Abyssinia.</p>
										</article>
									</div>
									<div class="4u 12u(mobile)">
										<article class="box style2">
											<a href="#" class="image featured"><img src="images/bengal.jpg" alt="" /></a>
											<h3><a href="#"><?php echo $cats[1]?></a></h3>
											<p>Bengals are domestic cats which have been bred to look like leopards.</p>
										</article>
									</div>
									<div class="4u 12u(mobile)">
										<article class="box style2">
											<a href="#" class="image featured"><img src="images/cheet.jpg" alt="" /></a>
											<h3><a href="#"><?php echo $cats[2]?></a></h3>
											<p>A Cheetoh is a cross between a Bengal and an Ocicat.</p>
										</article>
									</div>
								</div>

								<div class="row">
									<div class="4u 12u(mobile)">
										<article class="box style2">
											<a href="#" class="image featured"><img src="images/devonr.jpeg" alt=""/></a>
											<h3><a href="#"><?php echo $cats[3]?></a></h3>
											<p>Considered to be a very intellegent breed and can be trained to fetch, jump, and walk on a leash. </p>
										</article>
									</div>
									<div class="4u 12u(mobile)">
										<article class="box style2">
											<a href="#" class="image featured"><img src="images/em.jpg" alt="" /></a>
											<h3><a href="#"><?php echo $cats[4]?></a></h3>
											<p>Egyptian maus can run up to 30mphs.</p>
										</article>
									</div>
									<div class="4u 12u(mobile)">
										<article class="box style2">
											<a href="#" class="image featured"><img src="images/foldex.jpg" alt="" /></a>
											<h3><a href="#"><?php echo $cats[5]?></a></h3>
											<p>Foldex cats have very short, round, and folded ears as well as stubby legs.</p>
										</article>
									</div>
								</div>

								<div class="row">
									<div class="4u 12u(mobile)">
										<article class="box style2">
											<a href="#" class="image featured"><img src="images/grex.jpg" alt=""/></a>
											<h3><a href="#"><?php echo $cats[6]?></a></h3>
											<p>Their coats and whiskers are both curly. </p>
										</article>
									</div>
									<div class="4u 12u(mobile)">
										<article class="box style2">
											<a href="#" class="image featured"><img src="images/high.jpg" alt="" /></a>
											<h3><a href="#"><?php echo $cats[7]?></a></h3>
											<p>These cats are bobtailed and weigh on average ~15lbs. </p>
										</article>
									</div>
									<div class="4u 12u(mobile)">
										<article class="box style2">
											<a href="#" class="image featured"><img src="images/java.jpg" alt="" /></a>
											<h3><a href="#"><?php echo $cats[8]?></a></h3>
											<p>Although its name suggest origins in Java or Indonesia, this show cat was bred in North America.</p>
										</article>
									</div>
								</div>

								<div class="row">
									<div class="4u 12u(mobile)">
										<article class="box style2">
											<a href="#" class="image featured"><img src="images/kod.jpeg" alt="" /></a>
											<h3><a href="#"><?php echo $cats[9]?></a></h3>
											<p>Kodkods are wild cats that are found in Chilean and Argitinian rainforests. </p>
										</article>
									</div>
									<div class="4u 12u(mobile)">
										<article class="box style2">
											<a href="#" class="image featured"><img src="images/laperm6.jpg" alt=""/></a>
											<h3><a href="#"><?php echo $cats[10]?></a></h3>
											<p>It's fur is tightly curled, similar in appearance to a perm, but are surprisingly thought to be hypoallergentic.</p>
										</article>
									</div>
									<div class="4u 12u(mobile)">
										<article class="box style2">
											<a href="#" class="image featured"><img src="images/manx.jpeg" alt="" /></a>
											<h3><a href="#"><?php echo $cats[11]?></a></h3>
											<p>These cats are tailess, a feature which arose from a spontaneous mutation.</p>
										</article>
									</div>
								</div>

								<div class="row">
									<div class="4u 12u(mobile)">
										<article class="box style2">
											<a href="#" class="image featured"><img src="images/neb.jpeg" alt="" /></a>
											<h3><a href="#"><?php echo $cats[12]?></a></h3>
											<p>These cats were thought to be a subspecies of Russian Blues, except with longer fur.</p>
										</article>
									</div>
									<div class="4u 12u(mobile)">
										<article class="box style2">
											<a href="#" class="image featured"><img src="images/ocelot.jpg" alt="" /></a>
											<h3><a href="#"><?php echo $cats[13]?></a></h3>
											<p>Salvador Dali kept an ocelote named Babou as a pet.</p>
										</article>
									</div>
									<div class="4u 12u(mobile)">
										<article class="box style2">
											<a href="#" class="image featured"><img src="images/pixie.jpg" alt="" /></a>
											<h3><a href="#"> <?php echo $cats[14]?></a></h3>
											<p>These cats take 4 years to reach full maturity as opposed to the 1 year most domestic cats take.</p>
										</article>
									</div>
								</div>

								<div class="row">
									<div class="4u 12u(mobile)">
										<article class="box style2">
											<a href="#" class="image featured"><img src="images/raga.jpg" alt=""/></a>
											<h3><a href="#"><?php echo $cats[15]?></a></h3>
											<p>Ragamuffins are variants of ragdolls, except they have very thick, rabbit like fur. </p>
										</article>
									</div>
									<div class="4u 12u(mobile)">
										<article class="box style2">
											<a href="#" class="image featured"><img src="images/sphynx.jpeg" alt="" /></a>
											<h3><a href="#"><?php echo $cats[16]?></a></h3>
											<p>Sphynx cats have no fur and can actually get sunburnt.</p>
										</article>
									</div>
									<div class="4u 12u(mobile)">
										<article class="box style2">
											<a href="#" class="image featured"><img src="images/toyger.jpeg" alt="" /></a>
											<h3><a href="#"><?php echo $cats[17]?></a></h3>
											<p>Domestically bred from Mackerel tabbies to mimic the markings on tigers.</p>
										</article>
									</div>
								</div>

								<div class="row">
									<div class="4u 12u(mobile)">
										<article class="box style2">
											<a href="#" class="image featured"><img src="images/UL.jpg" alt=""/></a>
											<h3><a href="#"><?php echo $cats[18]?></a></h3>
											<p>Levkoys have an angular face and a distinct "stepped" face profile. </p>
										</article>
									</div>
									<div class="4u 12u(mobile)">
										<article class="box style2">
											<a href="#" class="image featured"><img src="images/viverral.jpg" alt="" /></a>
											<h3><a href="#"><?php echo $cats[19]?></a></h3>
											<p>Although Viverrals look muscular like wildcats, their temperments are more similar to those of domestic cats.</p>
										</article>
									</div>
									<div class="4u 12u(mobile)">
										<article class="box style2">
											<a href="#" class="image featured"><img src="images/york.jpg" alt="" /></a>
											<h3><a href="#"><?php echo $cats[20]?></a></h3>
											<p>This breed was created in 1983 and named after the state of New York.</p>
										</article>
									</div>
								</div>
								<footer>
									<br>
									<a href="#portfolio" class="button big scrolly">Tired of learning about cats? Click me for gifs</a>
								</footer>
							</div>
				</article>
			</div>

		<!-- Portfolio -->
			<div class="wrapper style3">
				<article id="portfolio">
					<header>
						<h2>Gifs</h2>
						<p>Cats doing silly things</p>
					</header>
					<div class="container">
						<div class="row">
							<div class="4u 12u(mobile)">
								<article class="box style1">
									<a href="#" class="image featured"><img src="images/gif1.gif" alt="" /></a>
								</article>
							</div>

							<div class="4u 12u(mobile)">
								<article class="box style1">
									<a href="#" class="image featured"><img src="images/gif2.jpg" alt="" /></a>
								</article>
							</div>

							<div class="4u 12u(mobile)">
								<article class="box style1">
									<a href="#" class="image featured"><img src="images/gif4.gif" alt="" /></a>
								</article>
							</div>
						</div>

						<div class="row">
							<div class="4u 12u(mobile)">
								<article class="box style1">
									<a href="#" class="image featured"><img src="images/gif3.gif" alt="" /></a>
								</article>
							</div>
							<div class="4u 12u(mobile)">
								<article class="box style1">
									<a href="#" class="image featured"><img src="images/gif5.gif" alt="" /></a>
								</article>
							</div>
							<div class="4u 12u(mobile)">
								<article class="box style1">
									<a href="#" class="image featured"><img src="images/gif6.gif" alt="" /></a>
								</article>
							</div>
						</div>

						<div class="row">
							<div class="4u 12u(mobile)">
								<article class="box style1">
									<a href="#" class="image featured"><img src="images/gif7.gif" alt="" /></a>
								</article>
							</div>
							<div class="4u 12u(mobile)">
								<article class="box style1">
									<a href="#" class="image featured"><img src="images/wiggly.gif" alt="" /></a>
								</article>
							</div>
							<div class="4u 12u(mobile)">
								<article class="box style1">
									<a href="#" class="image featured"><img src="images/gif8.gif" alt="" /></a>
								</article>
							</div>
						</div>
					</div>

					<footer>
						<br>
						<center> <a href="#contact" class="button big scrolly">Get in touch with me</a></center>
					</footer>

				</article>
			</div>

		<!-- Contact -->
			<div class="wrapper style4">
				<article id="contact" class="container 75%">
					<header>
						<h2>Contact</h2>
						<p>Contact</p>
					</header>
					<div>
						<div class="row">
							<div class="12u">
								<form method="post" action="#">
									<div>
										<div class="row">
											<div class="6u 12u(mobile)">
												<input type="text" name="name" id="name" placeholder="Name" />
											</div>
											<div class="6u 12u(mobile)">
												<input type="text" name="email" id="email" placeholder="Email" />
											</div>
										</div>
										<div class="row">
											<div class="12u">
												<input type="text" name="subject" id="subject" placeholder="Subject" />
											</div>
										</div>
										<div class="row">
											<div class="12u">
												<textarea name="message" id="message" placeholder="Message"></textarea>
											</div>
										</div>
										<div class="row 200%">
											<div class="12u">
												<ul class="actions">
													<li><input type="submit" value="Send Message" /></li>
													<li><input type="reset" value="Clear Form" class="alt" /></li>
												</ul>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<footer>
						<ul id="copyright">
							<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</footer>
				</article>
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/skel-viewport.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
