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
                            <th><center>{{ $value->planname }}</center></th>
                        @endforeach
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><center>Price</center></td>
                        @foreach($plandetails as $key => $value)
                            <td><center>{{ $value->planprice }}</center></td>
                        @endforeach
                    </tr>
                    <tr>
                        <td><center>Number of Days</center></td>
                        @foreach($plandetails as $key => $value)
                            <td><center>{{ $value->plandays }}</center></td>
                        @endforeach
                    </tr>
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