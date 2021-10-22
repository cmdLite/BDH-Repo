 @include('partial.head')
 <body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
setTimeout(function() {
  $('#myta').show();
}, 5000);
  </script>

 @include('partial.header')



    <!-- Page-->



      <!-- Page Header-->

      <section class="section" loading="lazy">

        <div class="shell-wide">

          <div class="range range-30 range-center">

            <div class="cell-12">

              <!-- Classic slider-->

              <section class="section">

                <!-- Swiper -->

                <div class="swiper-container swiper-slider swiper-style-2" data-loop="true" data-autoplay="5500" data-simulate-touch="false" data-slide-effect="slide" data-direction="horizontal">

                  <div class="swiper-wrapper">

                    <!-- Slide 1 -->

                    <div class="swiper-slide" data-slide-bg="bh-img/bh-pic/bh-bldg.jpg">

                      <div class="overlay">

                      <div class="swiper-slide-caption">

                        <div class="shell text-sm-left">

                          <h2 data-caption-animate="slideInDown" data-caption-delay="100">Your Ideal Retreat</h2>

                          <div class="slider-subtitle-group">

                            <div class="decoration-line" data-caption-animate="slideInDown" data-caption-delay="400"></div>

                            <h5 data-caption-animate="slideInLeft" data-caption-delay="700">Enjoy the world of relaxation</h5>

                            <h4 data-caption-animate="slideInLeft" data-caption-delay="800">and tranquility!</h4>

                          </div><a class="button button-effect-ujarak button-lg button-white-outline button-square" href="aboutus" data-caption-animate="slideInLeft" data-caption-delay="1150"><span>learn more</span></a>

                        </div>

                      </div>

                     </div>

                    </div>

                    <!-- Slide 2 -->

                    <div class="swiper-slide" data-slide-bg="bh-img/bh-pic/GKR.jpg">

                      <div class="overlay">

                      <div class="swiper-slide-caption">

                        <div class="shell text-sm-left">

                          <h2 data-caption-animate="slideInDown" data-caption-delay="100">Rest & Refuge</h2>

                          <div class="slider-subtitle-group">

                            <div class="decoration-line" data-caption-animate="slideInDown" data-caption-delay="400"></div>

                            <h5 data-caption-animate="slideInLeft" data-caption-delay="700">Experience Safety and Comfort</h5>

                            <h4 data-caption-animate="slideInLeft" data-caption-delay="800">in One Place!</h4>

                          </div><a class="button button-effect-ujarak button-lg button-white-outline button-square" href="aboutus" data-caption-animate="slideInLeft" data-caption-delay="1150"><span>learn more</span></a>

                        </div>

                      </div>

                     </div>

                    </div>

                    <!-- Slide 3 -->

                    <div class="swiper-slide" data-slide-bg="bh-img/bh-pic/spa.jpg">

                      <div class="overlay">

                      <div class="swiper-slide-caption">

                        <div class="shell text-sm-left">

                          <h2 data-caption-animate="slideInDown" data-caption-delay="100">Relax & Unwind</h2>

                          <div class="slider-subtitle-group">

                            <div class="decoration-line" data-caption-animate="slideInDown" data-caption-delay="400"></div>

                            <h5 data-caption-animate="slideInLeft" data-caption-delay="700">Experience the luxurious level</h5>

                            <h4 data-caption-animate="slideInLeft" data-caption-delay="800">of our spa treatments</h4>

                          </div><a class="button button-effect-ujarak button-lg button-white-outline button-square" href="https://www.instagram.com/ortizskinclinic_official/?igshid=pgkvmrd3bea9" data-caption-animate="slideInLeft" data-caption-delay="1150"><span>learn more</span></a>

                        </div>

                      </div>

                     </div>

                    </div>



                     <!-- Slide 3 -->

                     <div class="swiper-slide" data-slide-bg="bh-img/bh-pic/4.jpg">

                      <div class="overlay">

                      <div class="swiper-slide-caption">

                        <div class="shell text-sm-left">

                          <h2 data-caption-animate="slideInDown" data-caption-delay="100">Celebrate & Congregate</h2>

                          <div class="slider-subtitle-group">

                            <div class="decoration-line" data-caption-animate="slideInDown" data-caption-delay="400"></div>

                            <h5 data-caption-animate="slideInLeft" data-caption-delay="700">Gather with Colleagues & Friends</h5>

                            <h4 data-caption-animate="slideInLeft" data-caption-delay="800">in our Multipurpose Halls</h4>

                          </div><a class="button button-effect-ujarak button-lg button-white-outline button-square" href="aboutus" data-caption-animate="slideInLeft" data-caption-delay="1150"><span>learn more</span></a>

                        </div>

                      </div>

                     </div>

                    </div>

                    

                  </div>

                  <div class="swiper-pagination"></div>

                </div>

              </section>

            </div>

            {{-- <div class="cell-lg-4 cell-xl-3 reveal-lg-flex" style="height: 660px;">

              <div class="hotel-booking-form">

                <h3>Book a Room</h3>

                <!-- RD Mailform-->

                <form class="rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">

                  <div class="range range-sm-bottom spacing-20">

                    <div class="cell-lg-12 cell-md-4">

                      <p class="text-uppercase">Your Name</p>

                      <div class="form-wrap">

                        <input class="form-input" id="contact-first-name" type="text" name="name" data-constraints="@Required">

                        <label class="form-label" for="contact-first-name">Your Full Name</label>

                      </div>

                    </div>

                    <div class="cell-lg-12 cell-md-4 cell-sm-6">

                      <p class="text-uppercase">Arrival</p>

                      <div class="form-wrap">

                        <label class="form-label form-label-icon" for="date-in"><span class="icon icon-primary fa-calendar"></span><span>Check-in Date</span></label>

                        <input class="form-input" id="date-in" data-time-picker="date" type="text" name="date" data-constraints="@Required">

                      </div>

                    </div>

                    <div class="cell-lg-12 cell-md-4 cell-sm-6">

                      <p class="text-uppercase">Departure</p>

                      <div class="form-wrap">

                        <label class="form-label form-label-icon" for="date-out"><span class="icon icon-primary fa-calendar"></span><span>Check-out Date</span></label>

                        <input class="form-input" id="date-out" data-time-picker="date" type="text" name="date" data-constraints="@Required">

                      </div>

                    </div>

                    <div class="cell-lg-6 cell-md-4 cell-xs-6">

                      <p class="text-uppercase">Adults</p>

                      <div class="form-wrap form-wrap-validation">

                        <!--Select 2-->

                        <select class="form-input select-filter" data-minimum-results-search="-1" data-placeholder="1" data-constraints="@Required">

                          <option>&nbsp;</option>

                          <option value="1">1</option>

                          <option value="2">2</option>

                          <option value="3">3</option>

                          <option value="4">4</option>

                          <option value="5">5</option>

                        </select>

                      </div>

                    </div>

                    <div class="cell-lg-6 cell-md-4 cell-xs-6">

                      <p class="text-uppercase">Children</p>

                      <div class="form-wrap form-wrap-validation">

                        <!--Select 2-->

                        <select class="form-input select-filter" data-minimum-results-search="-1" data-placeholder="0" data-constraints="@Required">

                          <option>&nbsp;</option>

                          <option value="1">0</option>

                          <option value="2">1</option>

                          <option value="3">2</option>

                          <option value="4">3</option>

                          <option value="5">4</option>

                        </select>

                      </div>

                    </div>

                    <div class="cell-lg-12 cell-md-4">

                      <button class="button button-primary button-square button-block button-effect-ujarak" data-toggle="modal" href="#myModal" type="submit"><span>check availability</span></button>

                    </div>

                  </div>

                </form>

              </div>

            </div> --}}

            

          </div>

        </div>

      </section>



      <!-- Modal -->

  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <div class="modal-dialog">

      <div class="modal-content">

        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

          <h4 class="modal-title">Message</h4>

        </div>

        <div class="modal-body text-center">

          <p>Sorry, No available Rooms at the moment.</p>

        </div>

        <div class="modal-footer">

          <button type="button" class="button button-primary" data-dismiss="modal">OK</button>

        </div>

      </div><!-- /.modal-content -->

    </div><!-- /.modal-dialog -->

  </div><!-- /.modal -->





      <!-- About us-->

      <section class="section section-lg bg-white text-center text-sm-left">

        <div class="shell-wide">

          <div class="range range-50 range-xs-center overflow-hidden">

            <div class="cell-sm-12 cell-md-6 cell-lg-6 wow fadeInUp" data-wow-delay=".1s">

              <div class="post-video post-video-border">

                <div class="post-video__image" style="text-align:center;"><img src="{{ url('bh-img/logo/LS/BH-text.png') }}" alt="1020x525"

                  style=

                  "width: 70%;

                   height: 70%;

                   ">

                </div>

            
              </div>

            </div>

            <div class="cell-sm-12 cell-md-6 cell-lg-6 reveal-flex wow fadeInUp" data-wow-delay=".3s">

              <div class="bg-primary section-wrap-content-var-1">

                <div class="section-wrap-content-var-1-inner">

                  <h2>About Us</h2>

                  <p>We are committed to give you a hassle-free stay here in San Fernando Pampanga.</p>

                  <div class="group">

                    <dl class="list-desc">

                      <dt>Bendix Hotel:</dt>

                      <dd><span>&emsp;&emsp;24 hours</span></dd>

                    </dl>

                    <dl class="list-desc">

                      <dt>Ruben Restaurant:</dt>

                      <dd><span>9:00am - 9:00pm</span></dd>

                    </dl>

                  </div><a class="button button-effect-ujarak button-lg button-secondary-outline button-square" href="reservation"><span>Reserve Now</span></a>

                </div>

              </div>

            </div>

          </div>

        </div>

      </section>

      <!--Ruben-->

      <section class="section section-md bg-secondary-4 text-center text-sm-left">

        <div class="shell-wide">

          <div class="range range-50 range-justify range-middle">

            <div class="cell-sm-6 cell-md-5">

              <h3>Ruben Restaurant</h3>

              <p>Ruben is a bar, café and restaurant offering the best specialty coffee and cocktail experience in San Fernando, Pampanga.</p>
              <a href="ruben" class="button button-primary button button-square button-lg">Learn more</a>

              </div>

            <div class="cell-sm-6">
              
                  <div class="embed-responsive embed-responsive-16by9">
                    <video controls="" muted autoplay="" name="media"><source src="bh-img/Ruben/ruben-vid-low.mp4" type="video/mp4"></video>
                    {{-- <iframe class="embed-responsive-item" src="bh-img/Ruben/ruben-vid-low.mp4" allowfullscreen></iframe> --}}
                  </div>

                </div>

              </div>

            </div>

          </div>

        </div>

      </section>

      <!-- Portfolio-->

      <section class="section section-md bg-white text-center text-sm-left">

        <div class="shell">

          <div class="range range-10 range-middle">

            <div class="cell-sm-6">

              <h3>Our Gallery</h3>

            </div>

            {{-- <div class="cell-sm-6 text-sm-right"><a class="heading-link link-gray-darker" href="bh-img/gallery/wed-lobby.jpg">See All Photos</a></div> --}}

          </div>

          <hr>

          <div class="isotope-wrap">

            <!-- Isotope Content-->

            <div class="row isotope" data-isotope-layout="masonry" data-isotope-group="gallery" data-lightgallery="group">

              <div class="col-xs-12 col-sm-6 col-md-3 grid-sizer"></div>

              <div class="col-xs-12 col-sm-6 col-md-3 isotope-item wow fadeInUp" name="cname"  data-filter="Category 1" data-wow-delay=".1s">
                <a class="portfolio-item thumbnail-classic" href="bh-img/gallery/wed-lobby.jpg" data-size="533x800" data-lightgallery="item">
                  <img class="mx-auto d-block"  src="bh-img/gallery/wed-lobby.jpg" style="max-height: 325px !important;"/>

                  <div class="caption" name="capting"><p>Exclusive Venue of Your Choice</p></div></a>

              </div> 

              <div class="col-xs-12 col-sm-6 col-md-3 isotope-item wow fadeInUp" name="cname"  data-filter="Category 1" data-wow-delay=".2s">
                <a class="portfolio-item thumbnail-classic" href="bh-img/gallery/anniv2.jpg" data-size="533x800" data-lightgallery="item">
                  <img class="mx-auto d-block"  src="bh-img/gallery/anniv2.jpg" style="max-height: 325px !important;"/>

                  <div class="caption" name="capting"><p>Exclusive Venue of Your Choice</p></div></a>

              </div>

              <div class="col-xs-12 col-sm-6 col-md-3 isotope-item wow fadeInUp" name="cname"  data-filter="Category 1" data-wow-delay=".3s">
                <a class="portfolio-item thumbnail-classic" href="bh-img/gallery/LR-EDIT-4V1A2883.jpg" data-size="533x800" data-lightgallery="item"><img class="mx-auto d-block"  src="bh-img/gallery/LR-EDIT-4V1A2883.jpg" style="max-height: 325px !important;"/>

                <div class="caption" name="capting"><p>Premium Event Experience</p></div></a>
              </div>

              <div class="col-xs-12 col-sm-6 col-md-3 isotope-item wow fadeInUp" name="cname"  data-filter="Category 1" data-wow-delay=".3s">
                <a class="portfolio-item thumbnail-classic" href="bh-img/gallery/LR-EDIT-4V1A3284.jpg" data-size="533x800" data-lightgallery="item"><img class="mx-auto d-block"  src="bh-img/gallery/LR-EDIT-4V1A3284.jpg" style="max-height: 325px !important;"/>

                <div class="caption" name="capting"><p>Best Wedding Package Deals</p></div></a>
              </div>

              <div class="col-xs-12 col-sm-6 col-md-3 isotope-item wow fadeInUp" name="cname"  data-filter="Category 1" data-wow-delay=".3s">
                <a class="portfolio-item thumbnail-classic" href="bh-img/gallery/LR-EDIT-4V1A3166.jpg" data-size="533x800" data-lightgallery="item">
                  <img class="mx-auto d-block"  src="bh-img/gallery/LR-EDIT-4V1A3166.jpg" style="max-height: 325px !important;"/>

                <div class="caption" name="capting"><p>Great Catering Services</p></div></a>
              </div>

              <div class="col-xs-12 col-sm-6 col-md-3 isotope-item wow fadeInUp" name="cname"  data-filter="Category 1" data-wow-delay=".3s">
                <a class="portfolio-item thumbnail-classic" href="bh-img/gallery/bed-fix.JPG" data-size="533x800" data-lightgallery="item">
                  <img class="mx-auto d-block"  src="bh-img/gallery/bed-fix.JPG" style="max-height: 325px !important;"/>

                <div class="caption" name="capting"><p>Standard Service</p></div></a>
                
              </div>
              <div class="col-xs-12 col-sm-6 col-md-3 isotope-item wow fadeInUp" name="cname"  data-filter="Category 1" data-wow-delay=".4s">
                <a class="portfolio-item thumbnail-classic" href="bh-img/gallery/king-list.JPG" data-size="584x800" data-lightgallery="item">
                  <img class="mx-auto d-block"  src="bh-img/gallery/king-list.JPG" style="max-height: 325px !important;"/>
                <div class="caption" name="capting"><p>Standard Service</p></div></a>
              </div>


              <div class="col-xs-12 col-sm-6 col-md-3 isotope-item wow fadeInUp" name="cname"  data-filter="Category 1" data-wow-delay=".6s">
                <a class="portfolio-item thumbnail-classic" href="bh-img/gallery/bh-bldg.jpg" data-size="533x800" data-lightgallery="item"><img class="mx-auto d-block"  src="bh-img/gallery/bh-bldg.jpg" style="max-height: 325px !important;"/>

                <div class="caption" name="capting"><p>Your Rest and Refuge in One Place</p></div></a>
              </div>


              <div class="col-xs-12 col-sm-6 col-md-3 isotope-item wow fadeInUp" name="cname"  data-filter="Category 1" data-wow-delay=".3s">
                <a class="portfolio-item thumbnail-classic" href="bh-img/gallery/GKR.jpg" data-size="533x800" data-lightgallery="item">
                  <img class="mx-auto d-block"  src="bh-img/gallery/GKR.jpg" style="max-height: 325px !important;"/>

                <div class="caption" name="capting"><p>Affordable Rates</p></div></a>
              </div>

              <div class="col-xs-12 col-sm-6 col-md-3 isotope-item wow fadeInUp" name="cname"  data-filter="Category 1" data-wow-delay=".3s">
                <a class="portfolio-item thumbnail-classic" href="bh-img/gallery/pillow-fix.JPG" data-size="533x800" data-lightgallery="item">
                  <img class="mx-auto d-block"  src="bh-img/gallery/pillow-fix.JPG" style="max-height: 325px !important;"/>

                <div class="caption" name="capting"><p>Standar Service</p></div></a>
              </div>

              <div class="col-xs-12 col-sm-6 col-md-3 isotope-item wow fadeInUp" name="cname"  data-filter="Category 1" data-wow-delay=".3s">
                <a class="portfolio-item thumbnail-classic" href="bh-img/gallery/ETR.jpg" data-size="533x800" data-lightgallery="item">
                  <img class="mx-auto d-block"  src="bh-img/gallery/ETR.jpg" style="max-height: 325px !important;"/>

                <div class="caption" name="capting"><p>Affordable Ratese</p></div></a>
              </div>

              <div class="col-xs-12 col-sm-6 col-md-3 isotope-item wow fadeInUp" name="cname"  data-filter="Category 1" data-wow-delay=".3s">
                <a class="portfolio-item thumbnail-classic" href="bh-img/gallery/bath.jpg" data-size="533x800" data-lightgallery="item">
                  <img class="mx-auto d-block"  src="bh-img/gallery/bath.jpg" style="max-height: 325px !important;"/>

                <div class="caption" name="capting"><p>Affordable Rates</p></div></a>
              </div>

            </div>

          </div>

        </div>

      </section>

  
  <section class="section section-sm bg-white">
            <div class="shell">
              <div class="row">
                <div class='col-md-offset-2 col-md-8 text-center'>
                <h2>Our Guests Reviews</h2>
                </div>
              </div>
                    <!-- Swiper -->
                    <div class="swiper-container swiper-container-rev mySwiper">
                      <div class="swiper-wrapper">
                        <!-- Slide 1 -->
                        <div class="swiper-slide slide-adj" data-swiper-autoplay="5500">
                          <div class="container">
                          <div class="range range-center">
                          <div class="cell-xs-6 cell-md-4 cell-lg-6 text-center">
                            <iframe class="notouch" src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FMark24Flores%2Fposts%2F2753052424986139&show_text=true&width=auto" height="700" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                          </div>
                          <div class="cell-xs-6 cell-md-4 cell-lg-6 text-center">
                            <iframe class="notouch" src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fkrystle.plegaria%2Fposts%2F4825920637424159&show_text=true&width=auto" height="610" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                          </div>
                          </div> 
                        </div>
                        </div>
                        <!-- Slide 2 -->
                        <div class="swiper-slide slide-adj" data-swiper-autoplay="5500">
                          <div class="container">
                          <div class="range range-center">
                            <div class="cell-xs-6 cell-md-4 cell-lg-6 text-center">
                              <iframe class="notouch" src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Ftoberro.ratacanal%2Fposts%2F4386284638050802&show_text=true&width=auto" height="590" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                            </div> 
                            <div class="cell-xs-6 cell-md-4 cell-lg-6 text-center">
                              <iframe class="notouch" src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fjomz.smallbody%2Fposts%2F325392509163153&show_text=true&width=auto" height="550" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                              </div> 
                          </div>
                          </div>
                        </div>
                       <!-- Slide 3 -->
                       <div class="swiper-slide slide-adj" data-swiper-autoplay="5500">
                        <div class="container">
                        <div class="range range-center">
                          <div class="cell-xs-6 cell-md-4 cell-lg-6 text-center">
                            <iframe class="notouch" src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fprincessnhil.bitamog%2Fposts%2F320908969514924&show_text=true&width=auto" height="650" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                           </div> 
                           <div class="cell-xs-6 cell-md-4 cell-lg-6 text-center">
                            <iframe class="notouch" src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fhue.mart%2Fposts%2F1973839969431229&show_text=true&width=auto" height="612" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                          </div> 
                        </div>
                        </div> 
                      </div>
                      <!-- Slide 4 -->
                        <div class="swiper-slide slide-adj" data-swiper-autoplay="5500">
                          <div class="container">
                          <div class="range range-50">
                            <div class="cell-xs-6 cell-md-6 cell-lg-4 text-center">
                              <iframe class="notouch" src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fferdinand.delacruz.1422409%2Fposts%2F506521227223631&show_text=true&width=auto" height="165" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                            </div>
                            <div class="cell-xs-6 cell-md-6 cell-lg-4 text-center">
                              <iframe class="notouch" src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Faldrine.lopez%2Fposts%2F4103006639760560&show_text=true&width=auto" height="214" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                            </div>
                            <div class="cell-xs-6 cell-md-6 cell-lg-4 text-center">
                              <iframe class="notouch" src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Frodcharles.laniba.5%2Fposts%2F782898995947707&show_text=true&width=auto" height="225" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                            </div>
                            <div class="cell-xs-6 cell-md-6 cell-lg-4 text-center">
                              <iframe class="notouch" src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fmelyouh.ungtaga%2Fposts%2F3895775737144589&show_text=true&width=auto" height="225" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                            </div> 
                            <div class="cell-xs-6 cell-md-6 cell-lg-4 text-center">
                              <iframe class="notouch" src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fronnie.h.hernandez%2Fposts%2F4000057360042057&show_text=true&width=auto" height="225" height="225" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                            </div> 
                            <div class="cell-xs-6 cell-md-6 cell-lg-4 text-center">
                              <iframe class="notouch" src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Farjenray.c.sanjuan%2Fposts%2F2627793420700729&show_text=true&width=auto" height="197" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                            </div>
                            <div class="cell-xs-6 cell-md-6 cell-lg-4 text-center">
                              <iframe class="notouch" src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fvladi1102%2Fposts%2F5899390533408250&amp;show_text=true&amp;width=auto" height="265" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                            </div>
                            <div class="cell-xs-6 cell-md-6 cell-lg-4 text-center">
                              <iframe class="notouch" src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Flukejhadenandreu.gabriel.5%2Fposts%2F472782880720621&amp;show_text=true&amp;width=auto" height="385"  scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                            </div>
                          
                          </div>
                          </div> 
                        </div>

                         <!-- Slide 5 -->
                         <div class="swiper-slide slide-adj" data-swiper-autoplay="5500">
                          <div class="container">
                          <div class="range range-50">
                             <div class="cell-xs-6 cell-md-6 cell-lg-6 text-center">
                              <img class="notouch tripad-border" src="bh-img\bh-pic\TripReviews\amazing-5.png" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"> 
                            </div>
                             <div class="cell-xs-6 cell-md-6 cell-lg-6 text-center">
                              <img class="notouch tripad-border" src="bh-img\bh-pic\TripReviews\great-exp-5.png"  scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"> 
                            </div>
                             <div class="cell-xs-6 cell-md-6 cell-lg-6 text-center">
                              <img class="notouch tripad-border" src="bh-img\bh-pic\TripReviews\BW-BA-5.png"  scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"> 
                            </div>
                             <div class="cell-xs-6 cell-md-6 cell-lg-6 text-center">
                              <img class="notouch tripad-border" src="bh-img\bh-pic\TripReviews\Good-hotel-4.png" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"> 
                            </div> 
                          
                          </div>
                          </div> 
                        </div>

                        <!-- Slide 6 -->
                        <div class="swiper-slide slide-adj" data-swiper-autoplay="5500">
                          <div class="container">
                          <div class="range range-50">
                            
                             <div class="cell-xs-6 cell-md-6 cell-lg-6 text-center">
                              <img class="notouch tripad-border" src="bh-img\bh-pic\TripReviews\great-stay-5.png"scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"> 
                            </div> 
                             <div class="cell-xs-6 cell-md-6 cell-lg-6 text-center">
                              <img class="notouch tripad-border" src="bh-img\bh-pic\TripReviews\Nice-4.png"  scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"> 
                            </div>
                             <div class="cell-xs-6 cell-md-6 cell-lg-6 text-center">
                              <img class="notouch tripad-border" src="bh-img\bh-pic\TripReviews\Night-stop-4.png"  scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"> 
                            </div>
                             <div class="cell-xs-6 cell-md-6 cell-lg-6 text-center">
                              <img class="notouch tripad-border" src="bh-img\bh-pic\TripReviews\Bestplace-snfdo-3.png"   scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"> 
                            </div>                    
                          </div>
                          </div> 
                        </div>

                  </div>
                </div>
              </section>

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper('.swiper-container.swiper-container-rev.mySwiper', {
autoplay: {
delay: 5000,
},
});
</script>

      {{-- <div id="myta" class="TA-fixed">
        <div id="TA_cdsratingsonlynarrow217" class="TA_cdsratingsonlynarrow"><ul id="2wgRrIzk6" class="TA_links spYAVJ"><li id="EiJfIb5IK" class="IvrPh9X5yzO"><a target="_blank" href="https://www.tripadvisor.com.ph/Hotel_Review-g298455-d12693747-Reviews-Bendix_Hotel-San_Fernando_Pampanga_Province_Central_Luzon_Region_Luzon.html"><img src="https://www.tripadvisor.com.ph/img/cdsi/img2/branding/v2/Tripadvisor_lockup_horizontal_secondary_registered-18034-2.svg" alt="TripAdvisor"/></a></li></ul></div><script async src="https://www.jscache.com/wejs?wtype=cdsratingsonlynarrow&amp;uniq=217&amp;locationId=12693747&amp;lang=en_PH&amp;border=true&amp;display_version=2" data-loadtrk onload="this.loadtrk=true"></script>
      </div> --}}
