 
@extends('frontend.main_master')
@section('content')
@section('title')
الخدمات
@endsection
    <!-- header-end -->
    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1">
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="bradcam_text text-center">
              <h3>خدماتنا</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ bradcam_area  -->
    <!-- service_area  -->
    <div class="service_area">
      <div class="container">
        <div class="row">


@foreach ($services as $item)
    
          <div class="col-md-6 col-lg-4">
            <div class="single_service">
              <div class="thumb">
                <img src="{{asset($item->image)}}" alt="" />
              </div>
              <div class="service_info">
                <h3><a href="service_details.html">{{$item->name}}</a></h3>
                <p>{{$item->short_desc}}</p>
              </div>
            </div>
          </div>
    @endforeach

        </div>
      </div>
    </div>
    <!--/ service_area  -->

    <!-- contact_action_area  -->
    <div class="contact_action_area"  style="background-image: url({{ asset($secure_parts->image) }}) ">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xl-7 col-md-6">
            <div class="action_heading">
              <h3>{{$secure_parts->title}}</h3>
              <p>
               {{$secure_parts->short_desc}}
              </p>
            </div>
          </div>
          <div class="col-xl-5 col-md-6">
            <div class="call_add_action">
              <a href="tel:{{$secure_parts->phone}}" class="boxed-btn3">{{$secure_parts->phone}}</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /contact_action_area  -->

    <!-- chose_area  -->
    <div class="chose_area">
      <div class="container">
        <div class="features_main_wrap">
          <div class="row align-items-center">
            <div class="col-xl-5 col-lg-5 col-md-6">
              <div class="about_image">
                <img src="{{asset($aboutus->image)}}" alt="" />
              </div>
            </div>
           <div class="col-xl-6 col-lg-6 col-md-6">
              <div class="features_info">
                <h3>{{$aboutus->title}}</h3>
                <p>{{$aboutus->name}}
                </p>
                <ul>
                                @php
                  $short_des= '';
                            $array_data=(array)json_decode($aboutus->short_desc);                          
                          foreach ($array_data as  $value) {
                           
                                   $short_des.= $value.', ';
                               
         
                          }

                            @endphp
@foreach((array) $array_data  as $key => $item)
@foreach((array) $item as $g)
  <li> {{$item}}</li>
       @endforeach    
             @endforeach    
                  

                <div class="about_btn">
                  <a class="boxed-btn3-line" href="about.html">حولنا</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ chose_area  -->

    <!-- counter_area  -->

    <!-- /counter_area  -->

    <!-- contact_location  -->

    <!-- contact_location  -->
      @include('frontend.body.contact_location')

    <!--/ contact_location  -->

    <!-- footer start -->
   

    @endsection