<!--=================================
         footer-->
         <footer class="footer bg-dark space-pt">
            <div class="container">
               <div class="row">
                  <div class="col-lg-8 col-md-6">
                     <div class="footer-contact-info">
                        <h5 class="mb-4">About TusInmuebles.co</h5>
                        <p class="text-white mb-4">Real Villa helped thousands of clients to find the right property for their needs.</p>
                        <ul class="list-unstyled mb-0">
                           <li> <b> <i class="fas fa-map-marker-alt"></i></b><span>214 West Arnold St. New York, NY 10002</span> </li>
                           <li> <b><i class="fas fa-microphone-alt"></i></b><span>(123) 345-6789</span> </li>
                           <li> <b><i class="fas fa-headset"></i></b><span>support@realvilla.demo</span> </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
                     <div class="footer-link">
                        <h5 class="mb-4">Useful links</h5>
                        <ul class="list-unstyled mb-0">
                           <li> <a href="{{ route('home') }}">Home </a> </li>
                           <li> <a href="{{ route('property') }}">Property </a> </li>
                           <li> <a href="{{ route('services') }}">Services </a> </li>
                           <li> <a href="{{ route('plan') }}">Plans </a> </li>
                           <li> <a href="{{ route('blog') }}">News</a> </li>
                        </ul>
                        <ul class="list-unstyled mb-0">
                           <li> <a href="{{ route('faq') }}">FAQs</a> </li>
                           <li> <a href="{{ route('term-condition') }}">Terms & Conditions</a> </li>
                           <li> <a href="{{ route('about-us') }}">About Us</a> </li>
                           <li> <a href="{{ route('contact-us') }}">Contact Us</a> </li>
                        </ul>
                     </div>
                  </div>
                  
               </div>
            </div>
            <div class="footer-bottom">
               <div class="container-fluid">
                  <div class="row align-items-center">
                     <div class="col-md-4 text-center text-md-left">
                        <a href="index.html"><img class="img-fluid footer-logo" src="{{ asset('public/frontend/assets/images/logo-light.svg') }}" alt=""> </a>
                     </div>
                     <div class="col-md-4 text-center my-3 mt-md-0 mb-md-0">
                        <!-- <a id="back-to-top" class="back-to-top" href="#"><i class="fas fa-angle-double-up"></i> </a> -->
                     </div>
                     <div class="col-md-4 text-center text-md-right">
                        <p class="mb-0  copyright">
                           &copy;Copyright 
                           <span id="copyright">
                              <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script>
                           </span>
                           <a href="#"> TusInmuebles.co </a> All Rights Reserved 
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </footer>

         <div id="loader"></div>