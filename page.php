

 <?php get_header(); ?>

<!-- Example row of columns -->
<div id="contentpart">
	<div class="container">
		<div class="row-fluid">
			<div class="span8">
				
				<?php if(is_front_page()): ?>
					<h2 style="margin-bottom:30px"><em><?php the_title(); ?></em></h2>
				<?php endif; ?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>			
					<?php the_content(); ?>
				<?php endwhile; endif; ?>
			
			</div>
			<div class="span4">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?><?php endif; ?>								
			</div>
			
	    </div> <!-- row-fluid -->
	</div> <!-- container -->
</div> <!-- contentpart -->

<?php get_footer(); ?>