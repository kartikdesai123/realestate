@php

$currentRoute = Route::current()->getName();
      if (!empty(Auth()->guard('users')->user())) {
         $data = Auth()->guard('users')->user();
      }
      if (!empty(Auth()->guard('agent')->user())) {
         $data = Auth()->guard('agent')->user();
      }
      if (!empty(Auth()->guard('agency')->user())) {
         $data = Auth()->guard('agency')->user();
      }
      if (!empty(Auth()->guard('company')->user())) {
         $data = Auth()->guard('company')->user();
      }

      $getHeaderSlider = getHeaderSlider();

@endphp
         @if($currentRoute == "home")
            <header class="header header-transparent">
              <div class="logo-wrap">
              <img class="img-fluid" src="{{ asset('public/frontend/assets/images/logo_tus.png') }}" alt="logo" style="max-width: 150px;">
             </div> 
         @else
            <header class="header header-transparent">
             <div class="logo-wrap">
              <img class="img-fluid" src="{{ asset('public/frontend/assets/images/logo_tus.png') }}" alt="logo" style="max-width: 150px;">
             </div>  
         @endif
         <div class="nav_bar_wrapper">
         <div class="topbar">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                  <div class= "d-flex align-items-center text-center margquee_tag">
                 <!--     <div class="col-2">
                        <div class="mr-3 d-inline-block">
                           <a href="tel:1-800-555-1234">
                              <i class="fa fa-phone mr-2 fa fa-flip-horizontal"></i>1-800-555-1234 
                           </a>
                     </div>
                     </div> -->
                     <div class="col-9">
                        @if(count($getHeaderSlider) > 0)
                           <marquee behavior="scroll" direction="right" style="color: #ffffff;font-family: 'BalooChettan2-Bold';font-size: 20px;">{{ $getHeaderSlider[0]->text }}</marquee>
                        @endif
                        
                     </div>
                     <div class="col-3 " style="text-align: right">
                        <div class="dropdown d-inline-block pl-2 pl-md-0">

                              <a class="dropdown-toggle" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 Choose Language<i class="fas fa-chevron-down pl-2"></i>
                              </a>

                              <div class="dropdown-menu mt-0" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="{{ route("language",'en')}}">English</a>
                                    <a class="dropdown-item" href="{{ route("language",'fr')}}">Freanch</a>
                                    <a class="dropdown-item" href="{{ route("language",'sp')}}">Spenish</a>
                                    <a class="dropdown-item" href="{{ route("language",'it')}}">Italian</a>
                              </div>
                        </div>
                    
                    
                        @if(isset($data))
                           <div class="dropdown d-inline-block pl-2 pl-md-0">
                              <a class="dropdown-toggle" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 {{ $data['username'] }} <i class="fas fa-chevron-down pl-2"></i>
                              </a>
                              <div class="dropdown-menu mt-0" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="{{ route("my-profile")}}">{{ trans('home.myprofile') }}</a>
                                    <a class="dropdown-item" href="{{ route('user-logout') }}">{{ trans('home.logout') }}</a>
                              </div>
                        </div>
                        @else
                           <div class="login d-inline-block">
                              <a  href="{{ route('signin') }}">  {{ trans('home.signin') }} <i class="fa fa-user pl-2"></i></a>
                           </div>
                        @endif
                     </div>
                        
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
           @if($currentRoute == "home")
               <nav class="navbar navbar-dark navbar-static-top navbar-expand-lg header-sticky">
           @else
               <nav class="navbar navbar-light bg-white navbar-static-top navbar-expand-lg header-sticky">
           @endif
        
               <div class="container-fluid">
                  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse">☰</button>
                  <a class="navbar-brand" href="{{ route('home') }}">
                     @if($currentRoute == "home")
                        <img class="img-fluid" src="{{ asset('public/frontend/assets/images/logo_tus_w.png') }}" alt="logo">
                     @else
                        <img class="img-fluid" src="{{ asset('public/frontend/assets/images/logo_tus.png') }}" alt="logo">
                     @endif
                  
                  </a>
                  <div class="navbar-collapse collapse">
                     <ul class="nav navbar-nav">
                       
                        <li class="nav-item dropdown text-center  {{ $currentRoute == "home" ? "active": ""}}">
                           <a class="nav-link" href="{{ route('home') }}"   aria-haspopup="true" aria-expanded="false">
                              {{ trans('home.home') }}
                           </a>
                        </li>

                        <li class="nav-item dropdown text-center  {{ $currentRoute == "services" ? "active": ""}}  ">
                           <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              {{ trans('home.about') }}<i class="fas fa-chevron-down fa-xs"></i>
                           </a>
                           <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                             <li class="{{ $currentRoute == "services" ? "active": ""}}"><a class="dropdown-item" href="{{ route('services') }}" >{{ trans('home.services') }}</a></li>
                             <li class="{{ $currentRoute == "about-us" ? "active": ""}}"><a class="dropdown-item" href="{{ route('about-us') }}" >{{ trans('home.aboutus') }}</a></li>
                             <li class="{{ $currentRoute == "servicess" ? "active": ""}}"><a class="dropdown-item" href="{{ route('services') }}" >{{ trans('home.work') }}</a></li>
                             <li class="{{ $currentRoute == "servicess" ? "active": ""}}"><a class="dropdown-item" href="{{ route('services') }}" >{{ trans('home.useit') }}</a></li>
                             <li class="{{ $currentRoute == "faq" ? "active": ""}}"><a class="dropdown-item" href="{{ route('faq') }}" >{{ trans('home.faqs') }}</a></li>
                             
                           </ul>
                         </li>

                        <li class="nav-item dropdown text-center   {{ $currentRoute == "property" ? "active": ""}}  {{ $currentRoute == "property-details" ? "active": ""}}">
                           <a class="nav-link" href="{{ route('property') }}"   aria-haspopup="true" aria-expanded="false">
                              {{ trans('home.ptroperties') }}
                           </a>
                        </li>
                       
                        <li class="nav-item dropdown text-center  {{ $currentRoute == "plan" ? "active": ""}}  ">
                           <a class="nav-link" href="{{ route('plan') }}"   aria-haspopup="true" aria-expanded="false">
                              {{ trans('home.plans') }}
                           </a>
                        </li>

                        <li class="nav-item dropdown text-center  {{ $currentRoute == "agent" ||  $currentRoute == "agent-details" ? "active": ""}}  ">
                           <a class="nav-link" href="{{ route('agent') }}"   aria-haspopup="true" aria-expanded="false">
                              {{ trans('home.agents') }}
                           </a>
                        </li>
                        <li class="nav-item dropdown {{ $currentRoute == "agency" ||  $currentRoute == "agency-details"  ? "active": ""}}  ">
                           <a class="nav-link" href="{{ route('agency') }}"   aria-haspopup="true" aria-expanded="false">
                              {{ trans('home.agences') }}
                           </a>
                        </li>
                        <li class="nav-item dropdown {{ $currentRoute == "company"  || $currentRoute == "company-details"  ? "active": ""}}  ">
                           <a class="nav-link" href="{{ route('company') }}"   aria-haspopup="true" aria-expanded="false">
                              {{ trans('home.company') }}
                           </a>
                        </li>
                        <li class="nav-item dropdown {{ $currentRoute == "search" ? "active": ""}}  ">
                           <a class="nav-link" href="{{ route('search') }}"   aria-haspopup="true" aria-expanded="false">
                              {{ trans('home.mapserching') }}
                           </a>
                        </li>
                     </ul>
                  </div>
                      

                  <div class="d-flex align-items-center">
                     @if(isset($data))
                     <div class="add-listing d-none d-sm-block">
                         <a class="btn btn-primary btn-md" href="{{ route('submit-property') }}"> <i class="fa fa-plus-circle"></i>{{ trans('home.addlisting') }}</a>
                        <a class="btn btn-primary btn-md" href="{{ route('plan-details',1) }}"> <i class="fa fa-plus-pen"></i>{{ trans('home.getfreeplan') }}</a>
                      </div>
                     
                      @else
                        <div class="add-listing d-none d-sm-block">
                           <a class="btn btn-primary btn-md" href="{{ route('plan') }}"> <i class="fa fa-plus-circle"></i>{{ trans('home.buyplan') }}</a>
                           <a class="btn btn-primary btn-md" href="{{ route('plan-details',1) }}"> <i class="fa fa-plus-circle"></i>{{ trans('home.freepublication') }}</a>
                        </div>
                        
                      @endif
                  </div>
               </div>
            </nav>
            </div>
         </header>