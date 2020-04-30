<?php



/************



 *  This is Home page main Template file *



 *  Template Name: HomePage



 ***********/



get_header(); ?>

 <section class="banner-area">
        	<ul class="bxslider1">
            	<?php

					$args = array(

					'post_type' => 'slider',

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
            	 <li>
                    <img src="<?php echo $feat_image3; ?>" alt="<?php the_title();  ?>">
                    <div class="carousel-caption">
                    	<div class="bn-title">
                        	<h2><?php the_title();  ?></h2>	
                        </div>
                        <p><?php the_content();  ?></p>
                    </div>
                </li>
                
                <?php endwhile; 

						 wp_reset_postdata();?>	

					    <?php endif; ?>  
                
            </ul>	
    </section>
    <!--section.banner-area ends.....-->
    
    <section class="product">
    	<div class="container">
       		<div class="col-md-4 col-sm-4">
            	<a href="<?php bloginfo('url');?>/product-category/special-occasion-cakes/"><div class="single-product-p">
                	<div class="color-overlay"></div>
                	<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/p1.jpg" class="image2" alt="">	
                     <div class="border"></div>
                     <div class="content">
                    	<h3>Special<br/>Occasion Cakes</h3>
                    </div>
                    
                </div></a>
                <!--single-product ends....	-->
            </div>
            <!--col-md-4 ends.....-->
            
            <div class="col-md-4 col-sm-4">
            	<a href="<?php bloginfo('url');?>/product-category/christmas/"><div class="single-product-p">
                	<div class="color-overlay"></div>
                	<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/p3.jpg" class="image2" alt="">
                    <div class="border2"></div>
                    <div class="content2">
                    	<h3>Christmas</h3>
                    </div>	
                </div></a>
                <!--single-product ends....	-->
                <a href="<?php bloginfo('url');?>/product-category/weddings/"><div class="single-product-p">
                	<div class="color-overlay"></div>
                	<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/p2.jpg" alt="" class="image2">
                    <div class="border2"></div>	
                    <div class="content2">
                    	<h3>weddings</h3>
                    </div>
                </div></a>
                <!--single-product ends....	-->
            </div>
            <!--col-md-4 ends.....-->
            
            <div class="col-md-4 col-sm-4">
            	<a href="<?php bloginfo('url');?>/product-category/corporate/"><div class="single-product-p">
                	<div class="color-overlay"></div>
                	<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/p4.jpg" alt="" class="image2">	
                    <div class="border"></div>
                    <div class="content">
                    	<h3>Corporate</h3>
                    </div>
                </div></a>
                <!--single-product ends....	-->
            </div>
            <!--col-md-4 ends.....-->
        </div>
        <!--container ends....-->
    </section>
    <!--section.product ends.....-->
    
    
    <section class="featured-product">
    	<div class="container">
        	<div class="col-md-12 col-sm-12">
                <div class="heading">
                    <h1>Featured Product</h1>	
                </div>
                <!--heading ends....-->	
                
                <div class="product-gallery">
                <ul id="flexiselDemo1"> 
                <?php

    $meta_query   = WC()->query->get_meta_query();
$meta_query[] = array(
    'key'   => '_featured',
    'value' => 'yes'
);
$args = array(
    'post_type'   =>  'product',
    'stock'       =>  1,
    'showposts'   =>  6,
    'orderby'     =>  'date',
    'order'       =>  'DESC',
    'meta_query'  =>  $meta_query
);

    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

                        <li>  
                        <div class="single-gallery">
                            <a href="<?php the_permalink() ?>"> <?php 
									if ( has_post_thumbnail( $loop->post->ID ) ) 
										echo get_the_post_thumbnail( $loop->post->ID, 'shop_catalog' ); 
									else 
										echo '<img src="' . woocommerce_placeholder_img_src() . '" alt="Placeholder" width="65px" height="115px" />'; 
								?></a>
                                <div class="single-title">
                                	<a href="<?php the_permalink() ?>" style="text-decoration:none;"><h3><?php the_title(); ?></h3></a>
                                    <h2> <?php 
										echo $product->get_price_html(); 
										woocommerce_template_loop_add_to_cart( $loop->post, $product );
									?> </h2>
                                   
                                </div>	
                            </div> 
              
                       </li>
                    
                    <?php 
                        endwhile;
                        wp_reset_query(); 
                    ?>
                   
                    </ul>
                </div>
                <!--product-gallery ends.....-->
            </div>
            <!--col-md-12 ends....-->
        </div>
        <!--container ends....-->
    </section>
    <!--featured-product ends....-->
    
    
    <section class="video">
        <?php echo of_get_option('video','no entry');?>
    </section>
    <!--video ends....-->
    
    
    <section class="testimonial">
    	<div class="container">
        	<div class="col-md-2 col-sm-2"> &nbsp;</div>
            <div class="col-md-10 col-sm-10">
                <div class="heading2">
                        <h1>What Client says</h1>	
                </div>
                <!--heading ends....-->	
            </div>
            <!--col-md-10 ends.....-->
            <div class="testimonial-inner">
                <ul class="bxslider2">
                	<?php
					$args = array(
					'post_type' => 'testi',
					  'orderby' => 'name',
					  'order' => 'DESC',	
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
                     <li> 
                        <div class="col-md-2 col-sm-2">
                            <div class="client">
                                <img src="<?php echo $feat_image3; ?>" alt="">
                                <p><?php the_title();  ?></p>
                                <p><?php the_subtitle(); ?></p>
                            </div>
                        </div>
                        <!--col-md-2 ends....-->
                        <div class="col-md-10 col-sm-10">
                            <div class="comments">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                                <?php the_content(); ?>
                            </div>
                        </div>
                        <!--col-md-10 ends....-->
                    </li>
                     <?php endwhile; 
						 		wp_reset_postdata();?>	
					 		  <?php endif; ?> 
                </ul>
            </div>
            <!--testimonial-inner ends....-->
        </div>
        <!--container ends.....-->
    </section>
    <!--testimonial ends...-->
<?php get_footer(); ?>    
    
  