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
	<form method="post">
		<label for="firstname" class="font-weight-bold text-white">FirstName</label>
		<input type="text" class="form-control transparent" name="firstname" id="firstname" placeholder="firstname" required autofocus="firstname">
		<label for="firstname" class="font-weight-bold text-white">Lastname</label>
		<input type="text" class="form-control transparent" name="lastname" id="lastname" placeholder="lastname" required autofocus="lastname">
		<label class="text-white font-weight-bold">Email</label>
		<input type="email" id="email" name="email" required="Email" placeholder="Email" class="form-control transparent">
		<label class="text-white font-weight-bold">Password</label>
		<input type="Password" id="Password" name="Password" required="Enter Password" placeholder="******" class="form-control transparent">
		<br>
		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
		<input type="submit" name="submit" id="submit" class="btn btn-danger btnmargin" value="Register">
		<br>

	{{--<p style="color: #FF0000;font-weight: bold;" id="error">{{ $name }}</p>--}}
	<!-- <div class="alert alert-danger">sadas</div>	 -->
	</form>
</div>
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>