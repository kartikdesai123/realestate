@php

$currentRoute = Route::current()->getName();
@endphp<!--=================================
         header -->
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

                        <li class="nav-item dropdown {{ $currentRoute == "blog" ? "active": ""}}  {{ $currentRoute == "blog-details" ? "active": ""}}">
                           <a class="nav-link" href="{{ route('blog') }}"   aria-haspopup="true" aria-expanded="false">
                              Blog
                           </a>
                        </li>
                        <li class="nav-item dropdown {{ $currentRoute == "agent" ? "active": ""}}  ">
                           <a class="nav-link" href="{{ route('agent') }}"   aria-haspopup="true" aria-expanded="false">
                              Agent
                           </a>
                        </li>
                        <li class="nav-item dropdown {{ $currentRoute == "agency" ? "active": ""}}  ">
                           <a class="nav-link" href="{{ route('agency') }}"   aria-haspopup="true" aria-expanded="false">
                              Agency
                           </a>
                        </li>
                        <li class="nav-item dropdown {{ $currentRoute == "company" ? "active": ""}}  ">
                           <a class="nav-link" href="{{ route('company') }}"   aria-haspopup="true" aria-expanded="false">
                              Company
                           </a>
                        </li>
                     </ul>
                  </div>
                  <div class="d-flex align-items-center">
                     <div class="login mr-4">
                        <!--<a data-toggle="modal" data-target="#loginModal" href="#">Hello sign in<i class="fa fa-user pl-2"></i></a>-->
                         <a href="{{ route('signin') }}"> <i class="fa fa-user pl-2"></i>Sign in </a>
                     </div>
                     <div class="add-listing d-none d-sm-block">
                        <a class="btn btn-primary btn-md" href="{{ route('submit-property') }}"> <i class="fa fa-plus-circle"></i>Add listing </a>
                     </div>
                  </div>
               </div>
            </nav>
         </header>
         <!--=================================
            header -->