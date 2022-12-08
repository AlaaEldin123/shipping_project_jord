
@extends('admin.admin_master')
@section('admin')

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">  
<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">دوافع</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> تعديل دوافع   </h6>
        </div>
        <div class="card-body">



               

               

                <div class="row">
                    <div class="col-md-12">

                       
                        <form action="{{route('secure_part.update')}}" method="POST" enctype="multipart/form-data">
                            @csrf
 <input type="hidden" name="id" value="{{ $secure_part->id }}">	
	 <input type="hidden" name="old_image" value="{{ $secure_part->image }}">
                            <div class="row">




 <div class=" col-md-6">
                                    <div class="form-group">
                                        <strong>عنوان </strong>
                                        <input type="text" value="{{$secure_part->title}}" required name="title" class="form-control" placeholder="">
                                         @error('title') 
	 <span class="text-danger">{{ $message }}</span>
	 @enderror 
                                    </div>
                                </div>

                                <div class=" col-md-6">
                                    <div class="form-group">
                                        <strong>شرح قصير</strong>
                                        <input type="text" value="{{$secure_part->short_desc}}" required name="short_desc" class="form-control" placeholder="">
                                         @error('shore_desc') 
	 <span class="text-danger">{{ $message }}</span>
	 @enderror 
                                    </div>
                                </div>
                              
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>الهاتف </strong>
 <input type="number" name="phone" class="form-control"  required="" >                            
 
     @error('phone') 
	 <span class="text-danger">{{ $message }}</span>
	 @enderror 

      <img src="" id="mainThmb">
	 		 </div>
                                </div>
                               
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <strong>صورة (1920X400 )</strong>
 <input type="file" name="image" class="form-control" onChange="mainThamUrl(this)" required="" >                            
 
     @error('image') 
	 <span class="text-danger">{{ $message }}</span>
	 @enderror 

      <img src="" id="mainThmb">
	 		 </div>
                                </div>
                                




                                <div class="col-md-6 text-right">
                                    <input type="submit" class="btn btn-primary">
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