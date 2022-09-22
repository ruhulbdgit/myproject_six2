<?php
get_header();
<?php if ( have_posts() ) : 
 while ( have_posts() ) : the_post(); ?>
 <h2><a href=" <?php the_permalink(); ?>"></a> <?php the_title(); ?></h2>
 <?php the_content();?>
<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif(); ?>


get_footer();
?>