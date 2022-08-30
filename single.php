<div id="mySidenav" class="sidenav">
						  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>



									<nav class="primary-menu-wrapper" aria-label="<?php echo esc_attr_x( 'Horizontal', 'menu', 'twentytwenty' ); ?>">

										<ul class="primary-menu reset-list-style">
											<li style="color:white;">

										<?php


										wp_nav_menu(
												array(
													'container'  => '',
													'items_wrap' => '%3$s',
													'theme_location' => 'primary',
															 )
											);

										?>
									   </li>

										</ul>

									</nav><!-- .primary-menu-wrapper -->

						 </div>