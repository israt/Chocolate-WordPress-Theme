<?php
/************
 * Template Name: About
 ***********/
get_header(); ?>

 <section class="inner-header">
   		<div class="container">
        	<h2><?php the_title();?></h2>
            <ul>
              <li><a href="<?php bloginfo('url'); ?>">Home</a></li>
              <li>/</li>
              <li><a href="#"><?php the_title();?></a></li>
            </ul>
        </div>
        <!--container ends....	-->
   </section>
   <!--inner-header ends......-->
   
   <section class="inner-content min-height">
   		<div class="container">
        	<div class="col-md-12">
            	<?php
						// Start the loop.
						while ( have_posts() ) : the_post();
						?>
                
                		<?php the_content(); ?>  
                       
                        <?php
						// End the loop.
						endwhile;
						?>
            </div>
            <!--col-md-12 ends....-->
        </div>
   </section>
   <!--inner-content ends......-->
<?php get_footer(); ?>

