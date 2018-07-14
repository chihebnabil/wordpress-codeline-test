<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article class="container post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	

		<!-- post title -->
		<h2>
			<?php the_title(); ?>
		</h2>
		<!-- /post title -->

       <?php the_post_thumbnail('thumbnail',array('class' => 'img-thumbnail')); ?>
       <br>
		<!-- post details -->
        Countries: <?php echo get_the_term_list( get_the_ID(), 'country', '<span class="label label-primary">', ', ', '</span>' ) ?>
        <br>
        Genres: <?php echo get_the_term_list( get_the_ID(), 'genre', '<span class="label label-info">', ', ', '</span>' ) ?>
<br>
 Ticket price : <?php the_field("ticket_price"); ?> $
 <br>
 Release date : <?php the_field("release_date"); ?> 
        
		<!-- /post details -->
        <p class=""><a class="btn btn-primary" role="button" href="<?php the_permalink(); ?>" >Read </a></p>
        


    

		<?php edit_post_link(); ?>

	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'bloody-mary' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>