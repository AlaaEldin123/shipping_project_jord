<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Features;
use Illuminate\Http\Request;
use Image;
class FeaturesController extends Controller
{
    public function Viewfeatures(){
    $features = Features::latest()->get();
 
    return view('admin.features.features_view',compact('features'));
    }

    public function Createfeatures(){
        return view('admin.features.features_add');
    }

    public function Storefeatures(Request $request){

      $request->validate([
    		'name' => 'required',
    		'short_desc' => 'required',
    	
    	]);


       	$image = $request->file('image');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->resize(50,50)->save(public_path('upload/features/'.$name_gen));
    	$save_url = 'upload/features/'.$name_gen;
        Features::insert([
        'name'=> $request->name,
        'short_desc'=>$request->short_desc,
        'image'=>$save_url,

        ]);
        
        
        $notification = array(
			'message' => 'تم ادخال البيانات بنجاح',
			'alert-type' => 'success'
		);

		return redirect()->route('all.features')->with($notification);
    }


    public function featuresEdit($id){
    	$features = Features::findOrFail($id);
    	return view('admin.features.features_edit',compact('features'));

    }


    public function featuresUpdate(Request $request){
    	$request->validate([
    		'name' => 'required',
    		'short_desc' => 'required',
    	
    	]);
		
    	$features_id = $request->id;
    	$old_img = $request->old_image;

    	if ($request->file('image')) {

    	@unlink($old_img);
    	$image = $request->file('image');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->resize(50,50)->save('upload/features/'.$name_gen);
    	$save_url = 'upload/features/'.$name_gen;

	Features::findOrFail($features_id)->update([
		 'name'=> $request->name,
        'short_desc'=>$request->short_desc,
		'image' => $save_url,
    	]);

	    $notification = array(
			'message' => 'تم تحديث البيانات بنجاح',
			'alert-type' => 'info'
		);

		return redirect()->route('all.features')->with($notification);

    	}else{

    	Features::findOrFail($features_id)->update([
		 'name'=> $request->name,
        'short_desc'=>$request->short_desc,
		 

    	]);

	    $notification = array(
			'message' => 'تم تحديث البيانات بنجاح',
			'alert-type' => 'info'
		);

		return redirect()->route('all.features')->with($notification);

    	} // end else 
    } // end method 



    public function featuresDelete($id){

    	$features = Features::findOrFail($id);
    	$img = $features->image;
    	unlink($img);

    	Features::findOrFail($id)->delete();

    	 $notification = array(
			'message' => 'تم خدف البيانات بنجاح',
			'alert-type' => 'info'
		);

		return redirect()->route('all.features')->with($notification);

    } // end method 


}
