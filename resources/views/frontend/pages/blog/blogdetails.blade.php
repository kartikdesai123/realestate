@extends('frontend.layout.layout')
@section('content')

<!--=================================
blog-detail -->
<section class="space-ptb">
    <div class="container">
      <div class="row">
       <div class="col-lg-8">
          <div class="blog-detail">
            <div class="blog-post">
              <div class="blog-post-title">
                <h2>7 pieces of advice to newbies</h2>
              </div>
              <div class="blog-post-category ">
                <a class="mb-3" href="#"><strong>Home improvement </strong></a>
              </div>
              <div class="blog-post-footer border-0 justify-content-start">
                <div class="blog-post-time ml-0">
                  <a href="#"> <i class="far fa-clock"></i>25 March 2019</a>
                </div>
                <div class="blog-post-author">
                  <span> By <a href="#"> <img class="img-fluid" src="{{ asset('public/frontend/assets/images/avatar/01.jpg') }}" alt="">Felica queen</a> </span>
                </div>
              </div>
              <div class="blog-post-image">
                <img class="img-fluid mb-4" src="{{ asset('public/frontend/assets/images/blog/01.jpg') }}" alt="">
              </div>
              <div class="blog-post-content border-0">
                <div class="blog-post-description">
                  <p class="mb-0">The first thing to remember about success is that it is a process – nothing more, nothing less. There is really no magic to it and it’s not reserved only for a select few people. As such, success really has nothing to do with luck, coincidence or fate. It really comes down to understanding.</p>
                </div>
                <i class="text-primary d-block lead my-3">There are basically six key areas to higher achievement. Some people will tell you there are four while others may tell you there are eight. One thing for certain though, is that.</i>
                <p>If success is a process with a number of defined steps, then it is just like any other process. So, what is the first step in any process?</p>
                <div class="row">
                  <div class="col-lg-7">
                    <img class="img-fluid mb-3" src="{{ asset('public/frontend/assets/images/blog/02.jpg') }}" alt="">
                  </div>
                  <div class="col-lg-5 mb-3 ">
                    <img class="img-fluid" src="{{ asset('public/frontend/assets/images/property/medium-img-01.jpg') }}" alt="">
                  </div>
                </div>
                <p>Making a decision to do something – this is the first step. We all know that nothing moves until someone makes a decision. The first action is always in making the decision to proceed. This is a fundamental step, which most people overlook.</p>
                <p>The sad thing is the majority of people have no clue about what they truly want. They have no clarity. When asked the question, responses will be superficial at best, and at worst.</p>
                
                  <div class="mt-4">
                    <h5 class="mb-4">Related Post</h5>
                    <div class="row">
                      <div class="col-12">
                        <div class="owl-carousel " data-nav-dots="true" data-items="2" data-md-items="2" data-sm-items="1" data-xs-items="1" data-xx-items="1" data-space="15">
                          <div class="item">
                            <div class="blog-post">
                              <div class="blog-post-image">
                                <img class="img-fluid" src="{{ asset('public/frontend/assets/images/blog/01.jpg') }}" alt="">
                              </div>
                              <div class="blog-post-content">
                                <div class="blog-post-details">
                                  <div class="blog-post-category">
                                    <a class="mb-3" href="#"><strong>Home improvement</strong></a>
                                  </div>
                                  <div class="blog-post-title">
                                    <h5><a href="blog-detail.html">7 pieces of advice to newbies</a></h5>
                                  </div>
                                  <div class="blog-post-description">
                                    <p class="mb-0">So, how can we stay on course with all the distractions in our lives? Willpower.</p>
                                  </div>
                                </div>
                                <div class="blog-post-footer">
                                  <div class="blog-post-time">
                                    <a href="#"> <i class="far fa-clock"></i>02 Jan 2019</a>
                                  </div>
                                  <div class="blog-post-author">
                                    <span> By <a href="#"> <img class="img-fluid" src="{{ asset('public/frontend/assets/images/avatar/01.jpg') }}" alt="">Sara lisbon </a> </span>
                                  </div>
                                  <div class="blog-post-comment">
                                    <a href="#"> <i class="far fa-comment"></i>(12) </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="blog-post">
                              <div class="blog-post-image">
                                <img class="img-fluid" src="{{ asset('public/frontend/assets/images/blog/02.jpg') }}" alt="">
                              </div>
                              <div class="blog-post-content">
                                <div class="blog-post-details">
                                  <div class="blog-post-category">
                                    <a class="mb-3" href="#"><strong>Tips and advice</strong></a>
                                  </div>
                                  <div class="blog-post-title">
                                    <h5><a href="{{ route("blog-details",'1')}}">Where to Invest in Real Estate</a></h5>
                                  </div>
                                  <div class="blog-post-description">
                                    <p class="mb-0">Is a good start, but it’s very difficult to stay on track simply through willpower.</p>
                                  </div>
                                </div>
                                <div class="blog-post-footer">
                                  <div class="blog-post-time">
                                    <a href="#"> <i class="far fa-clock"></i>14 Feb 2019</a>
                                  </div>
                                  <div class="blog-post-author">
                                    <span> By <a href="#"> <img class="img-fluid" src="{{ asset('public/frontend/assets/images/avatar/02.jpg') }}" alt="">Anne Smith</a> </span>
                                  </div>
                                  <div class="blog-post-comment">
                                    <a href="#"> <i class="far fa-comment"></i>(32) </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <div class="blog-post">
                              <div class="blog-post-image">
                                <img class="img-fluid" src="{{ asset('public/frontend/assets/images/blog/03.jpg') }}" alt="">
                              </div>
                              <div class="blog-post-content">
                                <div class="blog-post-details">
                                  <div class="blog-post-category">
                                    <a class="mb-3" href="#"><strong>Market trends</strong></a>
                                  </div>
                                  <div class="blog-post-title">
                                    <h5><a href="blog-detail.html">Cutting your losses in Real Estate</a></h5>
                                  </div>
                                  <div class="blog-post-description">
                                    <p class="mb-0">The best way is to develop and follow a plan. Start with your goals in mind.</p>
                                  </div>
                                </div>
                                <div class="blog-post-footer">
                                  <div class="blog-post-time">
                                    <a href="#"> <i class="far fa-clock"></i>30 March 2019</a>
                                  </div>
                                  <div class="blog-post-author">
                                    <span> By <a href="#"> <img class="img-fluid" src="{{ asset('public/frontend/assets/images/avatar/03.jpg') }}" alt="">Alice Williams</a> </span>
                                  </div>
                                  <div class="blog-post-comment">
                                    <a href="#"> <i class="far fa-comment"></i>(45) </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mt-5 mt-lg-0">
            <div class="blog-sidebar">
              <div class="widget">
                <div class="widget-title">
                  <h6>Recent Posts</h6>
                </div>
                <div class="d-flex mb-3 align-items-top">
                  <div class="avatar avatar-xl h-auto">
                    <img class="img-fluid" src="{{ asset('public/frontend/assets/images/blog/01.jpg') }}" alt="">
                  </div>
                  <div class="ml-3">
                    <a class="text-dark" href="blog-detail.html"><b>25K Profit on a Self-Storage Property </b></a>
                    <a class="d-flex font-sm text-dark" href="#">25 Jan 2019</a>
                  </div>
                </div>
                <div class="d-flex mb-3 align-items-top">
                  <div class="avatar avatar-xl h-auto">
                    <img class="img-fluid" src="{{ asset('public/frontend/assets/images/blog/02.jpg') }}" alt="">
                  </div>
                  <div class="ml-3">
                    <a class="text-dark" href="blog-detail.html"><b>Boost Your Retirement Plan Real Villa </b></a>
                    <a class="d-flex font-sm text-dark" href="#">14 feb 2019</a>
                  </div>
                </div>
                <div class="d-flex align-items-top">
                  <div class="avatar avatar-xl h-auto">
                    <img class="img-fluid" src="{{ asset('public/frontend/assets/images/blog/03.jpg') }}" alt="">
                  </div>
                  <div class="ml-3">
                    <a class="text-dark" href="blog-detail.html"><b>6 Smart Ways to Build Home Equity</b></a>
                    <a class="d-flex font-sm text-dark" href="#">20 March 2019</a>
                  </div>
                </div>
              </div>
              <div class="widget">
                <div class="widget-title">
                  <h6>Categories</h6>
                </div>
                <ul class="list-unstyled list-style mb-0">
                  <li><a href="#">Home improvement <span class="ml-auto">(23)</span></a></li>
                  <li><a href="#">Tips and advice<span class="ml-auto">(12)</span></a></li>
                  <li><a href="#">Market trends<span class="ml-auto">(10)</span></a></li>
                  <li><a href="#">Technology<span class="ml-auto">(02)</span></a></li>
                  <li><a href="#">The neighborhoods<span class="ml-auto">(45)</span></a></li>
                </ul>
              </div>
              <div class="widget">
                <div class="widget-title">
                  <h6>Subscribe & Follow</h6>
                </div>
                <div class="social">
                  <ul class="list-unstyled">
                    <li class="facebook">
                      <a class="text-uppercase" href="#"> <i class="fab fa-facebook-f mr-3"></i>Facebook</a>
                      <a class="follow ml-auto" href="#">Like </a>
                    </li>
                    <li class="twitter">
                      <a class="text-uppercase" href="#"> <i class="fab fa-twitter mr-3"></i>twitter</a>
                      <a class="follow ml-auto" href="#">Followers </a>
                    </li>
                    <li class="youtube">
                      <a class="text-uppercase" href="#"> <i class="fab fa-youtube mr-3"></i>youtube</a>
                      <a class="follow ml-auto" href="#">Subscribers </a>
                    </li>
                    <li class="instagram">
                      <a class="text-uppercase" href="#"> <i class="fab fa-instagram mr-3"></i>instagram</a>
                      <a class="follow ml-auto" href="#">Followers </a>
                    </li>
                    <li class="linkedIn">
                      <a class="text-uppercase" href="#"> <i class="fab fa-linkedin-in mr-3"></i>linkedIn</a>
                      <a class="follow ml-auto" href="#">Followers </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
  <!--=================================
  blog-detail -->
  
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