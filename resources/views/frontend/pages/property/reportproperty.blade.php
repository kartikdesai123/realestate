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
               <h2>Report Property</h2>
            </div>
            <div class="row">
               <div class="portlet light bordered">
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
                  <form class="form-horizontal" id="report_form" method="POST">
                     @csrf
                     
                        <div class="form-body">
                          
                                 <div class="form-row">
                                    
                                     <div class="form-group col-md-12 select-border" >
                                       <label>Report Type</label>
                                       <select class="form-control" id="type"  name="type">
                                          <option value="" >Please select</option>
                                            <option value="It's no longer available">It's no longer available</option>
                                            <option value="Misuse of the publication">Misuse of the publication</option>
                                            <option value="Wrong phones">Wrong phones</option>
                                            <option value="Other">Other</option>
                                       </select>
                                    </div>
                                   
                                    <div class="form-group col-md-12">
                                       <label>Additional Message</label>
                                       <textarea class="form-control" rows="4" placeholder="Write additional Message" id="message" name="message"></textarea>
                                    </div>
                                     
                                 </div>
                          
                        </div>
                        <div class="form-actions">
                           <div class="row">
                              <div class="col-md-offset-3 col-md-9">
                                 <button type="submit" class="btn btn-primary btn-sm button-submit">Report Property</button>
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