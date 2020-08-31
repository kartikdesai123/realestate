@extends('frontend.layout.layout')
@section('content')
<!--=================================
Contact -->
<section class="space-ptb mt-100">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title">
            <h2>Contact Us</h2>
          </div>
        </div>
      </div>
      <div class="row align-items-center">
        <div class="col-lg-5">
          <div class="contact-address bg-light p-4">
            <div class="d-flex mb-3">
              <div class="contact-address-icon">
                <i class="flaticon-map font-xlll"></i>
              </div>
              <div class="ml-3">
                <h6>Address</h6>
                <p>214 West Arnold St. New York, NY 10002</p>
              </div>
            </div>
            <div class="d-flex mb-3">
              <div class="contact-address-icon">
                <i class="flaticon-email font-xlll"></i>
              </div>
              <div class="ml-3">
                <h6>Email</h6>
                <p>support@realvilla.demo</p>
              </div>
            </div>
            <div class="d-flex mb-3">
              <div class="contact-address-icon">
                <i class="flaticon-call font-xlll"></i>
              </div>
              <div class="ml-3">
                <h6>Phone Number</h6>
                <p>(123) 345-6789</p>
              </div>
            </div>
            <div class="d-flex mb-3">
              <div class="contact-address-icon">
                <i class="flaticon-fax font-xlll"></i>
              </div>
              <div class="ml-3">
                <h6>Fax</h6>
                <p>(456) 478-2589</p>
              </div>
            </div>
            <div class="social-icon-02">
              <div class="d-flex align-items-center">
                <h6 class="mr-3">Social:</h6>
                <ul class="list-unstyled mb-0 list-inline">
                  <li><a href="#"> <i class="fab fa-facebook-f"></i> </a></li>
                  <li><a href="#"> <i class="fab fa-twitter"></i> </a></li>
                  <li><a href="#"> <i class="fab fa-linkedin"></i> </a></li>
                  <li><a href="#"> <i class="fab fa-pinterest"></i> </a></li>
                  <li><a href="#"> <i class="fab fa-instagram"></i> </a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-7 mt-4 mt-lg-0">
          <div class="contact-form">
            <h4 class="mb-4">Need assistance? Please complete the contact form</h4>
            <form>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" id="name" placeholder="Your name">
                </div>
                <div class="form-group col-md-6">
                  <input type="email" class="form-control" id="inputEmail4" placeholder="Your email">
                </div>
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" id="phone" placeholder="Your phone">
                </div>
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" id="subject" placeholder="Subject">
                </div>
                <div class="form-group col-md-12">
                  <textarea class="form-control" rows="4" placeholder="Your message"></textarea>
                </div>
                <div class="form-group col-md-12">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label pr-5" for="customCheck1">I consent to having this website store my submitted information so they can respond to my inquiry.</label>
                  </div>
                </div>
                <div class="col-md-12">
                  <a class="btn btn-primary" href="#">Send message</a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="row mt-1 mt-md-2">
        <div class="col-12">
          <h4 class="mb-4 my-4 my-sm-5 text-primary" style="font-weight: bold;">Additional contact Info</h4>
        </div>
        <div class="col-md-4">
          <div class="d-flex add-cnt-info">
            <i class="flaticon-time-call font-xlll text-primary"></i>
            <div class="ml-4">
              <h5>Estate agency offices</h5>
              <p>Our Estate Agency offices can help with you buying or selling a home.</p>
              <a href="#">Click to contact an estate agency branch</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mt-4 mt-md-0">
          <div class="d-flex add-cnt-info">
            <i class="flaticon-email-1 font-xlll text-primary"></i>
            <div class="ml-4">
              <h5>Lettings offices</h5>
              <p>Our Lettings offices can assist with you letting your home, protection and moving home.</p>
              <a href="#">Click to contact a lettings branch</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mt-4 mt-md-0">
          <div class="d-flex add-cnt-info">
            <i class="flaticon-group font-xlll text-primary"></i>
            <div class="ml-4">
              <h5>Chat to us </h5>
              <p class="mb-0">Chat to us if you have a question about using our Mortgage calculator.</p>
              <!--<a class="btn btn-primary btn-sm mt-3" href="#"> Start web chat</a>-->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--=================================
  Contact -->
  
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