@extends('backend.layout.app_layout')
@section('content')

<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet light portlet-fit portlet-form bordered" id="form_wizard_1">
            @csrf
            <div class="portlet-body">
                <!-- BEGIN FORM-->
                <form id="add-edit-servicedetails" class="form-horizontal" method="post">@csrf

                    <div class="form-body">

                        <div class="form-group">
                            <label class="control-label col-md-2">Service Details</label>
                            <div class="col-md-10">
                                @if(count($details) > 0)
                                    <textarea name="service_details" class="form-control blogdescription" placeholder="Please enter service details ">{!! $details[0]->serviceDetails !!}</textarea>
                                @else
                                    <textarea name="service_details" class="form-control blogdescription" placeholder="Please enter service details "></textarea>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <button type="submit" class="btn green">Submit</button>
                                <button type="button" class="btn default">Cancel</button>
                            </div>
                        </div>
                    </div>


                </form>
            </div>
        </div>
        <!-- END VALIDATION STATES-->
    </div>
</div>

@endsection