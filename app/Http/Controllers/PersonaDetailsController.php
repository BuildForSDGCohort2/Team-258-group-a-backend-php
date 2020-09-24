<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PersonaDetailsController extends Controller
{
    //select query
	public function index()
    {
        $details = DB::table('personaldetails')->get();
        return $details.'/n';
		
    }
}
