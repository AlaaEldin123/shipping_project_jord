<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\slider;
use Illuminate\Http\Request;
use Image;
class SliderController extends Controller
{
     public function Viewsliders(){
    $slider = slider::latest()->get();
 
    return view('admin.slider.slider_view',compact('slider'));
    }

   


    public function sliderEdit($id){
    	$slider = slider::findOrFail($id);
    	return view('admin.slider.slider_edit',compact('slider'));

    }


    public function sliderUpdate(Request $request){
    	$request->validate([
    		'name' => 'required',
    		'short_desc' => 'required',
    	
    	]);
    	$slider_id = $request->id;
    	$old_img = $request->old_image;

    	if ($request->file('image')) {

    	@unlink($old_img);
    	$image = $request->file('image');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->resize(300,300)->save('upload/slider/'.$name_gen);
    	$save_url = 'upload/slider/'.$name_gen;

	slider::findOrFail($slider_id)->update([
		 'name'=> $request->name,
        'short_desc'=>$request->short_desc,
		'image' => $save_url,
    	]);

	    $notification = array(
			'message' => 'slider Updated Successfully',
			'alert-type' => 'info'
		);

		return redirect()->route('all.slider')->with($notification);

    	}else{

    	slider::findOrFail($slider_id)->update([
		 'name'=> $request->name,
        'short_desc'=>$request->short_desc,
		 

    	]);

	    $notification = array(
			'message' => 'slider Updated Successfully',
			'alert-type' => 'info'
		);

		return redirect()->route('all.slider')->with($notification);

    	} // end else 
    } // end method 



   
}
