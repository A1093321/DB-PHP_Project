<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php
session_start();
require("DBconnect.php");
$sql="SELECT * FROM product ORDER BY rating DESC LIMIT 5";
$result=mysqli_query($link,$sql);

//while ($row = mysqli_fetch_array($result)){ echo $row['type'];}

?>

<html>
	<head>
		<title>LOGIN</title>
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
									<span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">LOGIN</span>
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
						<body>
							<section>
								<form method="post" action="#">
									<div class="fields">
										<div class="field">
											<input type="text" name="account" id="account" placeholder="帳號" />
										</div>
										<div class="field">
											<input type="text" name="password" id="password" placeholder="密碼" />
										</div>
									</div>
									<ul class="actions">
										<li><center><input type="submit" value="Login" class="primary" /></center></li>
									</ul>
								</form>
							</section>
						</body>
						<?php
						$aID="admin";
						$aPWD="admin";

						if(isset($_POST["account"])){
						    if($_POST["account"] != null && $_POST["password"] != null){
						        $ACC=$_POST["account"];
						        $PSW=$_POST["password"];

						        if($aID==$ACC && $aPWD==$PSW){
 						        	header('Location: admin.php');
								}else{
						            echo "帳號或密碼輸入錯誤";
						            $_SESSION['login']="N";
						        }
						    }else{
						        echo "尚未輸入帳號或密碼";
						    }
						}else{
						    echo "請輸入帳號密碼";
						}
						?>
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