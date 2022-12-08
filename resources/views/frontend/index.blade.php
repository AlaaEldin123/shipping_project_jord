 
@extends('frontend.main_master')
@section('content')
@section('title')
الصفحة الرئيسية
@endsection

@php
$slider = App\Models\slider::latest()->first();
$aboutus = App\Models\AboutUs::latest()->first();
$settings = App\Models\Setting::latest()->first();
$services = App\Models\Services::latest()->get();
$secure_parts = App\Models\secure_part::latest()->first();
$Features = App\Models\Features::latest()->get();
$Blog = App\Models\Blog::latest()->get();

@endphp


 <div class="slider_area">
      <div class="single_slider d-flex align-items-center " style="background-image: url({{ asset($slider->image) }}) ">
       
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-xl-8">
              <div class="slider_text text-center justify-content-center">
                <p class="font_ar">{{$slider->name}}</p>
                <h3 class="font_ar">{{$slider->short_desc}}</h3>
                <a style="background:#E53335;" class="boxed-btn3 font_ar" href="service.html">خدماتنا</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- slider_area_end -->

    <div class="transportaion_area">
      <div class="container">
        <div class="row">

            @foreach($Features as $item)
          <div class="col-xl-4 col-lg-4 col-md-6">
            <div class="single_transport">
              <div class="icon">
                <img src="{{asset($item->image)}}" alt="" />
              </div>
              <h3  style="color: #E53335">{{$item->name}}</h3>
              <p >
                {{$item->short_desc}}
              </p>
            </div>
          </div>
        @endforeach

        
        </div>
      </div>
    </div>

    <div class="service_area">
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="section_title mb-50 text-center">
              <h3 class="font_ar"> خدماتنا</h3>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-12">
            <div class="service_active owl-carousel">

@foreach ($services as $item)
    
              <div class="single_service">
                <div class="thumb">
                  <img src="{{asset($item->image)}}" alt="" />
                </div>
                <div class="service_info">
                  <h3 ><a href="service_details.html" style="color: #E53335">{{$item->name}}</a></h3>
                  <p class="font_ar">{{$item->short_desc}}</p>
                </div>
              </div>

         @endforeach


            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- contact_action_area  -->
    <div class="contact_action_area" style="background-image: url({{ asset($secure_parts->image) }}) ">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xl-7 col-md-6">
            <div class="action_heading">
              <h3 >{{$secure_parts->title}}</h3>
              <p class="font_ar">
                {{$secure_parts->short_desc}}
              </p>
            </div>
          </div>
          <div class="col-xl-5 col-md-6">
            <div class="call_add_action">
              <a href="tel:{{$secure_parts->phone}}" style="background:#E53335" class="boxed-btn3">{{$secure_parts->phone}}</a>
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
              <div class="about_image" style="background: #E53335 ;">
                <img src="{{$aboutus->image}}" alt="" />
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
              <div class="features_info">
                <h3 class="font_ar">{{$aboutus->title}}</h3>
                <p class="font_ar">{{$aboutus->name}}
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
                  <a class="boxed-btn3-line font_ar" href="about.html" >من نحن</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ chose_area  -->
   
    <!-- contact_location  -->
    <div class="contact_location">
      <div class="container">
        <div class="row">
          <div class="col-xl-6 col-lg-6 col-md-6">
            <div class="location_left">
              <div class="logo">
                <a href="index.html">
                  <img style="width: 190px;height:50px;" src="{{$settings->logo}}" alt="" />
                </a>
              </div>
              <ul>
                @if ( $settings->facebook)

                <li>
                  <a target="_blank" href="{{$settings->facebook}}"> <i class="fa fa-facebook"></i> </a>
                </li>
                @endif
         @if($settings->linkedin)
         
                <li>
                  <a href="{{$settings->linkedin}}" target="_blank" > <i class="fa fa-linkedin"></i> </a>
                </li>
         @endif       

                  @if ($settings->twitter)
              <li>
                  <a href="{{$settings->twitter}}" target="_blank" > <i class="fa fa-twitter"></i> </a>
                </li>

                @endif

            @if($settings->youtube)
          <li>
                  <a href="{{$settings->youtube}}" target="_blank" > <i class="fa fa-youtube"></i> </a>
                </li>
      
      @endif
              </ul>
            </div>
          </div>
          <div class="col-xl-3 col-md-3">
            <div class="single_location">
              <h3><img src="{{asset('frontend/img/icon/address.png')}}" alt="" /> العنوان</h3>
              <p class="font_ar"> {{$settings->company_address}}</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-3">
            <div class="single_location">
              <h3 class="font_ar"><img src="{{asset('frontend/img/icon/support.png')}}" alt="" /> تواصل المباشر</h3>
              <p>
                {{$settings->phone_one}} <br />
                {{$settings->email}}
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection