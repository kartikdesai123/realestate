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

@endphp
         @if($currentRoute == "home")
            <header class="header header-transparent">
         @else
            <header class="header">
         @endif
         
           @if($currentRoute == "home")
               <nav class="navbar navbar-dark navbar-static-top navbar-expand-lg header-sticky">
           @else
               <nav class="navbar navbar-light bg-white navbar-static-top navbar-expand-lg header-sticky">
           @endif
        
               <div class="container-fluid">
                  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse">☰</button>
                  <a class="navbar-brand" href="{{ route('home') }}">
                     @if($currentRoute == "home")
                        <img class="img-fluid" src="{{ asset('public/frontend/assets/images/logo-light.svg') }}" alt="logo">
                     @else
                        <img class="img-fluid" src="{{ asset('public/frontend/assets/images/logo.svg') }}" alt="logo">
                     @endif
                  
                  </a>
                  <div class="navbar-collapse collapse">
                     <ul class="nav navbar-nav">
                       
                        <li class="nav-item dropdown text-center  {{ $currentRoute == "home" ? "active": ""}}">
                           <a class="nav-link" href="{{ route('home') }}"   aria-haspopup="true" aria-expanded="false">
                              Home
                           </a>
                        </li>

                        <li class="nav-item dropdown text-center  {{ $currentRoute == "services" ? "active": ""}}  ">
                           <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              About<i class="fas fa-chevron-down fa-xs"></i>
                           </a>
                           <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                             <li class="{{ $currentRoute == "services" ? "active": ""}}"><a class="dropdown-item" href="{{ route('services') }}" >Services</a></li>
                             <li class="{{ $currentRoute == "about-us" ? "active": ""}}"><a class="dropdown-item" href="{{ route('about-us') }}" >About us</a></li>
                             <li class="{{ $currentRoute == "servicess" ? "active": ""}}"><a class="dropdown-item" href="{{ route('services') }}" >How we work</a></li>
                             <li class="{{ $currentRoute == "servicess" ? "active": ""}}"><a class="dropdown-item" href="{{ route('services') }}" >How  to use it</a></li>
                             <li class="{{ $currentRoute == "faq" ? "active": ""}}"><a class="dropdown-item" href="{{ route('faq') }}" >FAQs</a></li>
                             
                           </ul>
                         </li>

                        <li class="nav-item dropdown text-center   {{ $currentRoute == "property" ? "active": ""}}  {{ $currentRoute == "property-details" ? "active": ""}}">
                           <a class="nav-link" href="{{ route('property') }}"   aria-haspopup="true" aria-expanded="false">
                              Properties
                           </a>
                        </li>
                       
                        <li class="nav-item dropdown text-center  {{ $currentRoute == "plan" ? "active": ""}}  ">
                           <a class="nav-link" href="{{ route('plan') }}"   aria-haspopup="true" aria-expanded="false">
                              Plans
                           </a>
                        </li>

                        <li class="nav-item dropdown text-center  {{ $currentRoute == "agent" ||  $currentRoute == "agent-details" ? "active": ""}}  ">
                           <a class="nav-link" href="{{ route('agent') }}"   aria-haspopup="true" aria-expanded="false">
                              Agents
                           </a>
                        </li>
                        <li class="nav-item dropdown {{ $currentRoute == "agency" ||  $currentRoute == "agency-details"  ? "active": ""}}  ">
                           <a class="nav-link" href="{{ route('agency') }}"   aria-haspopup="true" aria-expanded="false">
                              Agences
                           </a>
                        </li>
                        <li class="nav-item dropdown {{ $currentRoute == "company"  || $currentRoute == "company-details"  ? "active": ""}}  ">
                           <a class="nav-link" href="{{ route('company') }}"   aria-haspopup="true" aria-expanded="false">
                              Company
                           </a>
                        </li>
                        <li class="nav-item dropdown {{ $currentRoute == "search" ? "active": ""}}  ">
                           <a class="nav-link" href="{{ route('search') }}"   aria-haspopup="true" aria-expanded="false">
                              Map search
                           </a>
                        </li>
                     </ul>
                  </div>
                      

                  <div class="d-flex align-items-center">
                     @if(isset($data))
                     <div class="add-listing d-none d-sm-block">
                        <a class="btn btn-primary btn-md" href="{{ route('submit-property') }}"> <i class="fa fa-plus-circle"></i>Add Listing</a>
                      </div>
                      @else
                        <div class="add-listing d-none d-sm-block">
                           <a class="btn btn-primary btn-md" href="{{ route('plan') }}"> <i class="fa fa-plus-circle"></i>Add Listing</a>
                        </div>
                      @endif
                     <div class="login ">
                        @if(isset($data))
                        <ul class="nav navbar-nav">
                           <li class="nav-item dropdown">
                              @if($currentRoute == "home")
                                 <a href="javascript:;" style="color: white"> 
                              @else
                                 <a href="javascript:;" > 
                              @endif
                                 <i class="fa fa-user pl-2"></i>&nbsp;&nbsp;  {{ $data['username'] }} 
                                 <i class="fas fa-chevron-down fa-xs"></i>
                              </a>
                              
                              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                 <li><a class="dropdown-item" href="{{ route("my-profile")}}">My Profile</a></li>
                                 <li><a class="dropdown-item" href="{{ route('user-logout') }}">Logout</a></li>
                              </ul>
                            </li>
                        </ul>
                        @else

                           <a href="{{ route('signin') }}"> <i class="fa fa-user pl-2"></i> Sign in </a>
                        @endif
                     </div>
                  </div>
               </div>
            </nav>
         </header>