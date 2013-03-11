

 <?php get_header(); ?>

	

<!-- Example row of columns -->
<div id="contentpart">
	<div class="container">
		<div class="row-fluid">
			<div class="span8">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<h2 class="bottomElement"><?php the_title(); ?></h2>
					<p class="meta">
						<em><?php the_date(); ?> by <?php the_author() ?></em>
					</p>
					<?php the_content(); ?>
					<?php comments_template(); ?>
				<?php endwhile; else: ?>
					<p>Sorry, no posts matched your criteria.</p>
				<?php endif; ?>
									
									
									
			</div>
			<div class="span4">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?><?php endif; ?>					
			</div>
			
	    </div> <!-- row-fluid -->
	</div> <!-- container -->
</div> <!-- contentpart -->

<?php get_footer(); ?>