<?php
get_header();

$container   = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="index-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">
		<!-- Main posts section -->
		<div class="latest_news py-3">
			<div class="row">
			
				<div class="col-md-8">
					<div class="main">
						<?php 
							$args = array(
	                        'post_type' => 'post',
	                        'posts_per_page' => 3,
	                        'orderby' => 'title menu_order',
	                        'order' => 'DESC'
	                    	);
	                    	$posts = get_posts( $args );
							
							if($posts){
								foreach( $posts as $key => $post ) : setup_postdata( $post );

								if($key == 0){ ?>

									<div class="big-news">
										
										<span class="category">
											<?php the_category(' ');?>
										</span>
										<?php the_post_thumbnail('large');?>
										<a href="<?php the_permalink();?>" class="title"><?php the_title();?></a>
									
								    </div>

								<?php } else { ?>

									<div class="small-news">
										<span class="category">
											<?php the_category(' ');?>
										</span>
										<?php the_post_thumbnail('small');?>
										<a href="<?php the_permalink();?>" class="title"><?php the_title();?></a>
									</div>	

								<?php }


								wp_reset_postdata(); endforeach;
								?>
							<?php } ?>
						
						
					</div> 
				</div> 
	
				<div class="col-md-4 advertising_area">
					<div class="advertising_box">Advertising Area</div>
				</div>

		</div><!-- .row -->
		</div> <!-- ./Main posts section -->

		<section class="egypt-news py-3">
			<div class="row">
				<div class="col">
					<h3 class="section-title">EGYPT NEWS</h3>
					<div class="slider-container">
							<div class="news-slider">
						
						<?php $args = array(
						    'post_type' => 'post',
						    'category_name'=>'local'
						);

						$loop = new wp_Query($args);
						
						while($loop->have_posts()) : $loop->the_post(); ?>
							<div class="slide">
							    <a href="<?php the_permalink()?>">
							    	
							    	<?php
								    echo get_the_post_thumbnail($post->ID, 'small');
								    ?>
						
								    <span class="slide-title">
								    	<?php the_title(); ?> 
								    </span>
							    </a>
						    </div>
						<?php     
						endwhile;
						
						wp_reset_query(); ?>
					</div>
					<div class="silder-controllers">
							<span class="next"><i class="fa fa-angle-right"></i></span>
							<span class="prev"><i class="fa fa-angle-left"></i></span>
					</div>
					</div>
					
  
				</div>
			</div>
		</section> <!-- ./egypt-news section -->

		<div class="features-stories py-3">
			<div class="row">
				<div class="col-md-8">
					<section class="features">
						<h3 class="section-title features-title">FEATURES</h3>
							<?php $args = array(
							    'post_type' => 'features',
							    'posts_per_page' => 2,
							    'orderby' => 'title menu_order',
		                        'order' => 'DESC'
							);

							$loop = new wp_Query($args);
							
							while($loop->have_posts()) : $loop->the_post(); ?>
								<div class="feature-box">
								    <a href="<?php the_permalink()?>">
								    	<?php
									    echo get_the_post_thumbnail($post->ID, 'large');
									    ?>
									    <span class="feature-title">
									    	<?php the_title(); ?> 
									    </span>
								    </a>
								</div>    
							<?php     
							endwhile;
							
							wp_reset_query(); ?>

						
						
						

					</section> <!-- ./features section -->
				</div>
				<div class="col-md-4">
					<section class="stories">
						<h3 class="section-title stories-title">TOP 5 STORIES</h3>
						<ul class="list-group stories-list">
						<?php $args = array(
						    'post_type' => 'stories',
						    'posts_per_page' => 5,
						    'orderby' => 'title menu_order',
	                        'order' => 'DESC'
						);

						$loop = new wp_Query($args);
						$counter = 1;
						while($loop->have_posts()) : $loop->the_post(); ?>
								<li class="list-group-item">
								    <a href="<?php the_permalink()?>">
								    		<span class="count"><?php echo $counter?></span>
									    	<span class="story-title"><?php the_title(); ?> </span>
								    </a>
								</li>    
						<?php  
						$counter++;   
						endwhile;
						
						wp_reset_query(); ?>
						</ul>
					</section> <!-- ./stories section -->
				</div>

			</div>
		</div>  <!-- ./features-stories Container -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
