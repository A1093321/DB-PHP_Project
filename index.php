<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php
require("DBconnect.php");
$sql="SELECT * FROM product ORDER BY rating DESC LIMIT 5";
$result=mysqli_query($link,$sql);
//while ($row = mysqli_fetch_array($result)){ echo $row['type'];}

?>

<html>
	<head>
		<title>Simsong</title>
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
								<h2><a href="index.php" class="logo">
									<span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">Simsong</span>
								</a></h2>

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
							<li><a href="cpu.php">cpu</a></li>
							<li><a href="gpu.php">gpu</a></li>
							<li><a href="ssd.php">ssd</a></li>
							<li><a href="ram.php">ram</a></li>
						</ul>
						<h2><a href="suppliers.php">suppliers</a></h2>
						<h2><a href="login.php">Login</a></h2>

					</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
								
							</header>
							<section class="tiles">
								<article class="style">
									<span class="image">
										<img src="images/pic04.jpg" alt="" />
									</span>
									<a href="index.php">
										<h2>挖礦專區</h2>
										<div class="content">
											<p>全組件評分排名前五</p>
										</div>
									</a>
								</article>
								<?php
								while ($row = mysqli_fetch_array($result)){ 
									echo '<article class="style">';
										echo '<span class="image">';
											echo '<img src="images/pic04.jpg" alt="" />';
										echo '</span>';
										echo '<a href="">';
											echo '<div><h2>'.'品名 : '.$row["name"].'</h2></div>';
											echo '<div class="content">';
												echo '<br>';
												echo '<p>'.'類別 : '.$row["type"].'</p>';
												echo '<p>'.'供應商 : '.$row["supplier"].'</p>';
												echo '<p>'.'評分 : '.$row["rating"].'</p>';
												echo '<p>'.'價格 : '.$row["price"].'</p>';
											echo '</div>';
										echo '</a>';
									echo '</article>';
								}
								?>
								<article class="style">
									<span class="image">
										<img src="images/pic09.jpg" alt="" />
									</span>
									<a href="cpu.php">
										<h2>CPU</h2>
										<div class="content">
											<p>有著BMD、appie、ontell等廠商</p>
										</div>
									</a>
								</article>
								<article class="style">
									<span class="image">
										<img src="images/pic05.jpg" alt="" />
									</span>
									<a href="gpu.php">
										<h2>GPU</h2>
										<div class="content">
											<p>有著MSN、dello、mvidia等廠商</p>
										</div>
									</a>
								</article>
								<article class="style">
									<span class="image">
										<img src="images/pic06.jpg" alt="" />
									</span>
									<a href="ram.php">
										<h2>RAM</h2>
										<div class="content">
											<p>有著hb、Transond、kingstone等廠商</p>
										</div>
									</a>
								</article>
								<article class="style">
									<span class="image">
										<img src="images/pic07.jpg" alt="" />
									</span>
									<a href="ssd.php">
										<h2>SSD</h2>
										<div class="content">
											<p>有著Simsong、HyperZ、aber等廠商</p>
										</div>
									</a>
								</article>
							</section>
						</div>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
								<h2>Get in touch</h2>
								<form method="post" action="#">
									<div class="fields">
										<div class="field half">
											<input type="text" name="name" id="name" placeholder="Name" />
										</div>
										<div class="field half">
											<input type="email" name="email" id="email" placeholder="Email" />
										</div>
										<div class="field">
											<textarea name="message" id="message" placeholder="Message"></textarea>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send" class="primary" /></li>
									</ul>
								</form>
							</section>
							<section>
								<h2>Follow</h2>
								<ul class="icons">
									<li><a href="#" class="icon brands style2 fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon brands style2 fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon brands style2 fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon brands style2 fa-dribbble"><span class="label">Dribbble</span></a></li>
									<li><a href="#" class="icon brands style2 fa-github"><span class="label">GitHub</span></a></li>
									<li><a href="#" class="icon brands style2 fa-500px"><span class="label">500px</span></a></li>
									<li><a href="#" class="icon solid style2 fa-phone"><span class="label">Phone</span></a></li>
									<li><a href="#" class="icon solid style2 fa-envelope"><span class="label">Email</span></a></li>
								</ul>
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