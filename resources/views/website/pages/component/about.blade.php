 <!-- about begin -->
 <div class="about pt-120 pb-120"
     style="background: url({{ $about->getFirstMediaUrl('post_image') }}) bottom center no-repeat;     background-size: cover;">
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
