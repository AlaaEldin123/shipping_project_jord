<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Blog;
use App\Models\slider;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Services;
use App\Models\Features;
use App\Models\client;

use App\Models\secure_part;
use Spatie\FlareClient\View;

class FrontPageController extends Controller
{
    public function ServicesView(){
        $services = Services::latest()->get();
        $secure_parts = secure_part::latest()->first();
        $aboutus = AboutUs::latest()->first();
        $settings = Setting::latest()->first();

        return view('frontend.pages.services',compact('services','secure_parts','aboutus','settings'));

    }

    public function aboutusView()
    {
        $aboutus = AboutUs::latest()->first();
        $Features = Features::latest()->get();
        $secure_parts = secure_part::latest()->first();

        return view('frontend.pages.aboutus',compact('aboutus','Features','secure_parts'));
    }

    public function ViewBlog(){
        $Blog = Blog::latest()->get();
        return view('frontend.pages.blog',compact('Blog'));

    }

    public function ViewContact(){
        $settings = Setting::latest()->first();
                $services = Services::latest()->get();

        return view('frontend.pages.contect',compact('settings','services'));
 
    }





      public function ViewUser(){
     $clients = client::latest()->get();

    return view('admin.client.client_view',compact('clients'));
}


public function StoreUser(Request $request){

    Client::insert([
        'name' =>$request->name,
        'message' => $request->message,
        'email' =>$request->email,
        'subject'=>$request->subject,
       

    ]);

   
    return redirect()->route('home');

}

public function DeleteUser($id){

    Client::findorfail($id)->delete();
            $notification = array(
			'message' => 'تم مسح المستخدم بنجاح',
			'alert-type' => 'success'
		);

		return redirect()->back()->with($notification);
}

    public function ViewUserSub(){

$clients = client::latest()->get();
return view('admin.customer_subsc.customer_subs_view',compact('clients'));
}


public function ViewUserSubfront(Request $request){

     Client::insert([
        
        'email' =>$request->email,
        

    ]);
    return redirect()->route('home');

}
}
