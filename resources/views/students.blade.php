<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students</title>
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
            <th scope="col">StudentID</th>
            <th scope="col">Address</th>
            <th scope="col">PostCode</th>
            <th scope="col">DOB</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Course</th>
            <th scope="col">Module</th>

        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>

            <td>P401160</td>	<td>	Adam Thomas	ABC	SE17 8GT	</td>	<td>02/09/1992	adam@gmail.com#C:\Users\ana.damian\Desktop\Golden Eagle University DATA.xls#STUDENT!F2</td>	<td>	020 8678 6543</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>P178420</td>	<td>Martin Michael</td>

        </tr>
        <tr>
            <th scope="row">3</th>
            <td>P195151</td>	<td>	Courtland Marsico</td>

        </tr>  <tr>
            <th scope="row">4</th>
            <td>P173550 </td>	<td>Keith Ironside</td>


        </tr>  <tr>
            <th scope="row">5</th>
            <td>P195151</td>	<td>	Courtland Marsico</td>

        </tr>  <tr>
            <th scope="row">6</th>
            <td>P260674</td>	<td>	Aimi Trevor	ZYX		</td>	<td>	abcgmail.com#http://abcgmail.com#</td>	<td>	83794782984</td>

        </tr>
        <tr>
            <th scope="row">7</th>
            <td>P264370</td>	<td>	Frank Turff</td>

        </tr>
        <tr>
            <th scope="row">8</th>
            <td>P266627</td>	<td>	Kathryn Wood</td>


        </tr>
        <tr>
            <th scope="row">9</th>
            <td>P268787	</td>	<td>Phyllis Jagger</td>

        </tr>
        <tr>
            <th scope="row">10</th>
            <td>P264370</td>	<td>	Frank Turff</td>

        </tr>

        </tbody>
    </table>
</div>
@include('Footer')
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</body>
</html>