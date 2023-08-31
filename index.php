<!DOCTYPE HTML>
<!--
	Dimension by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->

<?php
// Fix for changing relative paths between server and local env
$prefix = "";
echo($_SERVER['SERVER_NAME']);
if($_SERVER['SERVER_NAME'] === 'nilsodin.se') { 
	$prefix = "nilsodin.se/"; 
}
?>



<html>
	<head>
		<title>Nils Odin | Portfolio</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?=$prefix?>/assets/css/main.css" />


	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="logo">
							<span class="icon fa fa-code"></span>
						</div>
						<div class="content">
							<div class="inner">
								<h1>Nils Odin</h1>
								<p>Data science student at <a href="www.kth.se">KTH</a></p>
								<p class="degrees">
									<span>Bachelors's degree in computer science</span>
									<span>Working towards Master's degree in Machine learning</span>
								</p>
							</div>
						</div>
						<nav>
							<ul>
								<li><a href="#intro">Intro</a></li>
								<!-- <li><a href="<?//=$prefix?>CV_Nils_Odin.pdf" download class="icon solid fa-download"> Resume</a></li> -->
								<li><a href="#resume"  class="icon solid fa-download"> Resume</a></li>
								<li><a href="#contact">Contact</a></li>
								<!--<li><a href="#elements">Elements</a></li>-->
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<div id="main">

						<!-- Intro -->
							<article id="intro">
								<h2 class="major">Intro</h2>
								<p>I am an aspiring data scientist and software developer who is currently studying my Master's in data science and Machine Learning at <a href="https://www.kth.se/">KTH</a> in Stockholm. 
								I enjoy learning new skills and solving problems.</p>
								<p>Besides my studies, I train parkour and free-running, spend time with my fiancée, and run a small business focused on web development.</p>
								<p><img src="<?=$prefix?>/images/profile pic B&W.png" alt="profile picture" id="profile_pic" /></p>
							</article>


							<!-- Contact -->
							<article id="resume">
								<h2 class="major">Resume</h2>
								<p>Resume available upon request.</p>
								<p>Please email <a href="mailto:info@nilsodin.se">info@nilsodin.se</a></p>
							</article>


						<!-- Contact -->
							<article id="contact">
								<h2 class="major">Contact</h2>
								<p><a href="mailto:info@nilsodin.se">info@nilsodin.se</a></p>
								<ul class="icons">
									<li><a href="https://www.linkedin.com/in/nils-odin" target=”_blank” class="icon brands fa-linkedin"><span class="label">LinkedIn</span></a></li>
									<li><a href="https://github.com/nidoslin" target=”_blank” class="icon brands fa-github"><span class="label">GitHub</span></a></li>
								</ul>
							</article>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">&copy; Nils Odin</p>
					</footer>

			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="<?=$prefix?>/assets/js/jquery.min.js"></script>
			<script src="<?=$prefix?>/assets/js/browser.min.js"></script>
			<script src="<?=$prefix?>/assets/js/breakpoints.min.js"></script>
			<script src="<?=$prefix?>/assets/js/util.js"></script>
			<script src="<?=$prefix?>/assets/js/main.js"></script>
	</body>
</html>
