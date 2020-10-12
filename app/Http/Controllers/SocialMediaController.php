<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SocialMediaController extends Controller
{
    //select query
	public function index()
    {
        $details = DB::table('socialmedia')->get();
        return $details.'/n';
		
    }
	
	public function joinSocial()
    {
        $details = DB::table('personaldetails')
            ->join('socialmedia', 'personaldetails.id', '=', 'socialmedia.personaldetails_id')
            ->select('personaldetails.*', 'socialmedia.*')
            ->get();
        return $details.'/n';
		
    }
}
