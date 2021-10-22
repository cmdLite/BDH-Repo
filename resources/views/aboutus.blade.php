@include('partial.head')
<body>
@include('partial.header')
      <section class="section section-md bg-secondary-4 text-center text-sm-left">
        <div class="shell">
          <div class="range range-50 range-md-justify range-sm-middle">
            <div class="cell-sm-6 wow fadeInUp" data-wow-delay=".1s">
              <div class="box-outline box-outline__mod-1">
                <figure><img src="bh-img/bh-pic/bh-bldg.jpg" alt="" width="546" height="516"/>
                </figure>
              </div>
            </div>
        <div class="cell-sm-6 cell-md-5 wow fadeInUp" data-wow-delay=".2s">
              <h3>A Few Words About Us</h3>
            <p>Bendix Hotel is located in the San Fernando area, which is considered to be in culinary capital of the Philippines, a popular choice for travelers. This 3-star property can be easily accessed just 15 minutes drive from Clark International Airport and 45 minutes from Manila. With its convenient location, the property offers easy way-in to the city's must-see destinations for both business and leisure travelers.
            </p>
            <p>Facilities at our hotel include a Ruben, family-style restaurant and coffee shop, and 2 large function rooms for weddings, meetings, and conferences. There are 3 rooms dedicated for meetings during the day and KTV for a fun activity during the night. 
            <span id="dots">...</span></p><p><span id="morepc">It is important to us that your stay be as comfortable and enjoyable as possible. We take great pride in providing our guests with the highest level of professional service and hospitality as Bendix Hotel is your one-stop destination for quality accommodation in San Fernando, Pampanga!
            </span></p>
            <button class="button button-primary button button-square button-lg" style="background-color: #d3af34;" onclick="myFunction()" id="myBtn">Read more</button>
            <script>
                function myFunction() {
                  var dots = document.getElementById("dots");
                  var moreText = document.getElementById("morepc");
                  var btnText = document.getElementById("myBtn");
                  var btncss = document.getElementsByClassName("myBtn");
                  if (dots.style.display === "none") {
                    dots.style.display = "inline";
                    btnText.innerHTML = "Read more";
                    moreText.style.display = "none";
                  } else {
                    dots.style.display = "none";
                    btnText.innerHTML = "Read less";
                    moreText.style.display = "inline";
                  }
                  return btnText.style.backgroundColor= "#d3af34";
                }
                </script>
        </div>
          </div>
        </div>
      </section>
      <section class="section section-md">
        <div class="container text-center">
          <h2>Offered Services</h2>
          <div class="card-deck">
            <div class="card align-items-center" style="width:320px;">
              <img class="card-img-top" src="bh-img/bh-pic/offer/Spray.svg" alt="Disinfection Spray" style="width:80%">
              <div class="card-body">
                <h4 class="card-title">Safe and Sanitized</h4>
                <p class="card-text">Keeping safety protocols in check to make our place safe against diseases.</p>
              </div>
            </div>
            <div class="card align-items-center" style="width:320px;">
              <img class="card-img-top" src="bh-img/bh-pic/offer/Plate.svg" alt="Disinfection Spray" style="width:80%">
              <div class="card-body">
                <h4 class="card-title">Best Tasting Food</h4>
                <p class="card-text">Expirience 3 star hotel cuisines specially perpared by our professional cooks.</p>
              </div>
            </div>
            <div class="card align-items-center" style="width:320px;">
              <img class="card-img-top" src="bh-img/bh-pic/offer/Pig.svg" alt="Disinfection Spray" style="width:80%">
              <div class="card-body">
                <h4 class="card-title">Exclusive Yet Affordable</h4>
                <p class="card-text">Your ideal retreat in an affordable rates. Best deals and promos are waiting for you, book now!</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-md bg-secondary-4">
        <div class="shell text-center">
          <h2>Rooms & Suites</h2>
          <p>Bendix Hotel offers the finest accommodations with unique designs that provide both a luxurious and relaxing environment. Specially <br> selected fabrics and finishes vary from room to room, offering guests a variety of beautiful and unique atmospheres to select from.</p>
          <div class="range range-30" data-lightgallery="group">
            <div class="cell-sm-6 cell-md-4"><a class="thumbnail-classic" href="bh-img/bh-pic/GKR.jpg" data-lightgallery="item">
                <figure><img src="bh-img/bh-pic/GKR.jpg" alt="" style="max-height: 370px !important;"/>
                </figure>
                <div class="caption">
                  <p class="caption-title">Grand King Room</p>
                  <p class="caption-text">Each room has its own unique décor and arrangement.</p>
                </div></a>
            </div>
            <div class="cell-sm-6 cell-md-4"><a class="thumbnail-classic" href="bh-img/bh-pic/SQR.jpg" data-lightgallery="item">
                <figure><img src="bh-img/bh-pic/SQR.jpg" alt="" style="max-height: 370px !important;"/>
                </figure>
                <div class="caption">
                  <p class="caption-title">Superior Queen Room</p>
                  <p class="caption-text">Each room has its own unique décor and arrangement.</p>
                </div></a>
            </div>
            <div class="cell-sm-6 cell-md-4"><a class="thumbnail-classic" href="bh-img/bh-pic/ETR.jpg" data-lightgallery="item">
                <figure><img src="bh-img/bh-pic/ETR.jpg" alt=""style="max-height: 370px !important;"/>
                </figure>
                <div class="caption">
                  <p class="caption-title">Executive Twin Room</p>
                  <p class="caption-text">Each room has its own unique décor and arrangement.</p>
                </div></a>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-md bg-white">
        <div class="shell text-center">
          <h2>Location & Places</h2>
          <p>Bendix Hotel San Fernando is surrounded by various malls, yearly events, entertainment places, historical museum and churches that you can visit while having your stay.</p>
          <div class="range d-flex justify-conten-center">
            <div class="col-xs">
              <img src="bh-img/bh-pic/Map.png">
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="bg-ab">
        </div>
        <div class="shell text-center py-5">
          <h3 style="color: white">Have a Safe Stay With Us, Experience Bendix Now!</h3>
          <p style="color: white">All year promo are available for you to enjoy.</p>
        </div>
      </section>
    @include('partial.footer')
