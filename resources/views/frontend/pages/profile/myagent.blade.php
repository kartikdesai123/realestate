@extends('frontend.layout.layout')
@section('content')

@php

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

  <!--=================================
My profile -->
<section class="space-ptb">
    <div class="container">
      <div class="row">


        @include('frontend.pages.profile.details_header')
        <div class="col-12">
            <div class="col-12">
                <div class="section-title d-flex align-items-center">
                    <h2>{{ $total_agent }} out of {{ $plan_detail[0]['planagent'] }}  Agents</h2>
                </div>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-10"></div>
                    <div class="col-2">
                        <div class="d-flex align-items-center">
                            <div class="add-listing d-none d-sm-block ">
                                @if($plan_detail[0]['planagent'] != NULL)
                                @if($total_agent <= $plan_detail[0]['planagent'])
                                <a class="btn btn-primary " href="{{ route('add-my-agent') }}" style="width: 100%;float: right !important"> 
                                        <i class="fa fa-plus-circle"></i>Add Agent
                                </a>
                                @endif
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>

            <table class="table table-striped table-bordered table-hover table-checkable order-column" id="agent-list">@csrf
                <thead>
                    <tr>                            
                        <th> No </th>
                        <th> Agent Image  </th>
                        <th> Agent Name</th>
                        <th> Agent Email  </th>
                        <th> Phone No  </th>
                        <th> About </th>
                        <th> Action </th>
                    </tr>
                </thead>
                <tbody>   
                </tbody>
            </table>
        </div>
      </div>
    </div>
  </section>
  <!--=================================
  My profile -->

@endsection