<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PersonaDetailsController extends Controller
{
    //raw select query
	public function index()
    {
        $details = DB::table('personalDetails')->get();
        return $details.'/n';
		
    }
}
