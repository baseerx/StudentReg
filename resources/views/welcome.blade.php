<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Student-Registration</title>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}"></head>
<body>
<nav class="navbar bg-dark navbar-dark">
	<a class="navbar-brand" href="#">
		<img src="reg_img.jpg" alt="Logo" style="width:100px;height: 50px;" class="img-responsive img">
	</a>
	<div class="container">
		<div class="navbar-header">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<div id="navbar" class="navbar-collapse">
			<ul class="nav navbar-nav">
				<li><a href="../navbar/" class="bg-dark text-white">Default</a></li>
				<li class="active"><a href="./" class="text-white bg-dark">Static top <span class="sr-only">(current)</span></a></li>
				<li><a href="../navbar-fixed-top/" class="bg-dark text-white">Fixed top</a></li>
				<li><a href="../navbar/" class="bg-dark text-white">Default</a></li>
				<li class="active"><a href="./" class="text-white bg-dark">Static top <span class="sr-only">(current)</span></a></li>
				<li><a href="../navbar-fixed-top/" class="bg-dark text-white">Fixed top</a></li>
			</ul>
			{{--<li class="float-right"><a href="#" class="bg-dark text-white ml-lg-5">Login</a></li>--}}
		</div>
	</div>
</nav>
<hr>
<div class="container align-content-center align-items-center text-center">asndasndasafsdgfggfdhgffghgh,asn</div>
<hr>
{{--Footer starts here--}}
<footer>
	<nav class="navbar bg-dark navbar-dark navbar-static-top">
		<div class="container">
			<div class="navbar-header">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
			</div>
			<div id="navbar" class="navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="../navbar/" class="bg-dark text-white font-weight-bold">CopyWrite@2018</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>
</footer>
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</body>
</html>