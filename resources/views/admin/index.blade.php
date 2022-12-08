@extends('admin.admin_master')
@section('admin')

@php

	$clients =App\Models\client::latest()->get();
    $services = App\Models\Services::latest()->get();
    $Features = App\Models\Features::latest()->get();

@endphp
<div class="container-full">

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xl-6 col-6">
					<div class="box overflow-hidden pull-up">
						<div class="box-body">							
		<div class="icon bg-primary-light rounded w-60 h-60">
			<i class="text-primary mr-0 font-size-24 mdi mdi-account-multiple"></i>
		</div>
		<div>
			<p class="text-mute mt-20 mb-0 font-size-16">خدمات</p>
			<h3 class="text-white mb-0 font-weight-500"> <small class="text-success"><i class="fa fa-caret-up"></i> {{count($services)}}</small></h3>
		</div>
	</div>
</div>
</div>
<div class="col-xl-6 col-6">
<div class="box overflow-hidden pull-up">
	<div class="box-body">							
		<div class="icon bg-warning-light rounded w-60 h-60">
			<i class="text-warning mr-0 font-size-24 mdi mdi-car"></i>
		</div>
		<div>
			<p class="text-mute mt-20 mb-0 font-size-16">مميزات </p>
			<h3 class="text-white mb-0 font-weight-500"><small class="text-success"><i class="fa fa-caret-up"></i> {{count($Features)}}</small></h3>
		</div>
	</div>
</div>
</div>


    <div class="col-md-12">
              

                <div class="table-responsive">
                    <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                        <thead>
                            <tr>
                                   <th>رقم تسلسلي </th>
                                 <th>الاسم  </th>
                                <th>ايميل</th>
                                <th>رسالة </th>
                                <th>الموضوع </th>                          

                            </tr>
                        </thead>
                        <tbody>
                        <?php $i= 0?>   
                            @foreach ($clients as $item)

                          

                                <tr>
                                    <td>{{ $i +=1 }}</td>
                                    <td>{{ $item->name }}</td>
                                     <td>{{ $item->email }}</td>
                                    <td>{{ $item->message }}</td>
                                    
                                    <td>{{$item->subject}}</td>                                   
                                   

                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>                                   <th>رقم تسلسلي  </th>

                        <th>الاسم  </th>
                        
                                <th>ايميل</th>
                                <th>رسالو </th>
                                <th>الموضوع </th>                          


                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
				</thead>
			
		
   
	



					 
				</tbody>
			</table>
		</div>
	</div>

@endsection