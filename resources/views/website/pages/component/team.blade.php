  <!-- staff begin -->
  <div class="our-staff pt-120 pb-80">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-xl-7 col-lg-8 col-md-10">
                  <div class="section-heading text-center mb-70">
                      <h2 class="section-title mt--8 mb-25">Meet Our Teams</h2>
                      <p class="heading-sub-txt mt--1 mb--8">Here is what you can expect from a house cleaning from a
                          Handy professional. Download the app to share further cleaning details and instructions!</p>
                  </div>
              </div>
          </div>
          <div class="row justify-content-center">
              @foreach ($teams as $team)
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                      <div class="staff-card mb-40">
                          <div class="staff-card-img w_100 mb-25">
                              <a href="staff-details.html"><img src="{{ $team->getFirstMediaUrl('team_image') }}"
                                      alt="{{ $team->title }}"></a>
                          </div>
                          <div class="part-txt d-flex align-items-center justify-content-center">
                              <div class="text-center">
                                  <h3 class="staff-name"><a href="staff-details.html">{{ $team->title }}</a></h3>
                                  <p class="staff-position mb-0">{{ $team->excerpt }}</p>
                              </div>
                          </div>
                      </div>
                  </div>
              @endforeach
          </div>
      </div>
  </div>
  <!-- staff end -->
