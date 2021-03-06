<?php get_header(); ?>

			<div id="col1wrap">
				<div id="col1pad">
					<div id="col1">
						<!-- Column 1 start -->
						<?php do_action('bandcamp_content'); ?>
						
	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>

				<div class="entry">
					<?php the_content('Read the rest of this entry &raquo;'); ?>
				</div>

				<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php get_search_form(); ?>

	<?php endif; ?>
						
						<!-- Column 1 end -->

					</div>
				</div>

			</div>
			<div id="col2">
				<!-- Column 2 start -->
				<?php get_sidebar(); ?>
				<!-- Column 2 end -->
			</div>
			<div id="col3">
				<!-- Column 3 start -->
					<?php do_action('bandcamp_rightside'); ?>
				<!-- Column 3 end -->

			</div>
		


<?php get_footer(); ?>
