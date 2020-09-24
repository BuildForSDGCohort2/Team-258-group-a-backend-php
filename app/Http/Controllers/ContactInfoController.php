<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use DB;

class ContactInfoController extends Controller
{
	/*Validator::make($data, [
    'email' => [
        'required',
        Rule::unique('contact_infos')->ignore($contact_info->id),
    ],
]);*/
    //select query
	public function index()
    {
        $details = DB::table('contactinfos')->get();
        return $details.'/n';
		
    }
}
