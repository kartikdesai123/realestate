@php

$currentRoute = Route::current()->getName();

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
              <a class="nav-link {{ $currentRoute == 'change-password' ? 'active': ''}}" href="{{ route("change-password")}}"><i class="fa fa-key" ></i>
                  Change Password</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link {{ $currentRoute == 'my-property' ? 'active': ''}}" href="{{ route("my-property")}}"><i class="fa fa-university" ></i>
                My Property
            </a>
          </li>
          <li class="nav-item">
              <a class="nav-link " href="{{ route("my-property")}}"><i class="fas fa-home"></i> Saved Homes</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{ route("my-property")}}"><i class="fas fa-truck-moving"></i> Saved Rentals</a>
          </li>
        </ul>
      </div>
    </div>
  </div>