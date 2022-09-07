
<?php get_header(); ?>

    <!--<title>Album example · Bootstrap v5.0</title> -->





    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>


  </head>
  <body>


<main>
  <!--hero with button -->

  <section class="py-5 text-center container">
    <div class="hero-image" style="height: 400px; background-image: url(<?php echo get_theme_file_uri('truck.jpg') ?>">
      <div class="hero-text" style="text-align: center;
  position: absolute;
  top: 40%;
  left: 50%;
  transform: translate(-50%, -50%);
 ">
        <h1 style="font-style: Georgia; color: black; font-size:50px;">Muutto tulossa?</h1>

        <a href="/ota-yhteytta"><button style="font-size: 15px;"  id="hero_button">Kysy tarjous</button></a><br>
        <h2 style="font-style: Georgia; color: black; margin-top:10px!important;">Tai soita 0403659978</h2>
      </div>


      <!--lightbox style popup goes here-->
    </div>
  </section>

  <!--hero with button end -->


<!-- Services box-->

      <div class="container">
        <div class="row">
          <div id="text_column" class="col-lg-12 col-md-12 col-sm-12 ml-auto">
            <h2 id="column_service" class="mx-auto" style="text-align:center; font-size:35px;">Palvelut<h2>
          </div>
        </div>
      </div>

<style>


</style>
<!-- Services box end-->


  <div class="album py-5 bg-dark">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php


        while(have_posts()) {
          the_post();

          ?>
        <div class="col bg-dark" style="">
          <div id="card_styles" class="card shadow-sm" style="">
            <div class="card-body">
            <h3 style="text-align:center; color:black;"><?php echo get_the_title();?></h3>


            </div>
            <?php the_post_thumbnail('medium'); ?> <br>




        </a></div>
        </div>
        <!--while loop end -->
        <?php

      }

        ?>


        <!-- main row end -->
      </div>

      <!-- container end -->
    </div>
  </div>

</main>
<br>





  </body>
  <?php get_footer(); ?>
</html>
