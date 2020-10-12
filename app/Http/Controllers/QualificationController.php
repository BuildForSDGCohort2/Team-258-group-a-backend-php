<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class QualificationController extends Controller
{
     //select query
	public function index()
    {
        $details = DB::table('qualifications')->get();
        return $details.'/n';
		
    }
}
