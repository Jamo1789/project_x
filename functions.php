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
add_action( 'admin_post_add_foobar', 'prefix_admin_add_foobar' );
function prefix_admin_add_foobar() {
    echo '<script>alert("Email sent successfully !")</script>';
}
//collect form variables and mail


//Contact page
function contactForm () {
//require_once('wp-content/themes/project_x/email-script.php');
if(get_the_ID() == 75){ ?>

<div class="container bg-dark" style="width: 100%;">
    <div class="row">
        <div class="col-sm-9 col-md-8 col-lg-12 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                  <!--  <h5 class="card-title text-center">Jätä tarjouspyyntö</h5> -->
                    <!-- TÄSSÄ KÄYNNISTETÄÄN EMAIL SKRIPTI -->
                    <form action="<?php echo "" . $_SERVER['HOST_NAME'] . "/wp-content/themes/project_x/email-script.php"; ?>" method="post" class="form-signin">
                        <!-- TÄSSÄ KÄYNNISTETÄÄN EMAIL SKRIPTI -->

												<!-- sähköposti ja puh -->
												<div class="row">
														  <div class="col">
																<label for="inputPassword">Email <span style="color: #FF0000">*</span></label>
														    <input type="text" class="form-control" placeholder="email" aria-label="fromEmail" name="fromEmail" required>
														  </div>
														  <div class="col">
																<label for="inputPassword">Puh. <span style="color: #FF0000">*</span></label>
														    <input type="text" class="form-control" placeholder="puh" aria-label="Last name" name="puh" required>
														  </div>
												</div>
												<br/>
													<!-- sähköposti ja puh end-->

													<!-- Muutettava kohde-->



														<br/>




													<div class="row">
														<h4 class="card-title text-left">Muutettava kohde</h4>
															  <div class="col">
																	<label for="inputPassword">Osoite <span style="color: #FF0000">*</span></label>
															    <input type="text" class="form-control" placeholder="Osoite, kaupunki" aria-label="First name" name="K_osoite" required>
															  </div>
																<div class="col">
																	<label for="inputPassword">Neliömäärä <span style="color: #FF0000">*</span></label>
																	<input class="form-control" type="number" id="quantity" name="K_neliomaara" min="1" max="500" required>
																</div>


													</div>
													<br/>



															<!-- Muuttosjainti end-->
															<div class="d-flex align-items-center flex-column">
																<label  for="inputPassword">Monesko kerros? <span style="color: #FF0000">*</span></label>
																<input class="form-select" type="number" id="quantity" min="1" max="500" name="K_kerros" required>



																			<label for="inputPassword">Talotyyppi <span style="color: #FF0000">*</span></label>
																			<select class="form-select" style="width: 40%; margin-right: 20px; height: 47px;" id="K_talotyyppi" name="K_talotyyppi" required>
																				<option value="Kerrostalo">ei valintaa</option>
																				<option value="Kerrostalo">Kerrostalo</option>
																				<option value="Rivitalo">Rivitalo</option>
																				<option value="Luhtitalo">Luhtitalo</option>
																				<option value="Omakotitalo">Omakotitalo</option>
																		 </select>








																			<label for="inputPassword">Onko hissi? <span style="color: #FF0000">*</span></label>
																			<select class="form-select" style="width: 40%; margin-right: 20px; height: 47px;" id="K_hissi" name="K_hissi" required>
																				<option value="Ei valintaa">Ei valintaa</option>
																				<option value="Kyllä">Kyllä</option>
																				<option value="Ei">Ei</option>
																		 </select>

																		 <label for="inputPassword">Onko varasto? <span style="color: #FF0000">*</span></label>
																		 <select class="form-select" style="width: 40%; margin-right: 20px; height: 47px;" id="K_varasto" name="K_varasto" required>
																			 <option value="Kyllä">Ei valintaa</option>
																			 <option value="Kyllä">Kyllä</option>
																			 <option value="Ei">Ei</option>
																		</select>

																		<label for="inputPassword">Onko omia kantajia? <span style="color: #FF0000">*</span></label>
																		<select class="form-select" style="width: 40%; margin-right: 20px; height: 47px;" id="cars" name="K_kantaja" required>
																			<option value="Kyllä">Ei valintaa</option>
																			<option value="Kyllä">Kyllä</option>
																			<option value="Ei">Ei</option>
																	 </select>
																	 <br>
																	 <br>



														</div>
	                                <!-- Muutettava kohde end-->





																		<!-- Määränpää-->

																		<div class="row">
																			<h4 class="card-title text-left">Määränpää</h4>
																					<div class="col">
																						<label for="inputPassword">Osoite <span style="color: #FF0000">*</span></label>
																						<input type="text" class="form-control" placeholder="Osoite, kaupunki" aria-label="First name" name="M_osoite" required>
																					</div>



																		</div>
																		<br/>



																				<!-- Muuttosjainti end-->
																				<div class="d-flex align-items-center flex-column">

																					<label for="inputPassword">Monesko kerros? <span style="color: #FF0000">*</span></label>
																					<input class="form-select" type="number" id="quantity" name="M_Kerros" min="1" max="500" required>


																								<label for="inputPassword">Talotyyppi <span style="color: #FF0000">*</span></label>
																								<select class="form-select" style="width: 40%; margin-right: 20px; height: 47px;" id="M_talotyyppi" name="M_Talotyyppi" required>
																									<option value="Kerrostalo">Ei valintaa</option>
																									<option value="Kerrostalo">Kerrostalo</option>
																									<option value="Rivitalo">Rivitalo</option>
																									<option value="Luhtitalo">Luhtitalo</option>
																									<option value="Omakotitalo">Omakotitalo</option>
																							 </select>

																								<label for="inputPassword">Onko hissi? <span style="color: #FF0000">*</span></label>
																								<select class="form-select" style="width: 40%; margin-right: 20px; height: 47px;" id="M_hissi" name="M_Hissi" required>
																									<option value="Kyllä">Kyllä</option>
																									<option value="Ei">Ei</option>
																							 </select>

																							 <label for="inputPassword">Onko varasto? <span style="color: #FF0000">*</span></label>
																							 <select class="form-select" style="width: 40%; margin-right: 20px; height: 47px;" id="M_varasto" name="M_varasto" required>
																								 <option value="Kyllä">Ei valintaa</option>
																								 <option value="Kyllä">Kyllä</option>
																								 <option value="Ei">Ei</option>
																							</select>


																						 <br>
																						 <br>



																			</div>



																			<div class="d-flex align-items-center flex-column">
																				<h4 class="card-title text-center">Muuta</h4>


																							<label for="inputPassword">Maksutapa <span style="color: #FF0000">*</span></label>
																							<select class="form-select" style="width: 40%; margin-right: 20px; height: 47px;" id="maksutapa" name="maksutapa" required>
																								<option value="Kerrostalo">Ei valintaa</option>
																								<option value="Kerrostalo">Käteinen</option>
																								<option value="Rivitalo">Kortti</option>
																								<option value="Luhtitalo">Lasku</option>

																						 </select>




																		</div>

																			<!-- Määränpää end-->



                        <label for="inputPassword">Viesti <span style="color: #FF0000"></span></label>
                        <div class="form-label-group">
                            <textarea  id="message" name="message" class="form-control" placeholder="Viesti"></textarea>
                        </div> <br/>
												<div class="col-auto">
													 <div class="form-check mb-2">
														 <input class="form-check-input" type="checkbox" id="autoSizingCheck" name="accept_terms" required>
														 <label class="form-check-label" for="autoSizingCheck">
															 Hyväksyn henkilötietojeni käsittelyn <a href="/rekisteriseloste" target="_blank">tietosuojaselosteen</a> määrittelemällä tavalla
														 </label>
													 </div>
											 </div>
                        <button type="submit" name="sendMailBtn" class="btn btn-lg btn-primary btn-block text-uppercase" style="background-color: green;" >Lähetä</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
 }
}


//Elements--------------------------------------------------------



?>
