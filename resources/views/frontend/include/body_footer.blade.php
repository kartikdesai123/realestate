<!--=================================
         footer-->
         <footer class="footer bg-dark space-pt">
            <div class="container">
               <div class="row">
                  <div class="col-lg-3 col-md-6">
                     <div class="footer-contact-info">
                        <h5 class="text-primary mb-4">About real villa</h5>
                        <p class="text-white mb-4">Real Villa helped thousands of clients to find the right property for their needs.</p>
                        <ul class="list-unstyled mb-0">
                           <li> <b> <i class="fas fa-map-marker-alt"></i></b><span>214 West Arnold St. New York, NY 10002</span> </li>
                           <li> <b><i class="fas fa-microphone-alt"></i></b><span>(123) 345-6789</span> </li>
                           <li> <b><i class="fas fa-headset"></i></b><span>support@realvilla.demo</span> </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
                     <div class="footer-link">
                        <h5 class="text-primary mb-4">Useful links</h5>
                        <ul class="list-unstyled mb-0">
                           <li> <a href="{{ route('home') }}">Home </a> </li>
                           <li> <a href="{{ route('property') }}">Property </a> </li>
                           <li> <a href="{{ route('services') }}">Services </a> </li>
                           <li> <a href="{{ route('plan') }}">Plans </a> </li>
                           <li> <a href="{{ route('blog') }}">Blogs</a> </li>
                        </ul>
                        <ul class="list-unstyled mb-0">
                           <li> <a href="{{ route('faq') }}">FAQs</a> </li>
                           <li> <a href="{{ route('term-condition') }}">Terms & Conditions</a> </li>
                           <li> <a href="{{ route('about-us') }}">About Us</a> </li>
                           <li> <a href="{{ route('contact-us') }}">Contact Us</a> </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                     <div class="footer-recent-List">
                        <h5 class="text-primary mb-4">Recently listed properties</h5>
                        <ul class="list-unstyled mb-0">
                           <li>
                              <div class="footer-recent-list-item">
                                 <img class="img-fluid" src="{{ asset('public/frontend/assets/images/property/list/01.jpg') }}" alt="">
                                 <div class="footer-recent-list-item-info">
                                    <h6 class="text-white"><a class="category font-md mb-2" href="property-detail-style-01.html">Awesome family home</a></h6>
                                    <a class="address mb-2 font-sm" href="#">Vermont dr. hephzibah</a>
                                    <span class="price text-white">$3,456,235 </span>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <div class="footer-recent-list-item">
                                 <img class="img-fluid" src="{{ asset('public/frontend/assets/images/property/list/02.jpg') }}" alt="">
                                 <div class="footer-recent-list-item-info">
                                    <h6 class="text-white"><a class="category font-md mb-2" href="property-detail-style-01.html">Lawn court villa</a></h6>
                                    <a class="address mb-2 font-sm" href="#">Newport st. mebane, nc</a>
                                    <span class="price text-white">$1,265,456 </span>
                                 </div>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                     <h5 class="text-primary mb-4">Subscribe us</h5>
                     <div class="footer-subscribe">
                        <p class="text-white">Sign up to our newsletter to get the latest news and offers.</p>
                        <form>
                           <div class="form-group">
                              <input type="email" class="form-control" placeholder="Enter email">
                           </div>
                           <button type="submit" class="btn btn-primary btn-sm">Get notified</button>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
            <div class="footer-bottom">
               <div class="container">
                  <div class="row align-items-center">
                     <div class="col-md-4 text-center text-md-left">
                        <a href="index.html"><img class="img-fluid footer-logo" src="{{ asset('public/frontend/assets/images/logo-light.svg') }}" alt=""> </a>
                     </div>
                     <div class="col-md-4 text-center my-3 mt-md-0 mb-md-0">
                        <a id="back-to-top" class="back-to-top" href="#"><i class="fas fa-angle-double-up"></i> </a>
                     </div>
                     <div class="col-md-4 text-center text-md-right">
                        <p class="mb-0 text-white">
                           &copy;Copyright 
                           <span id="copyright">
                              <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script>
                           </span>
                           <a href="#"> Real villa </a> All Rights Reserved 
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </footer>