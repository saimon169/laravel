<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<script
			src="https://kit.fontawesome.com/64d58efce2.js"
			crossorigin="anonymous"
		></script>
		<link rel="stylesheet" href="css/login.css" />
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

		<title>Sign in & Sign up Form</title>
	</head>
	<body>
		<!-- nav -->
		<nav class="container-box">
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

		<!-- login -->

		<div class="container">
			<div class="forms-container">
				<div class="signin-signup">
					<form action="{{url('/')}}/logged" class="sign-in-form" method="POST">
						@csrf
						<h2 class="title">Sign in</h2>
						<div class="input-field">
							<i class="fas fa-user"></i>
							<input type="text" placeholder="email" name="email" />
						</div>
						<span class="text-danger">
								@error('email')
								{{$message}}
								@enderror
							</span>
						<div class="input-field">
							<i class="fas fa-lock"></i>
							<input type="text" placeholder="Password" name="password"/>
						</div>
						<span class="text-danger">
								@error('password')
								{{$message}}
								@enderror
							</span>
						<input type="submit" value="Login" class="btn solid" />
						<p class="social-text">Or Sign in with social platforms</p>
						<div class="social-media">
							<a href="#" class="social-icon">
								<i class="fab fa-facebook-f"></i>
							</a>
							<a href="#" class="social-icon">
								<i class="fab fa-twitter"></i>
							</a>
							<a href="#" class="social-icon">
								<i class="fab fa-google"></i>
							</a>
							<a href="#" class="social-icon">
								<i class="fab fa-linkedin-in"></i>
							</a>
						</div>
					</form>
					<form action="{{url('/')}}/register" class="sign-up-form" method="POST">
						@csrf
						<h2 class="title">Register</h2>
						<div class="input-field">
							<i class="fas fa-user-circle"></i>
							<input type="text" placeholder="Name" name="name" />
							
						</div>
						<span class="text-danger">
								@error('name')
								{{$message}}
								@enderror
							</span>
						<!-- <div class="input-field">
							<i class="fas fa-user-circle"></i>
							<input type="text" placeholder="Last Name" />
						</div> -->
						<div class="input-field">
							<i class="fas fa-phone"></i>
							<input type="text" placeholder="Phone Number" name="number" />
							
						</div>
						<span class="text-danger">
								@error('number')
								{{$message}}
								@enderror
							</span>

						<div class="input-field">
							<i class="fas fa-envelope"></i>
							<input type="text" placeholder="Email" name="email"/>
							
						</div>
						<span class="text-danger">
								@error('email')
								{{$message}}
								@enderror
							</span>
						<div class="input-field">
							<i class="fas fa-lock"></i>
							<input type="text" placeholder="Password" name="password"/>
							
						</div>
						<span class="text-danger">
								@error('password')
								{{$message}}
								@enderror
							</span>
							<div class="input-field">
							<i class="fas fa-lock"></i>
							<input type="text" placeholder="Confirm Password" name="password_confirmation" />
		
						</div>
						<span class="text-danger">
								@error('password_confirmation')
								{{$message}}
								@enderror
						</span>
						<input type="submit" class="btn" value="Register" />
						<p class="social-text">Or Register with social platforms</p>
						<div class="social-media">
							<a href="#" class="social-icon">
								<i class="fab fa-facebook-f"></i>
							</a>
							<a href="#" class="social-icon">
								<i class="fab fa-twitter"></i>
							</a>
							<a href="#" class="social-icon">
								<i class="fab fa-google"></i>
							</a>
							<a href="#" class="social-icon">
								<i class="fab fa-linkedin-in"></i>
							</a>
						</div>
					</form>
				</div>
			</div>

			<div class="panels-container">
				<div class="panel left-panel">
					<div class="content">
						<h3>New here ?</h3>
						<p>Saimon pagal</p>
						<button class="btntransparent" id="sign-up-btn">Register</button>
					</div>
				</div>
				<div class="panel right-panel">
					<div class="content">
						<h3>Already Registered?</h3>
						<p>Katuwal pagal</p>
						<button class="btntransparent" id="sign-in-btn">Sign in</button>
					</div>
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

		<script src="js/login.js"></script>
	</body>
</html>
