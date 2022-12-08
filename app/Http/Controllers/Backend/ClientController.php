<?php

namespace App\Http\Controllers\Bcakend;

use App\Http\Controllers\Controller;
use App\Models\client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function ViewUser(){
     $clients = client::latest()->get();

    return view('admin.client.client_view',compact('clients'));
}


public function StoreUser(Request $request){

    Client::insert([
        'name' =>$request->name,
        'address' => $request->address,
        'phone' =>$request->phone,
        'type'=>$request->type,
       

    ]);
    $notification = array(
			'message' => 'تم اضافة مستخدم بنجاح',
			'alert-type' => 'success'
		);
    return redirect()->route('all.user')->with($notification);;

}

public function DeleteUser($id){

    Client::findorfail($id)->delete();
            $notification = array(
			'message' => 'تم مسح المستخدم بنجاح',
			'alert-type' => 'success'
		);

		return redirect()->back()->with($notification);
}



}
