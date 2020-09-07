@extends('frontend.layout.layout')
@section('content')
<style>
   .nav-tabs-03 .nav-item .nav-link{
   padding-right: 10px;
   }
</style>
<!--=================================
   Submit Property -->
<!--=================================
Compare properties -->
<section class="space-ptb bg-holder">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title">
          <h2>Compare properties</h2>
          <p>Our agency has many specialized areas, but our CUSTOMERS are our real specialty.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="table-responsive">
        <table class="table table-striped table-bordered compare-properties mb-0">
          <thead>
            <tr>
              <th></th>
                @php
                $image1 = explode(',',$compare['property_1'][0]['images']);
                $image2 = explode(',',$compare['property_2'][0]['images']);
                @endphp
              <th>
                <div class="p-2">
                    <div class="compare_property">
                        <img class="img-fluid" src="{{ asset('public/upload/property_photo/'.$image1[0]) }}" alt="">
                    </div>
                  <h6 class="compare_property_title"><a href="{{ route("property-details",$compare['property_1'][0]['slug'])}}" target="_blank">{{ $compare['property_1'][0]['title'] }}</a></h6>
                  <strong class="compare_property_price">$ {{ $compare['property_1'][0]['price'] }}</strong>
                </div>
              </th>
              <th>
                <div class="p-2">
                    <div class="compare_property">
                        <img class="img-fluid" src="{{ asset('public/upload/property_photo/'.$image2[0]) }}" alt="">
                    </div>
                  <h6  class="compare_property_title"><a href="{{ route("property-details",$compare['property_2'][0]['slug'])}}" target="_blank">{{ $compare['property_2'][0]['title'] }}</a></h6>
                  <strong class="compare_property_price">$ {{ $compare['property_2'][0]['price'] }}</strong>
                </div>
              </th>
         
            </tr>
          </thead>
          <tbody>
            <tr>
              <th>Address</th>
              <td>{{ $compare['property_1'][0]['address'] }}</td>
              <td>{{ $compare['property_2'][0]['address'] }}</td>
            
            </tr>
            <tr>
              <th>City</th>
              <td>{{ $compare['property_1'][0]['city'] }}</td>
              <td>{{ $compare['property_2'][0]['city'] }}</td>
             
            </tr>
            <tr>
              <th>Country / state</th>
              <td>{{ $compare['property_1'][0]['country'] }}</td>
              <td>{{ $compare['property_2'][0]['country'] }}</td>
              
            </tr>
            <tr>
              <th>Bedrooms</th>
                <td>{{ $compare['property_1'][0]['badroom'] }}</td>
              <td>{{ $compare['property_2'][0]['badroom'] }}</td>
             

            </tr>
            <tr>
              <th>Bathrooms</th>
                <td>{{ $compare['property_1'][0]['bathroom'] }}</td>
              <td>{{ $compare['property_2'][0]['bathroom'] }}</td>
               
            </tr>
            
            <tr>
              <th>Property Size</th>
              <td>{{ $compare['property_1'][0]['area'] }} SqFt</td>
              <td>{{ $compare['property_2'][0]['area'] }} SqFt</td>
              
            </tr>
            @foreach($other as $value)
            <tr>
             <th>{{ $value['facilitiesName']}}</th>
                @if(in_array($value['facilitiesName'],$compare['property_1'][0]['features']))
                @php
                $class1 = 'fa-check text-red'
                @endphp
                @else
                @php
                $class1 = 'fa-times text-danger'
                @endphp
                @endif
              <td><i class="fas {{ $class1 }}"></i></td>
              @if(in_array($value['facilitiesName'],$compare['property_2'][0]['features']))
                @php
                $class2 = 'fa-check text-red'
                @endphp
                @else
                @php
                $class2 = 'fa-times text-danger'
                @endphp
                @endif
              <td><i class="fas {{ $class2 }}"></i></td>
             </tr>
             @endforeach
          </tbody>
        </table>
      </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Compare properties -->

@endsection