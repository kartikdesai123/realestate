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
                                 <i class="fa fa-check"></i> Gallery & 360 </span>
                                 </a>
                              </li>
                              <li>
                                 <a href="#tab3" data-toggle="tab" class="step active">
                                 <span class="number"> 03 </span>
                                 <span class="desc">
                                 <i class="fa fa-check"></i> Video & Audio </span>
                                 </a>
                              </li>
                              <li>
                                 <a href="#tab4" data-toggle="tab" class="step">
                                 <span class="number"> 04 </span>
                                 <span class="desc">
                                 <i class="fa fa-check"></i> Location </span>
                                 </a>
                              </li>
                              <li>
                                 <a href="#tab5" data-toggle="tab" class="step">
                                 <span class="number"> 05 </span>
                                 <span class="desc">
                                 <i class="fa fa-check"></i> Detailed Information </span>
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
                                    <div class="form-group col-md-6 select-border">
                                       <label>Offer</label>
                                       <select class="form-control basic-select" id="offer" name="offer">
                                          <option value="" >Please selete property offer</option>
                                          <option value="1" >For sale</option>
                                          <option value="2">For rent</option>
                                       </select>
                                    </div>
                                    <div class="form-group col-md-6 select-border">
                                       <label>Rental Period</label>
                                       <select class="form-control basic-select" id="period" name="period">
                                          <option value="" >Please selete property rental period</option>
                                          <option value="1" >Monthly</option>
                                          <option value="2">yearly</option>
                                       </select>
                                    </div>
                                    <div class="form-group col-md-6 select-border" >
                                       <label>Property Type</label>
                                       <select class="form-control basic-select" id="type"  name="type">
                                          <option value="" >Please selete property type</option>
                                          <option value="1" >Apartment</option>
                                          <option value="2">Park</option>
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
                                       <label>Rooms</label>
                                       <select class="form-control basic-select" id="rooms" name="rooms">
                                          <option value="" >Please selete no of rooms</option>
                                          <option value="1" >01</option>
                                          <option value="2">02</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane" id="tab2">
                                 <div class="form-row mt-4">
                                    <div class="form-group col-md-12">
                                       <div class="custom-file">
                                          <input type="file" class="custom-file-input" id="photos" name="photo[]" multiple accept="image/*">
                                          <label class="custom-file-label" for="customFile">Choose file</label>
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
                              <div class="tab-pane" id="tab3">
                                 <div class="form-row mt-4">
                                    <div class="form-group col-md-12">
                                       <div class="custom-file">
                                          <input type="file" class="custom-file-input" id="videos" name="video[]" multiple accept="video/*">
                                          <label class="custom-file-label" for="customFile">Choose Video file</label>
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
                              <div class="tab-pane" id="tab4">
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
                              <div class="tab-pane" id="tab5">
                                 <div class="form-row mt-4">
                                    <div class="form-group col-md-6 select-border">
                                       <label>Building age</label>
                                       <select class="form-control basic-select" name="buliding_age" id="buliding_age">
                                          <option value="" >Please selete building age</option>
                                          <option value="1" >10 to 18 years</option>
                                          <option value="2">10 to 18 years</option>
                                       </select>
                                    </div>
                                    <div class="form-group col-md-6 select-border">
                                       <label>Bedrooms</label>
                                       <select class="form-control basic-select" name="bedrooms" id="bedrooms">
                                          <option value="" >Please selete no of badrooms</option>
                                          <option value="1" >1</option>
                                          <option value="2">2</option>
                                       </select>
                                    </div>
                                    <div class="form-group col-md-6 select-border">
                                       <label>Bathrooms</label>
                                       <select class="form-control basic-select" name="bathrooms" id="bathrooms">
                                          <option value="" >Please selete no of bathrooms</option>
                                          <option value="1" >1</option>
                                          <option value="2">2</option>
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
                                    <div class="form-group col-md-6">
                                       <label>Other </label>
                                       <select class="form-control multi-select" id="facilites" name="facilites">
                                          <option value="" >Please select other facility</option>
                                          @foreach($other as $key => $value)
                                          <option value="{{ $value['id'] }}" >{{ $value['facilitiesName'] }}</option>
                                          @endforeach
                                       </select>
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