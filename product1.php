<html>
	<head>
		<title>Jenny's Online Studio | Handmade Bag</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<style>
			.pagination {
				display: flex;
				justify-content: center;
				align-items: center;
				margin: 20px 0;
			}
			.pagination a {
				margin: 0 5px;
				padding: 8px 16px;
				text-decoration: none;
				color: #007BFF;
				border: 1px solid #007BFF;
				border-radius: 5px;
			}
			.pagination a:hover {
				background-color: #007BFF;
				color: #fff;
			}
		</style>
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
					<div id="main">
						<div class="inner">
							<h1>拼布包 | Handmade Bag</h1>

							<div class="image main">
								<img src="images/banner-image-1.png" class="img-fluid" alt="" />
							</div>

							<!-- Products -->
							<section class="tiles">
								<article class="style1">
									<span class="image">
										<img src="images/1.jpg" alt="" />
									</span>
									<a href="product-details.html">
										<h2>The Girl, Su | 蘇姑娘</h2>
										
										<p><del>$2500</del> <strong>$2000</strong></p>
										<p>不僅實用耐用，更是一件能夠展現您獨特品味的時尚單品。擁有這款包，定能為您的生活增添一抹別緻的色彩，讓您在日常穿搭中盡顯與眾不同的優雅風采。 </p>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="images/2.jpg" alt="" />
									</span>
									<a href="product-details.html">
										<h2>The Su SERIES| 蘇姑娘</h2>
										
										<p><del>$2500</del> <strong>$2000</strong></p>
										<p>這款包由經驗豐富的手工藝人精心製作，每一個細節都凝聚著對傳統手工藝的鍾愛與對品質的堅持。豐富的材質和巧妙的設計，賦予這款包時尚與復古的雙重魅力。 </p>
									</a>
								</article>
								<article class="style3">
									<span class="image">
										<img src="images/3.jpg" alt="" />
									</span>
									<a href="product-details.html">
										<h2>The Castle | 童話城堡</h2>
										
										<p><del>$2000</del> <strong>$1800</strong></p>

										<p>無論是當做實用單品或是裝飾品擺設,這款融合工藝與創意的手工包都將為您的生活帶來獨一無二的時尚感受。 </p>
									</a>
								</article>

								<article class="style4">
									<span class="image">
										<img src="images/4.jpg" alt="" />
									</span>
									<a href="product-details.html">
										<h2>The Black Cat | 黑貓</h2>
										
										<p><del>$2500</del> <strong>$2000</strong></p>

										<p>這款獨一無二的手工藝術包,將您對可愛貓咪的喜愛與實用包款完美融合,展現出巧奪天工的工藝美學。 </p>
									</a>
								</article>

								<article class="style5">
									<span class="image">
										<img src="images/5.jpg" alt="" />
									</span>
									<a href="product-details.html">
										<h2>The Flower SERIES | 花朵</h2>
										
										<p><del>$2000</del> <strong>$1800</strong></p>
										<p>這款手工編織包款展現了獨特的民族風情,每一個細節都透露著工匠的巧手和對傳統工藝的憧憬。</p>
									</a>
								</article>

								<article class="style6">
									<span class="image">
										<img src="images/6.jpg" alt="" />
									</span>
									<a href="product-details.html">
										<h2>The Flower SERIES | 編織花朵</h2>
										
										<p><del>$2000</del> <strong>$1800</strong></p>
										<p>華麗多彩的拼布圖案與復古朴實的編織材質,將時尚感與復古氣息完美融合,為您的穿搭風格添加獨特亮點。</p>
									</a>
								</article>
								
							
			


							</section>
						</div>
					</div>

					

				<!-- Footer -->
					<div class="pagination">
						<?php
							$current = isset($_GET['page']) ? (int)$_GET['page'] : 1;
							$prev_page = $current - 1;
							$next_page = $current + 1;

							if ($prev_page > 0) {
								echo "<a href='product$prev_page.php'>&laquo; Previous</a>";
							}

							echo "<span> Page $current </span>";

							if ($next_page < 3) {
								echo "<a href='product$next_page.php'>Next &raquo;</a>";
							}
						?>
					</div>


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