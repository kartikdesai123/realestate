@extends('frontend.layout.layout')
@section('content')
<!--=================================
Blog -->
<section class="space-ptb">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title">
            <h2>Real Villa Blog</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8">
          <div class="blog-post">
            <div class="blog-post-image">
              <img class="img-fluid" src="{{ asset('public/frontend/assets/images/blog/01.jpg') }}" alt="">
            </div>
            <div class="blog-post-content">
              <div class="blog-post-details">
                <div class="blog-post-category mb-1">
                  <a class="mb-3" href="#"><strong>Home improvement </strong></a>
                </div>
                <div class="blog-post-title">
                  <h5><a href="blog-detail.html">7 pieces of advice to newbies</a></h5>
                </div>
                <div class="blog-post-description">
                  <p class="mb-0">Imagine reaching deep inside you for all the strength and wisdom that you need to make this decision today. As you do so, imagine that when you choose to make that decision that deep inside your mind you are switching off the alternative path, you are switching off the opportunity to drift.</p>
                </div>
                <div class="blog-post-link mt-4">
                  <a class="btn btn-link p-0" href="#"> Continue read</a>
                </div>
              </div>
              <div class="blog-post-footer">
                <div class="blog-post-time">
                  <a href="#"> <i class="far fa-clock"></i>02 Jan 2019</a>
                </div>
                <div class="blog-post-author">
                  <span> By <a href="#"> <img class="img-fluid" src="{{ asset('public/frontend/assets/images/avatar/01.jpg') }}" alt="">Felica queen</a> </span>
                </div>
                <div class="blog-post-comment">
                  <a href="#"> <i class="far fa-comment"></i>(02) </a>
                </div>
                <div class="share-box">
                    <a href="#"> <i class="fas fa-share-alt"></i> </a>
                    <ul class="list-unstyled share-box-social">
                      <li> <a href="#"><i class="fab fa-facebook-f"></i></a> </li>
                      <li> <a href="#"><i class="fab fa-twitter"></i></a> </li>
                      <li> <a href="#"><i class="fab fa-linkedin"></i></a> </li>
                      <li> <a href="#"><i class="fab fa-instagram"></i></a> </li>
                      <li> <a href="#"><i class="fab fa-pinterest"></i></a> </li>
                    </ul>
                  </div>
              </div>
            </div>
          </div>
          <div class="blog-post mt-5">
            <div class="blog-post-image">
              <img class="img-fluid" src="{{ asset('public/frontend/assets/images/blog/02.jpg') }}" alt="">
            </div>
            <div class="blog-post-content">
              <div class="blog-post-details">
                <div class="blog-post-category mb-1">
                  <a class="mb-3" href="#"><strong>Tips and advice</strong></a>
                </div>
                <div class="blog-post-title">
                  <h5><a href="blog-detail.html">Where to Invest in Real Estate</a></h5>
                </div>
                <div class="blog-post-description">
                  <p class="mb-0">Then step out and take your future path. Absorb yourself in the sensations, the feelings, the sights, the sounds and of course continue to engage in your future the way I have discussed in previous articles on this blog your unconscious mind now knows what it is working towards.</p>
                </div>
                <div class="blog-post-link mt-4">
                  <a class="btn btn-link p-0" href="#"> Continue read</a>
                </div>
              </div>
              <div class="blog-post-footer">
                <div class="blog-post-time">
                  <a href="#"> <i class="far fa-clock"></i>12 Feb 2019</a>
                </div>
                <div class="blog-post-author">
                  <span> By <a href="#"> <img class="img-fluid" src="{{ asset('public/frontend/assets/images/avatar/02.jpg') }}" alt="">Alice Williams</a> </span>
                </div>
                <div class="blog-post-comment">
                  <a href="#"> <i class="far fa-comment"></i>(06) </a>
                </div>
                <div class="share-box">
                    <a href="#"> <i class="fas fa-share-alt"></i> </a>
                    <ul class="list-unstyled share-box-social">
                      <li> <a href="#"><i class="fab fa-facebook-f"></i></a> </li>
                      <li> <a href="#"><i class="fab fa-twitter"></i></a> </li>
                      <li> <a href="#"><i class="fab fa-linkedin"></i></a> </li>
                      <li> <a href="#"><i class="fab fa-instagram"></i></a> </li>
                      <li> <a href="#"><i class="fab fa-pinterest"></i></a> </li>
                    </ul>
                  </div>
              </div>
            </div>
          </div>
          <div class="blog-post blog-post-quote mt-5 bg-primary">
            <div class="blog-post-content">
              <div class="blockquote text-center">
                <blockquote class="text-white">
                  <i class="fas fa-quote-right"></i>
                  <p>Success isn’t really that difficult. There is a significant portion of the population here in North America, that actually want and need success to be hard! Why? So they then have a built-in excuse when things don’t go their way! Pretty sad situation, to say the least.</p>
                  <cite>– Daniel Pink</cite>
                </blockquote>
              </div>
              <div class="blog-post-details">
                <div class="blog-post-category mb-1">
                  <a class="mb-3 text-white" href="#"><strong>Market trends</strong></a>
                </div>
                <div class="blog-post-title">
                  <h5><a class="text-white" href="blog-detail.html">Cutting your losses in Real Estate</a></h5>
                </div>
                <div class="blog-post-link mt-4">
                  <a class="btn btn-link p-0" href="#"> Continue read</a>
                </div>
              </div>
              <div class="blog-post-footer">
                <div class="blog-post-time">
                  <a href="#"> <i class="far fa-clock"></i>14 March 2019</a>
                </div>
                <div class="blog-post-author">
                  <span> By <a href="#"> <img class="img-fluid" src="{{ asset('public/frontend/assets/images/avatar/03.jpg') }}" alt="">Sara lisbon </a> </span>
                </div>
                <div class="blog-post-comment">
                  <a href="#"> <i class="far fa-comment"></i>(10) </a>
                </div>
                <div class="share-box">
                    <a href="#"> <i class="fas fa-share-alt"></i> </a>
                    <ul class="list-unstyled share-box-social">
                      <li> <a href="#"><i class="fab fa-facebook-f"></i></a> </li>
                      <li> <a href="#"><i class="fab fa-twitter"></i></a> </li>
                      <li> <a href="#"><i class="fab fa-linkedin"></i></a> </li>
                      <li> <a href="#"><i class="fab fa-instagram"></i></a> </li>
                      <li> <a href="#"><i class="fab fa-pinterest"></i></a> </li>
                    </ul>
                  </div>
              </div>
            </div>
          </div>
          <div class="blog-post mt-5">
            <div class="blog-post-content">
              <div class="blog-post-details">
                <div class="blog-post-category mb-1">
                  <a class="mb-3" href="#"><strong>The neighborhoods</strong></a>
                </div>
                <div class="blog-post-title">
                  <h5><a href="blog-detail.html">The Tiny House That Love Built</a></h5>
                </div>
                <div class="blog-post-description">
                  <p class="mb-0">For those of you who are serious about having more, doing more, giving more and being more, success is achievable with some understanding of what to do, some discipline around planning and execution of those plans and belief that you can achieve your desires.</p>
                </div>
                <div class="blog-post-link mt-4">
                  <a class="btn btn-link p-0" href="#"> Continue read</a>
                </div>
              </div>
              <div class="blog-post-footer">
                <div class="blog-post-time">
                  <a href="#"> <i class="far fa-clock"></i>23 April 2019</a>
                </div>
                <div class="blog-post-author">
                  <span> By <a href="#"> <img class="img-fluid" src="{{ asset('public/frontend/assets/images/avatar/01.jpg') }}" alt="">Paul flavius</a> </span>
                </div>
                <div class="blog-post-comment">
                  <a href="#"> <i class="far fa-comment"></i>(12) </a>
                </div>
                <div class="share-box">
                    <a href="#"> <i class="fas fa-share-alt"></i> </a>
                    <ul class="list-unstyled share-box-social">
                      <li> <a href="#"><i class="fab fa-facebook-f"></i></a> </li>
                      <li> <a href="#"><i class="fab fa-twitter"></i></a> </li>
                      <li> <a href="#"><i class="fab fa-linkedin"></i></a> </li>
                      <li> <a href="#"><i class="fab fa-instagram"></i></a> </li>
                      <li> <a href="#"><i class="fab fa-pinterest"></i></a> </li>
                    </ul>
                  </div>
              </div>
            </div>
          </div>
          <div class="blog-post mt-5">
            <div class="blog-post-image">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/ll4HbFTbn2E" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </div>
            <div class="blog-post-content">
              <div class="blog-post-details">
                <div class="blog-post-category mb-1">
                  <a class="mb-3" href="#"><strong>Tips and advice</strong></a>
                </div>
                <div class="blog-post-title">
                  <h5><a href="blog-detail.html">How to Replace a Ceiling Fan</a></h5>
                </div>
                <div class="blog-post-description">
                  <p class="mb-0">The first thing to remember about success is that it is a process – nothing more, nothing less. There is really no magic to it and it’s not reserved only for a select few people. As such, success really has nothing to do with luck, coincidence or fate it really comes down.</p>
                </div>
                <div class="blog-post-link mt-4">
                  <a class="btn btn-link p-0" href="#"> Continue read</a>
                </div>
              </div>
              <div class="blog-post-footer">
                <div class="blog-post-time">
                  <a href="#"> <i class="far fa-clock"></i>13 Jan 2019</a>
                </div>
                <div class="blog-post-author">
                  <span> By <a href="#"> <img class="img-fluid" src="{{ asset('public/frontend/assets/images/avatar/02.jpg') }}" alt="">Anne Smith</a> </span>
                </div>
                <div class="blog-post-comment">
                  <a href="#"> <i class="far fa-comment"></i>(10) </a>
                </div>
                <div class="share-box">
                    <a href="#"> <i class="fas fa-share-alt"></i> </a>
                    <ul class="list-unstyled share-box-social">
                      <li> <a href="#"><i class="fab fa-facebook-f"></i></a> </li>
                      <li> <a href="#"><i class="fab fa-twitter"></i></a> </li>
                      <li> <a href="#"><i class="fab fa-linkedin"></i></a> </li>
                      <li> <a href="#"><i class="fab fa-instagram"></i></a> </li>
                      <li> <a href="#"><i class="fab fa-pinterest"></i></a> </li>
                    </ul>
                  </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <ul class="pagination mt-5">
                <li class="page-item disabled mr-auto">
                  <span class="page-link b-radius-none">Prev</span>
                </li>
                <li class="page-item active" aria-current="page"><span class="page-link">1 </span> <span class="sr-only">(current)</span></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item ml-auto">
                  <a class="page-link b-radius-none" href="#">Next</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mt-4 mt-lg-0">
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
                    <a class="follow ml-auto" href="#">followers </a>
                  </li>
                  <li class="youtube">
                    <a class="text-uppercase" href="#"> <i class="fab fa-youtube mr-3"></i>youtube</a>
                    <a class="follow ml-auto" href="#">Subscribers </a>
                  </li>
                  <li class="instagram">
                    <a class="text-uppercase" href="#"> <i class="fab fa-instagram mr-3"></i>instagram</a>
                    <a class="follow ml-auto" href="#">followers </a>
                  </li>
                  <li class="linkedIn">
                    <a class="text-uppercase" href="#"> <i class="fab fa-linkedin-in mr-3"></i>linkedIn</a>
                    <a class="follow ml-auto" href="#">followers </a>
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
            <div class="widget mb-0">
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
  Blog -->
  
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