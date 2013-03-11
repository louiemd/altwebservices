

 <?php get_header(); ?>
	

<!-- Example row of columns -->
<div id="contentpart">
	<div class="container">
		<div class="row-fluid">
			<div class="span8">
				
				<p>Seems you are lost. Here let me show you way <a href="/">out.</a></p>
			
			</div>
			<div class="span4">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?><?php endif; ?>								
			</div>
			
	    </div> <!-- row-fluid -->
	</div> <!-- container -->
</div> <!-- contentpart -->

<?php get_footer(); ?>