@extends('backend.layout.app_layout')
@section('content')
<div class="row">
    <div class="col-lg-12 col-xs-12 col-sm-12">
        
            <div class="portlet-body">
                <div class="mt-widget-1">
                    <div class="row">
                        <div class="col-lg-12 col-xs-12 col-sm-12">
                            <div class="col-md-4">
                                <!--begin: widget 1-1 -->    
                                <div class="mt-img">
                                    @if($userDetails[0]->userimage == null || $userDetails[0]->userimage == '')
                                        <img height="100px" width="100px"  src="{{ asset('public/upload/userimage/default.jpg') }}">  
                                    @else
                                        <img height="100px" width="100px"  src="{{ asset('public/upload/userimage/'.$userDetails[0]->userimage) }}">
                                    @endif
                                    
                                </div>
                                <div class="mt-body">
                                    <h3 class="mt-username">{{ $userDetails[0]->username }}</h3>
                                    <p class="mt-user-title"> User </p>
                                    <br>
                                </div>
                            </div>
                                <!--end: widget 1-1 -->
                        
                            <div class="col-md-8">
                                <!--begin: widget 1-2 -->
                                <div  style="text-align: left;margin: 40px 0 30px;">
                                    <div class="mt-body">
                                        <h4 class="mt-username" style="text-align: left">
                                            <i class="fa fa-hand-o-right" aria-hidden="true"></i> &nbsp;
                                            Email : {{ $userDetails[0]->email }}
                                        </h4><br>

                                        <h4 class="mt-username" style="text-align: left">
                                            <i class="fa fa-hand-o-right" aria-hidden="true"></i> &nbsp;
                                            @if($userDetails[0]->email_verfied == '1')
                                                Email Verify Status: <span class="badge badge-success"> Verify </span>
                                            @else
                                                Email Verify Status: <span class="badge badge-danger"> Not Verify </span>
                                            @endif
                                        </h4><br>

                                        <h4 class="mt-username" style="text-align: left">
                                            <i class="fa fa-hand-o-right" aria-hidden="true"></i> &nbsp;
                                            Phone no : {{ $userDetails[0]->phoneno }}
                                        </h4><br>

                                        <h4 class="mt-username" style="text-align: left">
                                            <i class="fa fa-hand-o-right" aria-hidden="true"></i> &nbsp;
                                            About : {{ $userDetails[0]->about }}
                                        </h4><br>

                                       
                                    </div>
                                </div>
                                <!--end: widget 1-2 -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        
    </div>
    
</div>
@endsection