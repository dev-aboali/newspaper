<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">

						Copyrights &copy; -2018

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

<script>
	(function($){
 			$('.news-slider').slick({
			   speed: 500,
			   infinite: true,
			   slidesToShow: 4,
			   slidesToScroll: 1,
			   accessibility: true,
			   prevArrow: '.egypt-news .prev',
			   nextArrow: '.egypt-news .next',
			   
			   responsive: [

			   				{
						      breakpoint: 1000,
						      settings: {
						        slidesToShow: 3,
						        slidesToScroll: 1
						      }
						    },
						    {
						      breakpoint: 700,
						      settings: {
						        slidesToShow: 2,
						        slidesToScroll: 1
						      }
						    },
						    {
						      breakpoint: 480,
						      settings: {
						        slidesToShow: 1,
						        slidesToScroll: 1
						      }
						    }
						   
  					]

			});
	})(jQuery);
	
</script>
</body>


</html>

