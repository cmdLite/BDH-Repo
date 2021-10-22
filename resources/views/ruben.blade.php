@include('partial.head')
<body>
@include('partial.header')

      <section class="section section-md bg-secondary-4 text-center text-sm-left">

        <div class="shell">

<div class="range range-50 range-md-justify-ruben range-sm-justify">

  <div class="cell-sm-6 wow fadeInUp" data-wow-delay=".1s">

    <div class="ruben">

      <div class="rubenimg">

        <img src="bh-img/Ruben/Ruben-C-memo-s.png">

      </div>

    </div>

  </div>

  <div class="cell-sm-6 cell-md-5 wow fadeInUp" data-wow-delay=".2s">

    <figure><img src="bh-img/Ruben/Ruben-logo.png"></figure>

    <span id="pc"><p>RUBEN is a café, restaurant and bar in San Fernando, Pampanga that is inspired by its namesake, Ruben Patawaran and his endless love for TRAVEL, FOOD and GOOD COMPANY.

</p>

<p>

  In the latter part of his life, Ruben enjoyed food and drinks around the world. His humble beginnings have taught him that food is best shared anywhere as long as it’s with the people you love. When he was still young, he had to wake up early to help till the soil with his father everyday. His favorite part of the day was when his mother would bring them food and they would eat watching the sunset together. Ruben proved that happiness can be achieved in life’s simplicities

  <span id="dots">...</span>

</p>



  </span>

  <span id="mobile"><p>RUBEN is a café, restaurant and bar in San Fernando, Pampanga that is inspired by its namesake, Ruben Patawaran and his endless love for TRAVEL, FOOD and GOOD COMPANY.

    </p>

  <p>

    In the latter part of his life, Ruben enjoyed food and drinks around the world. His humble beginnings have taught him that food is best shared anywhere as long as it’s with the people you love. When he was still young, he had to wake up early to help till the soil with his father everyday. His favorite part of the day was when his mother would bring them food and they would eat watching the sunset together. Ruben proved that happiness can be achieved in life’s simplicities

    <span id="dots">...</span></p></span>

        <button class="button button-primary button button-square button-lg"  onclick="myFunction()"

         id="readmore">Read more</button>

        </div>

        <span id="morepc">

<span>

    <p>

      Upon entering Ruben, while it is festive and ornate, you still experience a warm homey feeling. You would easily want to bring friends and family with you so you may share this unique Ruben experience.

    </p>

  <p>

    Ruben aims to deliver the best specialty coffee and cocktail experience through quality and fresh ingredients. It is your comfy nook from morning ‘til noon – read a book, hold a meeting or have a boozy brunch with your friends.  At night, we turn work hours into happy hours with signature dishes and cocktails from around the world that will have you saying “Salut!” for the rest of the night.

  </p> 

  <p> 

     Our Signature dishes include the Ruben’s 6-hour Beef Caldereta, The Seafood Paella and Crispy Pork Belly with Truffle Lechon Sauce. Perfectly pair these dishes with signature cocktails, The Rion King, Joanna Oh Na Na and Dixie Dust. Whatever took you to Ruben today, we wish you a story worth sharing.

  </p>

</span>

        </span>

        <button class="button button-primary button button-square button-lg"

         onclick="myFunction()" id="readless">Read less</button>

</div>

        </div>

      </section>

    </section>



{{-- @include('partial.menu',['menu_tb'=> $Starters]) --}}



@include('partial.menu',['menu_tb'])

            <!-- Modal -->

            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalTitle" aria-hidden="true">

              <div class="modal-dialog modal-dialog-centered" role="document">

                <div class="modal-content">

                  <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span></button>

                  </div>

                  <div class="modal-body">



                    <img src="bh-img/Ruben/foods/LR-EDIT-IMG_0460.jpg">

                  </div>

                  

                </div>

              </div>

            </div>

@include('partial.ruben-review')

    <script>

        function myFunction() {

    var dots = document.getElementById("dots");

    var moreText = document.getElementById("morepc");

    var readmore = document.getElementById("readmore");

    var readless = document.getElementById("readless");

    if (dots.style.display === "none") {

      dots.style.display = "inline";

      readmore.style.display = "inline";

      readless.style.display = "none";

      moreText.style.display = "none";

    } else {

      dots.style.display = "none";

      readmore.style.display = "none";

      readless.style.display = "inline";

      moreText.style.display = "inline";

    }

    return btnText.style.backgroundColor= "#d3af34";

    }

    </script>

        <script src="https://apps.elfsight.com/p/platform.js" defer></script>

@include('partial.order')

@include('partial.footer')

