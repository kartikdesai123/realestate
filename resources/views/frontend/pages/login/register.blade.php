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
            <form class="form-row mt-4 mb-5 align-items-center" method="post" action="{{ route('user-register') }}" id="user-register">@csrf

              <div class="form-group col-sm-12">
                <label>Username:</label>
                <input type="text" class="form-control" name="username" placeholder="Please enter your username">
              </div>

              <div class="form-group col-sm-12">
                <label>Email Address:</label>
                <input type="email" class="form-control" name="email" placeholder="Please enter your email">
              </div>

              <div class="form-group col-sm-12">
                <label>Password:</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Please enter your password">
              </div>

              <div class="form-group col-sm-12">
                <label>Confirm Password:</label>
                <input type="password" class="form-control" name="cpassword" placeholder="Please enter your confirm password">
              </div>

               <div class="form-group col-sm-12">
                <label>Phone no:</label>
                <input type="text" class="form-control" name="phoneno" placeholder="Please enter your phone number">
              </div>

                <div class="form-group col-sm-12">
                <label>Photo:</label>
                <input type="file" class="form-control" name="userimage" accept="image/*">
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
            <form class="form-row mt-4 align-items-center" id="agent-register">@csrf
              <div class="form-group col-sm-12">
                <label>Username:</label>
                <input type="text" class="form-control" name="agentusername" placeholder="Please enter agent's username">
              </div>
              <div class="form-group col-sm-12">
                <label>Email Address:</label>
                <input type="email" class="form-control" name="agentemail" placeholder="Please enter agent's email">
              </div>
              <div class="form-group col-sm-12">
                <label>Password:</label>
                <input type="password" class="form-control" name="agentpassword" id="agentpassword" placeholder="Please enter agent's password">
              </div>
              <div class="form-group col-sm-12">
                <label>Confirm Password:</label>
                <input type="password" class="form-control" name="agentcpassword" placeholder="Please enter agent's confirm password">
              </div>
              <div class="form-group col-sm-12">
                <label>Phone no:</label>
                <input type="text" class="form-control" name="agentphoneno" placeholder="Please enter agent's phone number">
              </div>
              <div class="form-group col-sm-12">
                <label>About agent:</label>
                <textarea  class="form-control" name="agentabout" placeholder="Please enter about agent"></textarea>
              </div>
              <div class="form-group col-sm-12">
                <label>Photo:</label>
                <input type="file" class="form-control" name="agentuserimage" accept="image/*">
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
            <form class="form-row mt-4 align-items-center" id="agency-register">@csrf
              <div class="form-group col-sm-12">
                <label>Username:</label>
                <input type="text" class="form-control" name="agencyusername" placeholder="Please enter agency's username">
              </div>
              <div class="form-group col-sm-12">
                <label>Email Address:</label>
                <input type="email" class="form-control" name="agencyemail" placeholder="Please enter agency's email">
              </div>
              <div class="form-group col-sm-12">
                <label>Password:</label>
                <input type="password" class="form-control" name="agencypassword" id="agencypassword" placeholder="Please enter agency's password">
              </div>
              <div class="form-group col-sm-12">
                <label>Confirm Password:</label>
                <input type="password" class="form-control" name="agencycpassword" placeholder="Please enter agency's confirm password">
              </div>
              <div class="form-group col-sm-12">
                <label>Phone no:</label>
                <input type="text" class="form-control" name="agencyphoneno" placeholder="Please enter agency's phone number">
              </div>
              <div class="form-group col-sm-12">
                <label>About agancy:</label>
                <textarea  class="form-control" name="agencyabout" placeholder="Please enter about agency"></textarea>
              </div>
              <div class="form-group col-sm-12">
                <label>Logo:</label>
                <input type="file" class="form-control" name="agencyuserimage" accept="image/*">
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
            <form class="form-row mt-4 align-items-center" id="company-register">@csrf

              <div class="form-group col-sm-12">
                <label>Username:</label>
                <input type="text" class="form-control" name="companyusername" placeholder="Please enter company's username">
              </div>

              <div class="form-group col-sm-12">
                <label>Email Address:</label>
                <input type="email" class="form-control" name="companyemail" placeholder="Please enter company's email">
              </div>

              <div class="form-group col-sm-12">
                <label>Password:</label>
                <input type="password" class="form-control" name="companypassword" id="companypassword" placeholder="Please enter company's password">
              </div>

              <div class="form-group col-sm-12">
                <label>Confirm Password:</label>
                <input type="password" class="form-control" name="companycpassword" placeholder="Please enter company's confirm password">
              </div>

              <div class="form-group col-sm-12">
                <label>Phone no:</label>
                <input type="text" class="form-control" name="companyphoneno" placeholder="Please enter company's phone number">
              </div>

              <div class="form-group col-sm-12">
                <label>About company:</label>
                <textarea  class="form-control" name="companyabout" placeholder="Please enter about company"></textarea>
              </div>

              <div class="form-group col-sm-12">
                <label>Logo:</label>
                <input type="file" class="form-control" name="companyuserimage" accept="image/*">
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