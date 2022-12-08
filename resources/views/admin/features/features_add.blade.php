
@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">اضافة ميزة </h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      
        <div class="card-body">

                <div class="row">
                    <div class="col-md-12">

                        <form action="{{route('features.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class=" col-md-6">
                                    <div class="form-group">
                                        <strong>عنوان الميزة</strong>
                                        <input type="text" required name="name" class="form-control" placeholder="">
                                         @error('name') 
	 <span class="text-danger">{{ $message }}</span>
	 @enderror 
                                    </div>
                                </div>
                                <div class=" col-md-6">
                                    <div class="form-group">
                                        <strong>شرح قصير</strong>
                                        <input type="text" name="short_desc" required class="form-control" placeholder="">
                                                            @error('short_desc') 
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