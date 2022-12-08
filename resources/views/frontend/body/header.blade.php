 
 @php
$settings = App\Models\Setting::latest()->first();


@endphp

 <header>
      <div class="header-area">
        <div class="header-top_area d-none d-lg-block">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-xl-4 col-lg-4">
                <div class="logo">
                  <a href="{{url('/')}}">
                    <img style="width: 190px;height:50px;" src="{{asset($settings->logo)}}" alt="" />
                  </a>
                </div>
              </div>
              <div class="col-xl-8 col-md-8">
                <div class="header_right d-flex align-items-center">
                  <div class="short_contact_list">
                    <ul>
                      <li>
                        <a  href="mailto:{{$settings->email}}">
                          <i  class="fa fa-envelope"></i> {{$settings->email}}</a
                        >
                      </li>
                      <li>
                        <a  href="tel: {{$settings->phone_one}}">
                          <i class="fa fa-phone"></i> {{$settings->phone_one}}</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="sticky-header" class="main-header-area">
          <div class="container ">
            <div class="header_bottom_border">
                <div class="col-12 d-block d-lg-none">
                  <div class="logo">
                    <a href="{{url('/')}}">
                        <img src="{{url('/'.$settings->logo) }}" width="40%" alt="" />
                    </a>
                  </div>
                </div>
                <div class="col-xl-9 col-lg-9 "  >
                  <div class="main-menu d-none d-lg-block  "  >
                    <nav >
                      <ul id="navigation" >
                        <li ><a  style="  font-weight: 600;  font-size: 20px;" href="{{route('home')}}">الرئيسية</a></li>
                        <li ><a  style="  font-weight: 600;  font-size: 20px;" href="{{route('servicespage')}}">خدماتنا</a></li>
                        <li ><a  style="  font-weight: 600;  font-size: 20px;" href="{{route('aboutUs')}}">من نحن </a></li>
                        <li >
                          <a  style="  font-weight: 600; ; font-size: 20px;" href="{{route('blog')}}">المقالات <i class=""></i></a>
                         
                        </li>
                        <li ><a  style="  font-weight: 600;  ;font-size: 20px;" href="{{route('contact')}}">تواصل </a></li>
                      </ul>
                    </nav>
                  </div>
                </div>

                <div class="col-12">
                  <div class="mobile_menu d-block d-lg-none"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>