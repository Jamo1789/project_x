<!DOCTYPE html>
<?php get_header(); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <!--<title>Album example · Bootstrap v5.0</title> -->

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">





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
    <div class="hero-image" style="height: 100%; background-image: url(<?php echo get_theme_file_uri('beach.png') ?>">
      <div class="hero-text">
        <h1 style="font-style: Georgia; color: #fff; font-size:50px;">Muutto tulossa?</h1>

        <button>Ota yhteyttä ja kysy tarjous</button>
      </div>

      <div id="popup1" class="overlay">
        <div class="popup">
          <a class="close" href="#">&times;</a>
          <div class="content">
            <br><br>
            <h2></h2>
            
            <br><br><br>
          </div>
        </div>
      </div>
      <!--lightbox style popup goes here-->
    </div>
  </section>

  <!--hero with button end -->


  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php


        while(have_posts()) {
          the_post();

          ?>
        <div class="col" style="">
          <div class="card shadow-sm">
            <div class="card-body">
            <h3 style="text-align:center;"><?php echo get_the_title();?></h3>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="text-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-primary align-items-center">Lue lisää</button>

                </div>

              </div>
            </div>
            <?php the_post_thumbnail(); ?>




          </div>
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
