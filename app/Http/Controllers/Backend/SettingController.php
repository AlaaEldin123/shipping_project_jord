<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Image;
class SettingController extends Controller
{
     public function SiteSetting(){

    	$setting = Setting::find(1);
    	return view('admin.setting.setting_update',compact('setting'));
    }


   public function SiteSettingUpdate(Request $request){
    	
    	$setting_id = $request->id;
    	 

    	if ($request->file('logo')) {

    	 
    	$image = $request->file('logo');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->save('upload/logo'.$name_gen);
    	$save_url = 'upload/logo'.$name_gen;

	Setting::findOrFail($setting_id)->update([
		'phone_one' => $request->phone_one,
		'phone_two' => $request->phone_two,
		'email' => $request->email,
		'company_name' => $request->company_name,
		'company_address' => $request->company_address,
		'facebook' => $request->facebook,
		'twitter' => $request->twitter,
		'linkedin' => $request->linkedin,
		'youtube' => $request->youtube,
		'logo' => $save_url,

    	]);

	    $notification = array(
			'message' => 'تم تحديث البيانات بنجاح',
			'alert-type' => 'info'
		);

		return redirect()->back()->with($notification);

    	}else{

    	Setting::findOrFail($setting_id)->update([
		'phone_one' => $request->phone_one,
		'phone_two' => $request->phone_two,
		'email' => $request->email,
		'company_name' => $request->company_name,
		'company_address' => $request->company_address,
		'facebook' => $request->facebook,
		'twitter' => $request->twitter,
		'linkedin' => $request->linkedin,
		'youtube' => $request->youtube,
		

    	]);

	    $notification = array(
			'message' => 'تم تحديث البيانات بنجاح',
			'alert-type' => 'info'
		);

		return redirect()->back()->with($notification);

    	} // end else 
    } // end method 



    // public function SeoSetting(){

    // 	$seo = Seo::find(1);
    // 	return view('admin.setting.seo_update',compact('seo'));
    // }
 

    // public function SeoSettingUpdate(Request $request){

    // 	$seo_id = $request->id;

    // 	Seo::findOrFail($seo_id)->update([
	// 	'meta_title' => $request->meta_title,
	// 	'meta_author' => $request->meta_author,
	// 	'meta_keyword' => $request->meta_keyword,
	// 	'meta_description' => $request->meta_description,
	// 	'google_analytics' => $request->google_analytics,		 

    // 	]);

	//     $notification = array(
	// 		'message' => 'Seo Updated Successfully',
	// 		'alert-type' => 'info'
	// 	);

	// 	return redirect()->back()->with($notification);

    // } // end mehtod 

}
