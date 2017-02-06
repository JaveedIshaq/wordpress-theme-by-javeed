<?php get_header(); ?>

 	<div id="body_content">

 		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          
          <div class="post_box">
          	    
          	    <div class="post_title">
          	    	<h2> <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h2>
          	    </div> <!-- end post title -->
                
                
                	<?php if(has_post_thumbnail()){ ?>
                	    <div class="post_thumb">

                          <?php the_post_thumbnail(); ?>
                	     </div>

                		<?php } ?>
               
                


                <div class="entry">
                	<?php the_content(); ?>
                </div>

 	</div> <!-- closes the first div box -->
          	
          </div>



 	    <?php endwhile; else : ?>
	   <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>




      <?php endif; ?>


 	</div> <!-- end of body_content -->

 <?php get_footer(); ?>

 	