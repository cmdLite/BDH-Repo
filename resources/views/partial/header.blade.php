<header class="page-header" style="padding-bottom: 24px">
    <!-- RD Navbar-->
    <div class="rd-navbar-wrap">
      <nav class="rd-navbar rd-navbar-default-with-top-panel" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fullwidth" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fullwidth" data-lg-device-layout="rd-navbar-fullwidth" data-md-stick-up-offset="90px" data-lg-stick-up-offset="150px" data-stick-up="true" data-sm-stick-up="true" data-md-stick-up="true" data-lg-stick-up="true">
        <div class="rd-navbar-top-panel rd-navbar-collapse">
          <div class="rd-navbar-top-panel-inner">
            <div class="col-md-4">
              <div class="group"><span class="text-italic">Follow Us:</span>
                <ul class="list-inline">
                  <li><a class="icon icon-md icon-secondary-5 fa-md fa-instagram" href="https://www.instagram.com/bendixhotel/"></a></li>
                  <li><a class="icon icon-md icon-secondary-5 fa-md fa-facebook" href="https://www.facebook.com/bendixhotel"></a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <!-- RD Navbar Brand-->
              <div class="rd-navbar-brand fullwidth-brand text-center"><a class="brand-name" href="{{ url('/') }}"><img src="{{ url('bh-img/SVG/logo-web.svg') }}" alt="" width="200" height="20"/></a></div>
            </div>
            <div class="col-md-4">
              <!-- Contact Info-->
              <div class="contact-info">
                <div class="unit unit-middle unit-horizontal unit-spacing-sm">
                  <div class="unit__left"><span class="icon icon-primary text-middle mdi mdi-phone"></span></div>
                  <div class="unit__body"><a class="text-middle" href="tel:#">(045)-961-2378 <br> 0998-584-4565</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="rd-navbar-inner">
          <!-- RD Navbar Panel-->
          <div class="rd-navbar-panel">
            <!-- RD Navbar Toggle-->
            <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
            <!-- RD Navbar collapse toggle-->
            <button class="rd-navbar-collapse-toggle" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></button>
            <!-- RD Navbar Brand-->
            <div class="rd-navbar-brand mobile-brand" style="margin-left: 2rem;"><a class="brand-name" href="index.html"><img src="{{ url('bh-img/SVG/logo-web.svg') }}" alt="" width="100" height="40"/></a></div>
          </div>
          <div class="rd-navbar-aside-right">
            <div class="rd-navbar-nav-wrap">
              <div class="rd-navbar-nav-scroll-holder">
                <ul class="rd-navbar-nav">
                  <li class="{{ Request::segment(1)=='' ? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
                  <li class="{{ Request::segment(1)=='aboutus' ? 'active' : '' }}"><a href="{{ url('aboutus') }}">About</a></li>
                  <li class="{{ Request::segment(1)=='rooms' ? 'active' : '' }}"><a href="rooms">Rooms</a>
                  </li>
                  <li class="{{ Request::segment(1)=='ruben' ? 'active' : '' }}"><a href="ruben">Ruben</a>
                  </li>
                  <li class="{{ Request::segment(1)=='facilities' ? 'active' : '' }}"><a href="facilities">Other Facilities</a>
                  </li>                
                  <li class="{{ Request::segment(1)=='reservation' ? 'active' : '' }}"><a href="reservation">Reservation</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
    {{-- @include('partial.loader') --}}
  </header>