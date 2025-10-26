 <!-- facility begin -->
 <div class="mt-150 mb-50">
     <div class="container">
         <div class="row">
             <div class="col-xl-12 col-lg-12 col-md-12">
                 <div class="section-heading text-center mb-60">
                     <h2 class="section-title text-black mt--8 mb-10">Explore Top Destinations</h2>
                     <p>
                         Discover the world’s leading study destinations that combine academic excellence with cultural
                         diversity. From the innovation-driven universities of the USA and Canada to the historic
                         institutions of the UK and Europe, and the vibrant student life in Australia and Asia, each
                         destination offers unique opportunities for personal and professional growth. Explore your
                         options and find the perfect place to shape your global future.
                     </p>
                 </div>
             </div>
         </div>
         <div class="row justify-content-center mt-50">
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
