@extends('backend.layout.app_layout')
@section('content')

<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet light portlet-fit portlet-form bordered" id="form_wizard_1">
            @csrf
            <div class="portlet-body">
                <!-- BEGIN FORM-->
                <form id="add-services" class="form-horizontal" method="post">@csrf
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-2">Services Name</label>
                            <div class="col-md-10">
                                <input name="serviceName" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2">Services Image</label>
                            <div class="col-md-10">
                                <input name="serviceImage" type="file" class="form-control" accept='image/*'>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label col-md-2">Services Description</label>
                            <div class="col-md-10">
                                <textarea name="servicesdescription"  class="form-control"></textarea>
                                
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