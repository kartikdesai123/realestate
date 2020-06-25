@extends('backend.layout.app_layout')
@section('content')

<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet light portlet-fit portlet-form bordered" id="form_wizard_1">
            @csrf
            <div class="portlet-body">
                <!-- BEGIN FORM-->
                <form id="add-facilities" class="form-horizontal" method="post">@csrf
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-2">Facilities</label>
                            <div class="col-md-10">
                                <input name="facilities" type="text" class="form-control"> </div>
                            </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
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