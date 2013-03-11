<!DOCTYPE html>
<html>
  <head>
    <title>
    	<?php if (function_exists('is_tag') && is_tag()) {
		          single_tag_title('Tag Archive for &quot;'); echo '&quot; - ';
		    } elseif (is_archive()) {
		          wp_title(''); echo ' Archive - ';
		    } elseif (is_search()) {
		          echo 'Search for &quot;'.wp_specialchars($s).'&quot; - ';
		    } elseif (!(is_404()) && (is_single()) || (is_page())) {
		          wp_title(''); echo ' - ';
		    } elseif (is_404()) {
		          echo 'Not Found - ';
		    }
		    if (is_home()) {
		          bloginfo('name'); echo ' - '; bloginfo('description');
		    } else {
		          bloginfo('name');
		    }
		    if ($paged > 1) {
		          echo ' - page '. $paged;
		    } ?>

    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap-responsive.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
	
	<div id="header">
		<div class="container">
        	<h1 class="pull-left"><a href="<?php echo get_option('home'); ?>/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo2.png" alt="<?php bloginfo('name'); ?>"></a></h1>
      		
			<?php
			
			wp_nav_menu( array(
			'menu'            => 'Primary Menu',
			'theme_location' => '',
			'container' =>false,
			'menu_class' => '',
			'echo' => true,
			'before' => '',
			'after' => '',
			'link_before' => '',
			'link_after' => '',
			'depth' => 0,
			'items_wrap' => '<ul class="nav nav-pills pull-right">%3$s</ul>'
			));
			
			?>
		</div>
	</div> <!-- end header -->

		
	<?php if(is_front_page()) { ?>	
		
	<!-- Carousel
	  ================================================== -->
	  <div id="myCarousel" class="carousel slide">
	    <div class="container">	
			  <div class="carousel-inner">
		        <div class="item active">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/altweb-slider-1.png" alt= "" />
		        </div> <!-- item -->
		        <div class="item">
		          	<img src="<?php bloginfo('stylesheet_directory'); ?>/images/altwebSEOSlide2.png" alt= "" />
		        </div> <!-- item -->
		        <div class="item">
		          	<img src="<?php bloginfo('stylesheet_directory'); ?>/images/altwebWebDevSlide2.png" alt= "" />
		        </div> <!-- item -->
		      </div> <!-- carousel-inner -->
		      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
		      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
		  </div>
	  </div><!-- /.carousel -->

			<?php } elseif (is_404()) { ?>
				
					<div id="masthead">
						 <div class="container">
						 	<h1>404 Page</h1>
						 </div>
					</div>
				
			<?php } else { ?>

			<div id="masthead">
				 <div class="container">
				 	<h1><?php the_title(); ?></h1>
				 </div>
			</div>

		<?php } ?>