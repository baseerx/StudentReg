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
@include('Header')
<div class="registerbox">
    <img src="login.png" class="user">
    <br>
    <form method="post">
        <div class="row">
            <div class="col-4">
                <label for="firstname" class="text-white">StudentId</label>
                <input type="text" class="form-control-sm w-50 transparent bg-light" name="studentid" id="studentid" placeholder="studentid" required autofocus="studentid">
            </div>
            <div class="col-4">
                <label for="firstname" class="text-white">Name</label>
                <input type="text" class="form-control-sm w-50 transparent bg-light" name="name" id="name" placeholder="name" required>
            </div>
            <div class="col-4">
                <label for="Address" class="text-white text-center">Address</label>
                <textarea class="form-control-sm w-50 transparent bg-light" id="Address" rows="1"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <label for="postcode" class="text-white">postcode</label>
                <select class="form-control-sm w-50" id="postcode">
                    <option value="MM04">BA(Hons)Creative Music</option>
                    <option value="DD34">BA(Hons)Drama</option>
                    <option value="DF34">BA(Hons)Drama&filmStd</option>
                    <option value="ME53">BA(Hons)Emusic</option>
                    <option value="PA42">BA(Hons)P-arts</option>
                    <option value="CS10">Beng(Hons)CS</option>
                    <option value="SS21">BSc(Hons)AppliedNutritionalScience</option>
                    <option value="SS23">BSc(Hons)BioMedicalScience</option>
                    <option value="NN81">BSc(Hons)BusAndEventMag</option>
                    <option value="NN22">BSc(Hons)BusAndHealthCare</option>
                    <option value="NN24">BSc(Hons)Bus&HospMang</option>
                    <option value="NM11">BSc(Hons)Bus&Law</option>
                    <option value="NN15">BSc(Hons)Bus&Markting</option>
                    <option value="CS13">BSc(Hons)compnetwrk</option>
                    <option value="NN67">BSc(Hons)digitmarketin</option>
                    <option value="NN120">BSc(Hons)IntBusMang</option>
                    <option value="NM41">BSc(Hons)LawAndAccount</option>
                    <option value="FF022">BSc(Hons)MedSci&Fyear</option>
                    <option value="PP023">BSc(Hons)PharmacuticalScience</option>
                    <option value="SS43">BSc(Hons)Zoology</option>
                    <option value="M100">Fdsc BioSC</option>
                    <option value="NN01">LLB(Hons)Law</option>
                    <option>Health&SocialCare</option>
                </select>
            </div>

            <div class="col-4">
                <label class="text-white ml-1">Email</label>
                <input type="email" id="email" name="email" required="Email" placeholder="Email" class="form-control-sm w-50 transparent bg-light">
            </div>
            <div class="col-4">
                <label class="text-white ml-2">Phone</label>
                <input type="text" id="phone" name="phone" required="Phone Number" placeholder="******" class="form-control-sm w-50 transparent ml-1 bg-light">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-3"></div>
            <div class="col-4 ml-5 mt-2">
                <label class="text-white">CourseId</label>
                <input type="text" id="courseid" name="courseid" required="CourseId" placeholder="******" class="form-control-sm w-50 transparent bg-light">
            </div>
            <div class="col-4"></div>
        </div>
        <br>
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <input type="submit" name="submit" id="submit" class="btn btn-danger btnmargin center" value="Register">
    </form>

</div>


<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>