
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css2/all.min.css">
	<link rel="stylesheet" href="css2/style2.css">
	<title>Sign In user</title>
</head>

<body>
	<div class="container">
	
		<div class="form-container sign-in-container">
			<form method="POST" action="/signin">
				@csrf
				<h1>Sign in with</h1>
				<div class="social-container">
					<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
					<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
					<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
				</div>
				<span>or use your account</span>
				<input required  placeholder="your email"  name="email"     type="email" id="Email" value="{{old('email')}}"/>
				<input required  placeholder="your password"  name= "password" type="password" id="Password" />
				<button value="submit"><a href="#" >Log In</a></button><br>
				<p style="color: red">{{ session('message') }}</p>
			</form>
		</div>
	</div>

</body>

</html>