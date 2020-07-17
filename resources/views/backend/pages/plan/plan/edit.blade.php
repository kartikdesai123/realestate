@extends('backend.layout.app_layout')
@section('content')

<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet light portlet-fit portlet-form bordered" id="form_wizard_1">
            @csrf
            <div class="portlet-body">
                
                <!-- BEGIN FORM-->
                <form id="edit-plan" class="form-horizontal" method="post" enctype="multipart/form-data">@csrf
                    <input name="id" type="hidden" class="form-control" value="{{ $details[0]->id }}">
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-2">Plan Name</label>
                            <div class="col-md-10">
                                <input name="planname" type="text" class="form-control" value="{{ $details[0]->planname }}">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label col-md-2">Plan Description</label>
                            <div class="col-md-10">
                            <textarea name="plandescription"  class="form-control">{{ $details[0]->plandescription }}</textarea>
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2">Plan Icon</label>
                            <div class="col-md-10">
                                <input name="plan_icon" type="file" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2">Plan Image</label>
                            <div class="col-md-10">
                                <input name="plan_bg_image" type="file" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2">Plan For</label>
                            <div class="col-md-10">
                                <select class="form-control" name="planfor">
                                    <option value="">Select Plan User</option>
                                    <option value="U" {{ $details[0]->planfor == "U" ? "selected='selected'":""}} >Normal Users</option>
                                    <option value="AG" {{ $details[0]->planfor == "AG" ? "selected='selected'":""}}>Agent</option>
                                    <option value="AY" {{ $details[0]->planfor == "AY" ? "selected='selected'":""}}>Agency</option>
                                    <option value="CC" {{ $details[0]->planfor == "CC" ? "selected='selected'":""}}>Construction Company</option>
                                </select>
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