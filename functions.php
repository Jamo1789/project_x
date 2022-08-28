<?php
function twentytwenty_register_styles() {

	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'twentytwenty-style', get_stylesheet_uri(), array(), $theme_version );
	wp_style_add_data( 'twentytwenty-style', 'rtl', 'replace' );



	// Add print CSS.
	wp_enqueue_style( 'twentytwenty-print-style', get_template_directory_uri() . '/print.css', null, $theme_version, 'print' );

}

add_action( 'wp_enqueue_scripts', 'twentytwenty_register_styles' );

//add menu support

function register_my_menus() {
  $locations = array(
		'primary'  => __( 'Desktop Horizontal Menu', 'twentytwenty' ),
		'expanded' => __( 'Desktop Expanded Menu', 'twentytwenty' ),
		'mobile'   => __( 'Mobile Menu', 'twentytwenty' ),
		'footer'   => __( 'Footer Menu', 'twentytwenty' ),
		'social'   => __( 'Social Menu', 'twentytwenty' ),
	);

	register_nav_menus( $locations );
}

//add featured image support

add_theme_support( 'post-thumbnails' );


 add_action( 'init', 'register_my_menus' );



 //logo stuff
 add_action( 'after_setup_theme', 'custom_twentytwenty_logo_setup' );

 function custom_twentytwenty_logo_setup() {
    $defaults = array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true,
    );

    add_theme_support( 'custom-logo', $defaults );
}

//Require files

require get_template_directory() . '/classes/class-twentytwenty-svg-icons.php';
require get_template_directory() . '/inc/svg-icons.php';

//jquery & bootstrap

function projext_files() {
  wp_enqueue_script('jQuery', get_template_directory_uri() . '/js/jquery-3.6.0.min.js' );
  wp_enqueue_style( 'bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css' );
  wp_enqueue_script('bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js' );

}


add_action('wp_enqueue_scripts', 'projext_files');

//collect form variables and mail
if(isset($_POST["submit"])){
$username = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

mail($email,$subject,$message);
echo "<script>console.log('something hapened');</script>";
}
//collect form variables and mail


//Contact page
function contactForm () {
if(get_the_ID() == 75){ ?>

<div class="container" style="width: 100%;">
    <div class="row">
        <div class="col-sm-9 col-md-8 col-lg-8 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Ota Yhteyttä</h5>
                    <!-- TÄSSÄ KÄYNNISTETÄÄN EMAIL SKRIPTI -->
                    <form action="email-script.php" method="post" class="form-signin">
                        <!-- TÄSSÄ KÄYNNISTETÄÄN EMAIL SKRIPTI -->
                        <div class="form-label-group">
                            <label for="inputEmail">Sähköposti <span style="color: #FF0000">*</span></label>
                            <input type="text" name="fromEmail" id="fromEmail" class="form-control"  value="" required>
                        </div> <br/>
                   
                        <label for="inputPassword">Aihe <span style="color: #FF0000">*</span></label>
                        <div class="form-label-group">
                            <input type="text" id="subject" name="subject" class="form-control" placeholder="Aihe" required>
                        </div><br/>
                        <label for="inputPassword">Viesti <span style="color: #FF0000">*</span></label>
                        <div class="form-label-group">
                            <textarea  id="message" name="message" class="form-control" placeholder="Viesti" required ></textarea>
                        </div> <br/>
                        <button type="submit" name="sendMailBtn" class="btn btn-lg btn-primary btn-block text-uppercase" >Lähetä viesti</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
 }
}


?>
