<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use PDO;

class Student extends Model
{

    protected $connection = 'access';

      public function check()
      {   Log::info("you are in model");

          $data=DB::table('Student')->get();
          Log::info($data);
      }
    //
}
