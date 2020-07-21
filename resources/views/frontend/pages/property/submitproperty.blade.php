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
<!--            <div class="col-12">
              <ul class="nav nav-tabs nav-tabs-03 nav-fill" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link nextbtn active" id="tab-01-tab" data-toggle="tab" href="#tab-01" role="tab" aria-controls="tab-01" aria-selected="true">
                    <span>01</span>
                    Basic Information
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nextbtn" id="tab-02-tab" data-toggle="tab" href="#tab-02" role="tab" aria-controls="tab-02" aria-selected="false">
                    <span>02</span>
                  Gallery & 360</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="tab-03-tab" data-toggle="tab" href="#tab-03" role="tab" aria-controls="tab-03" aria-selected="false">
                    <span>03</span>
                  Video & Audio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="tab-04-tab" data-toggle="tab" href="#tab-04" role="tab" aria-controls="tab-04" aria-selected="false"
                    ><span>04</span>
                  Location</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="tab-05-tab" data-toggle="tab" href="#tab-05" role="tab" aria-controls="tab-05" aria-selected="false">
                    <span>05</span>
                  Detailed Information</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="tab-06-tab" data-toggle="tab" href="#tab-06" role="tab" aria-controls="tab-06" aria-selected="false">
                    <span>06</span>
                  Floorplans</a>
                </li>
              </ul>
              <div class="tab-content mt-4" id="myTabContent">
                <div class="tab-pane fade show active" id="tab-01" role="tabpanel" aria-labelledby="tab-01-tab">
                  <form id="add_property" method="POST" enctype="multipart/form-data">@csrf
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label>Property Title </label>
                        <input type="text" class="form-control" name="propertyTitle" placeholder="Please enter property title">
                      </div>
                      <div class="form-group col-md-6 select-border">
                        <label>Offer</label>
                        <select class="form-control basic-select">
                          <option value="value 01" >For sale</option>
                          <option value="value 02">For rent</option>
                        </select>
                      </div>
                      <div class="form-group col-md-6 select-border">
                        <label>Rental Period</label>
                        <select class="form-control basic-select">
                          <option value="value 01" >Monthly</option>
                          <option value="value 02">yearly</option>
                        </select>
                      </div>
                      <div class="form-group col-md-6 select-border">
                        <label>Property Type</label>
                        <select class="form-control basic-select">
                          <option value="value 01" >Apartment</option>
                          <option value="value 02">Park</option>
                        </select>
                      </div>
                      <div class="form-group col-md-6">
                        <label class="d-block">Property price </label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-dollar-sign"></i></div>
                          </div>
                          <input type="text" class="form-control" placeholder="Total Amount">
                        </div>
                      </div>
                      <div class="form-group col-md-6">
                        <label>Area</label>
                        <input class="form-control" placeholder="Type (sq ft)">
                      </div>
                      <div class="form-group col-md-6 select-border">
                        <label>Rooms</label>
                        <select class="form-control basic-select">
                          <option value="value 01" >01</option>
                          <option value="value 02">02</option>
                        </select>
                      </div>
                      <div class="form-group col-md-6">
                        <label>Video</label>
                        <input class="form-control" placeholder="URL to oEmbed supported service">
                      </div>
                    </div>
                  </form>
                </div>
                <div class="tab-pane fade" id="tab-02" role="tabpanel" aria-labelledby="tab-02-tab">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                  </div>
                     <p></p>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose 360 file</label>
                  </div>
                </div>
                <div class="tab-pane fade" id="tab-03" role="tabpanel" aria-labelledby="tab-03-tab">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose Video file</label>
                  </div>
                    <p></p>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose Audio file</label>
                  </div>
                </div>
                <div class="tab-pane fade" id="tab-04" role="tabpanel" aria-labelledby="tab-04-tab">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8351288872545!2d144.9556518!3d-37.8173306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1443621171568" style="border:0; width: 100%; height: 250px;"></iframe>
                  <form>
                    <div class="form-row mt-4">
                      <div class="form-group col-md-6">
                        <label>Google Maps Address </label>
                        <input type="text" class="form-control" placeholder="Envato">
                      </div>
                      <div class="form-group col-md-6">
                        <label>Friendly Address </label>
                        <input type="text" class="form-control" placeholder="Envato market">
                      </div>
                      <div class="form-group col-md-6">
                        <label>Longitude </label>
                        <input type="text" class="form-control" placeholder="-102.243340">
                      </div>
                      <div class="form-group col-md-6">
                        <label>Latitude </label>
                        <input type="text" class="form-control" placeholder="21.852270">
                      </div>
                      <div class="form-group col-md-12 select-border">
                        <label>Regions</label>
                        <select class="form-control basic-select">
                          <option value="value 01" >Los angeles</option>
                          <option value="value 02">Miami</option>
                        </select>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="tab-pane fade" id="tab-05" role="tabpanel" aria-labelledby="tab-05-tab">
                  <form>
                    <div class="form-row mt-4">
                      <div class="form-group col-md-6 select-border">
                        <label>Building age</label>
                        <select class="form-control basic-select">
                          <option value="value 01" >10 to 18 years</option>
                          <option value="value 02">10 to 18 years</option>
                        </select>
                      </div>
                      <div class="form-group col-md-6 select-border">
                        <label>Bedrooms</label>
                        <select class="form-control basic-select">
                          <option value="value 01" >1</option>
                          <option value="value 02">2</option>
                        </select>
                      </div>
                      <div class="form-group col-md-6 select-border">
                        <label>Bathrooms</label>
                        <select class="form-control basic-select">
                          <option value="value 01" >1</option>
                          <option value="value 02">2</option>
                        </select>
                      </div>
                      <div class="form-group col-md-6">
                        <label>Parking </label>
                        <input type="text" class="form-control" placeholder="Parking">
                      </div>
                      <div class="form-group col-md-6">
                        <label>Cooling </label>
                        <input type="text" class="form-control" placeholder="Cooling">
                      </div>
                      <div class="form-group col-md-6">
                        <label>Heating </label>
                        <input type="text" class="form-control" placeholder="Heating">
                      </div>
                      <div class="form-group col-md-6">
                        <label>Sewer </label>
                        <input type="text" class="form-control" placeholder="Sewer">
                      </div>
                      <div class="form-group col-md-6">
                        <label>Water </label>
                        <input type="text" class="form-control" placeholder="Water">
                      </div>
                      <div class="form-group col-md-6">
                        <label>Exercise Room </label>
                        <input type="text" class="form-control" placeholder="Exercise Room">
                      </div>
                      <div class="form-group col-md-6">
                        <label>Storage Room </label>
                        <input type="text" class="form-control" placeholder="Storage Room">
                      </div>
                      <div class="form-group col-md-6">
                        <label>Other </label>
                        <select class="form-control multi-select">
                          <option value="value 01" >Swimming pool</option>
                          <option value="value 02">Garden terrace</option>
                        </select>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="tab-pane fade" id="tab-06" role="tabpanel" aria-labelledby="tab-06-tab">
                  <form>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label>Browser file</label>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="customFile">
                          <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                      </div>
                      <div class="form-group col-md-6">
                        <label>Floorplan Title </label>
                        <input type="text" class="form-control" placeholder="Awesome family home">
                      </div>
                      <div class="form-group col-md-12">
                        <label>Area</label>
                        <input class="form-control" placeholder="Type (sq ft)">
                      </div>
                      <div class="form-group col-md-12">
                        <label>Description</label>
                        <textarea class="form-control" rows="4" placeholder="Description"></textarea>
                      </div>
                    </div>
                  </form>
                  <a class="btn btn-primary mt-3" href="#"><i class="fas fa-plus-circle"></i> Upload floorplans</a>
                </div>
              </div>
            </div>-->
             <div class="portlet light bordered" id="form_wizard_1">
