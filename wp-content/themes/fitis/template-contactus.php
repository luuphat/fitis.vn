<?php /* Template Name: ContactUs Template */ get_header(); ?>
<?php //if( function_exists('cyclone_slider') ) cyclone_slider('main-slider'); ?>
<?php get_header('3product'); ?>

        <div class="nav_container" id="nav_container">
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
            <?php //get_header('menu'); ?>


	<main role="main">
		<!-- section -->
		<section>

			<h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>   
