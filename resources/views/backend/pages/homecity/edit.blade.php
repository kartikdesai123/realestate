@extends('backend.layout.app_layout')
@section('content')

<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet light portlet-fit portlet-form bordered">
            @csrf
            <div class="portlet-body">
                <!-- BEGIN FORM-->
                <form id="update-home" class="form-horizontal" enctype="multipart/form-data" method="post">@csrf
                <input name="id" type="hidden" class="form-control" value="{{ $details[0]->id }}">
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-2">City Name </label>
                            <div class="col-md-10">
                                <input name="city" type="text" class="form-control" value="{{ $details[0]->city_name }}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2">Is Home </label>
                            <div class="col-md-10">
                                <input name="is_home" type="checkbox" {{ $details[0]->is_home == '1' ? 'checked="1"' : 'checked="0"' }}>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-2">Image</label>
                            <div class="col-md-10">
                                <input name="home_image" type="file" class="form-control">
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