@extends('frontend.layout.layout')
@section('content')

<!--=================================
Mortgage Interest Rates -->
<section class="space-ptb">
    <div class="container">
        <div class="row">
            <div class="col-12">
              <div class="section-title text-center">
              <h2>{{ $plan[0]->planname  }}</h2>
                <span>{{ $plan[0]->plandescription	  }}</span>
              </div>
            </div>
          </div>
          @csrf
      <div class="row">
        <div class="col-12">
            @if(count($plandetails) == 0)
                <table class="table table-bordered table-striped mb-0">
                    
                    <tbody>
                    <tr>
                        
                        <td style="color: red"><center>No any Plan Details<center></td>
                        
                    </tr>
                    
                    </tbody>
                </table>
            @else
                <table class="table table-bordered table-striped mb-0">
                    <thead>
                    <tr>
                        <th>
                            <center>
                            <h2>Pricing table</h2>
                            </center>
                        </th>
                        @foreach($plandetails as $key => $value)
                            <th>
                                <center>
                                    <h4>{{ $value->planprice == 0 ? '' : "$".$value->planprice}}</h4>
                                    <h3 style="color: #26ae61">{{ $value->planname }}</h3>
                                    <h4>Per Annum</h4>
                                </center>
                            </th>
                        @endforeach
                    </tr>
                    </thead>
                    <tbody>
                    
                    <tr>
                        <td><center>Number of Properties / per plan</center></td>
                        @foreach($plandetails as $key => $value)
                            @if($value->planproperty  < 2)
                                <td><center>{{ $value->planproperty }}</center></td>
                            @else
                                <td><center>Up to {{ $value->planproperty }}</center></td>
                            @endif
                            
                        @endforeach
                    </tr>
                    <tr>
                        <td><center>Number of Agents / per plan</center></td>
                        @foreach($plandetails as $key => $value)
                            @if($value->planagent  < 2)
                                <td><center>Up to {{ $value->planagent }}</center></td>
                            @else
                                <td><center>Up to {{ $value->planagent }}</center></td>
                            @endif
                            
                        @endforeach
                    </tr>
                    <tr>
                        <td><center>Number of Videos / per property</center></td>
                        @foreach($plandetails as $key => $value)
                            <td><center>Up to  {{ $value->noofvideo }}</center></td>
                        @endforeach
                    </tr>
                    <tr>
                        <td><center>Number of Photos / per property</center></td>
                        @foreach($plandetails as $key => $value)
                            <td><center>Up to {{ $value->photos }}</center></td>
                        @endforeach
                    </tr>
                    <tr>
                        <td><center>Number of Audiobooks / per property</center></td>
                        @foreach($plandetails as $key => $value)
                            <td><center>Up to {{ $value->audiobook }}</center></td>
                        @endforeach
                    </tr>

                    <tr>
                        <td><center>Virtual tour booking / per property</center></td>
                        @foreach($plandetails as $key => $value)
                        <td><center>
                            @if($value->tourBooking == "Y")
                                <i class="fa fa-check" style="color:green"></i>
                            @else
                            <i class="fa fa-times  " style="color:red"></i>
                            @endif
                            </center>
                        </td>
                        @endforeach
                    </tr>

                    <tr>
                        <td><center>360 View</center></td>
                        @foreach($plandetails as $key => $value)
                        <td><center>
                            @if($value->angleview == "Y")
                                <i class="fa fa-check" style="color:green"></i>
                            @else
                            <i class="fa fa-times  " style="color:red"></i>
                            @endif
                            </center>
                        </td>
                        @endforeach
                    </tr>
                    <tr>
                        <td><center></center></td>
                        @foreach($plandetails as $key => $value)
                            <td><center><span class="btn btn-primary btn-block planBtn" plandetailId="{{ $value->id}}">Select plan</span></center></td>
                            
                        @endforeach
                    </tr>
                    
                    </tbody>
                </table>
            @endif
          
        </div>
      </div>
    </div>
  </section>
  <!--=================================
  Mortgage Interest Rates -->
@endsection