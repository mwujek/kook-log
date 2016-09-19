<?php
/**
* The main template file
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* e.g., it puts together the home page when no home.php file exists.
*
* Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
*
* @package WordPress
* @subpackage Twenty_Fifteen
* @since Twenty Fifteen 1.0
*/

get_header(); ?>

<div id="primary" class="content-area">
	<!-- <h1 class="kook-title">Welcome to the kook log</h1> -->
	<h2 class="total-hours">waiting...</h2>

	<section class="kook-log-container">
		<?php
		$nArgs = array( 'post_type' => 'session');
		$loop = new WP_Query( $nArgs );
		;

		while ( $loop->have_posts() ) : $loop->the_post();
		?>


	
		<?php 
			$conditions = types_render_field('session-conditions');
			$date = 			types_render_field('session-date');
			$location = 	types_render_field('session-location');
			$duration = 	types_render_field('session-duration');
			$waves = 			types_render_field('session-waves');
			$outlook = 		types_render_field('session-outlook');
			$height = 		types_render_field('surf-height');
			$tide = 			types_render_field('session-tide');
			$wind = 			types_render_field('wind-direction');
			$image = 			types_render_field('session-image');
			$swell = 			types_render_field('dominant-swell');
			$buds = 			types_render_field('session-buds');
		?> 


	<!-- START INDIVIDUAL POST TEMPLATE -->
	<article class="kook-log">



		
		<ul>
			<li>Conditions: <?php echo $conditions ?></li>
			
			<?php if($location !== ''){?>	<li>location: <?php echo $location 		?>	</li> <?php } ?>
			<?php if($duration !== ''){?>	<li>duration: <span class="amount-time"><?php echo $duration 		?></span>	</li> <?php } ?>
			<?php if($waves !== ''){?>	<li>waves: <?php 		echo $waves 			?>	</li> <?php } ?>
			<?php if($outlook !== ''){?>	<li>outlook: <?php 	echo $outlook 		?>	</li> <?php } ?>
			<?php if($height !== ''){?>	<li>height: <?php 	echo $height 			?>	</li> <?php } ?>
			<?php if($tide !== ''){?>	<li>tide: <?php 		echo $tide 				?>	</li> <?php } ?>
			<?php if($wind !== ''){?>	<li>wind: <?php 		echo $wind 				?>	</li> <?php } ?>
			<?php if($image !== ''){?>	<li>image: <?php 		echo $image 			?>	</li> <?php } ?>
			<?php if($swell !== ''){?>	<li>swell: <?php 		echo $swell 			?>	</li> <?php } ?>
			<?php if($buds !== ''){?>	<li><?php echo $buds ?></li>	<?php } ?>
		 </ul>
		<div class="post-content"> <?php echo the_content() ?> </div>

	</article>

	<?php endwhile; ?>

	</section>


</div><!-- .content-area -->

<?php get_footer(); ?>
