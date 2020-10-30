<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Document;
use App\Http\Resources\DocumentResource;
use App\Http\Requests;

class DocumentConntroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //gets all records in the personal details table
		$dcoument = Document::paginate();
		
		//returns collection of personal details
        return DocumentResource::collection($dcoument);   
	}

    public function create()
    {
		return view('document');
	}
	
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dcoument = $request->isMethod('put') ? Document::findOrFail
		($request->dcouments_id) : new Document;

        $this->validate($request,[
        'profile_pic' => 'mimes:jpeg,png|max:2048',
        'id_doc' => 'mimes:jpeg,png,pdf|max:2048',
        'qualification' => 'mimes:pdf|max:2048',
        ]);

        $fileModel = new Document;
        
		if($request->file()) 
		{
		 if ($request->hasFile('profile_pic'))
         {
            $fileName = $request->profile_pic->getClientOriginalName();
            $filePath = $request->file('profile_pic')->storeAs('uploads', $fileName, 'public');
		    
            $avatar [] =  ['name'=>$fileName, 'path'=>$filePath ];
			Document::find(1)->update(['profile_picture' => $avatar]);
            return back()
            ->with('success','File has been uploaded.')
            ->with('file', $fileName);
		} 
		else if ($request->hasFile('id_doc'))
		{            
		    $fileName = $request->id_doc->getClientOriginalName();
            $filePath = $request->file('id_doc')->storeAs('uploads', $fileName, 'public');
		    
            $id [] =  ['name'=>$fileName, 'path'=>$filePath ];
			Document::find(1)->update(['identity_document' =>$id]);
            return back()
            ->with('success','File has been uploaded.')
            ->with('file', $fileName);
		}
		else if ($request->hasFile('qualification'))
		{
			$fileName = $request->qualification->getClientOriginalName();
            $filePath = $request->file('qualification')->storeAs('uploads', $fileName, 'public');
            $qualification [] =  ['name'=>$fileName, 'path'=>$filePath ];
			Document::find(1)->update(['qualification' =>$qualification]);
		   
            return back()
            ->with('success','File has been uploaded.')
            ->with('file', $fileName);
		}

		
		}
         if($dcoument->save())
		 {
			 return new DocumentResource($dcoument);
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
		$dcoument = Document::findOrFail($id);
		
		//return the single record as a resource
		return new DocumentResource($dcoument);
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
		$dcoument = Document::findOrFail($id);
		
		//return the single record as a resource
		if($dcoument->delete())
		{
			return new DocumentResource($dcoument);
		}
    }
}
