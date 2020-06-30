@extends('backend.layout.app_layout')
@section('content')

<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet light portlet-fit portlet-form bordered" id="form_wizard_1">
            @csrf
            <div class="portlet-body">
                <!-- BEGIN FORM-->
                <form id="add-genaral-setting" class="form-horizontal" method="post">@csrf

                    <div class="form-body">

                        <div class="form-group">
                            <label class="control-label col-md-2">Facebook Link</label>
                            <div class="col-md-10">
                            <input type="text" name="facebook" class="form-control" placeholder="Please enter your facebook url" value="{{ count($generalSettingsDetails) > 0 ? $generalSettingsDetails[0]->facebook : '' }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2">Youtube Link</label>
                            <div class="col-md-10">
                                    <input type="text" name="youTube" class="form-control" placeholder="Please enter your youTube url" value="{{ count($generalSettingsDetails) > 0 ? $generalSettingsDetails[0]->youTube : '' }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2">Instagram Link</label>
                            <div class="col-md-10">
                                    <input type="text" name="instagram" class="form-control" placeholder="Please enter your instagram url" value="{{ count($generalSettingsDetails) > 0 ? $generalSettingsDetails[0]->instagram : '' }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2">Twitter Link</label>
                            <div class="col-md-10">
                                    <input type="text" name="twitter" class="form-control" placeholder="Please enter your twitter url" value="{{ count($generalSettingsDetails) > 0 ? $generalSettingsDetails[0]->twitter : '' }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2">Linkedin Link</label>
                            <div class="col-md-10">
                                    <input type="text" name="linkedin" class="form-control" placeholder="Please enter your linkedin url" value="{{ count($generalSettingsDetails) > 0 ? $generalSettingsDetails[0]->linkedin : '' }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2">Address</label>
                            <div class="col-md-10">
                                    <input type="text" name="address" class="form-control" placeholder="Please enter your address" value="{{ count($generalSettingsDetails) > 0 ? $generalSettingsDetails[0]->Address : '' }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2">Contact Number</label>
                            <div class="col-md-10">
                                    <input type="text" name="contactNumber" class="form-control" placeholder="Please enter your contact number" value="{{ count($generalSettingsDetails) > 0 ? $generalSettingsDetails[0]->contactNumber : '' }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2">Contact Email</label>
                            <div class="col-md-10">
                                    <input type="text" name="email" class="form-control" placeholder="Please enter your email" value="{{ count($generalSettingsDetails) > 0 ? $generalSettingsDetails[0]->email : '' }}">
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