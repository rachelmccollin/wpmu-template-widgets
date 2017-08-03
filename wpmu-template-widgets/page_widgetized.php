<?php
/*
Template Name: Widgetized Page
*/

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
			<?php if( is_active_sidebar( 'widgetized-page-before-content-widget-area' ) ) : ?>
				<aside class="widgetized-page-before-content-widget-area">
					<?php dynamic_sidebar( 'widgetized-page-before-content-widget-area' ); ?>
				</aside>
			<?php endif; ?>

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/page/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
			
			<?php if( is_active_sidebar( 'widgetized-page-after-content-widget-area' ) ) : ?>
				<aside class="widgetized-page-after-content-widget-area">
					<?php dynamic_sidebar( 'widgetized-page-after-content-widget-area' ); ?>
				</aside>
			<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
