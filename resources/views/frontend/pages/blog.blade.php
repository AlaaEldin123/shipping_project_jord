 
@extends('frontend.main_master')
@section('content')
@section('title')
بلوغ
@endsection


    <div class="bradcam_area bradcam_bg_1">
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="bradcam_text text-center">
              <h3>بلوغ</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ bradcam_area  -->

    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mb-5 mb-lg-0">
            <div class="blog_left_sidebar">

                @foreach($Blog as $item)
              <article class="blog_item">
                <div class="blog_item_img">
                  <img
                    class="card-img rounded-0"
                    src="{{$item->image}}"
                    alt=""
                  />
                  <a href="#" class="blog_item_date">
                
                    <p>{{ $item->date}}</p>
                  </a>
                </div>

                <div class="blog_details">
                  <a class="d-inline-block" href="single-blog.html">
                    <h2>Google inks pact for new 35-storey office</h2>
                  </a>
                  <p>
                    That dominion stars lights dominion divide years for fourth
                    have don't stars is that he earth it first without heaven in
                    place seed it second morning saying.
                  </p>
                </div>
              </article>
@endforeach
            

              <nav class="blog-pagination justify-content-center d-flex">
                <ul class="pagination">
                  <li class="page-item">
                    <a href="#" class="page-link" aria-label="Previous">
                      <i class="ti-angle-left"></i>
                    </a>
                  </li>
                  <li class="page-item">
                    <a href="#" class="page-link">1</a>
                  </li>
                  <li class="page-item active">
                    <a href="#" class="page-link">2</a>
                  </li>
                  <li class="page-item">
                    <a href="#" class="page-link" aria-label="Next">
                      <i class="ti-angle-right"></i>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>

    @endsection