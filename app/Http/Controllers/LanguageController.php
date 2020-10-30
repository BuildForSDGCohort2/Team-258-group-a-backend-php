<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Language;
use App\Http\Resources\LanguageResource;
use App\Http\Requests;
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
        //gets all records in the language details table
		$language = Language::paginate();
		
		//returns collection of language details
        return LanguageResource::collection($language);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         //creating a new language entry
		$contents_arr = Language::create([
        'home_language' => ['isizulu',],
        'other_language' => ['english'],
		'personaldetails_id' => '1'
         ]);
		 
		 $contents_arr1 = Language::create([
        'home_language' => ['isizulu',],
        'other_language' => ['english','isiswati'],
		'personaldetails_id' => '2'
         ]);
		 
		 $contents_arr2 = Language::create([
        'home_language' => ['french',],
        'other_language' => ['english'],
		'personaldetails_id' => '3'
         ]);
		 
        if($contents_arr || $contents_arr1 || $contents_arr2) {
        return response()->json([
        'status' => 'success',
        'data' => 'languages have been loaded'
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
    public function store(Request $request)
    {
        $language = $request->isMethod('put') ? Language::findOrFail
		($request->languages_id) : new Language;

        $language->home_language  = $request->input('home_language');
        $language->other_language  = $request->input('other_language');
        $language->personaldetails_id  = $request->input('personaldetails_id');

         if($language->save())
		 {
			 return new LanguageResource($language);
		 }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Get a single record
		$language = Language::findOrFail($id);
		
		//return the single record as a resource
		return new LanguageResource($language);
    }

    /*
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //deletes a record in the database
		$language = Language::findOrFail($id);
		
		//return the single record as a resource
		if($language->delete())
		{
			return new LanguageResource($language);
		}
		
    }
}
