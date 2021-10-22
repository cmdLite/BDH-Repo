<section class="section section-lg">
    <div class="shell">
      <h2>Our Menu</h2>
      <p>RUBEN serves one of the finest casual dinning cuisines with unique designs that provide both a luxurious and relaxing environment.
      <div id="myCarousel" class="carousel slide" data-interval="false">
        <!-- Indicators -->
        <div class="menu-caption rubenbtn">
          <button class="m-menu" data-target="#myCarousel" data-slide-to="0"><h3 class="to-h2">Meals</h3></button>
          <button class="m-menu" data-target="#myCarousel" data-slide-to="1"><h3 class="to-h2">Drinks</h3></button>
          <button class="m-menu" data-target="#myCarousel" data-slide-to="2"><h3 class="to-h2">Party Trays</h3></button>
        </div>
        <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
          <div class="menu-title">
            <h4>Starters</h4></div>
                      <div class="shell-rb">
                        <div class="row d-flex justify-content-between">
                          <div class="col-xs-10">
                            <ul class="rub-ul rub-ul-l" id="starters">
                              @foreach ($Starters as $Starter)
                              <li class="rub-li">
                                <label imge="{{$Starter->img_dir}}" namef="{{$Starter->name}}">
                                <a type="button" 
                                data-toggle="modal" href="#myModal"
                                >
                                {{$Starter->name}}
                                 </a>
                                </label>
                              </li>
                              @endforeach
                            </ul>
                          </div>
                          <div class="col-xs-2">
                            <ul class="rub-ul rub-ul-r">
                              @foreach ($Starters as $Starter)
                              <li class="rub-li">₱{{ $Starter->price_def }}</a></label></li>
                              @endforeach
                            </ul>
                          </div>
                        </div>
                      </div>
            <div class="menu-title">
            <h4>Steak</h4></div>
                      <div class="shell-rb">
                        <div class="row d-flex justify-content-between">
                          <div class="col-xs-10">
                          <ul class="rub-ul rub-ul-l">
                            @foreach ($Steaks as $Steak)
                              <li class="rub-li">
                                <label imge="{{$Steak->img_dir}}" namef="{{$Steak->name}}">
                                <a type="button" 
                                data-toggle="modal" href="#myModal"
                                >
                                {{$Steak->name}}
                                </a></label></li>
                            @endforeach
                            {{-- <li class="rub-li">Certified Angus Ribeye Steak with Chimichurri</li> --}}
                          </ul>
                        </div>
                          <div class="col-xs-2">
                          <ul class="rub-ul rub-ul-r">
                              <li>₱980</li>
                          </ul>
                            </div>
                          </div>
                        </div>
                        <div class="menu-title">
            <h4>Pasta & Sandwiches</h4></div>
                        <div class="shell-rb">
                          <div class="row d-flex justify-content-between">
                            <div class="col-xs-10">
                              <ul class="rub-ul rub-ul-l">
                                @foreach ($PandS as $PS)
                              <li class="rub-li">
                                <label imge="{{$PS->img_dir}}" namef="{{$PS->name}}">
                                <a type="button" 
                               data-toggle="modal" href="#myModal"                                
                                >{{ $PS->name }}</a></label></li>
                                @endforeach
                            </ul>
                          </div>
                          <div class="col-xs-2">
                            <ul class="rub-ul rub-ul-r">
                              @foreach ($PandS as $PS)
                              <li>₱{{ $PS->price_def }}</a></label></li>
                              @endforeach
                            </ul>
                              </div>
                            </div>
                          </div>
                          <div class="menu-title">
                              <h4>Rice</h4> </div>
                          <div class="shell-rb">
                            <div class="row d-flex justify-content-between">
                            <div class="col-xs-10">
                            <ul class="rub-ul rub-ul-l">
                              @foreach ($Rices as $Rice)
                              <li class="rub-li">
                                <label imge="{{$Rice->img_dir}}" namef="{{$Rice->name}}">
                                <a type="button" 
                               data-toggle="modal" href="#myModal"                                
                                >{{ $Rice->name }}</a></label></li>
                              @endforeach
                                </ul>
                              </div>
                                <div class="col-xs-2">
                                <ul class="rub-ul rub-ul-r">
                                  @foreach ($Rices as $Rice)
                                  <li>₱{{ $Rice->price_def }}</a></label></li>
                                  @endforeach
                                </ul>
                              </div>
                              </div>
                            </div>
                            <div class="menu-title">
                          <h4>Specials</h4></div>
                            <div class="shell-rb">
                              <div class="row d-flex justify-content-between">
                                <div class="col-xs-10">
                        <ul class="rub-ul rub-ul-l">
                          @foreach ($Specials as $Special)
                          <li class="rub-li">
                            <label imge="{{$Special->img_dir}}" namef="{{$Special->name}}">
                            <a type="button" 
                           data-toggle="modal" href="#myModal"                                
                            >{{ $Special->name }}</a></label></li>
                                  @endforeach
                      </ul>
                       </div>
                       <div class="col-xs-2">
                      <ul class="rub-ul rub-ul-r">
                        @foreach ($Specials as $Special)
                                  <li>₱{{ $Special->price_def }}</a></label></li>
                                 @endforeach
                      </ul>
                    </div>
                      </div>
                   </div>
                <div class="menu-title">
                <h4>Soup, Salad & Paella</h4></div>
                      <div class="shell-rb">
                        <div class="row d-flex justify-content-between">
                          <div class="col-xs-10">
                            <ul class="rub-ul rub-ul-l"> 
                              @foreach ($SSlPs as $SSlP)
                              <li class="rub-li">
                                <label imge="{{$SSlP->img_dir}}" namef="{{$SSlP->name}}">
                                <a type="button" 
                               data-toggle="modal" href="#myModal"                                
                                >{{ $SSlP->name }}</a></label></li>
                              @endforeach                     
                            </ul>
                              </div>
                          <div class="col-xs-2">  
                            <ul class="rub-ul rub-ul-r">
                              @foreach ($SSlPs as $SSlP)
                              <li>₱{{ $SSlP->price_def}}</a></label></li>
                             @endforeach
                            </ul>
                          </div>
                          </div>
                        </div>
        </div>        
        <div class="item">
                  <div class="menu-title" style="padding-left: 0px !important; padding-right: 0px !important;">
                    <div class="shell-dr mr-5">
                   <div class="row d-flex rub-ul">
                    <div class="col-lg-10 col-10 col-md-10 col-xs-10"><h4>Hot</h4></div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-right">16oz</div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-right">12oz</div>
                  </div>
                   </div>
                   </div>
                          <div class="shell-rb mr-5">
                            <div class="row d-flex justify-content-between">
                              <div class="col-xs-10">
                                <ul class="rub-ul rub-ul-l"> 
                                  @foreach ($Hots as $Hot)
                                  <li class="rub-li">
                                    <label imge="{{$Hot->img_dir}}" namef="{{$Hot->name}}">
                                    <a type="button" 
                                   data-toggle="modal" href="#myModal"                                
                                    >{{ $Hot->name }}</a></label></li>
                                  @endforeach                     
                                </ul>
                                  </div>
                              <div class="col-xs-2">  
                                <ul class="rub-ul rub-ul-r">
                                  @foreach ($Hots as $Hot)
                                  <li>₱{{ $Hot->price_small}}</a></label></li>
                                 @endforeach
                                </ul>
                              </div>
                              <div class="col-xs-2">  
                                <ul class="rub-ul rub-ul-r">
                                  @foreach ($Hots as $Hot)
                                  <li>₱{{ $Hot->price_large}}</a></label></li>
                                 @endforeach
                                </ul>
                              </div>
                              </div>
                            </div>
                            <div class="menu-title" style="padding-left: 0px !important; padding-right: 0px !important;">
                              <div class="shell-dr mr-5">
                             <div class="row d-flex rub-ul">
                              <div class="col-lg-10 col-10 col-md-10 col-xs-10"><h4>Over Ice</h4></div>
                              <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-right">16oz &ensp;₱{{ $OverIce1->price_small }}</div>
                              <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-right">22oz &ensp;₱{{ $OverIce1->price_large }}</div>
                            </div>
                             </div>
                             </div>
                                    <div class="shell-rb mr-5">
                                      <div class="row d-flex justify-content-between">
                                        <div class="col-xs-10">
                                          <ul class="rub-ul rub-ul-l"> 
                                            @foreach ($OverIces as $OI)
                                            <li class="rub-li">
                                              <label imge="{{$OI->img_dir}}" namef="{{$OI->name}}">
                                              <a type="button" 
                                             data-toggle="modal" href="#myModal"                                
                                              >{{ $OI->name }}</a></label></li>
                                            @endforeach                     
                                          </ul>
                                            </div>
                                        <div class="col-xs-2">  
                                          <ul class="rub-ul rub-ul-r" style="margin-right: 10px;">
                                            @foreach ($OverIces as $OI)
                                            <li>-</li>
                                           @endforeach
                                          </ul>
                                        </div>
                                        <div class="col-xs-2">  
                                          <ul class="rub-ul rub-ul-r" style="margin-right: 10px;">
                                            @foreach ($OverIces as $OI)
                                            <li>-</li>
                                           @endforeach
                                          </ul>
                                        </div>
                                        </div>
                                      </div>
                      <div class="menu-title" style="padding-left: 0px !important; padding-right: 0px !important;">
                        <div class="shell-dr mr-5">
                        <div class="row d-flex rub-ul">
                        <div class="col-lg-10 col-10 col-md-10 col-xs-10"><h4>Ice Blended</h4></div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-right">16oz &ensp;₱{{ $IceBlend1->price_small }}</div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-right">22oz &ensp;₱{{ $IceBlend1->price_large }}</div>
                      </div>
                        </div>
                        </div>
                              <div class="shell-rb mr-5">
                                <div class="row d-flex justify-content-between">
                                  <div class="col-xs-10">
                                    <ul class="rub-ul rub-ul-l" style="margin-right: 10px;"> 
                                      @foreach ($IceBlends as $OI)
                                      <li class="rub-li">
                                        <label imge="{{$OI->img_dir}}" namef="{{$OI->name}}">
                                        <a type="button" 
                                        data-toggle="modal" href="#myModal"                                
                                        >{{ $OI->name }}</a></label></li>
                                      @endforeach                     
                                    </ul>
                                      </div>
                                  <div class="col-xs-2">  
                                    <ul class="rub-ul rub-ul-r" style="margin-right: 10px;">
                                      @foreach ($IceBlends as $OI)
                                      <li>-</li>
                                      @endforeach
                                    </ul>
                                  </div>
                                  <div class="col-xs-2">  
                                    <ul class="rub-ul rub-ul-r" style="margin-right: 10px;">
                                      @foreach ($IceBlends as $OI)
                                      <li>-</li>
                                      @endforeach
                                    </ul>
                                  </div>
                                  </div>
                                </div>
                  
                            <div class="menu-title" style="padding-left: 0px !important; padding-right: 0px !important;">
                              <div class="shell-dr mr-5">
                             <div class="row d-flex rub-ul">
                              <div class="col-lg-10 col-10 col-md-10 col-xs-10"><h4>Others</h4></div>
                            </div>
                             </div>
                             </div>
                                    <div class="shell-rb mr-5">
                                      <div class="row d-flex justify-content-between">
                                        <div class="col-xs-10">
                                          <ul class="rub-ul rub-ul-l"> 
                                            @foreach ($Others as $Hot)
                                            <li class="rub-li">
                                              <label imge="{{$Hot->img_dir}}" namef="{{$Hot->name}}">
                                              <a type="button" 
                                             data-toggle="modal" href="#myModal"                                
                                              >{{ $Hot->name }}</a></label></li>
                                            @endforeach                     
                                          </ul>
                                            </div>
                                        <div class="col-xs-2">  
                                          <ul class="rub-ul rub-ul-r">
                                            @foreach ($Others as $Hot)
                                            <li>₱{{ $Hot->price_small}}</a></label></li>
                                           @endforeach
                                          </ul>
                                        </div>         
                                        </div>
                                      </div>
          </div><!-- drinks closeing -->
        <div class="item">
          <div class="menu-title">
            <p class="tray-p">*All trays are good for 6-7 pax*</p>
            <h4>Appetizer</h4></div>
            <div class="shell-rb">
              <div class="row d-flex justify-content-between">
                <div class="col-xs-10">
                <ul class="rub-ul rub-ul-l">                      
                  @foreach ($Appetizers as $Appetizer)
                  <li class="rub-li">
                    <label imge="{{$Appetizer->img_dir}}" namef="{{$Appetizer->name}}">
                    <a type="button" 
                   data-toggle="modal" href="#myModal"                                
                    >{{ $Appetizer->name }}</a></label></li>
                  @endforeach
                </ul>
              </div>
              <div class="col-xs-2">
                <ul class="rub-ul rub-ul-r">
                  @foreach ($Appetizers as $Appetizer)
                  <li>₱{{ $Appetizer->price_def}}</a></label></li>
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
          <div class="menu-title">
            <h4>Salad</h4></div>
            <div class="shell-rb">
              <div class="row d-flex justify-content-between">
                <div class="col-xs-10">
                <ul class="rub-ul rub-ul-l">                      
                  @foreach ($Salads as $salad)
                  <li class="rub-li">
                    <label imge="{{$salad->img_dir}}" namef="{{$salad->name}}">
                    <a type="button" 
                   data-toggle="modal" href="#myModal"                                
                    >{{ $salad->name }}</a></label></li>
                  @endforeach
                </ul>
                  </div>
               <div class="col-xs-2">
                <ul class="rub-ul rub-ul-r">
                  @foreach ($Salads as $salad)
                  <li>₱{{ $salad->price_def}}</a></label></li>
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
          <div class="menu-title">
            <h4>Pasta</h4></div>
            <div class="shell-rb">
              <div class="row d-flex justify-content-between">
                <div class="col-xs-10">
                <ul class="rub-ul rub-ul-l">
                  @foreach ($Pastas as $pasta)
                  <li class="rub-li">
                    <label imge="{{$pasta->img_dir}}" namef="{{$pasta->name}}">
                    <a type="button" 
                   data-toggle="modal" href="#myModal"                                
                    >{{ $pasta->name }}</a></label></li>
                  @endforeach
              </ul>
                </div>
              <div class="col-xs-2">
              <ul class="rub-ul rub-ul-r">
                @foreach ($Pastas as $pasta)
                <li>{{ $pasta->price_def}}</a></label></li>
                @endforeach
              </ul>
                </div>
              </div>
            </div>
        <div class="menu-title">
            <h4>Steak</h4>
            <p>(order comes with choice of rice or mashed potato)</p></div>
            <div class="shell-rb">
              <div class="row d-flex justify-content-between">
                <div class="col-xs-10">
              <ul class="rub-ul rub-ul-l">
                @foreach ($TSteaks as $tsteak)
                <li class="rub-li">
                  <label imge="{{$tsteak->img_dir}}" namef="{{$tsteak->name}}">
                  <a type="button" 
                 data-toggle="modal" href="#myModal"                                
                  >{{ $tsteak->name }}</a></label></li>
                @endforeach
              </ul>
                </div>
                <div class="col-xs-2">
              <ul class="rub-ul rub-ul-r">
                @foreach ($TSteaks as $tsteak)
                <li>₱{{ $tsteak->price_def}}</a></label></li>
                @endforeach
              </ul>
                </div>
              </div>
            </div>
            <div class="menu-title">
            <h4>Beef</h4>
            <p>(order comes with choice of rice or mashed potato)</p></div>
            <div class="shell-rb">
              <div class="row d-flex justify-content-between">
                <div class="col-xs-10">
                <ul class="rub-ul rub-ul-l">
                  @foreach ($Beefs as $beef)
                  <li class="rub-li">
                    <label imge="{{$beef->img_dir}}" namef="{{$beef->name}}">
                    <a type="button" 
                   data-toggle="modal" href="#myModal"                                
                    >{{ $beef->name }}</a></label></li>
                  @endforeach
                </ul>
                </div>
                <div class="col-xs-2">
                <ul class="rub-ul rub-ul-r">
                  @foreach ($Beefs as $beef)
                  <li>₱{{ $beef->price_def}}</a></label></li>
                  @endforeach
                </ul>
                  </div>
                </div>
              </div>
              <div class="menu-title">
                <h4>Pork</h4>
                <p>(order comes with choice of rice or mashed potato)</p></div>
                <div class="shell-rb">
                  <div class="row d-flex justify-content-between">
                    <div class="col-xs-10">
                    <ul class="rub-ul rub-ul-l">
                      @foreach ($Porks as $pork)
                      <li class="rub-li">
                        <label imge="{{$pork->img_dir}}" namef="{{$pork->name}}">
                        <a type="button" 
                       data-toggle="modal" href="#myModal"                                
                        >{{ $pork->name }}</a></label></li>
                  @endforeach
                    </ul>
                    </div>
                    <div class="col-xs-2">
                    <ul class="rub-ul rub-ul-r">
                      @foreach ($Porks as $pork)
                  <li>₱{{ $pork->price_def}}</a></label></li>
                  @endforeach
                    </ul>
                      </div>
                    </div>
                  </div>
                  <div class="menu-title">
                    <h4>Seafood</h4>
                    <p>(order comes with choice of rice or mashed potato)</p></div>
                    <div class="shell-rb">
                      <div class="row d-flex justify-content-between">
                        <div class="col-xs-10">
                        <ul class="rub-ul rub-ul-l">
                          @foreach ($Seafoods as $sfood)
                          <li class="rub-li">
                            <label imge="{{$sfood->img_dir}}" namef="{{$sfood->name}}">
                            <a type="button" 
                           data-toggle="modal" href="#myModal"                                
                            >{{ $sfood->name }}</a></label></li>
                  @endforeach
                        </ul>
                        </div>
                        <div class="col-xs-2">
                        <ul class="rub-ul rub-ul-r">
                          @foreach ($Seafoods as $sfood)
                          <li>₱{{ $sfood->price_def}}</a></label></li>
                          @endforeach
                        </ul>
                          </div>
                        </div>
                      </div>
                      <div class="menu-title">
                        <h4>Chicken</h4>
                        <p>(order comes with choice of rice or mashed potato)</p></div>
                        <div class="shell-rb">
                          <div class="row d-flex justify-content-between">
                            <div class="col-xs-10">
                            <ul class="rub-ul rub-ul-l">
                              @foreach ($Chickens as $chk)
                              <li class="rub-li">
                                <label imge="{{$chk->img_dir}}" namef="{{$chk->name}}">
                                <a type="button" 
                               data-toggle="modal" href="#myModal"                                
                                >{{ $chk->name }}</a></label></li>
                              @endforeach            
                            </ul>
                            </div>
                            <div class="col-xs-2">
                            <ul class="rub-ul rub-ul-r">
                              @foreach ($Chickens as $chk)
                              <li>₱{{ $chk->price_def}}</a></label></li>
                              @endforeach
                            </ul>
                              </div>
                            </div>
                          </div>
        </div>
  </div> <!-- carousel close -->
  <div class="container mt-5 pt-5">
    <div class="row">
      <div class=".col-md-4 .col-md-offset-4 pull-right text-right mr-5">
        <p>You can also Download Ruben Menu (PDF)</p>
        <a href="file-download"class="button button-primary button-square pull-right mt-3">
        <span class="glyphicon glyphicon-save"> Download</span>  
        </a>
      </div>
    </div>
  </div>
                     <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <span class="modal-title" id="modal_body"></span>
        </div>
        <div class="modal-body text-center">
          <span id="no-modal">No Image yet to be shown.</span>
                  <img id="modal_img" src="" style="max-height: 287px !important;">
        </div>
        <div class="modal-footer">
          <button type="button" class="button button-sm button-primary" data-dismiss="modal">Close</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
</div>
  </section>
<script>
  var elems = document.getElementsByTagName('label');
  var selected;
Array.from(elems).forEach(v => v.addEventListener('click', function(){
  selected = this.getAttributeNode('namef').value;
  document.getElementById("modal_body").innerHTML = selected;
}));
</script>
<script>
  var imgelem = document.getElementsByTagName('label');
var choosen;
Array.from(imgelem).forEach(v => v.addEventListener('click', function(){
  document.getElementById("no-modal").style.display = 'none';
  choosen = this.getAttributeNode('imge').value;
  if (choosen !== "" ) {
    document.getElementById("modal_img").src = ""+choosen+"";
  }
  else if(choosen == ""){
    document.getElementById("modal_img").src = "";
     document.getElementById("no-modal").style.display = 'inline';
  }
// alert(selected);
// console.log(selected);
}));
</script>