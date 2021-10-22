{{-- <!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  @include('partial.header')
  <body>
    <!-- Page-->
        {{-- @include('partial.loader') --}}
      <!-- Page Header-->
    {{-- @include('partial.navbar') --}}
    <section class="section section-md bg-white text-center">
      <div class="shell">
        <div class="range range-50 range-md-center">
          <div class="cell-sm-8">
            <div class="contact-box">
              <h3>Get in touch</h3>
              <p>Send your inquiries through text, call or by email. You can also use our quick contact form. We would be pleased to answer your questions.</p>
              @if (count($errors) > 0)
                <div class="aler alert-danger">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <ul>
                      @foreach ($errors->all as $error )
                          <li>{{ $error }}</li>                        
                      @endforeach
                    </ul>
                </div>
              @endif
              <form class="rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                @csrf
                <div class="range range-sm-bottom spacing-20">
                  <div class="cell-sm-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-first-name" type="text" name="name" data-constraints="@Required">
                      <label class="form-label" for="contact-first-name">Your name</label>
                    </div>
                  </div>
                  <div class="cell-sm-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-last-name" type="text" name="phone" data-constraints="@Numeric">
                      <label class="form-label" for="contact-last-name">Phone</label>
                    </div>
                  </div>
                  <div class="cell-xs-12">
                    <div class="form-wrap">
                      <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                      <label class="form-label" for="contact-message">Your Message</label>
                    </div>
                  </div>
                  <div class="cell-sm-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                      <label class="form-label" for="contact-email">E-mail</label>
                    </div>
                  </div>
                  <div class="cell-sm-6">
                    <button name="send" value="Send" class="button button-primary button-square button-block button-effect-ujarak" type="submit"><span>Send Message</span></button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="cell-sm-4">
            <aside class="contact-box-aside text-left">
              <div class="range range-50">
                <div class="cell-xs-6 cell-sm-12">
                  <p class="aside-title"> Hotel hours</p>
                  <hr class="divider divider-left divider-custom">
                  <div class="unit unit-middle unit-horizontal unit-spacing-xs unit-xs-top">
                    <div class="unit__left"><span class="text-middle icon icon-sm mdi mdi-clock icon-primary"></span></div>
                    <div class="unit__body text-gray-darker">
                      <p>We work every day 9:00am – 11:00pm</p>
                    </div>
                  </div>
                </div>
                <div class="cell-xs-6 cell-sm-12">
                  <p class="aside-title"> Contacts</p>
                  <hr class="divider divider-left divider-custom">
                  <div class="unit unit-middle unit-horizontal unit-spacing-xs unit-xs-top">
                    <div class="unit__left"><span class="text-middle icon icon-sm mdi mdi-phone icon-primary"></span></div>
                      <div class="unit__body">
                        <ul>
                          <li>
                            Telephone:&emsp;<a class="text-middle link link-gray-dark" href="tel:#">
                              (045)-961-2378</a></li>
                          <li>
                            Mobile:&emsp;&ensp;&emsp;<a class="text-middle link link-gray-dark" href="tel:#">
                              0998-584-4565 </a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="unit unit-middle unit-horizontal unit-spacing-xs unit-xs-top">
                      <div class="unit__left"><span class="text-middle icon icon-sm mdi mdi-email icon-primary"></span></div>
                        <div class="unit__body">
                          <ul>
                            <li>
                              Email:&emsp;&emsp;&emsp;<a class="text-middle link link-gray-dark" href="tel:#">
                                  sales@bendixhotel.com</a></li>
                          </ul>
                       </div>
                    </div>
                </div>
                <div class="cell-xs-6 cell-sm-12">
                  <p class="aside-title"> Address</p>
                  <hr class="divider divider-left divider-custom">
                  <div class="unit unit-middle unit-horizontal unit-spacing-xs unit-xs-top">
                    <div class="unit__left"><span class="text-middle icon icon-sm mdi mdi-map-marker icon-primary"></span></div>
                    <div class="unit__body"><a class="text-middle link link-gray-dark" href="https://goo.gl/maps/MwHmMAPbuDKPYzXH6">MacArthur Highway,Dolores, City of San Fernando, Pampanga 2000</a></div>
                  </div>
                </div>
                <div class="cell-xs-6 cell-sm-12">
                  <p class="aside-title"> Social Media Pages</p>
                  <hr class="divider divider-left divider-custom">
                  <ul class="list-inline">
                    <li><a class="icon icon-sm icon-gray-3 fa-md fa-instagram" href="https://www.instagram.com/bendixhotel/"></a></li>
                    <li><a class="icon icon-sm icon-gray-3 fa-md fa-facebook" href="https://www.facebook.com/bendixhotel"></a></li>
                </div>
              </div>
            </aside>
          </div>
        </div>
      </div>
    </section>
    {{-- @include('partial.footer') --}}
  