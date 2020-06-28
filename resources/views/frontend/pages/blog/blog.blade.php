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
                  <h5><a href="{{ route("blog-details",'1')}}">7 pieces of advice to newbies</a></h5>
                </div>
                <div class="blog-post-description">
                  <p class="mb-0">Imagine reaching deep inside you for all the strength and wisdom that you need to make this decision today. As you do so, imagine that when you choose to make that decision that deep inside your mind you are switching off the alternative path, you are switching off the opportunity to drift.</p>
                </div>
                <div class="blog-post-link mt-4">
                  <a class="btn btn-link p-0" href="{{ route("blog-details",'1')}}"> Continue read</a>
                </div>
              </div>
              <div class="blog-post-footer">
                <div class="blog-post-time">
                  <a href="#"> <i class="far fa-clock"></i>02 Jan 2019</a>
                </div>
                <div class="blog-post-author">
                  <span> By <a href="#"> <img class="img-fluid" src="{{ asset('public/frontend/assets/images/avatar/01.jpg') }}" alt="">Felica queen</a> </span>
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
                  <h5><a href="{{ route("blog-details",'1')}}">Where to Invest in Real Estate</a></h5>
                </div>
                <div class="blog-post-description">
                  <p class="mb-0">Then step out and take your future path. Absorb yourself in the sensations, the feelings, the sights, the sounds and of course continue to engage in your future the way I have discussed in previous articles on this blog your unconscious mind now knows what it is working towards.</p>
                </div>
                <div class="blog-post-link mt-4">
                  <a class="btn btn-link p-0" href="{{ route("blog-details",'1')}}"> Continue read</a>
                </div>
              </div>
              <div class="blog-post-footer">
                <div class="blog-post-time">
                  <a href="#"> <i class="far fa-clock"></i>12 Feb 2019</a>
                </div>
                <div class="blog-post-author">
                  <span> By <a href="#"> <img class="img-fluid" src="{{ asset('public/frontend/assets/images/avatar/02.jpg') }}" alt="">Alice Williams</a> </span>
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