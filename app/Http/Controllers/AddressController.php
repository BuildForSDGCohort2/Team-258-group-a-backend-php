<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Validation\Rule;
use DB;

class AddressController extends Controller
{
    //select query
	public function index()
    {
        $details = DB::table('addresses')->get();
        return $details.'/n';
		
    }
	
	public function join()
    {
        $details = DB::table('personaldetails')
            ->join('addresses', 'personaldetails.id', '=', 'addresses.personaldetails_id')
            ->select('personaldetails.*', 'addresses.*')
            ->get();
        return $details.'/n';
		
    }
	
}
