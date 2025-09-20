 <!-- class begin -->
 <div class="class pt-120 pb-80">
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-xl-7 col-lg-8 col-md-10">
                 <div class="section-heading text-center mb-65">
                     <h2 class="section-title mt--8 mb-25">Our Services</h2>
                     <p class="heading-sub-txt mt--1 mb--8"></p>
                 </div>
             </div>
         </div>

         <div class="row justify-content-center popular-classes-wrapper">
             @foreach ($services as $service)
                 <div class="col-xl-4 col-lg-6 col-md-6 popular-class-item">
                     <div class="class-card mb-40">
                         <div class="part-img">

                             <a href="/service/{{ $service->slug }}"><img
                                     src="{{ $service->getFirstMediaUrl('service_image') }}" class="w-100"
                                     alt="image"></a>
                         </div>
                         <div class="part-txt p-40 px-30">
                             <h3 class="class-title mt--7 mb-6 name"><a
                                     href="/service/{{ $service->slug }}">{{ $service->title }}</a>
                             </h3>

                         </div>
                     </div>
                 </div>
             @endforeach

         </div>
         <div class="row">
             <div class="col-12">
                 <div id="see-load-more" class="popular-class-btn text-center pt-30 mb-40">
                     <button class="def-btn">See More Services</button>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- class end -->
