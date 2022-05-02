<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/homepage.css" />
		<title>E-Devices</title>
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&family=Rubik:wght@400;500;600&display=swap"
			rel="stylesheet"
		/>
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
		/>
	</head>
	<body>
		<!-- navbar -->
		<nav class="container">
			<div class="context">
				<ul class="list">
					<li>
						<a class="logo" href="{{url('/homepage')}}">E-Devices</a>
					</li>
					<li><a class="link" href="{{url('/shop')}}">SHOP</a></li>
					<li><a class="link" href="{{url('/homepage')}}">ABOUT</a></li>
					<!-- <li><a class="link" href="#">BLOG</a></li> -->
					<!-- <li><a class="link" href="{{url('/homepage')}}">SIGN UP</a></li> -->
					<li><a class="link" href="{{url('/login')}}">LOGIN</a></li>
					<li><a class="link" href="{{url('/cart')}}">CART</a></li>
				</ul>
			</div>
		</nav>

		<!-- head -->
		<section class="header">
			<div class="text">
				<div class="des">
					<h2 class="heading">E-Devices Welcome You to our website</h2>
					<p class="describe">
						Includes multiple products, categories, a shopping cart and a
						checkout system with Stripe integration.
					</p>
					<a href="{{url('/shop')}}" class="shop">Shop More</a>
					<a href="#" class="about">About Us</a>
				</div>
				<div class="img">
					<img src="img/head.png" alt="laptop" class="image" />
				</div>
			</div>
		</section>

		<!-- about us -->
		<div class="con">
			<div class="review">
				<h3 class="aboutus">About Us</h3>
				<p class="pp">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio
					suscipit quo iusto enim? Quos laboriosam cumque, maxime provident
					totam fuga perferendis! Expedita nesciunt eum at eius ex quasi. Eaque
					consequatur quibusdam non animi velit rerum esse exercitationem hic
					deleniti in! Perspiciatis nulla harum voluptates neque molestiae
					consequuntur ducimus assumenda facilis.
				</p>
			</div>
		</div>
		<!-- review -->
		<div class="reviewhead">
			<div class="review-desc">
				<div class="review1">
					<img
						src="img/review/pexels-mentatdgt-937481.jpg"
						alt="person"
					/><br /><br />
					<h3>Saimon Maharjan (Investor)</h3>
					<br />
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio
						suscipit quo iusto enim? Quos laboriosam cumque, maxime provident
						totam fuga perferendis! Expedita nesciunt eum at eius ex quasi.
						Eaque consequatur quibusdam non animi velit rerum esse
						exercitationem hic deleniti in! Perspiciatis nulla harum voluptates
						neque molestiae consequuntur ducimus assumenda facilis.
					</p>
				</div>
				<div class="review1">
					<img
						src="img/review/pexels-andrea-piacquadio-3778603.jpg"
						alt="person"
					/><br /><br />
					<h3>Sharvagya Katuwal (Director)</h3>
					<br />
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio
						suscipit quo iusto enim? Quos laboriosam cumque, maxime provident
						totam fuga perferendis! Expedita nesciunt eum at eius ex quasi.
						Eaque consequatur quibusdam non animi velit rerum esse
						exercitationem hic deleniti in! Perspiciatis nulla harum voluptates
						neque molestiae consequuntur ducimus assumenda facilis.
					</p>
				</div>
				<div class="review1">
					<img
						class="imagine"
						src="img/review/pexels-andrea-piacquadio-3782164.jpg"
						alt="person"
					/><br /><br />
					<h3>Rohan Maharjan (CEO)</h3>
					<br />
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio
						suscipit quo iusto enim? Quos laboriosam cumque, maxime provident
						totam fuga perferendis! Expedita nesciunt eum at eius ex quasi.
						Eaque consequatur quibusdam non animi velit rerum esse
						exercitationem hic deleniti in! Perspiciatis nulla harum voluptates
						neque molestiae consequuntur ducimus assumenda facilis.
					</p>
				</div>
			</div>
		</div>
		<!-- footer -->
		<footer>
			<div class="footer-content">
				<div class="copy">Copy Right &copy; 2022</div>
				<ul class="ff">
					<li class="follow">Follow Us:</li>
					<li>
						<a href="https://www.twitter.com" target="_blank"
							><i class="fab fa-twitter fa-2x"></i
						></a>
					</li>
					<li>
						<a href="https://www.instagram.com" target="_blank"
							><i class="fab fa-instagram fa-2x"></i
						></a>
					</li>
					<li>
						<a href="https://www.facebook.com" target="_blank"
							><i class="fab fa-facebook fa-2x"></i
						></a>
					</li>
					<li>
						<a href="https://www.youtube.com" target="_blank"
							><i class="fab fa-youtube fa-2x"></i
						></a>
					</li>
				</ul>
			</div>
		</footer>
	</body>
</html>
