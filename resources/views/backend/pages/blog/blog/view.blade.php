@extends('backend.layout.app_layout')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="portlet light portlet-fit bordered">
            
            <div class="portlet-body">
                <div class="mt-element-step">
                    <div class="row step-default">
                        <div class="mt-step-desc">
                            <div class="font-dark bold uppercase">Blog Title</div>
                                <div class="caption-desc font-grey-cascade">
                                    {{ $blogdetails[0]->title }}
                                </div>
                            <br> 
                        </div>

                        <div class="mt-step-desc">
                            <div class="font-dark bold uppercase">Blog Category</div>
                                <div class="caption-desc font-grey-cascade">
                                    {{ $blogdetails[0]->blogCategoryName }}
                                </div>
                            <br> 
                        </div>
                        
                        <div class="mt-step-desc">
                            <div class="font-dark bold uppercase">Blog Description</div>
                                <div class="caption-desc font-grey-cascade">
                                    {!! $blogdetails[0]->description !!}
                                </div>
                            <br> 
                        </div>
                        
                        <div class="mt-step-desc">
                            <div class="font-dark bold uppercase">Blog Author Name</div>
                                <div class="caption-desc font-grey-cascade">
                                    {{ $blogdetails[0]->authorName }}
                                </div>
                            <br> 
                        </div>

                        <div class="mt-step-desc">
                            <div class="font-dark bold uppercase">Blog Created Date Time</div>
                                <div class="caption-desc font-grey-cascade">
                                    {{ date("d-M-Y h:i:s",strtotime($blogdetails[0]->created_at)) }}
                                </div>
                            <br> 
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection