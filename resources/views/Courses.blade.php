<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Courses Page</title>
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
            <th scope="col">CourseId</th>
            <th scope="col">Title</th>
            <th scope="col">Duration</th>
            <th scope="col">Department</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>MM04</td>	 <td>BA (Hons) Creative Music Technology</td>	<td>3 years</td>	<td>DT5646</td>

        </tr>
        <tr>
            <th scope="row">2</th>
            <td>MM04</td>	 <td>BA (Hons) Creative Music Technology</td>	<td>3 years</td>	<td>	DT5646</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>DD34</td>	 <td>	BA (Hons) Drama</td>	<td>	3 years</td>	 <td>	DT5646</td>
        </tr>
        <tr>
            <th scope="row">4</th>
            <td>DF44</td>	 <td>	BA (Hons) Drama and Film Studies	</td>	<td>3 years</td>	 <td>	DT5646</td>
        </tr>
        <tr>
            <th scope="row">5</th>
            <td>ME53	</td>	 <td>BA (Hons) Electronic Music</td>	<td>	3 years</td>	 <td>	DT5646</td>
        </tr>
        <tr>
            <th scope="row">6</th>
            <td>PA42</td>	 <td>	BA (Hons) Performing Arts</td>	<td>	3 years</td>	 <td>	DT5646</td>
        </tr>
        <tr>
            <th scope="row">7</th>
            <td> CS10	</td>	 <td>BEng (Hons) Computer Science</td>	<td>	3 years	</td>	 <td>DT5648</td>
        </tr>
        <tr>
            <th scope="row">8</th>
            <td>SS21</td>	 <td>	BSc (Hons) Applied Nutritional Science	</td>	<td>3 years</td>	 <td>	DT5645</td>
        </tr>
        <tr>
            <th scope="row">9</th>
            <td> SS23</td>	 <td>	BSc (Hons) Biomedical Science </td>	<td>	3 years</td>	 <td>	DT5645</td>
        </tr>
        <tr>
            <th scope="row">10</th>
            <td> NN81	</td>	 <td>BSc (Hons) Business and Events Management</td>	<td>3 years	 </td>	<td>DT5644</td>
        </tr>
        <tr>
            <th scope="row">11</th>
            <td> NN22</td>	 <td>	BSc (Hons) Business and Healthcare	</td>	<td>3 years</td>	 <td>	DT5644</td>
        </tr>
        <tr>
            <th scope="row">12</th>
            <td>NN24</td>	 <td>	BSc (Hons) Business and Hospitality Management</td>	<td>	3 years</td>	 <td>	DT5644</td>
        </tr>
        </tbody>
    </table>
</div>
@include('Footer')
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</body>
</html>