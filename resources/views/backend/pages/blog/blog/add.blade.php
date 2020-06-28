@extends('backend.layout.app_layout')
@section('content')

<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet light portlet-fit portlet-form bordered" id="form_wizard_1">
            @csrf
            <div class="portlet-body">
                <!-- BEGIN FORM-->
                <form id="add-blog" class="form-horizontal" method="post">@csrf

                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-2">Blog Title</label>
                            <div class="col-md-10">
                                <input name="blogtitle" type="text" class="form-control" placeholder="Please enter blog title">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2">Blog Category</label>
                            <div class="col-md-10">
                                <select name="blogcategory" type="text" class="form-control">
                                    <option value="">Select blog category</option>
                                    @foreach($blogcategory as $key => $value)
                                        <option value="{{ $value->id }}">{{ $value->blogCategoryName }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2">Blog description</label>
                            <div class="col-md-10">

                                <textarea name="blogdescription" class="form-control blogdescription" placeholder="Please enter blog description"></textarea>
                                
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-2">Blog author name</label>
                            <div class="col-md-10">
                                <input name="authorname" type="text" class="form-control" placeholder="Please enter blog author name">
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