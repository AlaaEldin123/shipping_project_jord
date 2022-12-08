
@php

$settings = App\Models\Setting::latest()->first();

@endphp
    <div class="contact_location">
      <div class="container">
        <div class="row">
          <div class="col-xl-6 col-lg-6 col-md-6">
            <div class="location_left">
              <div class="logo">
                <a href="index.html">
                  <img style="width: 190px;height:50px;" src="{{url('/'.$settings->logo) }}" alt="" />
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
              <p>{{$settings->company_address}}</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-3">
            <div class="single_location">
              <h3><img src="{{asset('frontend/img/icon/support.png')}}" alt="" /> تواصل المباشر</h3>
              <p>
                {{$settings->phone_one}} <br />
                {{$settings->email}}
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>