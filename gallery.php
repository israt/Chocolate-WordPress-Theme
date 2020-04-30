<?php
/************
 * Template Name: Gallery
 ***********/
get_header(); ?>
    
   <section class="inner-header">
   		<div class="container">
        	<h2><?php the_title();?></h2>
            <ul>
              <li><a href="#">Home</a></li>
              <li>/</li>
              <li><a href="#"><?php the_title();?></a></li>
            </ul>
        </div>
        <!--container ends....	-->
   </section>
   <!--inner-header ends......-->
   
   <section class="inner-content min-height">
   		<div class="container">
        	<?php

					$args = array(

					'post_type' => 'Gallery',

					  'orderby' => 'name',

					  'order' => 'ASC',	

					  );					  

					  $query = new WP_Query($args);

						if($query->have_posts()) : while ($query->have_posts()) : $query->the_post();



			  ?>
              <?php
     $feat_image3 = '';
                if (has_post_thumbnail( $post->ID ) ){ 
                $feat_image3 = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
    }
    ?>
        
        
        	<div class="col-md-3">
            	            <div class="single-gallery2">
                            
                            	
                            	<div class="single-gallery3">
                                <a class="fancybox" href="<?php echo $feat_image3; ?>" data-fancybox-group="gallery" title="<?php the_title();  ?>"><img src="<?php echo $feat_image3; ?>" alt="" / class="image2"></a>
                                </div>
                                <div class="single-title2">
                                	<h3><?php the_title();  ?></h3>
                                </div>	
                                
                            </div>
            </div>
            <!--col-md-3 ends....-->
            
            <?php endwhile; 

						 wp_reset_postdata();?>	

					    <?php endif; ?>  
                
            
           
          
            
           
           
            
            
            
            
            
            
           
        
        </div>
   </section>
   <!--inner-content ends......-->
    
<?php get_footer(); ?>
    