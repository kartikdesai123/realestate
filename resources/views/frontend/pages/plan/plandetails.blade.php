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
                        <td></td>
                        @foreach($plandetails as $key => $value)
                            <th>
                                <center>
                                    <h4>{{ $value->planprice == 0 ? '' : "$".$value->planprice}}</h4>
                                    <h3 style="color: #26ae61">{{ $value->planname }}</h3>
                                    <h4>{{ $value->plandays == 0 ? '' : $value->plandays." - Days" }}</h4>
                                </center>
                            </th>
                        @endforeach
                    </tr>
                    </thead>
                    <tbody>
                    
                    <tr>
                        <td><center>Number of Property</center></td>
                        @foreach($plandetails as $key => $value)
                            <td><center>{{ $value->planproperty }}</center></td>
                        @endforeach
                    </tr>
                    <tr>
                        <td><center>Number of Agent</center></td>
                        @foreach($plandetails as $key => $value)
                            <td><center>{{ $value->planagent }}</center></td>
                        @endforeach
                    </tr>
                    <tr>
                        <td><center>Number of Video</center></td>
                        @foreach($plandetails as $key => $value)
                            <td><center>{{ $value->noofvideo }}</center></td>
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
                            @if($value->planfor == 'U')
                                <td><center><span class="btn btn-primary btn-block" plandetailId="{{ $value->id}}">Select plan</span></center></td>
                            @endif
                            @if($value->planfor == 'AG')
                                <td><center><span class="btn btn-primary btn-block" plandetailId="{{ $value->id}}">Select plan</span></center></td>
                            @endif
                            @if($value->planfor == 'AY')
                                <td><center><span class="btn btn-primary btn-block" plandetailId="{{ $value->id}}">Select plan</span></center></td>  
                            @endif
                            @if($value->planfor == 'CC')
                                <td><center><span class="btn btn-primary btn-block" plandetailId="{{ $value->id}}">Select plan</span></center></td>
                            @endif
                            
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