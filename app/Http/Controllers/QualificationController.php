<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Qualification;
use App\Http\Resources\QualificationResource;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;


class QualificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //gets all records in the language details table
		$qualification = Qualification::paginate();
		
		//returns collection of address details
        return QualificationResource::collection($qualification);
    }

     
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $qualification = $request->isMethod('put') ? Qualification::findOrFail
		($request->qualifications_id) : new Qualification;

        $qualification->institution_attended  = $request->input('institution_attended');
        $qualification->qualification_name  = $request->input('qualification_name');
        $qualification->NQFlevel  = $request->input('NQFlevel');
        $qualification->personaldetails_id  = $request->input('personaldetails_id');

         if($qualification->save())
		 {
			 return new QualificationResource($qualification);
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
		$qualification = Qualification::findOrFail($id);
		
		//return the single record as a resource
		return new QualificationResource($qualification);
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
		$qualification = Qualification::findOrFail($id);
		
		//return the single record as a resource
		if($language->delete())
		{
			return new QualificationResource($qualification);
		}
		
    }
}