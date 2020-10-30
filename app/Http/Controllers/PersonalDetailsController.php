<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PersonalDetails;
use App\Http\Resources\PersonalDetailsResource;
use App\Http\Requests;
use DB;

class PersonalDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //gets all records in the personal details table
		$details = PersonalDetails::paginate();
		
		//returns collection of personal details
        return PersonalDetailsResource::collection($details);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate
		
		$details = $request->isMethod('put') ? PersonalDetails::findOrFail
		($request->personaldetails_id) : new PersonalDetails;
		
		if (PersonalDetails::where('social_security', '=', $request->input('social_security'))->exists()) 
		{
          return response()->json([
          'status' => 'fail',
          'message' => 'ID Already Exits'
		]);
        }else{

        $details->initials        = $request->input('initials');
        $details->surname         = $request->input('surname');
        $details->first_name      = $request->input('first_name');
        $details->second_name     = $request->input('second_name');
        $details->preferred_name  = $request->input('preferred_name');
        $details->citizenship     = $request->input('citizenship');
        $details->social_security = $request->input('social_security');
        $details->date_of_birth   = $request->input('date_of_birth');
        $details->gender          = $request->input('gender');
        $details->marital_status  = $request->input('marital_status');
        $details->drivers_license = $request->input('drivers_license');
        $details->own_transport   = $request->input('own_transport');
        $details->password        = $request->input('password');

         if($details->save())
		 {
			 return new PersonalDetailsResource($details);
		 }
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
		$details = PersonalDetails::findOrFail($id);
		
		//return the single record as a resource
		return new PersonalDetailsResource($details);
    }

  
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         //Get a single record
		$details = PersonalDetails::findOrFail($id);
		
		//return the single record as a resource
		if($details->delete())
		{
			return new PersonalDetailsResource($details);
		}
    }
}
