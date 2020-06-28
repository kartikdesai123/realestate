@extends('frontend.layout.layout')
@section('content')
<!--=================================
Service -->
<section class="space-ptb signin">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 col-sm-10">
        <div class="section-title">
          <h2 class="text-center">Create an Account</h2>
        </div>
        <ul class="nav nav-tabs nav-tabs-02 justify-content-center" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="regular-user-tab" data-toggle="tab" href="#regular-user" role="tab" aria-controls="regular-user" aria-selected="true">Regular User</a>
          </li>  
          <li class="nav-item">
            <a class="nav-link" id="agent-tab" data-toggle="tab" href="#agent" role="tab" aria-controls="agent" aria-selected="false">Agent</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="agancy-tab" data-toggle="tab" href="#agancy" role="tab" aria-controls="agancy-user" aria-selected="true">Agency</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="company-tab" data-toggle="tab" href="#company" role="tab" aria-controls="company-user" aria-selected="true">Company</a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="regular-user" role="tabpanel" aria-labelledby="regular-user-tab">
            <form class="form-row mt-4 mb-5 align-items-center">
              <div class="form-group col-sm-12">
                <label>Username:</label>
                <input type="text" class="form-control" placeholder="">
              </div>
              <div class="form-group col-sm-12">
                <label>Email Address:</label>
                <input type="email" class="form-control" placeholder="">
              </div>
              <div class="form-group col-sm-12">
                <label>Password:</label>
                <input type="Password" class="form-control" placeholder="">
              </div>
              <div class="form-group col-sm-12">
                <label>Confirm Password:</label>
                <input type="Password" class="form-control" placeholder="">
              </div>
               <div class="form-group col-sm-12">
                <label>Phone no:</label>
                <input type="text" class="form-control" placeholder="">
              </div>
                <div class="form-group col-sm-12">
                <label>Photo:</label>
                <input type="file" class="form-control" placeholder="">
              </div>
              <div class="col-sm-6">
                <button type="submit" class="btn btn-primary btn-block">Sign up</button>
              </div>
              <div class="col-sm-6">
                <ul class="list-unstyled d-flex mb-1 mt-sm-0 mt-3">
                  <li class="mr-1"><a href="{{ route('signin') }}">Already Registered User? Click here to signin</a></li>
                </ul>
              </div>
            </form>
          </div>
          <div class="tab-pane fade" id="agent" role="tabpanel" aria-labelledby="agent-tab">
            <form class="form-row mt-4 align-items-center">
              <div class="form-group col-sm-12">
                <label>Username:</label>
                <input type="text" class="form-control" placeholder="">
              </div>
              <div class="form-group col-sm-12">
                <label>Email Address:</label>
                <input type="email" class="form-control" placeholder="">
              </div>
              <div class="form-group col-sm-12">
                <label>Password:</label>
                <input type="Password" class="form-control" placeholder="">
              </div>
              <div class="form-group col-sm-12">
                <label>Confirm Password:</label>
                <input type="Password" class="form-control" placeholder="">
              </div>
              <div class="form-group col-sm-12">
                <label>Phone no:</label>
                <input type="text" class="form-control" placeholder="">
              </div>
              <div class="form-group col-sm-12">
                <label>About agent:</label>
                <textarea name='aboutagent' class="form-control" placeholder=""></textarea>
              </div>
              <div class="form-group col-sm-12">
                <label>Photo:</label>
                <input type="file" class="form-control" placeholder="">
              </div>
              <div class="col-sm-6">
                <button type="submit" class="btn btn-primary btn-block">Sign up</button>
              </div>
              <div class="col-sm-6">
                <ul class="list-unstyled d-flex mb-1 mt-sm-0 mt-3">
                  <li class="mr-1"><a href="{{ route('signin') }}">Already Registered User? Click here to signin</a></li>
                </ul>
              </div>
            </form>
          </div>
          <div class="tab-pane fade" id="agancy" role="tabpanel" aria-labelledby="agancy-tab">
            <form class="form-row mt-4 align-items-center">
              <div class="form-group col-sm-12">
                <label>Username:</label>
                <input type="text" class="form-control" placeholder="">
              </div>
              <div class="form-group col-sm-12">
                <label>Email Address:</label>
                <input type="email" class="form-control" placeholder="">
              </div>
              <div class="form-group col-sm-12">
                <label>Password:</label>
                <input type="Password" class="form-control" placeholder="">
              </div>
              <div class="form-group col-sm-12">
                <label>Confirm Password:</label>
                <input type="Password" class="form-control" placeholder="">
              </div>
              <div class="form-group col-sm-12">
                <label>Phone no:</label>
                <input type="text" class="form-control" placeholder="">
              </div>
              <div class="form-group col-sm-12">
                <label>About agancy:</label>
                <textarea name='aboutagent' class="form-control" placeholder=""></textarea>
              </div>
              <div class="form-group col-sm-12">
                <label>Logo:</label>
                <input type="file" class="form-control" placeholder="">
              </div>
              <div class="col-sm-6">
                <button type="submit" class="btn btn-primary btn-block">Sign up</button>
              </div>
              <div class="col-sm-6">
                <ul class="list-unstyled d-flex mb-1 mt-sm-0 mt-3">
                  <li class="mr-1"><a href="{{ route('signin') }}">Already Registered User? Click here to signin</a></li>
                </ul>
              </div>
            </form>
          </div>
            <div class="tab-pane fade" id="company" role="tabpanel" aria-labelledby="company-tab">
            <form class="form-row mt-4 align-items-center">
              <div class="form-group col-sm-12">
                <label>Username:</label>
                <input type="text" class="form-control" placeholder="">
              </div>
              <div class="form-group col-sm-12">
                <label>Email Address:</label>
                <input type="email" class="form-control" placeholder="">
              </div>
              <div class="form-group col-sm-12">
                <label>Password:</label>
                <input type="Password" class="form-control" placeholder="">
              </div>
              <div class="form-group col-sm-12">
                <label>Confirm Password:</label>
                <input type="Password" class="form-control" placeholder="">
              </div>
              <div class="form-group col-sm-12">
                <label>Phone no:</label>
                <input type="text" class="form-control" placeholder="">
              </div>
              <div class="form-group col-sm-12">
                <label>About company:</label>
                <textarea name='aboutagent' class="form-control" placeholder=""></textarea>
              </div>
              <div class="form-group col-sm-12">
                <label>Logo:</label>
                <input type="file" class="form-control" placeholder="">
              </div>
              <div class="col-sm-6">
                <button type="submit" class="btn btn-primary btn-block">Sign up</button>
              </div>
              <div class="col-sm-6">
                <ul class="list-unstyled d-flex mb-1 mt-sm-0 mt-3">
                  <li class="mr-1"><a href="{{ route('signin') }}">Already Registered User? Click here to signin</a></li>
                </ul>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
 
@endsection