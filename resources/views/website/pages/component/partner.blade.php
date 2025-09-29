 <style>
     .single-partner {
         width: 150px;
         height: 150px;
         display: flex;
         align-items: center;
         justify-content: center;
         padding: 10px;
     }

     .single-partner img {
         max-width: 100%;
         max-height: 100%;
         object-fit: contain;
     }
 </style>
 <!-- partner begin -->
 <div class="partner">
     <div class="container">
         <div class="partner-slider">
             @foreach ($partners as $partner)
                 <div class="single-partner">
                     <img src="{{ $partner->getFirstMediaUrl('partner_image') }}" alt="{{ $partner->title }}">
                 </div>
             @endforeach
         </div>
     </div>
 </div>
 <!-- partner end -->
