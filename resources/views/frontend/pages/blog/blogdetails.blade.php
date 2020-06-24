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
                <div class="blog-post-comment">
                  <a href="#"> <i class="far fa-comment"></i>(15) </a>
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
                <blockquote class="blockquote">
                  <p>Without clarity, you send a very garbled message out to the Universe. We know that the Law of Attraction says that we will attract what we focus on, so if we don’t have clarity, we will attract confusion.</p>
                  <cite>– Alice Williams</cite>
                </blockquote>
                <p>The sad thing is the majority of people have no clue about what they truly want. They have no clarity. When asked the question, responses will be superficial at best, and at worst.</p>
                <nav class="navigation post-navigation">
                  <div class="nav-links">
                    <div class="nav-previous">
                      <a href="#"><span class="pagi-text"> PREV</span><span class="nav-title"> Lawn court villa</span></a>
                    </div>
                    <div class="nav-next">
                      <a href="#"><span class="nav-title"> Executive 4 bed WDM ranch</span> <span class="pagi-text">NEXT</span></a> </div>
                    </div>
                  </nav>
                  <div class="mt-4">
                    <h5 class="mb-4">About author</h5>
                    <div class="border p-4">
                      <div class="d-sm-flex">
                        <div class="avatar avatar-xlll">
                          <img class="img-fluid rounded-circle" src="{{ asset('public/frontend/assets/images/avatar/01.jpg') }}" alt="">
                        </div>
                        <div class="pl-sm-4">
                          <h6 class="mb-1"> <span class="text-primary"> Posted by :</span> Alice Williams</h6>
                          <p>SMART is an acronym for Specific, Measurable, Achievable, Realistic and Time Sensitive – S-M-A-R-T. Knowing what you want and setting SMART goals as mileposts on your quest cannot help but give you clarity!</p>
                          <div class="social-icon d-flex">
                            <span>Follow us:</span>
                            <ul class="list-unstyled mb-0 ml-3 list-inline">
                              <li class="list-inline-item"> <a href="#"> <i class="fab fa-facebook-f"></i> </a> </li>
                              <li class="list-inline-item"> <a href="#"> <i class="fab fa-twitter"></i> </a> </li>
                              <li class="list-inline-item"> <a href="#"> <i class="fab fa-instagram"></i> </a> </li>
                              <li class="list-inline-item"> <a href="#"> <i class="fab fa-linkedin"></i> </a> </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
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
                                    <h5><a href="blog-detail.html">Where to Invest in Real Estate</a></h5>
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
                    <hr class="my-5" />
                    <div class="media mb-3">
                      <div class="avatar avatar-lg">
                        <img src="{{ asset('public/frontend/assets/images/avatar/01.jpg') }}" class="img-fluid rounded-circle" alt="...">
                      </div>
                      <div class="media-body ml-3 border p-4">
                        <div class="d-flex">
                          <h6 class="mt-0">Carolyn Dan</h6>
                          <a class="ml-auto" href="#"><i class="fas fa-reply pr-2"></i>Reply</a>
                        </div>
                        <p>Then work backwards to develop the plan. What steps are required to get you to the goals? Make the plan as detailed as possible. Try to visualize and then plan.</p>
                      </div>
                    </div>
                    <div class="media mb-3 ml-5">
                      <div class="avatar avatar-lg">
                        <img src="{{ asset('public/frontend/assets/images/avatar/02.jpg') }}" class="img-fluid rounded-circle" alt="...">
                      </div>
                      <div class="media-body ml-3 border p-4">
                        <div class="d-flex">
                          <h6 class="mt-0">Finn Toby</h6>
                          <a class="ml-auto" href="#"><i class="fas fa-reply pr-2"></i>Reply</a>
                        </div>
                        <p>Every possible setback. Commit the plan to paper and then keep it with you at all times. Review it regularly and ensure that every step takes you closer.</p>
                      </div>
                    </div>
                    <div class="media mb-3 ml-5">
                      <div class="avatar avatar-lg">
                        <img src="{{ asset('public/frontend/assets/images/avatar/01.jpg') }}" class="img-fluid rounded-circle" alt="...">
                      </div>
                      <div class="media-body ml-3 border p-4">
                        <div class="d-flex">
                          <h6 class="mt-0">Carolyn Dan</h6>
                          <a class="ml-auto" href="#"><i class="fas fa-reply pr-2"></i>Reply</a>
                        </div>
                        <p>Along with your plans, you should consider developing an action orientation that will keep you motivated to move forward at all times. This requires a little self-discipline.</p>
                      </div>
                    </div>
                    <div class="media mb-3">
                      <div class="avatar avatar-lg">
                        <img src="{{ asset('public/frontend/assets/images/avatar/04.jpg') }}" class="img-fluid rounded-circle" alt="...">
                      </div>
                      <div class="media-body ml-3 border p-4">
                        <div class="d-flex">
                          <h6 class="mt-0">Anne Smith</h6>
                          <a class="ml-auto" href="#"><i class="fas fa-reply pr-2"></i>Reply</a>
                        </div>
                        <p>But is a crucial component to achievement of any kind. Before starting any new activity, ask yourself if that activity will move you closer to your goals. If the answer is no.</p>
                      </div>
                    </div>
                    <div class="mt-sm-4 mt-5">
                      <h5 class="mb-4">Leave a Reply</h5>
                      <form>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="name" placeholder="Your name">
                          </div>
                          <div class="form-group col-md-6">
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Your email">
                          </div>
                          <div class="form-group col-12">
                            <input type="text" class="form-control" id="Website" placeholder="Website">
                          </div>
                          <div class="form-group col-md-12">
                            <textarea class="form-control" rows="4" placeholder="Your message"></textarea>
                          </div>
                          <div class=" form-group col-md-12">
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
              </div>
            </div>
          </div>
          <div class="col-lg-4 mt-5 mt-lg-0">
            <div class="blog-sidebar">
              <div class="widget">
                <div class="widget-title">
                  <h6>Search</h6>
                </div>
                <div class="search">
                  <i class="fas fa-search"></i>
                  <input type="text" class="form-control" placeholder="Search....">
                </div>
              </div>
              <div class="widget">
                <div class="widget-title">
                  <h6>About the blog</h6>
                </div>
                <p>The first thing to remember about success is that it is a process – nothing more, nothing less.</p>
                <ul class="pl-3">
                  <li class="mb-2">Making the decision</li>
                  <li class="mb-2">Clarity – developing the Vision</li>
                  <li class="mb-2">Taking action – practice Ready, Fire, Aim.</li>
                </ul>
              </div>
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
              <div class="widget">
                <div class="widget-title">
                  <h6>Testimonials</h6>
                </div>
                <div class="owl-carousel owl-nav-center" data-nav-dots="true" data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1" data-space="0">
                  <div class="item">
                    <div class="testimonial-02 testimonial-02-small">
                      <div class="testimonial-content">
                        <p><i class="fas fa-quote-right quotes"></i>Oliver always had a smile and was so quick to answer and get the job done.  I'll definitely suggest you to anyone we know who is selling or wanting to purchase a home. He is the best!</p>
                      </div>
                      <div class="testimonial-author">
                        <div class="testimonial-avatar avatar avatar-lg mr-3">
                          <img class="img-fluid rounded-circle" src="{{ asset('public/frontend/assets/images/avatar/01.jpg') }}" alt="">
                        </div>
                        <div class="testimonial-name">
                          <h6 class="text-primary">Mikah Hargrove</h6>
                          <span>Hamilton Rd. Willoughby</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="testimonial-02 testimonial-02-small">
                      <div class="testimonial-content">
                        <p><i class="fas fa-quote-right quotes"></i>Jennifer & Dave were both instructive and very valuable in making my decision. I would Surly recommend them to anyone looking for a hassle free and efficient real estate experience.</p>
                      </div>
                      <div class="testimonial-author">
                        <div class="testimonial-avatar avatar avatar-lg mr-3">
                          <img class="img-fluid rounded-circle" src="{{ asset('public/frontend/assets/images/avatar/02.jpg') }}" alt="">
                        </div>
                        <div class="testimonial-name">
                          <h6 class="text-primary">Joana williams</h6>
                          <span>Piper Drive Zion</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="widget">
                <div class="widget-title">
                  <h6>Popular Tags</h6>
                </div>
                <div class="popular-tag">
                  <ul class="list-unstyled mb-0">
                    <li><a href="#"> RealEstate</a></li>
                    <li><a href="#"> HouseHunting</a></li>
                    <li><a href="#"> HomeSale</a></li>
                    <li><a href="#"> Listing</a></li>
                    <li><a href="#"> CreditScore</a></li>
                    <li><a href="#"> Housing</a></li>
                    <li><a href="#"> Realty</a></li>
                    <li><a href="#"> Renovated</a></li>
                    <li><a href="#"> Victorian</a></li>
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