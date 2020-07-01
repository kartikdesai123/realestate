@extends('backend.layout.app_layout')
@section('content')

<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet light portlet-fit portlet-form bordered" id="form_wizard_1">
            @csrf
            <div class="portlet-body">
                <!-- BEGIN FORM-->
                <form id="add-edit-about-us" class="form-horizontal" method="post">@csrf

                    <div class="form-body">

                        <div class="form-group">
                            <label class="control-label col-md-2">About Us Details</label>
                            <div class="col-md-10">
                                @if(count($aboutusDetails) > 0)
                                    <textarea name="about_us" class="form-control blogdescription" placeholder="Please enter about us">{!! $aboutusDetails[0]->aboutus !!}</textarea>
                                @else
                                    <textarea name="about_us" class="form-control blogdescription" placeholder="Please enter about us"></textarea>
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