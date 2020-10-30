<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Skill;
use App\Http\Resources\SkillResource;
use App\Http\Requests;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //gets all records in the skill table
		$skill = Skill::paginate();
		
		//returns collection of skills 
        return SkillResource::collection($skill);
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
        $skill = $request->isMethod('put') ? Skill::findOrFail
		($request->skills_id) : new Skill;

        $skill->institution_attended  = $request->input('institution_attended');
        $skill->qualification_name  = $request->input('qualification_name');
        $skill->NQFlevel  = $request->input('NQFlevel');
        $skill->personaldetails_id  = $request->input('personaldetails_id');

         if($skill->save())
		 {
			 return new SkillResource($skill);
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
		$skill = Skill::findOrFail($id);
		
		//return the single record as a resource
		return new SkillResource($skill);
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
		$skill = Skill::findOrFail($id);
		
		//return the single record as a resource
		if($skill->delete())
		{
			return new SkillResource($skill);
		}
		
    }
}