<!--                  <div class="portlet-title">
                                        <div class="caption">
                                            <i class=" icon-layers font-red"></i>
                                            <span class="caption-subject font-red bold uppercase"> Form Wizard -
                                                <span class="step-title"> Step 1 of 4 </span>
                                            </span>
                                        </div>
                                        <div class="actions">
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-cloud-upload"></i>
                                            </a>
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-wrench"></i>
                                            </a>
                                            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                <i class="icon-trash"></i>
                                            </a>
                                        </div>
                                    </div>-->
                        <form class="form-horizontal" action="#" id="submit_form" method="POST">@csrf
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
                                                    <input type="text" class="form-control" name="propertyTitle" placeholder="Please enter property title">
                                                </div>
                                                <div class="form-group col-md-6 select-border">
                                                    <label>Offer</label>
                                                    <select class="form-control basic-select" name="offer">
                                                        <option value="" >Please selete property offer</option>
                                                        <option value="value 01" >For sale</option>
                                                        <option value="value 02">For rent</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6 select-border">
                                                    <label>Rental Period</label>
                                                    <select class="form-control basic-select" name="period">
                                                      <option value="" >Please selete property rental period</option>
                                                        <option value="value 01" >Monthly</option>
                                                        <option value="value 02">yearly</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6 select-border" >
                                                    <label>Property Type</label>
                                                    <select class="form-control basic-select" name="type">
                                                        <option value="" >Please selete property type</option>
                                                        <option value="value 01" >Apartment</option>
                                                        <option value="value 02">Park</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="d-block">Property price </label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="fas fa-dollar-sign"></i></div>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="Total Amount" name="price">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Area</label>
                                                    <input class="form-control" placeholder="Type (sq ft)" name="area">
                                                </div>
                                                <div class="form-group col-md-6 select-border">
                                                    <label>Rooms</label>
                                                    <select class="form-control basic-select" name="rooms">
                                                        <option value="" >Please selete no of rooms</option>
                                                        <option value="value 01" >01</option>
                                                        <option value="value 02">02</option>
                                                    </select>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab2">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile" name="photo[]" multiple accept="image/*">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                            <p></p>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile" name="tour_view[]" multiple accept="video/*">
                                                <label class="custom-file-label" for="customFile">Choose 360 file</label>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="tab3">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile" name="video[]" multiple accept="video/*">
                                                <label class="custom-file-label" for="customFile">Choose Video file</label>
                                            </div>
                                            <p></p>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile" name="audio[]" multiple accept="audio/*">
                                                <label class="custom-file-label" for="customFile">Choose Audio file</label>
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
                                            <input type="text" class="form-control friendly" name="friendly" placeholder="Frendly Address">
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
                                                    <select class="form-control basic-select" name="buliding_age">
                                                        <option value="" >Please selete building age</option>
                                                        <option value="value 01" >10 to 18 years</option>
                                                        <option value="value 02">10 to 18 years</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6 select-border">
                                                    <label>Bedrooms</label>
                                                    <select class="form-control basic-select" name="bedrooms">
                                                        <option value="" >Please selete no of badrooms</option>
                                                        <option value="value 01" >1</option>
                                                        <option value="value 02">2</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6 select-border">
                                                    <label>Bathrooms</label>
                                                    <select class="form-control basic-select" name="bathrooms">
                                                      <option value="" >Please selete no of bathrooms</option>
                                                        <option value="value 01" >1</option>
                                                        <option value="value 02">2</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Parking </label>
                                                    <input type="text" class="form-control" placeholder="Parking" name="parking">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Cooling </label>
                                                    <input type="text" class="form-control" placeholder="Cooling" name="cooling">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Heating </label>
                                                    <input type="text" class="form-control" placeholder="Heating" name="heating">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Sewer </label>
                                                    <input type="text" class="form-control" placeholder="Sewer" name="sewer">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Water </label>
                                                    <input type="text" class="form-control" placeholder="Water" name="water">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Exercise Room </label>
                                                    <input type="text" class="form-control" placeholder="Exercise Room" name="exercise_room">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Storage Room </label>
                                                    <input type="text" class="form-control" placeholder="Storage Room" name="storagr_room"> 
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Other </label>
                                                    <select class="form-control multi-select">
                                                        <option value="" >Please select other facility</option>
                                                        @foreach($other as $key => $value)

                                                          <option value="{{ $value['id'] }}" >{{ $value['facilitiesName'] }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab6">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>Browser file</label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="customFile">
                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Floorplan Title </label>
                                                    <input type="text" class="form-control" placeholder="Awesome family home">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label>Area</label>
                                                    <input class="form-control" placeholder="Type (sq ft)">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label>Description</label>
                                                    <textarea class="form-control" rows="4" placeholder="Description"></textarea>
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
                                            <a href="javascript:;" class="btn green button-submit"> Submit
                                                <i class="fa fa-check"></i>
                                            </a>
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