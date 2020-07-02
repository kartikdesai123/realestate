@extends('backend.layout.app_layout')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="portlet light portlet-fit bordered">
            
            <div class="portlet-body">
                <div class="mt-element-step">
                    <div class="row step-default">
                        <div class="mt-step-desc">
                            <div class="font-dark bold uppercase">Services Name</div>
                                <div class="caption-desc font-grey-cascade">
                                    {{ $details[0]->servicesName }}
                                </div>
                            <br> 
                        </div>

                        <div class="mt-step-desc">
                            <div class="font-dark bold uppercase">Services Image</div>
                                <div class="caption-desc font-grey-cascade">
                                    <img src="{{ url('public/upload/serviceImage/'.$details[0]->servicesImage ) }}" style="width:150px ; height:150px"> 
                                </div>
                            <br> 
                        </div>
                        
                        <div class="mt-step-desc">
                            <div class="font-dark bold uppercase">Services Description</div>
                                <div class="caption-desc font-grey-cascade">
                                    {{ $details[0]->servicesDescripation }}
                                </div>
                            <br> 
                        </div>
                        
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection