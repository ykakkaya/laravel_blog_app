
<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<title>Yakup Akkaya Blog Project</title>
	<!-- Meta-Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="">
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta-Tags -->
	<!-- Stylesheets -->
	<link href="{{asset('loginform/css/style.css')}}" rel='stylesheet' type='text/css' />
	<!-- online fonts-->
	<link href="https://fonts.googleapis.com/css?family=Amiri:400,400i,700,700i" rel="stylesheet">
</head>

<body>
	<!--  particles  -->
	<div id="particles-js"></div>
	<!-- //particles -->
	<div class="w3ls-pos">
		<h1>Admin Panel Login Form</h1>
		<div class="w3ls-login box">
			<!-- form starts here -->
            <form method="POST" action="{{ route('login') }}">
                @csrf

				<div class="agile-field-txt">
					<input type="email" name="email" placeholder="info@example.com" required="" />
				</div>
				<div class="agile-field-txt">
					<input type="password" name="password" placeholder="******" required="" id="myInput" />
					{{-- <div class="agile_label">
						<input id="check3" name="check3" type="checkbox" value="show password">
						<label class="check" for="check3">Remember me</label>
					</div> --}}
				</div>
				<div class="w3ls-bot">
					<input type="submit" value="LOGIN">
				</div>
			</form>
		</div>
		<!-- //form ends here -->
		<!--copyright-->
		<div class="copy-wthree">
			<p>© 2024 Blog Project Admin Panel Login Form --ykakkaya--
				<a href="#" target="_blank"></a>
			</p>
		</div>
		<!--//copyright-->
	</div>
	<!-- scripts required  for particle effect -->
	<script src='{{asset('loginform/js/particles.min.js')}}'></script>
	<script src="{{asset('loginform/js/index.js')}}"></script>
	<!-- //scripts required for particle effect -->
</body>

</html>
