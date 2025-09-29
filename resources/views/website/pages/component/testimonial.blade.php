   <!-- testimonial begin -->
   <div class="testimonial pt-50 pb-30">

       <div class="section-heading text-center">
           <h2 class="feedback-title mt--8 mb-25">Student Stories and Experiences</h2>

       </div>
       <div class="container">
           <div class="row align-items-center">
               <div class="col-xl-4 col-lg-5 col-md-6">
                   <div class="clients">
                       @foreach ($testimonials as $testimonial)
                           <div class="single-client">
                               <img src="{{ $testimonial->getFirstMediaUrl('testimonial_image') }}"
                                   alt="{{ $testimonial->title }}">
                           </div>
                       @endforeach

                   </div>
               </div>
               <div class="col-xl-8 col-lg-7 col-md-6">

                   <div class="client-feedback pr-70 pl-30">
                       @foreach ($testimonials as $testimonial)
                           <div class="single-feedback" style="color:white !important;">
                               <div class="feedback-title-area">
                                   <div class="quote-icon mb-30">
                                       {{-- <img src="{{ asset('frontend-assets/images/quote.png') }}" alt="“"> --}}
                                   </div>
                               </div>
                               <p class="feedback-txt mb-25 text-white">
                                   {!! $testimonial->content !!}</p>
                               <div class="divider bg-white rounded-pill mb-20"></div>
                               <h4 class="client-name mt--2 mb--2">{{ $testimonial->title }}</h4>
                           </div>
                       @endforeach
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!-- testimonial end -->
