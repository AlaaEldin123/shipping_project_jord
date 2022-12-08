@extends('admin.admin_master')
@section('admin')

    <!-- Vendors Style-->

    <!-- Begin Page Content -->
    <div class="container-fluid">


    <div>
        <div class="box">
            <div class="box-header with-border">

                <h3 class="box-title">قائمة </h3>

            </div>


            <div class="col-xs-12">
              

                <div class="table-responsive">
                    <table id="example" class="table table-bordered table-hover display  margin-top-10 w-p100">
                        <thead>
                            <tr>
                                <th style="width: 0%">رقم تسلسلي</th>
                                 <th>عنوان  </th>
                                <th  style="width: 30%;">شرح قصير</th>
                                <th>صورة </th>
                                <th> رقم </th>                          
                                <th>اكشن</th>

                            </tr>
                        </thead>
                        <tbody>
                        <?php $i= 0?>   
                            @foreach ($secure_part as $item)

                       

                                <tr>
                                    <td>{{ $i =+1 }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->short_desc }}</td>
                                    <td> <img src="{{ asset($item->image) }}" style="width: 70px; height: 40px;"> </td>
                                    <td>{{$item->phone}}</td>                                   
                                    <td>
                                        <a href="{{route('secure_part.edit',$item->id)}}" class="btn btn-info"
                                            title="Edit Data"><i class="fa fa-pencil"></i> </a>
                                       
                                    </td>


                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                       <th>رقم تسلسلي</th>
                                 <th>عنوان  </th>
                                <th>شرح قصير</th>
                                <th>صورة </th>
                                <th> رقم </th>                          
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