@include('partial.footer')
   {{-- <div class="carousel slide" data-interval="false"data-ride="carousel" id="quote-carousel">
                    <!-- Bottom Carousel Indicators -->
                    <ol class="carousel-indicators">
                      <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                      <li data-target="#quote-carousel" data-slide-to="1"></li>
                      <li data-target="#quote-carousel" data-slide-to="2"></li>
                      <li data-target="#quote-carousel" data-slide-to="3"></li>
                      <li data-target="#quote-carousel" data-slide-to="4"></li>
                      <li data-target="#quote-carousel" data-slide-to="5"></li>
                      <li data-target="#quote-carousel" data-slide-to="6"></li>
                      
                    </ol>
                    
                    <!-- Carousel Slides / Quotes -->
                    <div class="carousel-inner" >
                    
                      <!-- Quote 1 -->
                      <div class="item active">
                        <blockquote class="mx-5">
                          
                            <div class="cell-sm-6">
                              <iframe class="notouch" src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FMark24Flores%2Fposts%2F2753052424986139&show_text=true&width=auto" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe> </div>
                            <div class="cell-sm-6">
                              <iframe class="notouch" src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fkrystle.plegaria%2Fposts%2F4825920637424159&show_text=true&width=auto"  height="712" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                            </div> 
                          
                        </blockquote>
                      </div>
                      <!-- Quote 2 -->
                      <div class="item">
                        <blockquote class="mx-5">
                          
                            <div class="cell-sm-6">
                              <iframe class="notouch" src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Ftoberro.ratacanal%2Fposts%2F4386284638050802&show_text=true&width=auto"  height="676" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                            </div>
                            <div class="cell-sm-6">
                              <iframe class="notouch" src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fjomz.smallbody%2Fposts%2F325392509163153&show_text=true&width=auto"  height="656" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                           
                          </div>
                        </blockquote>
                      </div>
                      <!-- Quote 3 -->
                      <div class="item">
                        <blockquote class="mx-5">
                          
                            <div class="cell-sm-6">
                              <iframe class="notouch" src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fferdinand.delacruz.1422409%2Fposts%2F506521227223631&show_text=true&width=auto"  height="165" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                            </div>
                            <div class="cell-sm-6">
                              <iframe class="notouch" src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Faldrine.lopez%2Fposts%2F4103006639760560&show_text=true&width=auto"  height="200" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                          
                          </div>
                        </blockquote>
                      </div>
                      <!-- Quote 4 -->
                      <div class="item">
                        <blockquote class="mx-5">
                          
                            <div class="cell-sm-6">
                              <iframe class="notouch" src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fprincessnhil.bitamog%2Fposts%2F320908969514924&show_text=true&width=auto"  height="730" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                            </div>
                            <div class="cell-sm-6">
                              <iframe class="notouch" src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fhue.mart%2Fposts%2F1973839969431229&show_text=true&width=auto"  height="694" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                            
                          </div>
                        </blockquote>
                      </div>
                       <!-- Quote 5-->
                       <div class="item">
                        <blockquote class="mx-5">
                          
                            <div class="cell-sm-6">
                              <iframe class="notouch" src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Frodcharles.laniba.5%2Fposts%2F782898995947707&show_text=true&width=auto"  height="225" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                            </div>
                            <div class="cell-sm-6">
                              <iframe class="notouch" src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fmelyouh.ungtaga%2Fposts%2F3895775737144589&show_text=true&width=auto"  height="225" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                            
                          </div>
                        </blockquote>
                      </div>
                      <!-- Quote 6-->
                      <div class="item">
                        <blockquote class="mx-5">
                          
                            <div class="cell-sm-6">
                              <iframe class="notouch" src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fronnie.h.hernandez%2Fposts%2F4000057360042057&show_text=true&width=auto"  height="225" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                            </div>
                            <div class="cell-sm-6">
                              <iframe class="notouch" src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Farjenray.c.sanjuan%2Fposts%2F2627793420700729&show_text=true&width=auto"  width="375" height="169" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                           
                          </div>
                        </blockquote>
                      </div>
                      <!-- Quote 7-->
                      <div class="item">
                        <blockquote class="mx-5">
                          
                            <div class="cell-sm-6">
                              <iframe class="notouch" src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fvladi1102%2Fposts%2F5899390533408250&amp;show_text=true&amp;width=400" width="400" height="225" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                            </div>
                            <div class="cell-sm-6">
                              <iframe class="notouch" src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Flukejhadenandreu.gabriel.5%2Fposts%2F472782880720621&amp;show_text=true&amp;width=350" width="400" height="340" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                          </div>
                        </blockquote>
                      </div>
                    
                    <!-- Carousel Buttons Next/Prev -->
                    {{-- <a class="" data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="glyphicon glyphicon-chevron-left"></i></a>
                    <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="glyphicon glyphicon-chevron-right"></i></a> 
                  </div>                          
                </div> --}}