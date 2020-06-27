@extends('backend.layout.app_layout')
@section('content')

<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet light portlet-fit portlet-form bordered" id="form_wizard_1">
            @csrf
            <div class="portlet-body">
                <!-- BEGIN FORM-->
                <form id="add-blog-category" class="form-horizontal" method="post">@csrf
                    <div class="form-body">
                        <div class="row addcategorydiv">
                            <div class="form-group ">                                
                                    <div class="col-md-2">  
                                        <label class="control-label pull-right">Category Name</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input name="category[]" type="text" class="form-control category"> 
                                        <span></span>                            
                                    </div>
                                    <div class="col-md-2">                                    
                                        <button type="button" class="btn btn-primary addcategory">Add more category</button>
                                    </div>                                
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