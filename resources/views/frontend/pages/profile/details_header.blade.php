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
<div class="col-12 mb-5">
    <div class="profile-sidebar bg-holder bg-overlay-black-70" style="background-image: url({{ asset('public/frontend/assets/images/banner-01.jpg') }})">
      <div class="d-sm-flex align-items-center position-relative">
        <div class="profile-avatar">
          <img class="img-fluid  rounded-circle" src="{{ asset('public/upload/userimage/'.$data['userimage']) }}" alt="">
        </div>
        <div class="ml-sm-4">
        <h4 class="text-white">{{ $data['username'] }}</h4>
          <b class="text-white">{{ $data['email'] }}</b>
        </div>
          <div class="ml-auto my-4 mt-sm-0">
        <a class="btn btn-white btn-md" href="{{ route ("submit-property")}}"> <i class="fa fa-plus-circle"></i>Add Property </a>
      </div>
      </div>
      <div class="profile-nav">
        <ul class="nav">
          <li class="nav-item">
          <a class="nav-link {{ $currentRoute == 'my-profile' ? 'active': ''}}" href="{{ route("my-profile")}}"><i class="far fa-user"></i> Edit Profile</a>
          </li>

          <li class="nav-item">
              <a class="nav-link {{ $currentRoute == 'change-password' ? 'active': ''}}" href="{{ route("change-password")}}">
                <i class="fa fa-key" ></i>
                  Change Password
                </a>
          </li>
          
          @if($data['roles'] == "AY" || $data['roles'] == "CC" )
            <li class="nav-item">
                <a class="nav-link {{ $currentRoute == 'my-agent' || $currentRoute == 'add-my-agent' ? 'active': ''}}" href="{{ route("my-agent")}}">
                  <i class="fa fa-user"></i> My Agent
                </a>
            </li>
          @endif

          <li class="nav-item">
            <a class="nav-link {{ $currentRoute == 'my-property' ? 'active': ''}}" href="{{ route("my-property")}}"><i class="fa fa-university" ></i>
                My Property
            </a>
          </li>
          <li class="nav-item">
              <a class="nav-link {{ $currentRoute == 'save-homes' ? 'active': ''}}" href="{{ route("save-homes")}}"><i class="fas fa-home"></i> Saved Homes</a>
          </li>
          <li class="nav-item">
              <a class="nav-link {{ $currentRoute == 'save-rental' ? 'active': ''}}" href="{{ route("save-rental")}}"><i class="fas fa-truck-moving"></i> Saved Rentals</a>
          </li>

          
        </ul>
      </div>
    </div>
  </div>