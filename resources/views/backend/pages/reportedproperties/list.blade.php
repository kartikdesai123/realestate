@extends('backend.layout.app_layout')
@section('content')

<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            
            <div class="portlet-body">
                @csrf
                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="reported-properties">
                    <thead>
                        <tr>                            
                            <th>No</th>
                            <th>Property Title</th>
                            <th>Property Offer</th>
                            <th>Property Type</th>
                            <th>Property Price</th>
                            <th>Property Area</th>
                            <th>Report Type</th>
                            <th>Report Message</th>
                            <th>Report By</th>
                            <th>Property status</th>
                        </tr>
                    </thead>
                    <tbody>   
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>
@endsection