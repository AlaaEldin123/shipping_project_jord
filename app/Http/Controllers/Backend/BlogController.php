<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Image;
class BlogController extends Controller
{
    
      public function ViewBlog(){
    $blog = Blog::latest()->get();
 
    return view('admin.blog.blog_view',compact('blog'));
    }

   

    public function Createblog(){
    	return view('admin.blog.blog_add');

    }

    public function BlogEdit($id){
    	$blog = Blog::findOrFail($id);
    	return view('admin.blog.blog_edit',compact('blog'));

    }


 public function StoreBlog(Request $request){

    


       	$image = $request->file('image');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->resize(300,300)->save(public_path('upload/blog/'.$name_gen));
    	$save_url = 'upload/blog/'.$name_gen;
        Blog::insert([
        'title'=> $request->title,
		'date'=> $request->date,
        'short_desc'=>$request->short_desc,
		'image' => $save_url,

        ]);
        
        
        $notification = array(
			'message' => 'تم ادخال البيانات بنجاح',
			'alert-type' => 'success'
		);

		return redirect()->route('all.blog')->with($notification);
    }




    public function BlogUpdate(Request $request){
    	$blog_id = $request->id;
    	$old_img = $request->old_image;

    	if ($request->file('image')) {

    	@unlink($old_img);
    	$image = $request->file('image');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->resize(300,300)->save('upload/blog/'.$name_gen);
    	$save_url = 'upload/blog/'.$name_gen;

	    Blog::findOrFail($blog_id)->update([
        'title'=> $request->title,
		'date'=> $request->date,
        'short_desc'=>$request->short_desc,
		'image' => $save_url,
    	]);

	    $notification = array(
			'message' => 'تم تحديث الداتا بنجاح',
			'alert-type' => 'info'
		);

		return redirect()->route('all.blog')->with($notification);

    	}else{

    	Blog::findOrFail($blog_id)->update([
        'title'=> $request->title,
		'date'=> $request->date,
        'short_desc'=>$request->short_desc,
		
		 

    	]);

	    $notification = array(
			'message' => 'تم تحديث الداتا بنجاح',
			'alert-type' => 'info'
		);

		return redirect()->route('all.blog')->with($notification);

    	} // end else 
    } // end method 


	   public function blogDelete($id){

    	$Blog = Blog::findOrFail($id);
    	$img = $Blog->image;
    	unlink($img);

    	Blog::findOrFail($id)->delete();

    	 $notification = array(
			'message' => 'تم خدف البيانات بنجاح',
			'alert-type' => 'info'
		);

		return redirect()->route('all.blog')->with($notification);

    } // end method 
}
