<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CompanyUpdateController extends Controller {
   public function index() {
      $companies = DB::select('select * from companiess');
      return view('company_edit_view',['companies'=>$companies]);
   }
   public function show($id) {
      $companies = DB::select('select * from companiess where id = ?',[$id]);
      return view('company_update',['companies'=>$companies]);
   }
   public function edit(Request $request,$id) {
      $name = $request->input('company_name');
      DB::update('update companiess set name = ? where id = ?',[$name,$id]);
      echo "Record updated successfully.<br/>";
      echo '<a href = "/edit-records">Click Here</a> to go back.';
   }
}

