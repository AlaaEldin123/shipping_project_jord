<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Services;
use Image;
class ServicesController extends Controller
{
    public function ViewServoces(){
    $services = Services::latest()->get();
    return view('admin.services.service_view',compact('services'));
    }

    public function CreateServoces(){
        return view('admin.services.service_add');
    }

    public function Storeservice(Request $request){

      $request->validate([
    		'name' => 'required',
    		'short_desc' => 'required',
    		
    	]);

       	$image = $request->file('image');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->resize(362,258)->save(public_path('upload/services/'.$name_gen));
    	$save_url = 'upload/services/'.$name_gen;
        Services::insert([
        'name'=> $request->name,
        'short_desc'=>$request->short_desc,
        'long_desc'=>$request->long_desc,
        'image'=>$save_url,

        ]);
        
        
        $notification = array(
			'message' => 'تم ادخال البيانات بنجاح',
			'alert-type' => 'success'
		);

		return redirect()->route('all.services')->with($notification);
    }


    public function ServicesEdit($id){
    	$service = Services::findOrFail($id);
    	return view('admin.services.service_edit',compact('service'));

    }


    public function ServicesUpdate(Request $request){
    	$request->validate([
    		'name' => 'required',
    		'short_desc' => 'required',
    		
    	]);
    	$service_id = $request->id;
    	$old_img = $request->old_image;

    	if ($request->file('image')) {

    	@unlink($old_img);
    	$image = $request->file('image');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->resize(362,258)->save('upload/services/'.$name_gen);
    	$save_url = 'upload/services/'.$name_gen;

	Services::findOrFail($service_id)->update([
		 'name'=> $request->name,
        'short_desc'=>$request->short_desc,
        'long_desc'=>$request->long_desc,
		'image' => $save_url,
    	]);

	    $notification = array(
			'message' => 'تم تحديث البيانات بنجاح',
			'alert-type' => 'info'
		);

		return redirect()->route('all.services')->with($notification);

    	}else{

    	Services::findOrFail($service_id)->update([
		 'name'=> $request->name,
        'short_desc'=>$request->short_desc,
        'long_desc'=>$request->long_desc,
		 

    	]);

	    $notification = array(
			'message' => 'تم تحديث البيانات بنجاح',
			'alert-type' => 'info'
		);

		return redirect()->route('all.services')->with($notification);

    	} // end else 
    } // end method 



    public function ServicesDelete($id){

    	$service = Services::findOrFail($id);
    	$img = $service->image;
    	unlink($img);

    	Services::findOrFail($id)->delete();

    	 $notification = array(
			'message' => 'تم خذف البيانات بنجاح',
			'alert-type' => 'info'
		);

		return redirect()->route('all.services')->with($notification);

    } // end method 



}
