<?php
    include "config.php";
    include "functions.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Single page</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400,700,900" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
	      integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
<div class="wrapper">
	<div class="content">
		<header class="header">
			<div class="header-flex ">
				<div class="header-left">
					<a class="logo" href="index.html"> <img src="img/logo.png" alt="logo">BRAN<span
							class="special-D">D</span></a>
					<form class="form" action="#">
						<div class="browse"><span class="browse-text">Browse</span><i class="fa fa-caret-down"></i>
							<div class="browse-mega-box">
								<div class="browse-mega-flex">
									<h3>Women</h3>
									<ul class="browse-mega-menu">
										<li><a href="#">Dresses</a></li>
										<li><a href="#">Tops</a></li>
										<li><a href="#">Sweaters/Knits</a></li>
										<li><a href="#">Jackets/Coats</a></li>
										<li><a href="#">Blazers</a></li>
										<li><a href="#">Denim</a></li>
										<li><a href="#">Leggings/Pants</a></li>
										<li><a href="#">Skirts/Shorts</a></li>
										<li><a href="#">Accessories </a></li>
									</ul>
									<h3>Men</h3>
									<ul class="browse-mega-menu">
										<li><a href="#">Tees/Tank tops</a></li>
										<li><a href="#"> Shirts/Polos </a></li>
										<li><a href="#">Sweaters</a></li>
										<li><a href="#">Sweatshirts/Hoodies</a></li>
										<li><a href="#">Blazers</a></li>
										<li><a href="#">Jackets/vests</a></li>
									</ul>
								</div>
							</div>
						</div>
						<input class="search" type="search" placeholder="Search for Item...">
						<button class="submit-search" type="submit"><i class="fas fa-search"></i></button>
					</form>
				</div>
				<div class="header-right">
					<div class="cart-position">
						<a href="shoping_cart.html"><img src="img/cart.svg" alt="cart"> </a>
						<div class="cart">
							<div class="goods"><img src="img/Layer_43.jpg" alt="thing">
								<div class="cart-text">
									<p class="name-goods">Rebox Zane</p>
									<div class="star"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
											class="fa fa-star"></i> <i class="fa fa-star"></i> <i
											class="fa fa-star-half"></i></div>
									<p class="price">1&nbsp;x $250</p>
								</div>
								<i class="fas fa-times-circle"></i></div>
							<div class="goods"><img src="img/Layer_44.jpg" alt="thing">
								<div class="cart-text">
									<p class="name-goods">Rebox Zane</p>
									<div class="star"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
											class="fa fa-star"></i> <i class="fa fa-star"></i> <i
											class="fa fa-star-half"></i></div>
									<p class="price">1&nbsp;x $250</p>
								</div>
								<i class="fas fa-times-circle"></i></div>
							<div class="flex-text-between">
								<p>TOTAL</p>
								<p>$500.00</p>
							</div>
							<div class="checkout"><a class="checkout-text"
							                         href="checkout.html"><span>Checkout</span></a></div>
							<div class="go-to-card"><a class="go-to-card-text"
							                           href="shoping_cart.html"><span>Go&nbsp;to&nbsp;cart</span></a>
							</div>
						</div>
					</div>
					<div class="account">
						<a class="account-text" href="#"> <span>My&nbsp;Account</span><i
								class="fa fa-caret-down"></i></a>
					</div>
				</div>
			</div>
		</header>
		<nav>
			<ul class="menu">
				<li><a href="index.html">Home</a></li>
				<li><a href="product.html">Man</a></li>
				<li><a href="#">Women</a>
					<div class="mega-box">
						<div class="mega-flex">
							<h3>Women</h3>
							<ul class="mega-menu">
								<li><a href="#">Dresses</a></li>
								<li><a href="#">Tops</a></li>
								<li><a href="#">Sweaters/Knits</a></li>
								<li><a href="#">Jackets/Coats</a></li>
								<li><a href="#">Blazers</a></li>
								<li><a href="#">Denim</a></li>
								<li><a href="#">Leggings/Pants</a></li>
								<li><a href="#">Skirts/Shorts</a></li>
								<li><a href="#">Accessories </a></li>
							</ul>
						</div>
						<div class="mega-flex">
							<h3>Women</h3>
							<ul class="mega-menu">
								<li><a href="#">Dresses</a></li>
								<li><a href="#">Tops</a></li>
								<li><a href="#">Sweaters/Knits</a></li>
								<li><a href="#">Jackets/Coats</a></li>
							</ul>
							<h3>Women</h3>
							<ul class="mega-menu">
								<li><a href="#">Dresses</a></li>
								<li><a href="#">Tops</a></li>
								<li><a href="#">Sweaters/Knits</a></li>
							</ul>
						</div>
						<div class="mega-flex">
							<h3>Women</h3>
							<ul class="mega-menu">
								<li><a href="#">Dresses</a></li>
								<li><a href="#">Tops</a></li>
								<li><a href="#">Sweaters/Knits</a></li>
								<li><a href="#">Jackets/Coats</a></li>
							</ul>
							<a class="mega-menu-link" href="#"><img src="img/Layer_42.jpg" alt="choose-menu">
								<p class="mega-menu-text">Super sale!</p>
							</a>
						</div>
					</div>
				</li>
				<li><a href="#">Kids</a></li>
				<li><a href="#">Accoseriese</a></li>
				<li><a href="#">Featured</a></li>
				<li><a href="#">Hot Deals</a></li>
			</ul>
		</nav>
		<div class="breadcrumb">
			<div class="breadcrumb-text">
				<h3>New Arrivals</h3>
				<div class="breadcrumb-link"><a href="index.html">Home</a>/ <a href="#">Men </a>/ <a
						href="#"><span>New Arrivals</span>
					</a></div>
			</div>
		</div>
		<section class="silder-goods">


			<div class="carousel">


				<div id="carousel" class="carousel_inner">
					<div class="carousel_box img-model">
						<img src="img/single_page.jpg" alt="model"></div>
					<div class="carousel_box img-model">
						<img src="img/single_page.jpg" alt="model"></div>
					<div class="carousel_box img-model">
						<img src="img/single_page.jpg" alt="model"></div>
				</div>

				<div class="carousel-arrow">
					<i id="carousel_prev" class="fas fa-angle-left"></i>
					<i id="carousel_next" class="fas fa-angle-right"></i>
				</div>
			</div>


		</section>
		<section class="info-good">
			<div class="colletion-swape">
				<h4>WOMEN COLLECTION</h4>
				<div class="border-bottom-swape">
				</div>
				<div class="border-bottom-swape-special"></div>
			</div>
			<h3>Moschino Cheap And Chic</h3>
			<p>Compellingly actualize fully researched processes before proactive outsourcing. Progressively syndicate
				collaborative architectures before cutting-edge services. Completely visualize parallel core
				competencies rather than exceptional portals. </p>
			<div class="flex-material-designe">
				<p><span>MATERIAL:</span> COTTON</p>
				<p><span>DESIGNER:</span> BINBURHAN</p>
			</div>
			<p class="price-single-page">$561</p>
			<div class="choose-size-color">
				<div class="choose-color">
					<h5>CHOOSE COLOR</h5>
					<select class="select" name="color" id="color">
						<option value="pink">
							Red
						</option>
						<option value="pink">
							Grey
						</option>
						<option value="pink">
							Black
						</option>
					</select>
				</div>
				<div class="choose-color">
					<h5>CHOOSE SIZE</h5>
					<select class="select" name="size" id="size">
						<option value="pink">
							XXL
						</option>
						<option value="pink">
							XL
						</option>
						<option value="pink">
							L
						</option>
					</select>
				</div>
				<div class="choose-color">
					<h5>QUANTITY</h5>
					<select class="select" name="count" id="count">
						<option value="pink">
							2
						</option>
						<option value="pink">
							3
						</option>
						<option value="pink">
							4
						</option>
					</select>
				</div>
			</div>
			<a class="add-to-card-bottom" href="#"><img src="img/Forma_1_copy.svg" alt="cart">
				<span>Add to&nbsp;Cart</span></a>
		</section>
		<section class="choose-also">
			<h3>you may like also</h3>
			<div class="choose-goods-other">
				<div class="product-parrent-other">
					<a class="product-other" href="#">
						<img class="img" src="img/other-product-1.jpg" alt="product">
						<div class="text-other-product">
							<p class="p-text-other">BLAZE LEGGINGS</p>
							<p class="p-text-price">$52.00</p>
						</div>
					</a>
					<div class="parent-add-cart">
						<a class="active-link" href="#"> <img src="img/cart-white.svg" alt="add-to-card">
							<span>Add to&nbsp;Cart</span> </a>
					</div>
				</div>
				<div class="product-parrent-other margin-top">
					<a class="product-other" href="#">
						<img class="img" src="img/other-product-2.jpg" alt="product">
						<div class="text-other-product">
							<p class="p-text-other">ALEXA SWEATER</p>
							<p class="p-text-price">$52.00</p>
						</div>
					</a>
					<div class="parent-add-cart">
						<a class="active-link" href="#"> <img src="img/cart-white.svg" alt="add-to-card">
							<span>Add to&nbsp;Cart</span> </a>
					</div>
				</div>
				<div class="product-parrent-other">
					<a class="product-other" href="#">
						<img class="img" src="img/other-product-3.jpg" alt="product">
						<div class="text-other-product">
							<p class="p-text-other">AGNES TOP</p>
							<p class="p-text-price">$52.00</p>
						</div>
					</a>
					<div class="parent-add-cart">
						<a class="active-link" href="#"> <img src="img/cart-white.svg" alt="add-to-card">
							<span>Add to&nbsp;Cart</span> </a>
					</div>
				</div>
				<div class="product-parrent-other">
					<a class="product-other" href="#">
						<img class="img" src="img/other-product-4.jpg" alt="product">
						<div class="text-other-product">
							<p class="p-text-other">SYLVA SWEATER</p>
							<p class="p-text-price">$52.00</p>
						</div>
					</a>
					<div class="parent-add-cart">
						<a class="active-link" href="#"> <img src="img/cart-white.svg" alt="add-to-card">
							<span>Add to&nbsp;Cart</span> </a>
					</div>
				</div>
			</div>
		</section>
		<section class="add-review">
			<form class="email-password" action="addReview.php" method="post">
				<h2 class="special-h"> Add Review</h2>
				<div>
					<label for="name"><p>Name</p></label>
					<input type="text" name="name" id="name" placeholder="name" required>
				</div>
				<div>
					<label for="message"><p>Message</p></label>
					<textarea name="message" id="message" placeholder="message..."></textarea>
				</div>
				<input class="log-in" type="submit" name="add_review" value="Add review">
			</form>
		</section>
        <section class="reviews">
            <div class="reviews-list">
                <?=getReviews();?>
            </div>
        </section>
	</div>
	<footer class="footer">
		<section class="short-info">
			<div class=" short-info-text">
				<div class="short-info-discription-img"><img src="img/footer/img-face.png" alt="">
					<div class="short-info-text-discription">
						<p class="short-info-quote">&laquo;Vestibulum quis porttitor dui! Quisque viverra nunc&nbsp;mi,
							a&nbsp;pulvinar purus condimentum&nbsp;a. Aliquam condimentum mattis neque sed pretium&raquo;</p>
						<p class="short-info-name">Bin Burhan</p>
						<p class="short-info-">Dhaka, Bd</p>
						<div class="swap">
							<a class="swap1" href="#"></a>
							<a class="swap2" href="#"></a>
							<a class="swap1" href="#"></a>
						</div>
					</div>
				</div>
				<div class="subscribe-container">
					<div class="subscride">
						<h5>Subscribe</h5>
						<p>FOR OUR NEWLETTER AND PROMOTION</p>
					</div>
					<div class="email-subscribe">
						<form action="#">
							<input class="email-subscribe-form" type="email" placeholder="Enter Your Email">
							<input class="email-button" type="submit" value="Subscribe"></form>
					</div>
				</div>
			</div>
			<div class="img-backdround"></div>
		</section>
		<div class="footer-info">
			<div class="footer-info1">
				<a class="logo logo-margin-bottom" href="#"> <img src="img/logo.png" alt="logo">BRAN<span
						class="special-D">D</span></a>
				<div class="footer-text">
					<p class="p-margin-bottom">Objectively transition extensive data rather than cross functional
						solutions. Monotonectally syndicate multidisciplinary materials before go&nbsp;forward benefits.
						Intrinsicly syndicate an&nbsp;expanded array of&nbsp;processes and cross-unit partnerships. </p>
					<p>Efficiently plagiarize 24/365 action items and focused infomediaries. Distinctively seize
						superior initiatives for wireless technologies. Dynamically optimize. </p>
					<!--
													 <p class="p-margin-bottom">Objectively strategize seamless relationships via resource sucking testing procedures. Proactively cultivate next-generation results for value-added methodologies. Dynamically plagiarize unique methodologies after performance based methodologies. Monotonectally empower stand-alone mindshare rather than ubiquitous opportunities. Dynamically orchestrate resource sucking scenarios after alternative synergy.</p>
													 <p>Compellingly envisioneer corporate methods of empowerment before standards compliant technologies. Objectively facilitate progressive.</p>
					-->
				</div>
			</div>
			<div class="company">
				<h6 class="footer-h6">COMPANY</h6>
				<ul class="choose">
					<li><a href="#">Home</a></li>
					<li><a href="#">Shop</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">How It&nbsp;Works</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</div>
			<div class="information">
				<h6 class="footer-h6">INFORMATION</h6>
				<ul class="choose">
					<li><a href="#">Tearms &amp;&nbsp;Condition</a></li>
					<li><a href="#">Privacy Policy</a></li>
					<li><a href="#">How to&nbsp;Buy</a></li>
					<li><a href="#">How to&nbsp;Sell</a></li>
					<li><a href="#">Promotion</a></li>
				</ul>
			</div>
			<div class="shop-category">
				<h6 class="footer-h6">SHOP CATEGORY</h6>
				<ul class="choose">
					<li><a href="#">Men</a></li>
					<li><a href="#">Women</a></li>
					<li><a href="#">Child</a></li>
					<li><a href="#">Apparel</a></li>
					<li><a href="#">Brows All</a></li>
				</ul>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="footer-copyright-text">
				<div class="copyright">
					<p>&copy;&nbsp;2017 Brand All Rights Reserved.</p>
				</div>
				<div class="social-site">
					<a href="#">
						<div class="icon"><i class="fab fa-facebook-f"></i></div>
					</a>
					<a href="#">
						<div class="icon"><i class="fab fa-twitter"></i></div>
					</a>
					<a href="#">
						<div class="icon"><i class="fab fa-linkedin-in"></i></div>
					</a>
					<a href="#">
						<div class="icon"><i class="fab fa-pinterest-p"></i></div>
					</a>
					<a href="#">
						<div class="icon"><i class="fab fa-google-plus-g"></i></div>
					</a>
				</div>
			</div>
		</div>
	</footer>
	<script src="js/validation.js"></script>
	<script src="js/reviews.js"></script>
	<script src="js/jq.carousel.min.js"></script>
	<script src="js/jq.carousel.js"></script>
	<script>
    (function ($) {
      $(function () {
        reviews.sendReview();
        var $carousel = $('#carousel').carousel({
            start: 2,
            indicator: true,
            duration: 0.3,
          }
        );
        $('#carousel_prev').on('click', function (ev) {
          $carousel.carousel('prev');
        });
        $('#carousel_next').on('click', function (ev) {
          $carousel.carousel('next');
        });
      })
    })
    (jQuery);
	</script>
</div>
</body>

</html>