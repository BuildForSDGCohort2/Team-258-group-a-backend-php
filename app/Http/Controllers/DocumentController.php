<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Document;

class DocumentController extends Controller
{
    //
	public function createForm(){
    return view('document');
  }
  
  public function index()
    {
        $details = DB::table('documents')->get();
        return $details.'/n';
		
    }

  public function fileUpload(Request $req)
    {
        $this->validate($req,[
        'profile_pic' => 'mimes:jpeg,png|max:2048',
        'id_doc' => 'mimes:jpeg,png,pdf|max:2048',
        'qualification' => 'mimes:pdf|max:2048',
        ]);

        $fileModel = new Document;
        
		if($req->file()) 
		{
		 if ($req->hasFile('profile_pic'))
         {
            $fileName = $req->profile_pic->getClientOriginalName();
            $filePath = $req->file('profile_pic')->storeAs('uploads', $fileName, 'public');
		    
            $avatar [] =  ['name'=>$fileName, 'path'=>$filePath ];
			Document::find(1)->update(['profile_picture' => $avatar]);
            return back()
            ->with('success','File has been uploaded.')
            ->with('file', $fileName);
		} 
		else if ($req->hasFile('id_doc'))
		{            
		    $fileName = $req->id_doc->getClientOriginalName();
            $filePath = $req->file('id_doc')->storeAs('uploads', $fileName, 'public');
		    
            $id [] =  ['name'=>$fileName, 'path'=>$filePath ];
			Document::find(1)->update(['identity_document' =>$id]);
            return back()
            ->with('success','File has been uploaded.')
            ->with('file', $fileName);
		}
		else if ($req->hasFile('qualification'))
		{
			$fileName = $req->qualification->getClientOriginalName();
            $filePath = $req->file('qualification')->storeAs('uploads', $fileName, 'public');
            $qualification [] =  ['name'=>$fileName, 'path'=>$filePath ];
			Document::find(1)->update(['qualification' =>$qualification]);
		   
            return back()
            ->with('success','File has been uploaded.')
            ->with('file', $fileName);
		}

		
		}
    }
}
