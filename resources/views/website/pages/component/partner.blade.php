 <!-- partner begin -->
 <div class="partner pb-120 pt-120">
     <div class="container">
         <div class="partner-slider">
             @foreach ($partners as $partner)
                 <div class="single-partner">
                     <img src="{{ $partner->getFirstMediaUrl('partner_image', 'thumb') }}" class=" px-10"
                         alt="{{ $partner->title }}">
                 </div>
             @endforeach
         </div>
     </div>
 </div>
 <!-- partner end -->
