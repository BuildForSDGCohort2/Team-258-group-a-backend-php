<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Skill;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $details = DB::table('skills')->get();
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
		 *insert one by one or do an array*/
		$contents_arr = Skill::create([
        'skill_array' => ['painting', 'driving', 'gardening'],
		'personaldetails_id' => '1'
         ]);
		 
		 $contents_arr1 = Skill::create([
        'skill_array' => ['driving', 'gardening'],
		'personaldetails_id' => '2'
         ]);
		 
		 $contents_arr2 = Skill::create([
        'skill_array' => ['painting', 'driving', 'arts and crafts'],
		'personaldetails_id' => '3'
         ]);
		 
        if($contents_arr || $contents_arr1 || $contents_arr2) {
        return response()->json([
        'status' => 'success',
        'data' => 'successfully created data'
        ]);
        }
		else{
        return response()->json([
        'status' => 'fail',
        'message' => 'failed to create data'
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
    public function destroy(/*$id*/)
    {
        //deletes record in the database
		//$del = DB::table('skills')->truncate();
		//DB::table('skills')->where('id', $id)->delete();
		/* deletes multiple record
		$del = 1;
		foreach ($id = 0; $id<5; as $id++) {
            DB::table('skills')->where('id', $del)->delete();
			$del ++;
        }*/
		if($del) {
        return response()->json([
        'status' => 'success',
        'data' => 'data sucessfully deleted'
        ]);
        }
		else{
        return response()->json([
        'status' => 'fail',
        'message' => 'failed to delete data'
        ]);
        }
    }
}
