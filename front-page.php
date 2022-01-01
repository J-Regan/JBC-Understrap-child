<?php
/**
 * The template for displaying a static front-page
 *
 * 
 *
 * @package understrap-child
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

            <!-- get the hero canvas sidebar -->
		    <?php get_template_part( 'sidebar-templates/sidebar', 'herocanvas' ); ?>	
            
        </div>

        <div class="row">

			<main class="site-main" id="main">

			<!-- get the static-hero sidebar -->
            <?php get_template_part( 'sidebar-templates/sidebar', 'statichero' ); ?>


			</main><!-- #main -->


		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php
get_footer();
