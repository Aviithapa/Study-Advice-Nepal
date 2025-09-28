 <!-- facility begin -->
 <div class="facility pt-120 pb-80">
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-xl-7 col-lg-8 col-md-10">
                 <div class="section-heading text-center mb-60">
                     <h2 class="section-title text-black mt--8 mb-10">Destinations</h2>
                 </div>
             </div>
         </div>
         <div class="row justify-content-center">
             @foreach ($destinations as $destination)
                 <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                     <div class="facility-card facility-card-one mb-40 "
                         style="background: url({{ $destination->getFirstMediaUrl('destination_image') }}) center center no-repeat;
                                background-size: cover;
                                background-position: top center;
                               ">
                         <div class="facility-img-area"></div>
                         <div class="facility-card-txt d-flex flex-column align-items-center text-center"
                             style=" background-color: rgba(0, 0, 0, 0.4);">
                             <h3 class="facility-title"><a
                                     href="/destination/{{ $destination->slug }}">{{ $destination->title }}</a>
                             </h3>
                         </div>
                     </div>
                 </div>
             @endforeach
         </div>
     </div>
 </div>
 <!-- facility end -->
