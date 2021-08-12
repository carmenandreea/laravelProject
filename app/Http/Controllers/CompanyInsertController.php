<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CompanyInsertController extends Controller {
   public function insertform() {
      return view('company_create');
   }
	
   public function insert(Request $request) {
      $name = $request->input('company_name');
      DB::insert('insert into companiess (name) values(?)',[$name]);
      echo "Record inserted successfully.<br/>";
      echo '<a href = "/insert">Click Here</a> to go back.';
   }
}

