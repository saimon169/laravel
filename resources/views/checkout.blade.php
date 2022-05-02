<!-- <!DOCTYPE html> -->
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0,max-scale=1.0"
		/>
		<title>Checkout</title>
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
		<link rel="stylesheet" href="css/check.css" />
    <link rel="stylesheet" href="css/homepage.css">
	</head>
	<body>
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

			<h1 class="checkout-title">Checkout</h1>
			<div class="checkout-section">
				<div>
					<form name="myForm" onsubmit="return validateForm()" method="post">
						<h2>Billing Details</h2>
						<div class="form-group" id="email">
							<label for="email">Email Address</label>
							<input type="email" name="femail" required /><b
								><span class="formerror"> </span
							></b>
						</div>

						<div class="half-form">
							<div class="form-group" id="name">
								<label for="name">First Name</label>
								<input type="text" name="fname" required /><b
									><span class="formerror"> </span
								></b>
							</div>

							<div class="form-group" id="name">
								<label for="email">Last Name</label>
								<input type="text" name="fname" required /><b
									><span class="formerror"></span
								></b>
							</div>
						</div>

						<div class="form-group" id="pass">
							<label for="Address">Address</label>
							<input type="text" name="fname" required /><b
								><span class="formerror"></span
							></b>
						</div>

						<div class="form-group" id="num">
							<label for="phone">phone</label>
							<input type="number" name="fnum" required /><b
								><span class="formerror"></span
							></b>
						</div>

						<!-- <input class="button-primary" type="submit" value="submit"> -->
						<button class="button-primary">Complete Order</button>
					</form>
					<div class="payment">
						<h2>Pay with eSewa</h2>

						<form method="post" id="eSewa-payment-form" action="">
							<!-- <input class="button-secondary" type="submit" value="Pay with eSewa"> </input> -->
							<button class="button-primary">Pay with eSewa</button>
						</form>
					</div>
				</div>

				<div class="checkout-table-container">
					<h2>Your Order</h2>

					<div class="checkout-table">
						<div class="checkout-table-row">
							<div class="checkout-table-row-left">
								<img
									src="/img/macbook-pro-laravel.png  "
									alt="item"
									class="checkout-table-img"
								/>
								<div class="checkout-item-details">
									<div class="checkout-table-item">Laptop1</div>
									<div class="checkout-table-description">
										15 Inch, 3 TB SSD, 32GB RAM
									</div>
									<div class="checkout-table-price">$400</div>
								</div>
							</div>

							<div class="checkout-table-row-right">
								<div class="checkout-table-quantity">1</div>
							</div>
						</div>

						<div class="checkout-totals">
							<div class="checkout-totals-left">
								<span class="checkout-totals-total">Total</span>
							</div>

							<div class="checkout-totals-right">
								<span class="checkout-totals-total">$400</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/checkout.js"></script> -->
	</body>
  		<!-- footer -->
      <footer>
        <div class="footer-content">
          <div class="copy">Copy Right &copy; 2022</div>
          <ul class="ff">
            <li class="follow">Follow Us:</li>
            <li>
              <a class="tw" href="https://www.twitter.com" target="_blank"
                ><i class="fab fa-twitter fa-2x tw"></i
              ></a>
            </li>
            <li>
              <a class="ins" href="https://www.instagram.com" target="_blank"
                ><i class="fab fa-instagram fa-2x"></i
              ></a>
            </li>
            <li>
              <a class="fb" href="https://www.facebook.com" target="_blank"
                ><i class="fab fa-facebook fa-2x"></i
              ></a>
            </li>
            <li>
              <a class="you" href="https://www.youtube.com" target="_blank"
                ><i class="fab fa-youtube fa-2x"></i
              ></a>
            </li>
          </ul>
        </div>
      </footer>
	<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
	<script src="js/checkout.js"></script>
	<script
		src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
		crossorigin="anonymous"
	></script>
</html>
