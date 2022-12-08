<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Image;
class AboutUsController extends Controller
{
     public function Viewaboutus(){
    $AboutUs = AboutUs::latest()->get();
    return view('admin.aboutus.aboutus_view',compact('AboutUs'));
    }

   


    public function AboutUsEdit($id){
    	$AboutUs = AboutUs::findOrFail($id);
    	return view('admin.aboutus.aboutus_edit',compact('AboutUs'));

    }


    public function AboutUsUpdate(Request $request){

    	


    	$AboutUs_id = $request->id;
    	$old_img = $request->old_image;

    	if ($request->file('image')) {

    	@unlink($old_img);
    	$image = $request->file('image');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->save('upload/aboutUs/'.$name_gen);
    	$save_url = 'upload/aboutUs/'.$name_gen;

	    AboutUs::findOrFail($AboutUs_id)->update([
        'title'=> $request->title,
		'name'=> $request->name,
        'short_desc' => json_encode($request->short_desc),

		'image' => $save_url,
'created_at'=>Carbon::now(),
    	]);

	    $notification = array(
			'message' => 'تم تحديث البيانات بنجاح',
			'alert-type' => 'info'
		);

		return redirect()->route('all.aboutus')->with($notification);

    	}else{

    	AboutUs::findOrFail($AboutUs_id)->update([
        'title'=> $request->title,
		'name'=> $request->name,
        'short_desc'=>$request->short_desc,
		 

    	]);

	    $notification = array(
			'message' => 'تم تحديث البيانات بنجاح',
			'alert-type' => 'info'
		);

		return redirect()->route('all.aboutus')->with($notification);

    	} // end else 
    } // end method 


}
