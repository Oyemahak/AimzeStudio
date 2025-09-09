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

<style>
/* === Aimze 404 page styles (scoped) === */
.aimze-404-wrap{ text-align:center; padding:48px 12px 64px; }
.aimze-404-title{ font-size:clamp(28px,3.2vw,40px); margin:0 0 10px; color:#6b157a; font-weight:800; }
.aimze-404-sub{ margin:0 auto 22px; max-width:620px; color:#333; font-size:16px; }
.aimze-404-actions{ display:inline-flex; gap:12px; flex-wrap:wrap; justify-content:center; margin:12px 0 24px; }
.aimze-btn{
  display:inline-block; padding:10px 16px; border-radius:999px;
  background:linear-gradient(135deg,#B99247,#512441); color:#fff; text-decoration:none;
  font-weight:700; font-size:14px; border:1px solid rgba(0,0,0,.05);
  box-shadow:0 6px 14px rgba(0,0,0,.08);
  transition:transform .12s ease, box-shadow .2s ease, filter .2s ease;
}
.aimze-btn:hover{ transform:translateY(-1px); filter:saturate(1.05); box-shadow:0 10px 20px rgba(0,0,0,.12); }
.aimze-btn:active{ transform:translateY(0); }
.aimze-btn-outline{ background:#fff; color:#512441; border:1px solid #d4af37; }
.aimze-btn-outline:hover{ background:#fffaf2; }
/* search form light tweak */
.aimze-404-wrap .search-form{ margin-top:8px; display:flex; gap:8px; justify-content:center; }
.aimze-404-wrap .search-field{ min-width:260px; padding:.55rem .75rem; border-radius:8px; border:1px solid #ddd; }
.aimze-404-wrap .search-submit{ padding:.55rem .9rem; border-radius:8px; border:1px solid #d4af37; background:#fff; color:#512441; font-weight:700; cursor:pointer; }
.aimze-404-wrap .search-submit:hover{ background:#fffaf2; }
</style>

<div id="primary" <?php astra_primary_class(); ?>>

	<?php astra_primary_content_top(); ?>

	<section class="aimze-404-wrap" aria-labelledby="aimze-404-title">
		<h1 id="aimze-404-title" class="aimze-404-title">
			<?php echo esc_html__( "That page isn't here.", 'astra' ); ?>
		</h1>

		<p class="aimze-404-sub">
			<?php echo esc_html__( 'Sorry—looks like you landed on the wrong URL or the page has moved.', 'astra' ); ?>
		</p>

		<div class="aimze-404-actions">
			<a class="aimze-btn" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<?php echo esc_html__( 'Go to Home', 'astra' ); ?>
			</a>

			<a class="aimze-btn aimze-btn-outline" href="<?php echo esc_url( home_url( '/services-and-pricing/' ) ); ?>">
				<?php echo esc_html__( 'View Services & Pricing', 'astra' ); ?>
			</a>
		</div>
	</section>

	<?php astra_primary_content_bottom(); ?>

</div><!-- #primary -->

<?php if ( astra_page_layout() === 'right-sidebar' ) { ?>
	<?php get_sidebar(); ?>
<?php } ?>

<?php get_footer(); ?>