<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>INSERT</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="index.php" class="logo">
									<span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">Simsong</span>
								</a>

							<!-- Nav -->
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>

						</div>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<h2>Menu</h2>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="cpu.php">cpu</a></li>
							<li><a href="gpu.php">gpu</a></li>
							<li><a href="ssd.php">ssd</a></li>
							<li><a href="ram.php">ram</a></li>
						</ul>
						<h2><a href="suppliers.php">suppliers</a></h2>
						<h2><a href="login.php">Login</a></h2>
					</nav>
				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
								<h2>新增產品</h2>
								<form method="post" action="insertSQL.php">
									<div class="fields">
										<div class="field">
											<textarea name="name" id="name" placeholder="name"></textarea>
										</div>
										<div class="field">
											<textarea name="type" id="type" placeholder="type"></textarea>
										</div>
										<div class="field">
											<textarea name="supplier" id="supplier" placeholder="supplier"></textarea>
										</div>
										<div class="field">
											<textarea name="rating" id="rating" placeholder="rating"></textarea>
										</div>
										<div class="field">
											<textarea name="price" id="price" placeholder="price"></textarea>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send" class="primary" /></li>
									</ul>
								</form>
							</section>
							
							<ul class="copyright">
								<li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>