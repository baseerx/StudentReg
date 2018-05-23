<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Student-Login</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
</head>
<body class="mainbg img-responsive img" background="login_bg.jpg">
<div class="loginbox">
	<img src="login.png" class="user">
	<h2 class="text-center font-weight-bold text-info">Login Here</h2>
	<form method="post">
		<label class="text-white">Email:</label>
		<input type="email" id="email" name="email" required="Email" placeholder="Email" class="form-control transparent" autofocus="Email">

		<label class="text-white">Password:</label>
		<input type="Password" id="Password" name="Password" required="Enter Password" placeholder="******" class="form-control transparent">
		<br>
		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
		<input type="submit" name="submit" id="submit" class="btn btn-primary btnmargin" value="Sign In">
		<br>

		{{--<a href="{{URL::route('register')}}">Register Here</a>--}}
		{{--<p style="color: #FF0000;font-weight: bold;" id="error">{{ $name }}</p>--}}
		<!-- <div class="alert alert-danger">sadas</div>	 -->
	</form>
</div>
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>