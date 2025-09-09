<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#404-not-found
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<?php if ( astra_page_layout() === 'left-sidebar' ) { ?>
	<?php get_sidebar(); ?>
<?php } ?>

<div id="primary" <?php astra_primary_class(); ?>>

	<?php astra_primary_content_top(); ?>

	<section class="aimze-404" aria-labelledby="aimze-404-title">
		<h1 id="aimze-404-title">
			<?php echo esc_html__( "That page isn't here.", 'astra' ); ?>
		</h1>

		<p>
			<?php
			echo esc_html__(
				"Sorry—looks like you landed on the wrong URL or the page has moved.",
				'astra'
			);
			?>
		</p>

		<p>
			<a class="ast-button" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<?php echo esc_html__( 'Go to Home', 'astra' ); ?>
			</a>

			<a class="ast-button" href="<?php echo esc_url( home_url( '/services-and-pricing/' ) ); ?>">
				<?php echo esc_html__( 'View Services', 'astra' ); ?>
			</a>
		</p>
	</section>

	<?php astra_primary_content_bottom(); ?>

</div><!-- #primary -->

<?php if ( astra_page_layout() === 'right-sidebar' ) { ?>
	<?php get_sidebar(); ?>
<?php } ?>

<?php get_footer(); ?>