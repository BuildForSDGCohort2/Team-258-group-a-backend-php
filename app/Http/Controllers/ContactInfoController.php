<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactInfo;
use App\Http\Resources\ContactInfoResource;
use App\Http\Requests;

class ContactInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //gets all records in the contact details table
		$contact = ContactInfo::paginate();
		
		//returns collection of contact details
        return ContactInfoResource::collection($contact);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $contact = $request->isMethod('put') ? ContactInfo::findOrFail
		($request->contactinfos_id) : new ContactInfo;

        $contact->position  = $request->input('position');
        $contact->contact_person  = $request->input('contact_person');
        $contact->phone_number_1           = $request->input('phone_number_1');
        $contact->phone_number_2     = $request->input('phone_number_2');
        $contact->primary_email  = $request->input('primary_email');
        $contact->secondary_email  = $request->input('secondary_email');
        $contact->personaldetails_id  = $request->input('personaldetails_id');

         if($contact->save())
		 {
			 return new ContactInfoResource($contact);
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
		$contact = ContactInfo::findOrFail($id);
		
		//return the single record as a resource
		return new ContactInfoResource($contact);
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
		$contact = ContactInfo::findOrFail($id);
		
		//return the single record as a resource
		if($contact->delete())
		{
			return new ContactInfoResource($contact);
		}
    }
}
