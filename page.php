<?php
get_header();
?>
 <section class="py-5 text-center container">
    <div class="hero-image" style="height: 100px;">
      <div class="hero-text" style="text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;">
        <h1 class="main_heading" style="font-style: Georgia; color: black;"><?php echo get_the_title(); ?></h1>


      </div>


      <!--lightbox style popup goes here-->
    </div>
  </section>

  <!-- Page content start-->

  <div class="album py-5 bg-dark">
    <div class="container">



        <div id="pagecontainer" class="col p-3 mb-2 bg-dark text-white" style="font-size: 15px;">
        <?php the_content(); ?>

        </div>


        <?php


        contactForm();
        ?>



        </div>



        <!-- main row end -->
      </div>

      <!-- container end -->
    </div>
    <br>
  </div>

<?php
//echo get_the_id();
get_footer()
?>
