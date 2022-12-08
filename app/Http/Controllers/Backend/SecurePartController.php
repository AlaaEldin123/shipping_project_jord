<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\secure_part;
use Illuminate\Http\Request;
use Image;
class SecurePartController extends Controller
{
      public function ViewSecurePart(){
    $secure_part = secure_part::latest()->get();
 
    return view('admin.secure_parts.secure_part_view',compact('secure_part'));
    }

   


    public function SecurePartEdit($id){
    	$secure_part = secure_part::findOrFail($id);
    	return view('admin.secure_parts.secure_part_edit',compact('secure_part'));

    }


    public function SecurePartUpdate(Request $request){
    	
    	$secure_part_id = $request->id;
    	$old_img = $request->old_image;

    	if ($request->file('image')) {

    	@unlink($old_img);
    	$image = $request->file('image');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->resize(1920,400)->save('upload/secure_part/'.$name_gen);
    	$save_url = 'upload/secure_part/'.$name_gen;

	secure_part::findOrFail($secure_part_id)->update([
        'title'=> $request->title,
		'phone'=> $request->phone,
        'short_desc'=>$request->short_desc,
		'image' => $save_url,
    	]);

	    $notification = array(
			'message' => 'تم تحديث الداتا بنجاح',
			'alert-type' => 'info'
		);

		return redirect()->route('all.secure_part')->with($notification);

    	}else{

    	secure_part::findOrFail($secure_part_id)->update([
        'title'=> $request->title,
		'phone'=> $request->phone,
        'short_desc'=>$request->short_desc,
		
		 

    	]);

	    $notification = array(
			'message' => 'تم تحديث الداتا بنجاح',
			'alert-type' => 'info'
		);

		return redirect()->route('all.secure_part')->with($notification);

    	} // end else 
    } // end method 
}
