<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CompanyViewController extends Controller {
   public function index() {
      $companies = DB::select('select * from companiess');
      return view('company_view',['companies'=>$companies]);
   }
}
