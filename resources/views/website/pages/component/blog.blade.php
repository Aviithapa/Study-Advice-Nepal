 <!-- blog begin -->
 <div class="latest-news pt-50 pb-80">
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-xl-7 col-lg-8 col-md-10">
                 <div class="section-heading text-center">
                     <h2 class="section-title mt--9 mb-25">{{ $blogTitle->title }}</h2>
                 </div>
             </div>
         </div>
         <div class="row justify-content-center">
             @foreach ($blogs as $blog)
                 <div class="col-xl-4 col-lg-6 col-md-6">
                     <div class="blog-card mb-40">
                         <div class="part-img w_100">
                             <a href="/blog/{{ $blog->slug }}"><img src="{{ $blog->getFirstMediaUrl('blog_image') }}"
                                     alt="Image"></a>
                             <span class="lv-part-blog-calendar-date">
                                 <i class="icofont-calendar"></i> {{ $blog->created_at->toDateString() }}
                             </span>
                         </div>
                         <div class="blog-card-txt p-40 px-30">
                             <h3 class="blog-title mt--2 mb-20"><a
                                     href="/blog/{{ $blog->slug }}">{{ $blog->title }}</a>
                             </h3>
                             <p class="mb--8">{{ $blog->excerpt }}
                             </p>
                         </div>
                     </div>
                 </div>
             @endforeach


         </div>
     </div>
 </div>
 <!-- blog end -->
