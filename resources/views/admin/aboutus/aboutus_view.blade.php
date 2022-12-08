@extends('admin.admin_master')
@section('admin')

    <!-- Vendors Style-->

    <!-- Begin Page Content -->
    <div class="container-fluid">


    <div>
        <div class="box">
            <div class="box-header with-border">

                <h3 class="box-title">قائمة حولنا</h3>

            </div>


            <div class="col-xs-12">
              

                <div class="table-responsive">
                    <table id="example" class="table table-bordered table-hover display  margin-top-10 w-p100">
                        <thead>
                            <tr>
                                <th style="width: 0%;">رقم تسلسلي</th>
                                 <th>عنوان  </th>
                                <th style="width: 40%;">شرح قصير</th>
                                <th>صورة </th>
                                <th> مميزات </th>                          
                                <th>اكشن</th>

                            </tr>
                        </thead>
                        <tbody>
                        <?php $i= 0?>   
                            @foreach ($AboutUs as $item)

                            @php
$short_des= '';
                            $array_data=(array)json_decode($item->short_desc);                          
                          foreach ($array_data as  $value) {
                           
                                   $short_des.= $value.', ';
                               
         
                          }

                            @endphp

                                <tr>
                                    <td>{{ $i =+1 }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td> <img src="{{ asset($item->image) }}" style="width: 70px; height: 40px;"> </td>
                                    <td>   
 {{ $short_des}}</td>                                   
                                    <td>
                                        <a href="{{route('aboutus.edit',$item->id)}}" class="btn btn-info"
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
                                <th> مميزات </th>                          
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
