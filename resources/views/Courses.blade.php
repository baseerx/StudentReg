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
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>Thornton</td>

        </tr>

        </tbody>
    </table>
</div>
@include('Footer')
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</body>
</html>