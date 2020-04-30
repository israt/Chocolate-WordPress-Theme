<?php
/************
 * Template Name: Sitemap
 ***********/
get_header(); ?>

 <section class="inner-header">
   		<div class="container">
        	<h2><?php the_title();?></h2>
            <ul>
              <li><a href="<?php bloginfo('url'); ?>">Home</a></li>
              <li>></li>
              <li><a href="#"><?php the_title();?></a></li>
            </ul>
        </div>
        <!--container ends....	-->
   </section>
   <!--inner-header ends......-->
   
   <section class="inner-content min-height">
   		<div class="container">
        	<div class="col-md-12">
            	<ul class="sitemap">
            	  <li><a href="<?php bloginfo('url');?>/about-us/">About</a></li>
                  <li><a href="<?php bloginfo('url');?>/shop/">Shop</a>
                  <ul>
              		   <li><a href="<?php bloginfo('url');?>/shop/">Weddings</a></li>
                       <li><a href="<?php bloginfo('url');?>/shop/">Birthday</a></li>
                       <li><a href="<?php bloginfo('url');?>/shop/">Christmas</a></li>
                       <li><a href="<?php bloginfo('url');?>/shop/">Easter</a></li>
                       <li><a href="<?php bloginfo('url');?>/shop/">Hens</a></li>
                       <li><a href="<?php bloginfo('url');?>/shop/">Gift Boxes</a></li>
                       <li><a href="<?php bloginfo('url');?>/shop/">Corporate</a></li>
                       <li><a href="<?php bloginfo('url');?>/shop/">Other Occasions</a></li>
                       <li><a href="<?php bloginfo('url');?>/shop/">Cup Cakes</a></li>
                       <li><a href="<?php bloginfo('url');?>/shop/">Special Occasion Cakes</a></li>
              		</ul>
                  
                  </li>
                  <li><a href="<?php bloginfo('url');?>/classes/">Classes</a></li>
                   <li><a href="<?php bloginfo('url');?>/boxes/">Boxes</a></li>
                    <li><a href="<?php bloginfo('url');?>/gallery/">Gallery</a></li>
                     <li><a href="<?php bloginfo('url');?>/postage/">Postage</a></li>
                      <li><a href="<?php bloginfo('url');?>/contact-us/">Contact us</a></li>
                       <li><a href="<?php bloginfo('url');?>/terms-condition/">Terms & condition</a></li>
                        <li><a href="<?php bloginfo('url');?>/privacy-policy/">Privacy Policy</a></li>
                         <li><a href="<?php bloginfo('url');?>/shipping-info/">Shipping & Info</a></li>
                          <li><a href="<?php bloginfo('url');?>/sitemap/">Sitemap</a></li>
            	</ul>
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