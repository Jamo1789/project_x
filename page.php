<?php
get_header();
?>
 <section class="py-5 text-center container">
    <div class="hero-image" style="height: 200px; background-image: url(<?php echo get_theme_file_uri('beach.png') ?>">
      <div class="hero-text" style="text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;">
        <h1 style="font-style: Georgia; color: #fff; font-size:50px;"><?php echo get_the_title(); ?></h1>

     
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
//echo get_the_id();
<?php
get_footer()
?>