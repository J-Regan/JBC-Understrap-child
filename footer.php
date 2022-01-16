<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap-child
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

			<footer class="site-footer" id="site-footer">

				<div class="row">

					<div class="col-md-4">
						
						<h5>Contact</h5>

							<ul>

								<li><a href="https://www.facebook.com/jimbrennancarpentry"><i class="fa fa-facebook-square fa-lg rotate" aria-hidden="true"></i>&nbsp;<?php esc_html_e( 'Facebook', 'textdomain' ); ?></a></li>

								<li><a href="tel:0872832471"><i class="fa fa-mobile" aria-hidden="true"></i>&nbsp;<?php esc_html_e( '087 283 2471', 'textdomain' ); ?></a></li>

								<li><a href="tel:018387286"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;<?php esc_html_e( '01 838 7286', 'textdomain' ); ?></a></li>
								
								<li><a href="mailto:jimbrennancarpentry@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;<?php esc_html_e( 'jimbrennancarpentry@gmail.com', 'textdomain' ); ?></i></a></li>

							</ul>
					</div>

					<div class="col-md-4">

						<h5>Legal</h5>
							
							<ul>
								<li><a href="<?php echo esc_url( get_permalink(1425) ); ?>"><?php esc_html_e( 'Privacy Policy', 'textdomain' ); ?></a></li>
								
								<li><a href="<?php echo esc_url( get_permalink(1427) ); ?>"><?php esc_html_e( 'Cookie Policy', 'textdomain' ); ?></a></li>
								
							</ul>

					</div>

					<div class="col-md-4">

						<h5>Navigation</h5>
							<ul>
						
								<li><a href="<?php echo esc_url( get_permalink(1418) ); ?>"><?php esc_html_e( 'Home', 'textdomain' ); ?></a></li>
								<li><a href="#">Back to Top</a>&nbsp;<i class="fa fa-arrow-circle-up"></i></li>

							</ul>
					</div>

				</div>
				<div class="row">

					<div class="col">

						<ul class="footer-list-inline">

							<li class="list-inline-item">&copy;2019&nbsp;Jim Brennan Carpentry</li>

						</ul>

					</div>

				</div>
	
			</footer>

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

