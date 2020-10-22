
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" href="{{asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" href="{{asset('animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" href="{{asset('css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" href="{{asset('animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" href="{{asset('select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" href="{{asset('daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" href="{{asset('css/util.css')}}">
	<link rel="stylesheet" href="{{asset('css/mainlogin.css')}}">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
                <form class="login100-form validate-form flex-sb flex-w" method="POST" action="{{ route('login') }}">
                    @csrf

					<span class="login100-form-title p-b-32">
						<center>Account Login</center>
					</span>

					<span class="txt1 p-b-11">
						Username
                    </span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
						<input class="input100 @error('email') is-invalid @enderror" type="text" name="email" required autocomplete="email" autofocus>
						<span class="focus-input100"></span>
					</div>

					<span class="txt1 p-b-11">
						Password
					</span>
					<div class="wrap-input100 @error('password') is-invalid @enderror validate-input m-b-12" data-validate = "Password is required">
						<input class="input100" type="password" name="password" >
						<span class="focus-input100"></span>
					</div>


					<div class="container-login100-form-btn">
					<center>
						<button type="submit" class="login100-form-btn">
                        {{ __('Login') }}
						</button>
					<!-- </center> -->
					</div>

				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="{{asset('jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('js/main.js')}"></script>

</body>
</html>
