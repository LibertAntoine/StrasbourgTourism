
<?php
/*
Template Name: Actualité

*/
?>

<?php get_header(); ?>
<!-- Page Title Section -->
<?php get_template_part('index', 'breadcrumb'); ?>
<!-- /Page Title Section -->
<!-- Blog & Sidebar Section -->
<div class="container">
	<div class="row">		
		<!--Blog Area-->
		<div class="<?php if(is_active_sidebar('sidebar_primary')){ echo 'col-md-8'; } else { echo 'col-md-12'; } ?>" >
		<?php
		the_post();
		?>
		</div>
		<!--/Blog Area-->
</div>
</div>
<?php $wallstreet_pro_options=theme_data_setup();
	  $current_options = wp_parse_args(  get_option( 'wallstreet_pro_options', array() ), $wallstreet_pro_options );
 if($current_options['blog_section_enabled'] == true) { ?>	
<div class="container home-blog-section">
	<div class="row">
		<div class="section_heading_title">
			<h1>Toutes les dernières actualités de Strasbourg</h1>
		<?php if($current_options['home_blog_description']) { ?>
			<div class="pagetitle-separator">
				<div class="pagetitle-separator-border">
					<div class="pagetitle-separator-box"></div>
				</div>
			</div>
			<p><?php echo $current_options['home_blog_description']; ?></p>
		<?php } ?>
		</div>
	</div>
	<div class="row">
		<?php
		$j=1;
		$args = array( 'category_name' => 'actualite','posts_per_page' =>10,'post__not_in'=>get_option("sticky_posts")); 	
		query_posts( $args );
		if(query_posts( $args ))
		{	while(have_posts()):the_post();
			$recent_expet = get_the_excerpt(); ?>
			<div class="col-sm-6">
				<div class="actualite-blog-area">
					<div class="actualite-blog-post-img"><?php
						$defalt_arg =array('class' => "img-responsive");
						if(has_post_thumbnail()): 
						the_post_thumbnail('', $defalt_arg); 
						endif; 
						?>
					</div>
					<div class="actualite-blog-info">						
						<div class="actualite-blog-post-detail">
							<span class="date"><?php echo get_the_date(); ?> </span>
												
						</div>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>		
						<div class="actualite-blog-description"><p><?php echo get_the_excerpt(); ?></p></div>
						<div class="actualite-blog-btn"><a href="<?php the_permalink(); ?>"><?php _e('Read More','wallstreet'); ?></a></div>							
					</div>
				</div>
			</div>
			<?php if($j%2==0){ echo "<div class='clearfix'></div>"; } $j++; endwhile; 
			} else  {
			echo "<div class='post_message'>No Posts to show.</div>";
			} ?>
	</div>
</div><!-- /wallstreet Blog Section ---->
<?php } ?>

<?php get_footer(); ?>	