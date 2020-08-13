@extends('frontend.layout.layout')
@section('content')
<style>
   .nav-tabs-03 .nav-item .nav-link{
   padding-right: 10px;
   }
</style>
<!--=================================
   Submit Property -->
<section class="space-ptb">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="section-title d-flex align-items-center">
               <h2>Submit Property</h2>
            </div>
            <div class="row">
               <div class="portlet light bordered" id="form_wizard_1">
                @if($message = Session::get('success'))
                  <div class="alert alert-success">
                          <strong>{{ $message }}</strong>
                  </div>
                @endif
                
                @if($message = Session::get('error'))
                  <div class="alert alert-danger error-block">
                          <strong>{{ $message }}</strong>
                  </div>
                @endif
                  <form class="form-horizontal" enctype="multipart/form-data" id="submit_form" method="POST">
                     @csrf
                     <div class="form-wizard">
                        <div class="form-body">
                           <ul class="nav nav-tabs nav-tabs-03 nav-fill steps">
                              <li>
                                 <a href="#tab1" data-toggle="tab" class="step">
                                 <span class="number"> 01 </span>
                                 <span class="desc">
                                 <i class="fa fa-check"></i> Basic Information </span>
                                 </a>
                              </li>
                              <li>
                                 <a href="#tab2" data-toggle="tab" class="step">
                                 <span class="number"> 02 </span>
                                 <span class="desc">
                                 <i class="fa fa-check"></i> Detail Information </span>
                                 </a>
                              </li>
                              <li>
                                 <a href="#tab3" data-toggle="tab" class="step">
                                 <span class="number"> 03 </span>
                                 <span class="desc">
                                 <i class="fa fa-check"></i> Location </span>
                                 </a>
                              </li>
                              
                              <li>
                                 <a href="#tab4" data-toggle="tab" class="step">
                                 <span class="number"> 04 </span>
                                 <span class="desc">
                                 <i class="fa fa-check"></i> Gallery & 360 </span>
                                 </a>
                              </li>
                              <li>
                                 <a href="#tab5" data-toggle="tab" class="step active">
                                 <span class="number"> 05 </span>
                                 <span class="desc">
                                 <i class="fa fa-check"></i> Video & Audio </span>
                                 </a>
                              </li>
                              <li>
                                 <a href="#tab6" data-toggle="tab" class="step">
                                 <span class="number"> 06 </span>
                                 <span class="desc">
                                 <i class="fa fa-check"></i> Floorplans </span>
                                 </a>
                              </li>
                           </ul>
                           <div id="bar" class="progress progress-striped" role="progressbar">
                              <div class="progress-bar progress-bar-success"> </div>
                           </div>
                           <div class="tab-content">
                              <div class="tab-pane active" id="tab1">
                                 <div class="form-row">
                                    <div class="form-group col-md-6">
                                       <label>Property Title </label>
                                       <input type="text" class="form-control" id="propertyTitle" name="propertyTitle" placeholder="Please enter property title">
                                    </div>
                                     <div class="form-group col-md-6 select-border" >
                                       <label>Property Type</label>
                                       <select class="form-control basic-select buldingType" id="type"  name="type">
                                          <option value="" >Please select property type</option>
                                            <option value="villa">Villa</option>
                                            <option value="commercial">Commercial</option>
                                            <option value="office">Office</option>
                                            <option value="residential">Residential</option>
                                            <option value="shop">Shop</option>
                                            <option value="apartment">Apartment</option>
                                            <option value="project">Project</option>
                                       </select>
                                    </div>
                                    <div class="form-group col-md-6 select-border">
                                       <label>Offer</label>
                                       <select class="form-control basic-select buldingStatus" id="offer" name="offer">
                                          <option value="" >Please select property offer</option>
                                          <option value="sale" >For sale</option>
                                          <option value="rent">For rent</option>
                                       </select>
                                    </div>
                                    <div class="form-group col-md-6 select-border rentStatus" style="display:none">
                                       <label>Rental Period</label>
                                       <select class="form-control basic-select" id="period" name="period">
                                          <option value="" >Please select property rental period</option>
                                          <option value="monthly" >Monthly</option>
                                          <option value="yearly">yearly</option>
                                       </select>
                                    </div>
                                    
                                    <div class="form-group col-md-6">
                                       <label class="d-block">Property price </label>
                                       <div class="input-group">
                                          <div class="input-group-prepend">
                                             <div class="input-group-text"><i class="fas fa-dollar-sign"></i></div>
                                          </div>
                                          <input type="text" class="form-control" placeholder="Total Amount" id="price" name="price">
                                       </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label>Area</label>
                                       <input class="form-control" placeholder="Type (sq ft)" id="area" name="area">
                                    </div>
                                    <div class="form-group col-md-6 select-border">
                                       <label>Property Description</label>
                                       <textarea class="form-control" rows="4" placeholder="Description" id="about_property" name="about_property"></textarea>
                                    </div>
                                    
                                    
                                 </div>
                              </div>
                              <div class="tab-pane" id="tab2">
                                 <div class="form-row mt-4">
                                    <div class="form-group col-md-6 select-border">
                                       <label>Building age</label>
                                       <select class="form-control basic-select" name="buliding_age" id="buliding_age">
                                          <option value="" >Please select building age</option>
                                          <option value="1" >0 to 1 year</option>
                                          <option value="5">1 to 5 years</option>
                                          <option value="10">5 to 10 years</option>
                                          <option value="15">10 to 15 years</option>
                                          <option value="20">15 to 20 years</option>
                                       </select>
                                    </div>
                                    <div class="form-group col-md-6 select-border">
                                       <label>Bedrooms</label>
                                       <select class="form-control basic-select" name="bedrooms" id="bedrooms">
                                          <option value="" >Please select no of bedrooms</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                          <option value="5">6</option>
                                       </select>
                                    </div>
                                    <div class="form-group col-md-6 select-border">
                                       <label>Bathrooms</label>
                                       <select class="form-control basic-select" name="bathrooms" id="bathrooms">
                                          <option value="" >Please select no of bathrooms</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                       </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label>Parking </label>
                                       <input type="text" class="form-control" placeholder="Parking" id="parking" name="parking">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label>Cooling </label>
                                       <input type="text" class="form-control" placeholder="Cooling" id="cooling" name="cooling">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label>Heating </label>
                                       <input type="text" class="form-control" placeholder="Heating" id="heating" name="heating">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label>Sewer </label>
                                       <input type="text" class="form-control" placeholder="Sewer" id="sewer" name="sewer">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label>Water </label>
                                       <input type="text" class="form-control" placeholder="Water" id="water" name="water">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label>Exercise Room </label>
                                       <input type="text" class="form-control" placeholder="Exercise Room" id="exercise_room" name="exercise_room">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label>Storage Room </label>
                                       <input type="text" class="form-control" placeholder="Storage Room" id="storagr_room" name="storagr_room"> 
                                    </div>
                                     <div class="form-group col-md-12">
                                       <label>Features : </label>
                                          @foreach($other as $key => $value)
                                          
                                          <div class="custom-control custom-checkbox col-md-3" style="display: inline !important;">
                                              
                                                <input type="checkbox" name="facilites[]" class="custom-control-input" id="customCheck{{$value['id']}}" value="{{ $value['id'] }}">
                                                <label class="custom-control-label" style="color:black" for="customCheck{{$value['id']}}">{{ $value['facilitiesName'] }}</label>
                                               
                                           </div>
                                           @endforeach
                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane" id="tab3">
                                 <div class="form-row mt-4">
                                    <div class="form-group col-md-6">
                                       <label>Google Maps Address </label>
                                       <input type="text" class="form-control txtaddress" name="txtaddress" id="txtaddress" placeholder="Address">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label>Friendly Address </label>
                                       <input type="text" class="form-control friendly" name="friendly"  id="friendly" placeholder="Frendly Address">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label>City</label>
                                       <input type="text" class="form-control txtCity" name="txtCity" id="txtCity" placeholder="City">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label>State</label>
                                       <input type="text" class="form-control txtState" name="txtState" id="txtState" placeholder="State">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label>Country</label>
                                       <input type="text" class="form-control txtCountry" name="txtCountry" id="txtCountry" placeholder="Country">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label>PostalCode</label>
                                       <input type="text" class="form-control txtPostalCode" name="txtPostalCode" id="txtPostalCode" placeholder="Postal Code">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label>Longitude </label>
                                       <input type="text" class="form-control latitude" id="latitude" name="latitude" placeholder="-102.243340">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label>Latitude </label>
                                       <input type="text" class="form-control longitude" id="longitude" name="longitude" placeholder="21.852270">
                                    </div>
                                 </div>
                              </div>
                              
                               <div class="tab-pane" id="tab4">
                                 <div class="form-row mt-4">
                                    
                                    <div class="form-group col-md-12">

                                      
                                       <div class="form-group ">
                                          <div class="row appendImage">
                                             <div class="col-md-3" style="margin-top:10px">
                                                <a href="javascript:;" class="btn btn-icon-only green addImages" style="position: absolute;width: 24px;height: 28px;padding: 5px;">
                                                   <i class="fa fa-plus"></i>
                                                </a>
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                   <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"> 
                                                   <img src="{{ asset('public/frontend/images/noimage.png')}}" alt="">
                                                   </div>
                                                   <div>
                                                         <span class="btn red btn-outline btn-file">
                                                            <span class="fileinput-new"> Select image </span>
                                                            <span class="fileinput-exists"> Change </span>
                                                            <input type="file" class="custom-file-input" id="photos" name="photo[]" multiple accept="image/*">
                                                         <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                      </div>  
                                    </div>
                                    <div class="form-group col-md-12">
                                       <div class="custom-file">
                                          <input type="file" class="custom-file-input" id="tour_views" name="tour_view[]" multiple accept="video/*">
                                          <label class="custom-file-label" for="customFile">Choose 360 file</label>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane" id="tab5">
                                 <div class="form-row mt-4">

                                    <div class="form-group col-md-12">
                                       <div class="custom-file">
                                          <input type="file" class="custom-file-input" id="videos" name="video[]" multiple accept="video/*">
                                          <label class="custom-file-label" for="customFile">Choose Video file</label>
                                       </div>
                                    </div>

                                    <div class="form-group col-md-12 appenddivlink">
                                       <div class="row ">
                                          <div class="col-md-11">
                                             <label>Youtube Link</label>
                                             <input type="text" class="form-control youtubelink" name="youtubelink[]" id="youtubelink" placeholder="Please enter youtube link">
                                          </div>

                                          <div class="col-md-1">
                                             <label>&nbsp;</label>
                                             <button class="btn btn-primary addlink" type="button" style="padding-bottom: 12px;padding-top: 12px;padding-right: 15px;scroll-padding-left: 15px">
                                                <i class="fa fa-plus"></i>
                                             </button>
                                          </div>
                                       </div>
                                    </div>

                                    <div class="form-group col-md-12">
                                       <div class="custom-file">
                                          <input type="file" class="custom-file-input" id="audios" name="audio[]" multiple accept="audio/*">
                                          <label class="custom-file-label" for="customFile">Choose Audio file</label>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane" id="tab6">
                                 <div class="appenddiv">
                                    <div style="text-align: right"> 
                                       <button type="button" class="btn btn-primary btn-sm addFloorPlan">Add More floor plan</button>
                                    </div>
                                    <div class="form-row">
                                       <div class="form-group col-md-6">
                                          <label>Browser file</label>
                                          <div class="custom-file">
                                             <input type="file" class="custom-file-input"  id="file" name="file">
                                             <label class="custom-file-label" for="customFile">Choose file</label>
                                          </div>
                                       </div>
                                       <div class="form-group col-md-6">
                                          <label>Floorplan Title </label>
                                          <input type="text" class="form-control" placeholder="Awesome family home" id="floortitle" name="floortitle">
                                       </div>
                                       <div class="form-group col-md-12">
                                          <label>Area</label>
                                          <input class="form-control" placeholder="Type (sq ft)" id="floorarea" name="floorarea">
                                       </div>
                                       <div class="form-group col-md-12">
                                          <label>Description</label>
                                          <textarea class="form-control" rows="4" placeholder="Description" id="description" name="description"></textarea>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="form-actions">
                           <div class="row">
                              <div class="col-md-offset-3 col-md-9">
                                 <a href="javascript:;" class="btn default button-previous">
                                 <i class="fa fa-angle-left"></i> Back </a>
                                 <a href="javascript:;" class="btn btn-outline green button-next"> Continue
                                 <i class="fa fa-angle-right"></i>
                                 </a>
                                 <button type="submit" class="btn btn-primary btn-sm button-submit">Add Property</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--=================================
   Submit Property -->
<!--=================================
   newsletter -->
<section class="py-5 bg-primary">
   <div class="container">
      <div class="row">
         <div class="col-md-5">
            <h3 class="text-white mb-0">Sign up to our newsletter to get the latest news and offers.</h3>
         </div>
         <div class="col-md-7 mt-3 mt-md-0">
            <div class="newsletter">
               <form>
                  <div class="form-group mb-0">
                     <input type="email" class="form-control" placeholder="Enter email">
                  </div>
                  <button type="submit" class="btn btn-dark b-radius-left-none">Get notified</button>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>
<!--=================================
   newsletter -->
@endsection