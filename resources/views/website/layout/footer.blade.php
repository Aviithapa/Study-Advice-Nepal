 <div class="footer">
     <div class="container">
         <div class="footer-info">
             <div class="row g-0">
                 <div class="col-xl-4 col-lg-4 col-md-12">
                     <div class="footer-single-info p-35 px-30 d-flex align-items-center">
                         <div class="footer-info-icon-wrap mr-20">
                             <img src="{{ asset('frontend-assets/images/footer-info-icon-1.png') }}"
                                 class="footer-info-icon" alt="Phone">
                         </div>
                         <div class="footer-info-txt-area">
                             <p class="footer-info-title text-white mt--1 mb-11">Give us a Call</p>
                             <h4 class="footer-info-txt text-white mb--3"><a
                                     href="tel:{{ site_setting('social_phone') }}">{{ site_setting('social_phone') }}</a>
                             </h4>
                         </div>
                     </div>
                 </div>
                 <div class="col-xl-4 col-lg-4 col-md-12">
                     <div class="footer-single-info p-35 px-30 border-l d-flex align-items-center">
                         <div class="footer-info-icon-wrap mr-20">
                             <img src="{{ asset('frontend-assets/images/footer-info-icon-2.png') }}"
                                 class="footer-info-icon" alt="Email">
                         </div>
                         <div class="footer-info-txt-area">
                             <p class="footer-info-title text-white mt--1 mb-11">Send us a Message</p>
                             <h4 class="footer-info-txt text-white mb--3"><a
                                     href="mailto:{{ site_setting('email') }}">{{ site_setting('email') }}</a></h4>
                         </div>
                     </div>
                 </div>
                 <div class="col-xl-4 col-lg-4 col-md-12">
                     <div class="footer-single-info p-35 px-30 border-l d-flex align-items-center">
                         <div class="footer-info-icon-wrap mr-20">
                             <img src="{{ asset('frontend-assets/images/footer-info-icon-3.png') }}"
                                 class="footer-info-icon" alt="Office">
                         </div>
                         <div class="footer-info-txt-area">
                             <p class="footer-info-title text-white mt--1 mb-11">Visit our Location</p>
                             <h4 class="footer-info-txt text-white mb--3">{{ site_setting('location') }}</h4>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="main-footer pt-120 pb-70">
             <div class="row">
                 <div class="col-xl-4 col-lg-3 col-sm-6">
                     <div class="footer-card mb-50">
                         <h4 class="footer-card-title mt--2 pb-20 mb-30">About Study Advice Nepal</h4>
                         <p class="footer-card-txt text-white mt--6 mb-30 pr-30">Monotne deplos copertve chanva andng
                             crorate Qhanin Unique Qnderwhe Premum Convere With Uheng Mutmed Cover</p>
                     </div>
                 </div>
                 <div class="col-xl-2 col-lg-3 col-sm-6">
                     <div class="footer-card mb-50">
                         <h4 class="footer-card-title mt--2 pb-20 mb-30">Services</h4>
                         <div class="footer-links mt--8">
                             <ul>
                                 <li><a href="about#overview" class="footer-link">Overview</a></li>
                                 <li><a href="about" class="footer-link">Why us</a></li>
                                 <li><a href="about" class="footer-link">Awards & Recognitions</a></li>
                                 <li><a href="team" class="footer-link">Team</a></li>
                                 <li><a href="about" class="footer-link">Client Reviews</a></li>
                             </ul>
                         </div>
                     </div>
                 </div>

                 <div class="col-xl-4 col-lg-4 col-sm-6">
                     <div class="footer-card mb-50">
                         <h4 class="footer-card-title mt--2 pb-20 mb-30">Newsletter Subscription</h4>
                         <div class="footer-mewsletter">
                             <p class="footer-card-txt text-white mt--6 mb-26">Enter your email and get latest updates
                                 and offers subscribe us</p>
                             <form>
                                 <input type="email" name="email" class="footer-input px-35 mb-25"
                                     placeholder="Enter your email">
                                 <button class="def-btn">Subscribe Now!</button>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="bottom-footer p-30">
         <div class="container">
             <div class="row justify-content-between align-items-center">
                 <div class="col-xl-3 col-lg-4 order-1 order-lg-0">
                     <p class="mb-0">{{ site_setting('copy_right') }}</p>
                 </div>
                 <div class="col-xl-8 col-lg-8 order-0 order-lg-1">
                     <div class="footer-social-box d-flex justify-content-end">
                         @if (site_setting('social_fb'))
                             <a href="{{ site_setting('social_fb') }}" target="_blank"
                                 class="bottom-footer-social mr-30"><span class="footer-social-icon fb mr-10"><i
                                         class="icofont-facebook"></i></span>Facebook</a>
                         @endif
                         @if (site_setting('social_google'))
                             <a href="{{ site_setting('social_google') }}" target="_blank"
                                 class="bottom-footer-social mr-30"><span class="footer-social-icon ggl mr-10"><i
                                         class="icofont-google-plus"></i></span>Google
                                 Plus</a>
                         @endif
                         @if (site_setting('social_twitter'))
                             <a href="{{ site_setting('social_twitter') }}" target="_blank"
                                 class="bottom-footer-social mr-30"><span class="footer-social-icon tw mr-10"><i
                                         class="icofont-twitter"></i></span>Twitter</a>
                         @endif
                         @if (site_setting('social_instagram'))
                             <a href="{{ site_setting('social_instagram') }}" target="_blank"
                                 class="bottom-footer-social mr-30"><span class="footer-social-icon pin mr-10"><i
                                         class="icofont-instagram"></i></span>Instagram</a>
                         @endif

                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
