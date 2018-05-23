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
<div class="registerbox">
	<img src="login.png" class="user">
	<form method="post">
		<label for="firstname" class="font-weight-bold text-white">StudentId</label>
		<input type="text" class="form-control transparent" name="studentid" id="studentid" placeholder="studentid" required autofocus="studentid">
		<label for="firstname" class="font-weight-bold text-white">Name</label>
		<input type="text" class="form-control transparent" name="name" id="name" placeholder="name" required>
		<div class="form-group">
			<label for="Address" class="font-weight-bold text-white">Address</label>
			<textarea class="form-control transparent" id="Address" rows="1"></textarea>
		</div>
        <div class="form-group">
			<label for="PostCode" class="font-weight-bold text-white">PostCode</label>
            <input type="number" name="postcode" id="postcode" class="form-control transparent">
		</div>
        <div class="input-append date" id="datetimepicker" data-date="12-02-2012" data-date-format="dd-mm-yyyy">
            <input class="span2 transparent form-control" size="16" type="text" value="12-02-2012">
            <span class="add-on"><i class="icon-th"></i></span>
        </div>
        <label class="text-white font-weight-bold">Email</label>
		<input type="email" id="email" name="email" required="Email" placeholder="Email" class="form-control transparent">
		<label class="text-white font-weight-bold">Phone</label>
		<input type="text" id="phone" name="phone" required="Phone Number" placeholder="******" class="form-control transparent">
       <label class="text-white font-weight-bold">CourseId</label>
		<input type="text" id="courseid" name="courseid" required="CourseId" placeholder="******" class="form-control transparent">
        <br>
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
		<input type="submit" name="submit" id="submit" class="btn btn-danger btnmargin" value="Register">

	</form>
</div>
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>