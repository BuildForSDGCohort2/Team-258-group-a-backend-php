<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SocialMedia;
use App\Http\Resources\SocialMediaResource;
use App\Http\Requests;

class SocialMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //gets all records in the socialmedia details table
		$socials = SocialMedia::paginate();
		
		//returns collection of socialmedia details
        return SocialMediaResource::collection($socials);
    }
	
	public function joinSocial()
    {
        $details = DB::table('personaldetails')
            ->join('socialmedia', 'personaldetails.id', '=', 'socialmedia.personaldetails_id')
            ->select('personaldetails.*', 'socialmedia.*')
            ->get();
        return $details.'/n';
		
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $socials = $request->isMethod('put') ? SocialMedia::findOrFail
		($request->socialmedia_id) : new SocialMedia;

        $socials->websiteurl  = $request->input('websiteurl');
        $socials->facebookurl  = $request->input('facebookurl');
        $socials->twitterurl   = $request->input('twitterurl');
        $socials->instagramurl = $request->input('instagramurl');
        $socials->linkedinurl  = $request->input('linkedinurl');
        $socials->personaldetails_id  = $request->input('personaldetails_id');

         if($socials->save())
		 {
			 return new SocialMediaResource($socials);
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
		$socials = SocialMedia::findOrFail($id);
		
		//return the single record as a resource
		return new SocialMediaResource($socials);
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
		$socials = SocialMedia::findOrFail($id);
		
		//return the single record as a resource
		if($socials->delete())
		{
			return new SocialMediaResource($socials);
		}
    }
}
