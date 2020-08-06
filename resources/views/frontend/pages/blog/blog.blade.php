@extends('frontend.layout.layout')
@section('content')
<!--=================================
Blog -->
<section class="space-ptb">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title">
            @if(count($getBlogList))
              <h2> {{ $getBlogList[0]->blogCategoryName }}</h2>
            @else
              <h2> {{ @$blog[0]->blogCategoryName }}</h2>
            @endif
          </div>
        </div>
      </div>
      <div class="row">
        @if(count($getBlogList))
        <div class="col-lg-8">
          @foreach($getBlogList as $key => $value)
            
          {!!  $value->description !!}
          <div class="blog-post">
            <div class="blog-post-content">
              <div class="blog-post-details">
                  
                <div class="blog-post-link mt-4">
                  
                  <a class="btn btn-link p-0" href="{{ route("blog-details",'1')}}"> Continue read</a>
                </div>

              </div>


              <div class="blog-post-footer">
                <div class="blog-post-time">
                <a href="#"> <i class="far fa-clock"></i>{{ date("d F, Y",strtotime( $value->created_at )) }}</a>
                </div>
                <div class="blog-post-author">
                  <span> By {{  $value->authorName }} </span>
                </div>
              </div>
              
            </div>
          </div>
          @endforeach
          <div class="row">
            <div class="col-12">
              <ul class="pagination mt-5">
                {{ $getBlogList->links() }}
                
                
              </ul>
            </div>
          </div>
        </div>
        @else
        <div class="col-lg-8">
          <h4 style="color: red"> No any blog in  {{ @$blog[o]->blogCategoryName }} category</h4>
        </div>
        @endif
        <div class="col-lg-4 mt-4 mt-lg-0">
          <div class="blog-sidebar">
            <div class="widget">
              <div class="widget-title">
                <h6>Categories</h6>
              </div>
              <ul class="list-unstyled list-style mb-0">
                @foreach($categoryList as $key => $value)
              <li><a href="{{ route("blog","categoryid=".$value->id )}}">{{ $value->blogCategoryName}}<span class="ml-auto">{{ $value->count }}</span></a></li>
                @endforeach
                
              </ul>
            </div>
              @if(count($generalSettings))
            <div class="widget">
              <div class="widget-title">
                <h6>Subscribe & Follow</h6>
              </div>
              <div class="social">
                <ul class="list-unstyled">
                  <li class="facebook">
                  <a class="text-uppercase" target="_blank" href="{{ $generalSettings[0]->facebook }}"> <i class="fab fa-facebook-f mr-3"></i>Facebook</a>
                    <a class="follow ml-auto" target="_blank" href="{{ $generalSettings[0]->facebook }}">Like </a>
                  </li>
                  <li class="twitter">
                    <a class="text-uppercase" target="_blank" href="{{ $generalSettings[0]->twitter }}"> <i class="fab fa-twitter mr-3"></i>twitter</a>
                    <a class="follow ml-auto" target="_blank" href="{{ $generalSettings[0]->twitter }}">followers </a>
                  </li>
                  <li class="youtube">
                    <a class="text-uppercase" target="_blank" href="{{ $generalSettings[0]->youTube }}"> <i class="fab fa-youtube mr-3"></i>youtube</a>
                    <a class="follow ml-auto" target="_blank" href="{{ $generalSettings[0]->youTube }}">Subscribers </a>
                  </li>
                  <li class="instagram">
                    <a class="text-uppercase" target="_blank" href="{{ $generalSettings[0]->instagram }}"> <i class="fab fa-instagram mr-3"></i>instagram</a>
                    <a class="follow ml-auto" target="_blank" href="{{ $generalSettings[0]->instagram }}">followers </a>
                  </li>
                  <li class="linkedIn">
                    <a class="text-uppercase" target="_blank" href="{{ $generalSettings[0]->linkedin }}"> <i class="fab fa-linkedin-in mr-3"></i>linkedIn</a>
                    <a class="follow ml-auto" target="_blank" href="{{ $generalSettings[0]->linkedin }}">followers </a>
                  </li>
                </ul>
              </div>
            </div>
              @endif
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