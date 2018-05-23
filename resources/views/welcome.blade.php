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
<nav class="navbar bg-dark navbar-dark navbar-expand-md justify-content-center">
    <a href="/" class="navbar-brand d-flex w-50 mr-auto"><img src="reg_img.jpg" alt="Logo" style="width:100px;height: 50px;" class="img-responsive img"></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar3">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse w-100" id="collapsingNavbar3">
         <div class="container text-center align-content-center">
             <ul class="navbar-nav justify-content-center">
                 <li class="nav-item">
                     <a class="nav-link bg-dark text-white" href="#">Link</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link bg-dark text-white" href="//codeply.com">Codeply</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link bg-dark text-white" href="#">Link</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link bg-dark text-white" href="#">Link</a>
                 </li>
             </ul>
         </div>
        <ul class="nav navbar-nav ml-5 w-50 justify-content-end">
            <li class="nav-item">
                <a class="nav-link" href="#"></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/login">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/register">Register</a>
            </li>
        </ul>
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