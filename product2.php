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
										<img src="images/7.jpg" alt="" />
									</span>
									<a href="product-details.html">
										<h2>The Box | 格紋包</h2>
										
										<p><del>$2500</del> <strong>$2000</strong></p>
										<p>這款手工製作的手拿包絕對是您春季造型的亮點單品,迷人的格紋花卉圖案賦予它別具一格的復古韻味。 </p>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="images/8.jpg" alt="" />
									</span>
									<a href="product-details.html">
										<h2>The Bag | 蝴蝶結 </h2>
										
										<p><del>$2500</del> <strong>$2000</strong></p>
										<p>選擇這款精緻提袋,為您的生活添加一抹獨特色彩。工藝精湛、視覺吸睛,打造時尚優雅的完美造型,成為眾人矚目的焦點。 </p>
									</a>
								</article>
								<article class="style3">
									<span class="image">
										<img src="images/9.jpg" alt="" />
									</span>
									<a href="product-details.html">
										<h2>The Paper Bag | 衛生紙帶</h2>
										
										<p><del>$2000</del> <strong>$1800</strong></p>

										<p> </p>
									</a>
								</article>

								<article class="style4">
									<span class="image">
										<img src="images/10.jpg" alt="" />
									</span>
									<a href="product-details.html">
										<h2>The Makeup Bag | 化妝袋</h2>
										
										<p><del>$2500</del> <strong>$2000</strong></p>

										<p> </p>
									</a>
								</article>

								<article class="style5">
									<span class="image">
										<img src="images/11.jpg" alt="" />
									</span>
									<a href="product-details.html">
										<h2>The Makeup Bag | 兔子</h2>
										
										<p><del>$2000</del> <strong>$1800</strong></p>
										<p></p>
									</a>
								</article>

								<article class="style6">
									<span class="image">
										<img src="images/12.jpg" alt="" />
									</span>
									<a href="product-details.html">
										<h2>The Makeup Bag | 鞋子</h2>
										
										<p><del>$2000</del> <strong>$1800</strong></p>
										<p></p>
									</a>
								</article>

							</section>
						</div>
					</div>

					

				<!-- Footer -->
                    <div class="pagination">
                        <?php
                            $current = isset($_GET['page']) ? (int)$_GET['page'] : 2;
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