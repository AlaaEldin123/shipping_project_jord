
@extends('admin.admin_master')
@section('admin')

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">  
<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">تعديل من نحن  </h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> تعديل من نحن    </h6>
        </div>
        <div class="card-body">



               

               

                <div class="row">
                    <div class="col-md-12">

                       
                        <form action="{{route('aboutus.update')}}" method="POST" enctype="multipart/form-data">
                            @csrf
 <input type="hidden" name="id" value="{{ $AboutUs->id }}">	
	 <input type="hidden" name="old_image" value="{{ $AboutUs->image }}">
                            <div class="row">




 <div class=" col-md-6">
                                    <div class="form-group">
                                        <strong>  عنوان الميزة</strong>
                                        <input type="text" value="{{$AboutUs->title}}" required name="title" class="form-control" placeholder="">
                                         @error('title') 
	 <span class="text-danger">{{ $message }}</span>
	 @enderror 
                                    </div>
                                </div>

                                <div class=" col-md-6">
                                    <div class="form-group">
                                        <strong> الميزة</strong>
                                        <input type="text" value="{{$AboutUs->name}}" required name="name" class="form-control" placeholder="">
                                         @error('name') 
	 <span class="text-danger">{{ $message }}</span>
	 @enderror 
                                    </div>
                                </div>
                              
                               
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>صورة الميزة</strong>
 <input type="file" name="image" class="form-control" onChange="mainThamUrl(this)" required="" >                            
 
     @error('image') 
	 <span class="text-danger">{{ $message }}</span>
	 @enderror 

      <img src="" id="mainThmb">
	 		 </div>
                                </div>
                                

      @php
$short_des= '';
                            $array_data=(array)json_decode($AboutUs->short_desc);                          
                          foreach ($array_data as  $value) {
                           
                                   $short_des.= $value.', ';
                               
         
                          }

                            @endphp

                                
<div class="col-md-6">
     <strong> المميزات</strong>
     <div class="input-group control-group after-add-more">  
          <input type="text" name="short_desc[]" class="form-control" >  
          <div class="input-group-btn">   
            <a class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> اضافة</a>  
          </div>  
     </div>  

        <div class="copy hide">  
          <div class="control-group input-group" style="margin-top:10px">  
            <input type="text"  name="short_desc[]" class="form-control" >  
            <div class="input-group-btn">   
              <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> مسح</button>  
            </div>  
        </div>  

</div>



                                <div class="col-md-6 text-center " style="margin-top: 24px;">
                                    <input  type="submit" class="btn btn-primary">
                                </div>
                            </div>

                        </form>
                        
                    </div>
                </div>

        </div>
    </div>

</div>
<!-- /.container-fluid -->
<script type="text/javascript">  
  
    $(document).ready(function() {  
  
      $(".add-more").click(function(){   
          var html = $(".copy").html();  
          $(".after-add-more").after(html);  
      });  
  
      $("body").on("click",".remove",function(){   
          $(this).parents(".control-group").remove();  
      });  
  
    });  
  
</script>  

<script type="text/javascript">
	function mainThamUrl(input){
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e){
				$('#mainThmb').attr('src',e.target.result).width(100).height(100);
			};
			reader.readAsDataURL(input.files[0]);
		}
	}	
</script>


@endsection