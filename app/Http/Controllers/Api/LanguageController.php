<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Language;
use DB;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $details = DB::table('languages')->get();
        return $details.'/n';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         /*creating a new language entry
		 *insert one by one or do an array
		$contents_arr = Language::create([
        'home_language' => ['isizulu',],
        'other_language' => ['english'],
		'personaldetails_id' => '1'
         ]);*/
		 /*
		 $contents_arr = Language::create([
        'home_language' => ['isizulu',],
        'other_language' => ['english','isiswati'],
		'personaldetails_id' => '2'
         ]);*/
		 /*
		 $contents_arr = Language::create([
        'home_language' => ['french',],
        'other_language' => ['english'],
		'personaldetails_id' => '3'
         ]);*/
		 
        if($contents_arr) {
        return response()->json([
        'status' => 'success',
        'data' => $contents_arr
        ]);
        }
		else{
        return response()->json([
        'status' => 'fail',
        'message' => 'failed to create content_arr record'
        ]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
