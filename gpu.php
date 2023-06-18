<?php
require("DBconnect.php");
$sql="SELECT * FROM product WHERE type = 'GPU' ORDER BY price DESC";
$result=mysqli_query($link,$sql);
//while ($row = mysqli_fetch_array($result)){ echo $row['type'];}

?>
<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>products</title>
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
							<li><a href="index.php">Home</a></li>
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
							<h2>GPU</h2>
							<p>圖形處理器（英語：Graphics Processing Unit，縮寫：GPU；又稱顯示核心、顯示卡、視覺處理器、顯示晶片或繪圖晶片）是一種專門在個人電腦、工作站、遊戲機和一些行動裝置上執行繪圖運算工作的微處理器。</p>
							<section class="tiles">
							<?php
							while ($row = mysqli_fetch_array($result)){ 
								echo '<article class="style">';
									echo '<span class="image">';
										echo '<img src="images/pic05.jpg" alt="" />';
									echo '</span>';
									echo '<a href="">';
										echo '<div><h2>'.'品名 : '.$row["name"].'</h2></div>';
										echo '<div class="content">';
											echo '<br>';
											echo '<p>'.'供應商 : '.$row["supplier"].'</p>';
											echo '<p>'.'評分 : '.$row["rating"].'</p>';
											echo '<p>'.'價格 : '.$row["price"].'</p>';
										echo '</div>';
									echo '</a>';
								echo '</article>';
							}
							?>
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