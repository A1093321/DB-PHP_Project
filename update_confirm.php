<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php
session_start();
$GETname=$_GET["name"];
$_SESSION["Pname"] = $GETname;
$sessionPN = $_SESSION["Pname"];

require("DBconnect.php");
$sql="SELECT * FROM product WHERE name='$sessionPN'";
$result=mysqli_query($link,$sql);

?>
<html>
	<head>
		<title>update_content</title>
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

					<div id="main">
						<div class="inner">
							<h2>修改產品資料</h2>
							<p>點擊產品，即可對其修改。(商品由低分至高分)</p>
							<section class="tiles">
							<?php
							while ($row = mysqli_fetch_array($result)){ 
								echo '<article class="style">';
									echo '<span class="image">';
										echo '<img src="images/pic01.jpg" alt="" />';
									echo '</span>';
									echo "<a href = ''>";
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
								<h2>修改產品資料</h2>
								<form method="post" action="updateSQL.php">
									<div class="fields">
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