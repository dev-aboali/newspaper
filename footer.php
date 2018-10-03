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



				<footer class="site-footer bg-primary text-white py-3" id="colophon">

					<div class="site-info text-center">

						Copyrights &copy; -2018

					</div><!-- .site-info -->

				</footer><!-- #colophon -->



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
						      breakpoint: 992,
						      settings: {
						        slidesToShow: 3,
						        slidesToScroll: 1
						      }
						    },
						    {
						      breakpoint: 768,
						      settings: {
						        slidesToShow: 2,
						        slidesToScroll: 1
						      }
						    },
						    {
						      breakpoint: 544,
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

