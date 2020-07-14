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
                        <li class="nav-item dropdown {{ $currentRoute == "home" ? "active": ""}}">
                           <a class="nav-link" href="{{ route('home') }}"   aria-haspopup="true" aria-expanded="false">
                              home
                           </a>
                        </li>

                        <li class="nav-item dropdown {{ $currentRoute == "property" ? "active": ""}}  {{ $currentRoute == "property-details" ? "active": ""}}">
                           <a class="nav-link" href="{{ route('property') }}"   aria-haspopup="true" aria-expanded="false">
                              Property
                           </a>
                        </li>
                        <li class="nav-item dropdown {{ $currentRoute == "services" ? "active": ""}}  ">
                           <a class="nav-link" href="{{ route('services') }}"   aria-haspopup="true" aria-expanded="false">
                              Services
                           </a>
                        </li>
                        <li class="nav-item dropdown {{ $currentRoute == "plan" ? "active": ""}}  ">
                           <a class="nav-link" href="{{ route('plan') }}"   aria-haspopup="true" aria-expanded="false">
                              Plan
                           </a>
                        </li>

                        <li class="nav-item dropdown {{ $currentRoute == "blog" || $currentRoute == "blog-details" ? "active": ""}} ">
                           <a class="nav-link" href="{{ route('blog') }}"   aria-haspopup="true" aria-expanded="false">
                              Blog
                           </a>
                        </li>
                        <li class="nav-item dropdown {{ $currentRoute == "agent" ||  $currentRoute == "agent-details" ? "active": ""}}  ">
                           <a class="nav-link" href="{{ route('agent') }}"   aria-haspopup="true" aria-expanded="false">
                              Agent
                           </a>
                        </li>
                        <li class="nav-item dropdown {{ $currentRoute == "agency" ||  $currentRoute == "agency-details"  ? "active": ""}}  ">
                           <a class="nav-link" href="{{ route('agency') }}"   aria-haspopup="true" aria-expanded="false">
                              Agency
                           </a>
                        </li>
                        <li class="nav-item dropdown {{ $currentRoute == "company"  || $currentRoute == "company-details"  ? "active": ""}}  ">
                           <a class="nav-link" href="{{ route('company') }}"   aria-haspopup="true" aria-expanded="false">
                              Company
                           </a>
                        </li>
                        <li class="nav-item dropdown {{ $currentRoute == "search" ? "active": ""}}  ">
                           <a class="nav-link" href="{{ route('search') }}"   aria-haspopup="true" aria-expanded="false">
                              Search
                           </a>
                        </li>
                     </ul>
                  </div>
                  <div class="d-flex align-items-center">
                     <div class="login mr-4">
                        @if(isset($data))
                        <ul class="nav navbar-nav">
                           <li class="nav-item dropdown">
                              @if($currentRoute == "home")
                                 <a href="javascript:;" style="color: white"> 
                              @else
                                 <a href="javascript:;" > 
                              @endif
                                 <i class="fa fa-user pl-2"></i>&nbsp;{{ $data['username'] }} 
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