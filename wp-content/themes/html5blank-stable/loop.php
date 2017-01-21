<?php $loop = 0; ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<?php
	if($loop===0){
		$id = "one";
		$class_str="style1";
		$loop++;
	}else if($loop===1){
		$id = "two";
		$class_str="style2";
		$loop++;
	}else if($loop===2){
		$id = "three";
		$class_str="style3";
		$loop++;
	}else if($loop===3){
		$id = "four";
		$class_str="style4";
		$loop=0;
		}
 ?>
	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<section id="<?php echo $id ?>" class="wrapper <?php echo $class_str ?> spotlights">
	<div class="row">	
	<div class="col-md-3 col-sm-12">
		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" class= "image" title="<?php the_title(); ?>">
				<?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
			</a>
		<?php endif; ?>
		<!-- /post thumbnail -->
</div>			
<div class="col-md-9 col-sm-12">
		<div class="content">
			<div class="inner">

		<!-- post title -->
		<h2>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>
		<!-- /post title -->

		<!-- post details -->
		<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
		<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
		<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
		<!-- /post details -->

		<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>

		<?php edit_post_link(); ?>
				</div>
			</div>
		</div>
</div>

		

		</section>
	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
