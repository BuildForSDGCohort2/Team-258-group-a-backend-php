<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Address;
use App\Http\Resources\AddressResource;
use App\Http\Requests;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //gets all records in the address details table
		$address = Address::paginate();
		
		//returns collection of address details
        return AddressResource::collection($address);
    }
	
	//combines two tables data together and the displays it
	public function join()
    {
        $address = DB::table('personaldetails')
            ->join('addresses', 'personaldetails.id', '=', 'addresses.personaldetails_id')
            ->select('personaldetails.*', 'addresses.*')
            ->get();
        return $address.'/n';
		
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $address = $request->isMethod('put') ? Address::findOrFail
		($request->addresses_id) : new Address;

        $address->address_line1  = $request->input('address_line1');
        $address->address_line2  = $request->input('address_line2');
        $address->city           = $request->input('city');
        $address->province     = $request->input('province');
        $address->postal_code  = $request->input('postal_code');
        $address->personaldetails_id  = $request->input('personaldetails_id');

         if($address->save())
		 {
			 return new AddressResource($address);
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
		$address = Address::findOrFail($id);
		
		//return the single record as a resource
		return new AddressResource($address);
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
		$address = Address::findOrFail($id);
		
		//return the single record as a resource
		if($address->delete())
		{
			return new AddressResource($address);
		}
    }
}
