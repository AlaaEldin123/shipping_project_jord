@extends('admin.admin_master')
@section('admin')

    <!-- Vendors Style-->

    <!-- Begin Page Content -->
    <div class="container-fluid">


    <div>
        <div class="box">
            <div class="box-header with-border">

                <h3 class="box-title">قائمة الخدمات</h3>

            </div>


            <div class="col-xs-12">
                <div class="box-body">
                    <a href="{{route('create.service')}}" class="btn btn-primary">انشاء خدمة</a>
                </div>

                <div class="table-responsive">
                    <table id="example" class="table table-bordered table-hover display  margin-top-10 w-p100">
                        <thead>
                            <tr>
                                <th  style="width: 0%;">رقم تسلسلي</th>
                                <th>صورة الخدمة</th>
                                <th>عنوان الخدمة</th>
                                <th   >شرح قصير</th>
                                <th  style="width: 40%;">شرح طويل</th>             
                                <th  style="width: 14%;">اكشن</th>

                            </tr>
                        </thead>
                        <tbody>
<?php $i= 0?>   
                            @foreach ($services as $item)
                                <tr>
                                    <td>{{ $i =+1 }}</td>
                                      <td> <img src="{{ asset($item->image ) }}"
 style="height: 100px; width: 150px;"></td>
                                    <td>{{ $item->name }}</td>
                                  
                                    <td>{{ $item->short_desc }}</td>
                                    <td>{{ $item->long_desc }}</td>                                                                  
                                    <td>
                                        <a href="{{route('service.edit',$item->id)}}" class="btn btn-info"
                                            title="Edit Data"><i class="fa fa-pencil"></i> </a>
                                        <a href="{{route('service.delete',$item->id)}}" class="btn btn-danger"
                                            title="Delete Data" id="delete">
                                            <i class="fa fa-trash"></i></a>
                                    </td>


                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                                                <th>رقم تسلسلي</th>

 <th>صورة الخدمة</th>
                                <th>عنوان الخدمة</th>
                                <th>شرح قصير</th>
                                <th>شرح طويل</th>             
                                <th>اكشن</th>


                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <!-- /.box-body -->
        </div>

    </div>
    



  
@endsection
