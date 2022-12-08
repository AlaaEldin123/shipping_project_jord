@php
  $prefix = Request::route()->getPrefix();
  $route = Route::current()->getName();
 
@endphp




  <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">	
		
        <div class="user-profile">
			<div class="ulogo">
				 <a href="index.html">
				  <!-- logo for regular state and mobile devices -->
					 <div  class="d-flex align-items-center justify-content-center">					 	
						  <img style="max-width: 21%; margin-right: 85px;" src="{{ asset('backend/images/logo.png') }}" alt="">
						  <h3 class="font_ar " style="    margin-left: -77px;
"  >الأردنية<b style="padding: 8px">  للشحن </b>   </h3>
					 </div>
				</a>
			</div>
        </div>
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">  
		  
		<li class="">
          <a href="{{ url('admin/dashboard') }}">
            <i data-feather="pie-chart"></i>
			<span style="font-family: 'Barlow', sans-serif;">لوحة الرئيسية</span>
          </a>
        </li>  
        
      
{{-- ///////////////////////////////////////////// --}}

     <li class="treeview {{ ($prefix == '/alluser')?'active':'' }}  ">
          <a href="#"class="font_ar">
            <i data-feather="file"></i>
            <span class="font_ar">جميع الخدمات </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          
          <ul class="treeview-menu" class="font_ar">
        <li class="font_ar"><a href="{{route('all.services')}}" class="font_ar"><i class="ti-more font_ar" class=""></i>جميع الخدمات</a></li>

          </ul>
        </li>    
   
         <li class="treeview {{ ($prefix == '/alluser')?'active':'' }}  font_ar">
          <a href="#" class="font_ar">
            <i data-feather="file"></i>
            <span class="font_ar"> الميزات</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          
          <ul class="treeview-menu">
        <li class=""><a href="{{route('all.features')}}" class="font_ar"><i class="ti-more font_ar"></i> الميزات</a></li>

          </ul>
        </li>    


           <li class="treeview {{ ($prefix == '/alluser')?'active':'' }} font_ar ">
          <a href="#">
            <i data-feather="file"></i>
            <span class="font_ar"> السلايدر</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          
          <ul class="treeview-menu">
        <li class=""><a href="{{route('all.slider')}}" class="font_ar"><i class="ti-more font_ar" ></i> السلايدر</a></li>

          </ul>
        </li> 



 <li class="treeview {{ ($prefix == '/alluser')?'active':'' }}  font_ar">
          <a href="#">
            <i data-feather="file"></i>
            <span class="font_ar">من نحن </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          
          <ul class="treeview-menu">
        <li class=""><a href="{{route('all.aboutus')}}" class="font_ar"><i class="ti-more font_ar"></i>من نحن  </a></li>

          </ul>
        </li>    



 <li class="treeview {{ ($prefix == '/alluser')?'active':'' }}  font_ar">
          <a href="#">
            <i data-feather="file"></i>
            <span class="font_ar">دوافع</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          
          <ul class="treeview-menu">
        <li class=""><a href="{{route('all.secure_part')}}" class="font_ar"><i class="ti-more font_ar"></i>دوافع </a></li>

          </ul>
        </li>    




 <li class="treeview {{ ($prefix == '/alluser')?'active':'' }} font_ar ">
          <a href="#">
            <i data-feather="file"></i>
            <span class="font_ar">مقالات</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          
          <ul class="treeview-menu">
        <li class=""><a href="{{route('all.blog')}}" class="font_ar"><i class="ti-more font_ar"></i>مقالات </a></li>

          </ul>
        </li>    

<li class="treeview {{ ($prefix == '/C')?'active':'' }}  font_ar">
          <a href="#">
            <i data-feather="file"></i>
            <span class="font_ar">اعدادات الموقع</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
        <li class="{{ ($route == 'site.setting')? 'active':'' }}"><a href="{{ route('site.setting') }}" class="font_ar"><i class="ti-more font_ar"></i>اعدادات الموقع</a></li>

 
  
          </ul>
        </li>


        <li class="treeview {{ ($prefix == '/setting')?'active':'' }}  font_ar">
          <a href="#">
            <i data-feather="file"></i>
            <span class="font_ar"> المستخدمين</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
        <li class="{{ ($route == 'seo.setting')? 'active':'' }} font_ar"><a href="{{ route('user.sub') }} " class="font_ar"><i class="ti-more "></i>المستخدمين</a></li>

 
  
          </ul>
        </li>


      </ul>
    </section>
	
  </aside>