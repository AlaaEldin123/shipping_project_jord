@extends('admin.admin_master')
@section('admin')

    <!-- Vendors Style-->

    <!-- Begin Page Content -->
    <div class="container-fluid">

    <div class="box">
            <div class="box-header with-border">

                <h3 class="box-title"> قائمة المشتركين </h3>

            </div>


            <div class="col-xs-12">
              

                <div class="table-responsive">
                    <table id="example" class="table table-bordered table-hover display  margin-top-10 w-p100">
                        <thead>
                            <tr>
                                   <th style="width: 0%;">رقم تسلسلي </th>
                                 <th>الاسم  </th>
                                <th>ايميل</th>
                                <th style="width: 30%;">رسالة </th>
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
            <!-- /.box-body -->
        
    <div>
      

    </div>
    



  
@endsection
