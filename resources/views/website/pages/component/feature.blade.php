  <!-- feature begin -->
  <div class="feature pt-50">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-xl-7 col-lg-7">
                  <div class="part-txt mb-70">
                      <div class="section-heading mb-70">
                          <h2 class="section-title mt--8 mb-25">{{ $welcome->title }}</h2>
                          <p class="heading-sub-txt mt--1 mb--8">{!! $welcome->content !!}</p>
                      </div>
                      <div class="row r-gap-40 has-gradient-service mb-30 mb-lg-0">
                          @foreach ($features as $feature)
                              <div class="col-xl-6 col-md-6">
                                  <div class="feature-box d-flex">
                                      <div class="feature-part-icon mr-30">
                                          <img src="{{ $feature->getFirstMediaUrl('feature_image') }}"
                                              class="filter-shadow-1" alt="Icon">
                                      </div>
                                      <div class="feature-txt">
                                          <h3 class="feature-sub-title mt--7 mb--8"><a
                                                  href="/facility/{{ $feature->slug }}">{{ $feature->title }}</a></h3>
                                          <div class="divider mt-10 mb-20 bg-gradient-1 rounded-pill"></div>
                                      </div>
                                  </div>
                              </div>
                          @endforeach
                      </div>
                  </div>
              </div>
              <div class="col-xl-4 col-lg-4">
                  <div class="p-relative ml-30 mb-70">
                      <img src="{{ $welcome->getFirstMediaUrl('post_image') }}" alt="image">
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- feature end -->
