

 <?php get_header(); ?>

	

<!-- Example row of columns -->
<div id="contentpart">
	<div class="container">
		<div class="row-fluid">
			<div class="span8">
			<?php if (have_posts()) : ?>
								<?php while (have_posts()) : the_post(); ?>
									
									
									<div style="margin-bottom:30px" class="post">
											
											
												<?php //the_post_thumbnail(array('class' => 'alignleft')); ?>
												<div class="pull-left">
												<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
												<p class="meta">
													<span class="label label-inverse"><?php the_date(); ?> by <?php the_author() ?></span>
												</p>
												</div>
												<div class="commentBubble pull-right" style="padding-top:25px;">
													Comments <span class="badge badge-info"><a style="color:#fff; font-size:18px;" href="<?php comments_link(); ?>"><?php comments_number( '0','1','%'); ?></a></span>
												</div>
												<div class="clearfix"></div>
												<?php the_excerpt(); ?> 
												<a class="btn" href="<?php the_permalink() ?>">… Read More</a>
												


									</div> <!-- end  post-->
									<?php endwhile; ?>

									<div class="navigation">
										<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
										<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
									</div>

									<?php else : ?>

									<h2 class="center">Not Found</h2>
									<p class="center">Sorry, but you are looking for something that isn't here.</p>

							<?php endif; ?>
			</div>
			<div class="span4">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?><?php endif; ?>					
			</div>
			
	    </div> <!-- row-fluid -->
	</div> <!-- container -->
</div> <!-- contentpart -->

<?php get_footer(); ?>