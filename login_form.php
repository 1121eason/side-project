<!DOCTYPE HTML>
<html>
	<head>
		<title>Jenny's Online Studio | Handmade Bag</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
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
								<a href="index.html" class="logo">
									<span class="fa-solid fa-bag-shopping"> <span class="title">Jenny's Studio</span>
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
							<li><a href="index.html" class="active"> 回主頁 | Home</a></li>

							<li><a href="product1.php"> 拼布包 | Handmade Bag</a></li>

							<li><a href="checkout.html"> 結帳 | Checkout</a></li>

							<li>
								<a href="#" class="dropdown-toggle">關於 ... </a>

								<ul>
									<li><a href="about.html"> 設計師 | Jenny </a></li>
									<li><a href="contact.html">聯繫我們 | Contact Jenny</a></li>
								</ul>
							</li>
						</ul>
					</nav>

				<!-- Main -->
				<form action="login.php" method="POST">
                    <div class="fields">
         
						<div class="field half">
							<p>Email | 帳號: <br> 
								<input type="text" name="email" id="email" placeholder="Email"  
								value="<?php echo isset($_COOKIE["email"]) ? $_COOKIE["email"] : ''; ?>" />
							</p>
						</div>
    
						<div class="field">
							<p>Password | 密碼: <br> 
								<input type="password" name="password" id="password" placeholder="Password"  
								value="<?php echo isset($_COOKIE["password"]) ? $_COOKIE["password"] : ''; ?>" />
							</p>
						</div>
            

                        <div class="field text-right">
                            <label>&nbsp;</label>
                            
                            <ul class="actions">
                                <li><input type="submit" value="Login | 登入"></li>
                            </ul>
                        </div>

						<div class="field text-right"> 
                            <ul class="actions">
                                <li>
									<a href="member_join_form.php">
										<input type="submit" value="Join Us | 註冊">
									</a>
								</li>
                            </ul>
                        </div>

						

                    </div>
                </form>   

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
								<ul class="icons">
									<li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon style2 fa-linkedin"><span class="label">LinkedIn</span></a></li>
								</ul>

								&nbsp;
							</section>

							<ul class="copyright">
								<li>Copyright © 2020 Company Name </li>
								<li>Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/main.js"></script>
	</body>
</html>