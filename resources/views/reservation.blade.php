@include('partial.head')
<body>
@include('partial.header')
<section class="section section-md bg-white text-center">
      <div class="shell">
        <div class="range range-50 range-md-center">
          <div class="cell-sm-8">
            <div class="contact-box">
            <h3>Get in touch</h3>
            <p>Send your inquiries through text, call or by email. You can also use our quick contact form. We would be pleased to answer your questions.</p>
      
              <form id="prev-form-multiple" action="{{ route('send.email') }}" method="post">
              @honeypot
              @csrf

                     <div class="range range-sm-bottom spacing-20">
                        <div class="cell-sm-6">
                          @error('name')
                          <p class="text-danger">{{ $message }}&emsp;<span class="glyphicon glyphicon-remove text-danger"></span></p>
                      @enderror
                          <div class="form-wrap">
                            <input class="form-input" id="contact-first-name" type="text" name="name" data-constraints="@Required">
                            <label class="form-label" for="contact-first-name">Your name</label>
      
                          </div>
                        </div>              
                <div class="cell-sm-6">
                  @error('phone')
                  <p class="text-danger">{{ $message }}&emsp;<span class="glyphicon glyphicon-remove text-danger"></span></p>
              @enderror
                          <div class="form-wrap">
                            <input class="form-input" id="contact-phone" type="text" name="phone" >
                            <label class="form-label" for="contact-phone">Phone</label>
                          </div>
                        </div>
                <input class="form-input" id="contact-subject" type="hidden" name="subject" value="Bendix-Web-Inquiry">                                        
                <div class="cell-xs-12">
                  @error('content')
                  <p class="text-danger">{{ $message }}&emsp;<span class="glyphicon glyphicon-remove text-danger"></span></p>
              @enderror
                          <div class="form-wrap">
                            <textarea class="form-input" id="contact-message" name="content" data-constraints="@Required"></textarea>
 
                            <label class="form-label" for="contact-message">Your Message</label>
                          </div>
                        </div>
          
                <div class="cell-sm-6">
                  @error('content')
                  <p class="text-danger">{{ $message }}&emsp;<span class="glyphicon glyphicon-remove text-danger"></span></p>
              @enderror
                          <div class="form-wrap">
                            <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                            <label class="form-label" for="contact-email">E-mail</label>
                          </div>
                        </div>
                      
                <div class="cell-sm-6">
                  <button id="prev-btn-multiple" type="submit" class="button button-primary button-square button-block">
                    <span>Send Message</span>
                  </button>
                </div>
               </div>
              </form>
              <div class="mt-5 pt-5">
    <h4>Public Announcement</h4>
                <p style="color: black" class="mt-4">
                    Due to COVID-19 pandemic, Bendix Hotel is functioning as an accredited quarantine hotel of Overseas Workers Welfare Administration (OWWA) for returning OFWs. <br>
                    Therefore as of now we only accept bookings from OWWA.
                </p>
            </div>
            </div>
          </div>
          <div class="cell-sm-4">
            <aside class="contact-box-aside text-left">
              <div class="range range-50 range-center">
                <div class="cell-xs-4 cell-sm-12">
                  <p class="aside-title">Hotel hours</p>
                  <hr class="divider divider-left divider-custom">
                  <div class="unit unit-middle unit-horizontal unit-spacing-xs unit-xs-top">
                    <div class="unit__left"><span class="text-middle icon icon-sm mdi mdi-clock icon-primary"></span></div>
                    <div class="unit__body text-gray-darker">
                      <p>We work 24/7</p>
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
                            Telephone:&emsp;<a class="text-right link link-gray-dark" href="tel:#">
                              <br class="br-res">(045)-961-2378</a></li>
                          <li>
                            Mobile:&emsp;&ensp;&emsp;<a class="text-right link link-gray-dark" href="tel:#">
                             <br class="br-res">0998-584-4565 </a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="unit unit-middle unit-horizontal unit-spacing-xs unit-xs-top">
                      <div class="unit__left"><span class="text-middle icon icon-sm mdi mdi-email icon-primary"></span></div>
                        <div class="unit__body">
                          <ul>
                            <li class="mt-3">
                              <br class="br-res">
                              Email:&emsp;&ensp;<a class="text-middle link link-gray-dark" href="tel:#">
                                  sales@bendixhotel.com.ph</a></li>
                          </ul>
                       </div>
                    </div>
                </div>
                
                <div class="cell-xs-4 cell-sm-12">
                  <p class="aside-title"> Social Media Pages</p>
                  <hr class="divider divider-left divider-custom">
                  <ul class="list-inline">
                    <li><a class="icon icon-sm icon-gray-3 fa-md fa-instagram" href="https://www.instagram.com/bendixhotel/"></a></li>
                    <li><a class="icon icon-sm icon-gray-3 fa-md fa-facebook" href="https://www.facebook.com/bendixhotel"></a></li>
                </ul></div><div class="cell-xs-6 cell-sm-12">
                  <p class="aside-title"> Address</p>
                  <hr class="divider divider-left divider-custom">
                  <div class="unit unit-middle unit-horizontal unit-spacing-xs unit-xs-top">
                    <div class="unit__left"><span class="text-middle icon icon-sm mdi mdi-map-marker icon-primary"></span></div>
                    <div class="unit__body"><a class="text-middle link link-gray-dark" href="https://goo.gl/maps/MwHmMAPbuDKPYzXH6">MacArthur Highway,Dolores, City of San Fernando, Pampanga 2000</a></div>
                  </div>
                </div>
                
              </div>
            </aside>
          </div>
        </div>
      </div>
    </section>
    <div class="modal fade" id="emailmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
          </div>
          <div class="modal-body text-center">
            @if ($errors->any())
    
                <p>Oopps! Something went wrong.</p>
                @foreach ($errors as $error )
                <li>{{ $error }}</li>
                @endforeach
            
             @endif

             @if(session()->has('message'))
                  <p>
                    {{ session()->get('message') }}
                  </p>
                  @endif
          </div>
          <div class="modal-footer">
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
 
@include('partial.footer')