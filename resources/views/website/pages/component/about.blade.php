 <!-- about begin -->
 <div class="about pt-50 pb-50"
     style="background: url({{ $about->getFirstMediaUrl('post_image') }}) center center / cover no-repeat,
            rgba(0, 0, 0, 0.4);
            background-blend-mode: overlay;">
     <div class="container">
         <div class="row justify-content-end">
             <div class="col-xl-6 col-lg-7 col-md-8 col-sm-12">
                 <h2 class="about-title mt--8 mb-25">{{ $about->title }}</h2>
                 <p class="fw-bolds mt--1 mb-16">
                     {!! $about->content !!}
                 </p>

                 <div class="btn-box pt-50">
                     <a href="about" class="def-btn btn-2">About Us</a>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- about end -->
