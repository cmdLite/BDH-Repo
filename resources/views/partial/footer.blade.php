 <!-- Page Footer-->
 <footer class="page-footer text-left text-sm-left">
  <div class="section">
    <div class="page-footer-minimal">
      <div class="shell-wide">
        <div class="range range-50">
          <div class="cell-sm-6 cell-md-3 cell-lg-4 wow fadeInUp" data-wow-delay=".1s">
            <div class="page-footer-minimal-inner">
              <h4>Operation Hours</h4>
              <ul class="list-unstyled">
                <li>
                  <div class="group-xs"> 
                    <div>
                      <dl class="list-desc">
                        <dt>Hotel:</dt>
                        <dd class="text-gray-darker"><span>24/7</span></dd>
                      </dl>
                    </div>
                    <div>
                      <dl class="list-desc">
                        <dt>Restaurant: </dt>
                        <dd class="text-gray-darker"><span>Daily / 9 am - 9 pm</span></dd>
                      </dl>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="cell-sm-6 cell-md-5 cell-lg-4 wow fadeInUp" data-wow-delay=".2s">
            <div class="page-footer-minimal-inner">
              <h4>Contact & Address</h4>
              <ul class="list-unstyled">
                <li>
                  <dl class="list-desc">
                    <dt><span class="icon icon-sm mdi mdi-map-marker"></span></dt>
                    <dd><a class="link link-gray-darker" href="#">MacArthur Highway,Dolores,
                      City of San Fernando, Pampanga 2000</a></dd>
                  </dl>
                </li>
                <li>
                  <dl class="list-desc">
                    <dt><span class="icon icon-sm mdi mdi-phone"></span></dt>               
                     <dd class="col text-gray-darker" style="padding-top: 3px;">Call Us:</dd> 
                      <ul class="col">
                       <li>
                         <a class="text-middle link link-gray-dark" href="tel:#">
                            (045)-961-2378</a></li>
                        <li>
                         <a class="text-middle link link-gray-dark" href="tel:#">
                            0998-584-4565 </a></li>
                      </ul>      
                  </dl>
                </li>
                <li>
                  <dl class="list-desc">
                    <dt><span class="icon icon-sm mdi mdi-email"></span></dt>
                    <dd class="text-gray-darker">Email Us: <a class="link link-gray-darker" href="tel:#"> sales@bendixhotel.com.ph</a>
                    </dd>
                  </dl>
                </li>
              </ul>
            </div>
          </div>
          <div class="cell-sm-8 cell-md-4 wow fadeInUp" data-wow-delay=".3s">
            <div class="page-footer-minimal-inner-subscribe">
              <h4>Join Our Newsletter</h4>
              <!-- RD Mailform-->
              <form  method="post" action="{{ route('send.subs') }}">
                @honeypot
                @csrf
                <div class="form-wrap">
                  <input class="form-input" id="subscribe-email" type="email" name="emailsubs" data-constraints="@Email @Required">
                  <label class="form-label" for="subscribe-email">Enter your e-mail</label>
                </div>
                <button class="button button-primary-2 button-effect-ujarak button-square" type="submit"><span>Subscribe</span></button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- PANEL-->
<div class="modal fade" id="subsmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      </div>
      <div class="modal-body text-center">
         @if ($errors->has('emailsubs'))
         <p>Please Provide your active Email to Subscribe</p>
          @endif
          @if(session()->has('subsalready'))
          <p>
            {{ session()->get('subsalready') }}
          </p>
          @endif
           @if(session()->has('subsmsg'))
                <p>
                  {{ session()->get('subsmsg') }}
                </p>
                @endif
                @if(session()->has('subsfail'))
                <p>
                  {{ session()->get('subsfail') }}
                </p>
                @endif
      </div>
      <div class="modal-footer">
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- END PANEL-->
<!-- Global Mailform Output-->
<div class="snackbars" id="form-output-global"></div>
<!-- PhotoSwipe Gallery-->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
<div class="pswp__bg"></div>
<div class="pswp__scroll-wrap">
  <div class="pswp__container">
    <div class="pswp__item"></div>
    <div class="pswp__item"></div>
    <div class="pswp__item"></div>
  </div>
  <div class="pswp__ui pswp__ui--hidden">
    <div class="pswp__top-bar">
      <div class="pswp__counter"></div>
      <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
      <button class="pswp__button pswp__button--share" title="Share"></button>
      <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
      <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
      <div class="pswp__preloader">
        <div class="pswp__preloader__icn">
          <div class="pswp__preloader__cut">
            <div class="pswp__preloader__donut"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
      <div class="pswp__share-tooltip"></div>
    </div>
    <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
    <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
    <div class="pswp__caption">
      <div class="pswp__caption__cent"></div>
    </div>
  </div>
</div>
</div>
<!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/pointer-events.min.js"></script>
    <script src="js/html5shiv.min.js"></script>
    <script type="text/javascript">
    @if ($errors->has('emailsubs'))
    $('#subsmodal').modal('show');
    setTimeout(function() {
        $('#subsmodal').modal('hide');
    }, 5000); 
    @elseif (count($errors) > 0)
    $('#emailmodal').modal('show');
    setTimeout(function() {
        $('#emailmodal').modal('hide');
    }, 5000); 
    @elseif(session()->has('subsmsg'))
    $('#subsmodal').modal('show');
    setTimeout(function() {
      $('#subsmodal').modal('hide');
    }, 5000); 
    @elseif(session()->has('message'))
    $('#emailmodal').modal('show');
    setTimeout(function() {
      $('#emailmodal').modal('hide');
    }, 5000); 
    @endif
      </script>
  </body>
</html>