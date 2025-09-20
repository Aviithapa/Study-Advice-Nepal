 <div class="page-title">
     <div class="grid grid-cols-12 mx-2 items-center">
         <div class="col-span-6 sm:col-span-12">
             <h3>{{ $title }}</h3>
         </div>
         <div class="col-span-6 sm:col-span-12">
             <ol class="breadcrumb flex gap-2">
                 <li class="breadcrumb-item">
                     <a href="{{ route('dashboard') }}">
                         <svg class="stroke-icon">
                             <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                         </svg>
                     </a>
                 </li>
                 <li class="breadcrumb-item">Dashboard</li>
                 <li class="breadcrumb-item active">{{ $title }}</li>
             </ol>
         </div>
     </div>
 </div>
