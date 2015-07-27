<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package BBird Under
 */

get_header(); ?>

	<header class="page-header large-12 columns">
				<?php
					bbird_under_the_archive_title( '<h1 class="page-title">', '</h1>' );
					bbird_under_the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

	<main id="primary" class="site-main large-8 columns" role="main">

		<?php if ( have_posts() ) : ?>

		

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	

<?php get_sidebar(); ?>
<?php get_footer(); ?>
