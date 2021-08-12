<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CompanyDeleteController extends Controller {
   public function index() {
      $companies = DB::select('select * from companiess');
      return view('company_delete_view',['companies'=>$companies]);
   }
   public function destroy($id) {
      DB::delete('delete from companiess where id = ?',[$id]);
      echo "Record deleted successfully.<br/>";
      echo '<a href = "/delete-records">Click Here</a> to go back.';
   }
}
