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
@include('Header')
<hr>
<div class="container align-content-center align-items-center text-center">
    <h2 class="left">Introduction</h2>
    <p class="text-nowrap justify-content-around"><strong>The University of Golden Eagle</strong>&nbsp;<mark>societal challenges with diverse knowledge.
        <br> There is a strong sense of openness at the University of GoldenEagle.  <br> The University actively participates in the public debate and interacts with the<br> surrounding society through continuous dialogues and knowledge exchange, nationally and internationally.</mark><br></p>
    <hr>
     <strong>Educational</strong>
   <p><mark>Strong research and attractive study programmes attract scientists and<br> students from all around the world. <br>They offer new perspectives and help solve the major challenges facing the world.</mark><br></p>
</div>
<hr>
{{--Footer starts here--}}
@include('Footer')
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</body>
</html>