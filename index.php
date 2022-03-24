<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bowen
 */
get_header();?>

	<section class="main" id="main">
		<div class="container">
			<h1 class="main-title">
				Past Webinars and Conferences
			</h1>
			<p class="main-text">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</div>
	</section>
	<section class="video" id="video">
		<div class="video-menu-mob">
			<select name="page" class="mob-page" id="mob-page">
				
			</select>
		</div>
		<div class="container">
			<ul class="video-menu d-flex">
				<?php  wp_nav_menu() ?>
			</ul>
			<div class="video-list d-flex">
				<?php
					$fields = get_fields();
					if( $fields ): ?>
						<?php foreach( $fields as $name => $value ): ?>
							<?php if( have_rows($name) ): ?>
								<?php while( have_rows($name) ): the_row(); ?>
									<div class="video-item">
										<div class="video-previews">
											<img src="<?php the_sub_field('img'); ?>" alt="" class="video-preview">
											<img src="<?php bloginfo('template_directory') ?>/img/play.png" alt="Play" link-to="<?php the_sub_field('video', false, false); ?>" class="video-play">
										</div>
										<div class="video-info">
											<h3 class="info-title">
												<?php the_sub_field('name'); ?>
											</h3>
											<?php the_sub_field('descr'); ?>
											<div class="video-more-text">
												<img src="<?php bloginfo('template_directory') ?>/img/more.png" alt="Arrow" class="more-img">
												<p class="more-text">
													Read More
												</p>
											</div>
										</div>
									</div>
								<?php endwhile; ?>
							<?php endif; ?>
						<?php endforeach; ?>
					<?php endif; 
				?>
			</div>
			<button class="video-more d-block">
				Load More
			</button>
		</div>
	</section>
	<section class="big-video">
		<img src="<?php bloginfo('template_directory') ?>/img/close.png" alt="" class="video-close">
		<iframe type="text/html"
			class="video-frame"
			src="http://www.youtube.com/embed/"
			frameborder="0">
		</iframe>
	</section>
<?php get_footer(); ?>
