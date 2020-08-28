@extends('backend.layout.app_layout')
@section('content')

<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            
            <div class="portlet-body">
                @csrf
                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="angency-list">
                    <thead>
                        <tr>                            
                            <th> No </th>
                            <th> User Image  </th>
                            <th> User Name</th>
                            <th> User Email  </th>
                            <th> Phone No  </th>
                            <th> About </th>
                            <th> Verify Status </th>
                            <th> Action </th>
                        </tr>
                    </thead>
                    <tbody>   
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>
@endsection