@extends('backend.layout.app_layout')
@section('content')

<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            
            <div class="portlet-body">
                <div class="table-toolbar">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="btn-group pull-right">
                            <a href="{{ route("admin-add-plan-details") }}">
                                    <button id="sample_editable_1_new" class="btn sbold green"> Add New Plan Details
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>@csrf
                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="plandetails">
                    <thead>
                        <tr>                            
                            <th>No</th>
                            <th>Plan </th>
                            <th>Plan Name</th>
                            <th>Plan Price</th>
                            <th>Plan Days</th>
                            <th>Plan Property</th>
                            <th>Plan Agent</th>
                            <th>No of Photo</th>
                            <th>No of Audiobook</th>
                            <th>No of Video</th>
                            <th>360 View</th>
                            <th>Virtual tour booking</th>
                            <th>Actions</th>
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