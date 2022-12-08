 
@extends('frontend.main_master')
@section('content')
@section('title')
تواصل
@endsection




 <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1">
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="bradcam_text text-center">
              <h3>تواصل معنا</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ bradcam_area  -->

    <!-- ================ contact section start ================= -->
    <section class="contact-section">
      <div class="container">
        <div class=" d-sm-block mb-5 pb-4">
          <div
            id="map"
            style=" position: relative; overflow: hidden"
          >
         
          
<iframe  width="100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3010.6486681068495!2d28.9521925!3d41.0110624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cabb604e5340c7%3A0xe045547f27122b9b!2z2KfZhtiq2LHZhtin2LTZiNmG2KfZhCDZhNmE2LTYrdmGINin2YTYr9mI2YTZig!5e0!3m2!1sen!2str!4v1669933130040!5m2!1sen!2str" width="100%" height="500px" style="border:1;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

          <script>
            function initMap() {
              var uluru = {
                lat: -25.363,
                lng: 131.044,
              };
              var grayStyles = [
                {
                  featureType: "all",
                  stylers: [
                    {
                      saturation: -90,
                    },
                    {
                      lightness: 50,
                    },
                  ],
                },
                {
                  elementType: "labels.text.fill",
                  stylers: [
                    {
                      color: "#ccdee9",
                    },
                  ],
                },
              ];
              var map = new google.maps.Map(document.getElementById("map"), {
                center: {
                  lat: -31.197,
                  lng: 150.744,
                },
                zoom: 9,
                styles: grayStyles,
                scrollwheel: false,
              });
            }
          </script>
        </div>

        <div class="row">
          <div class="col-12">
            <h2 class="contact-title">تواصل </h2>
          </div>
          <div class="col-lg-8">
            <form
              class="form-contact contact_form"
              action="{{route('user.store')}}"
              method="post"
            >

            @csrf
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <textarea
                      class="form-control w-100"
                      name="message"
                      required
                      id="message"
                      cols="30"
                      rows="9"
                      onfocus="this.placeholder = ''"
                      onblur="this.placeholder = 'ادخل رسالة'"
                      placeholder=" رسالة"
                    ></textarea>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input
                    required
                      class="form-control valid"
                      name="name"
                      id="name"
                      type="text"
                      onfocus="this.placeholder = ''"
                      onblur="this.placeholder = 'ادخل الاسم'"
                      placeholder="ادخل الاسم"
                    />
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input
                    required
                      class="form-control valid"
                      name="email"
                      id="email"
                      type="email"
                      onfocus="this.placeholder = ''"
                      onblur="this.placeholder = 'البريد الالكتروني'"
                      placeholder="البريد"
                    />
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <input
                    required
                      class="form-control"
                      name="subject"
                      id="subject"
                      type="text"
                      onfocus="this.placeholder = ''"
                      onblur="this.placeholder = 'ادخل الموضوع'"
                      placeholder="ادخل الموضوع"
                    />
                  </div>
                </div>
              </div>
              <div class="form-group mt-3">
               <button
                  type="submit" 
                  class="button button-contactForm boxed-btn"
                >
                  ارسال
                </button>
              
              </div>
            </form>
          </div>
          <div class="col-lg-3 offset-lg-1">
            <div class="media contact-info">
              <span class="contact-info__icon"><i class="ti-home"></i></span>
              <div class="media-body">
                <h3>{{$settings->company_address}}</h3>
              </div>
            </div>
            <div class="media contact-info">
              <span class="contact-info__icon"><i class="ti-tablet"></i></span>
              <div class="media-body">

                <h3><a href="tel:{{$settings->phone_one}}"> {{$settings->phone_one}}</a></h3>
                <p><a href="tel:{{$settings->phone_two}}">{{$settings->phone_two}}</a></p>
              </div>
            </div>
            <div class="media contact-info">
              <span class="contact-info__icon"><i class="ti-email"></i></span>
              <div class="media-body">
                <h3><a href="mailto:{{$settings->email}}"> {{$settings->email}}</a></h3>
                <p>تواصل معنا في اي وقت</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ================ contact section end ================= -->

    <!-- footer start -->
    <!--/ footer end  -->
    <!-- Modal -->
  


    @endsection