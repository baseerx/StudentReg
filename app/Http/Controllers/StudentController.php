<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class StudentController extends Controller
{
   public function check()
   {
       Log::info("you are in");
       $obj=new Student();
       $obj->check();
   }
}