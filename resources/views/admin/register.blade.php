<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Blog Project Register Form</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link href="{{asset('registerform/css/style.css')}}" rel="stylesheet" type="text/css" media="all">
<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Cuprum:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese" rel="stylesheet">
<!--//online-fonts -->
</head>
<body>
<div class="header">
	<h1>Blog Project Register Form</h1>
</div>
<div class="w3-main">
	<!-- Main -->
	<div class="about-bottom main-agile book-form">
		<div class="alert-close"> </div>
		<h2 class="tittle">Register Here</h2>
		<form method="POST" action="{{ route('register') }}">
            @csrf
			<div class="form-date-w3-agileits">
				<label> Name </label>
				<input type="text" name="name" placeholder="Your Name" required="">
				<label> Email </label>
				<input type="email" name="email" placeholder="Your Email" required="">
				<label> Password </label>
				<input type="password" name="password" placeholder="Your Password" required="">
				<label> Confirm Password </label>
				<input type="password" name="password_confirmation" placeholder="Confirm Password" required="">
			</div>
			<div class="make wow shake">
				  <input type="submit" value="Register">
			</div>
		</form>
	</div>
	<!-- //Main -->
</div>
<!-- footer -->
<div class="footer-w3l">
	<p>&copy; 2024 Blog Project Register Form --ykakkaya-- <a href="#"></a></p>
</div>
<!-- //footer -->
<!-- js-scripts-->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<script type="text/javascript" src="{{asset('registerform/js/jquery-2.1.4.min.js')}}"></script>
		<script>$(document).ready(function(c) {
		$('.alert-close').on('click', function(c){
			$('.main-agile').fadeOut('slow', function(c){
				$('.main-agile').remove();
			});
		});
	});
	</script>
<!-- //js-scripts-->
</body>
</html>
