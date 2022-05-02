<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Document</title>
		<link
			rel="stylesheet"
			href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css"
		/>
		<link rel="stylesheet" href="css/cart.css" />
		<link rel="stylesheet" href="css/homepage.css" />
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

		<div class="cart-section">
			<div>
				<!-- <img src="/img/icon/loupe.png" class="search-icon" alt=""> -->
				<div class="search-bar" id="rightbar">
					<i class="uil uil-search"></i>
					<input
						type="search"
						class="search-box"
						placeholder="Search for product"
						required=""
					/>
				</div>

				<h3>1 item(s) in Shopping Cart</h3>
				<div class="cart-table">
					<div class="cart-table-row">
						<div class="cart-table-row-left">
							<a href="#"
								><img
									src="/img/macbook-pro.png"
									alt="item"
									class="cart-table-img"
							/></a>
							<div class="cart-item-details">
								<div class="cart-table-item"><a href="#">Laptop 1</a></div>
								<div class="cart-table-description">
									15 inch, 3 TB SSD,32GB RAM
								</div>
							</div>
						</div>
						<div class="cart-table-row-right">
							<div class="cart-table-actions">
								<form action="" method="POST">
									<button type="submit" class="cart-options">Remove</button>
								</form>

								<form action="" method="POST">
									<button type="submit" class="cart-options">
										Save for Later
									</button>
								</form>
							</div>

							<h5>Rs 20,000</h5>
						</div>
					</div>
				</div>

				<a href="#" class="have-code prod">Have a Code?</a>

				<div class="have-code-container">
					<form action=" " method="POST">
						<input type="text" name="coupon_code" />
						<button type="submit" class="button-plain">Apply</button>
					</form>
				</div>

				<div class="cart-totals">
					<div class="cart-totals-left">
						Shipping is free because we’re awesome like that. Also because
						that’s additional stuff I don’t feel like figuring out.
					</div>

					<div class="cart-totals-right">
						<div>
							Subtotal <br />
							Tax (13)%<br />
							<b>Total</b>
						</div>
						<div class="cart-totals-subtotal">
							Rs 20,000<br />
							Rs 2200 <br />
							<b>Rs 22,200</b>
						</div>
					</div>
				</div>

				<div class="cart-buttons">
					<a href="#" class="button prod">Continue Shopping</a>
					<a href="{{url('/checkout')}}" class="button-primary">Proceed to Checkout</a>
				</div>
			</div>
		</div>

		<!-- might like -->
		<div class="like">
			<h3>You might also like....</h3>
			<div class="might">
				<div class="might1">
					<a href="details.html">
						<img src="../img/products/tablet-1.jpg" alt="laptop-1" />
					</a>
					<a href="details.html">
						<div class="product-name">Laptop-1 &nbsp; (Rs 50000)</div>
					</a>
				</div>
				<div class="might1">
					<a href="details.html">
						<img src="../img/products/tablet-1.jpg" alt="laptop-1" />
					</a>
					<a href="details.html">
						<div class="product-name">Laptop-1 &nbsp; (Rs 50000)</div>
					</a>
				</div>
				<div class="might1">
					<a href="details.html">
						<img src="../img/products/tablet-1.jpg" alt="laptop-1" />
					</a>
					<a href="details.html">
						<div class="product-name">Laptop-1 &nbsp; (Rs 50000)</div>
					</a>
				</div>
				<div class="might1">
					<a href="details.html">
						<img src="../img/products/tablet-1.jpg" alt="laptop-1" />
					</a>
					<a href="details.html">
						<div class="product-name">Laptop-1 &nbsp; (Rs 50000)</div>
					</a>
				</div>
			</div>
		</div>
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
	<script src="js/cart.js"></script>
	<script
		src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
		crossorigin="anonymous"
	></script>
</html>
