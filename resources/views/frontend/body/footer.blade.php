 
@php


$services = App\Models\Services::take(4)->get();
$settings = App\Models\Setting::latest()->first();

@endphp
    <footer class="footer">
      <div class="footer_top">
        <div class="container">
          <div class="row">
            <div class="col-xl-3 col-md-6 col-lg-3">
              <div class="footer_widget">
                <div class="footer_logo">
                  <a href="route('home')">
                    <img style="width: 190px;height:50px;" src="{{url('/'.$settings->logo) }}" alt="" />
                  </a>
                </div>
                <p>
                  <a href="mailto:{{$settings->email}}">{{$settings->email}}</a> <br />
                  {{$settings->phone_one}}<br />
                  {{$settings->address}}
                </p>
                <div class="socail_links">
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
            </div>
            <div class="col-xl-2 col-md-6 col-lg-3">
              <div class="footer_widget">
                <h3 class="footer_title">خدماتنا</h3>
                <ul>
                  @foreach($services as $item)
                  <li><a href="">{{$item->name}}</a></li>

@endforeach
                </ul>
              </div>
            </div>
            <div class="col-xl-2 col-md-6 col-lg-2">
              <div class="footer_widget">
                <h3 class="footer_title">صفحات</h3>
                <ul>
                  <li><a href="{{route('servicespage')}}">خدماتنا</a></li>
                        <li><a href="{{route('aboutUs')}}">من نحن</a></li>
                        <li>
                          <a href="{{route('blog')}}">المقالات <i class=""></i></a>
                         
                        </li>
                        <li><a href="{{route('contact')}}">تواصل </a></li>
                </ul>
              </div>
            </div>
            <div class="col-xl-4 col-md-6 col-lg-4">
              <div class="footer_widget">
                <h3 class="footer_title">اشتراك</h3>
                <form action="{{route('user.sub.front')}}" class="newsletter_form">
                  <input type="email" name="email" placeholder="ادخل البريد الالكتروني" />
                  <button type="submit">اشتراك</button>
                </form>
                <p class="newsletter_text">
                  ارسل بريدك للاطلاع على كل جديد.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copy-right_text">
        <div class="container">
          <div class="footer_border"></div>
          <div class="row">
            <div class="col-xl-12">
              <p class="copy_right text-center">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;
                <script>
                  document.write(new Date().getFullYear());
                </script>
                All rights reserved | This template is made with
                <i class="fa fa-heart-o" aria-hidden="true"></i> by
                <a href="https://Marbrnd.com" target="_blank">Marbrnd</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    