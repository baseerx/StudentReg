<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Departments</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}"></head>
</head>
<body>
@include('Header')
<div class="container">
    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Department</th>
            <th scope="col">Name</th>
            <th scope="col">Location</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>

            <td>DT5650</td>	<td>Allied and public health</td><td>Surrey</td>

        </tr>
        <tr>
            <th scope="row">2</th>
            <td>DT5643</td><td>Animal sciences</td>	<td>London</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>DT5644</td>	<td>Business</td>	<td>Surrey</td>

        </tr>
        <tr>
            <th scope="row">4</th>
            <td>DT5648</td>	<td>Computing and digital technology</td><td>Essex</td>

        </tr>
        <tr>
            <th scope="row">5</th>
            <td>DT5647</td>	<td>Law, crime and investigation</td>	<td>London</td>

        </tr>
        <tr>
            <th scope="row">6</th>
            <td>DT5646</td>	<td>Music and performing arts</td>	<td>Essex</td>
        </tr>
        <tr>
            <th scope="row">7</th>
            <td>DT5646</td>	<td>Music and performing arts</td>	<td>Essex</td>
        </tr>
        <tr>
            <th scope="row">8</th>
            <td>DT5645</td>	<td>Sciences, nutrition and pharmaceutical</td>	<td>London</td>
        </tr>
        <tr>
            <th scope="row">9</th>
            <td>DT5649 </td>	<td>Social care</td>	<td>Surrey </td>
        </tr>
        </tbody>
    </table>
</div>
@include('Footer')
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</body>
</html>