 <!-- facility begin -->
 <div class="facility pt-120 pb-80">
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-xl-7 col-lg-8 col-md-10">
                 <div class="section-heading text-center mb-60">
                     <h2 class="section-title text-white mt--8 mb-25">Destinations</h2>
                     <p class="heading-sub-txt text-white mt--1 mb--8">
                         Top Study Destinations Around the World
                     </p>
                 </div>
             </div>
         </div>
         <div class="row justify-content-center">
             @foreach ($destinations as $destination)
                 <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                     <div class="facility-card facility-card-one mb-40"
                         style="background: {{ $destination->getFirstMediaUrl('destination_image') }} center center no-repeat;
                                background-size: cover;
                                background-position: top center;">
                         <div class="facility-img-area"></div>
                         <div class="facility-card-txt d-flex flex-column align-items-center text-center p-50 px-50">
                             {{-- <div class="facility-icon facility-icon-minus-top mb-30">
                                    <img src="assets/images/facility-icon-1.png" alt="icon">
                                </div> --}}
                             <h3 class="facility-title mt--2 mb-20"><a
                                     href="class-details.html">{{ $destination->title }}</a>
                             </h3>
                         </div>
                     </div>
                 </div>
             @endforeach
         </div>
     </div>
 </div>
 <!-- facility end -->
