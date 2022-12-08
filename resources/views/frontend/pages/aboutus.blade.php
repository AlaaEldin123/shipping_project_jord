 
@extends('frontend.main_master')
@section('content')
@section('title')
حولنا
@endsection

    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1">
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="bradcam_text text-center">
              <h3>حولنا</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ bradcam_area  -->

    <!-- chose_area  -->
     <div class="chose_area">
      <div class="container">
        <div class="features_main_wrap">
          <div class="row align-items-center">
            <div class="col-xl-5 col-lg-5 col-md-6">
              <div class="about_image">
                <img src="{{$aboutus->image}}" alt="" />
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
              <div class="features_info">
                <h3 >{{$aboutus->title}}</h3>
                <p>{{$aboutus->name}}
                </p>
                <ul>
                  <li>adsf adsf asd</li>
                  

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

    <!-- contact_action_area  -->
    <div class="contact_action_area" style="background-image: url({{ asset($secure_parts->image) }}) ">
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

   
    <div class="transportaion_area">
      <div class="container">
        <div class="row">

            @foreach($Features as $item)
          <div class="col-xl-4 col-lg-4 col-md-6">
            <div class="single_transport">
              <div class="icon">
                <img src="{{asset($item->image)}}" alt="" />
              </div>
              <h3>{{$item->name}}</h3>
              <p>
                {{$item->short_desc}}
              </p>
            </div>
          </div>
        @endforeach

        
        </div>
      </div>
    </div>

    <!-- contact_location  -->
    @include('frontend.body.contact_location')
    <!--/ contact_location  -->

    <!-- footer start -->
@endsection