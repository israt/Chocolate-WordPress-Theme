<?php
/************
 * Template Name: Shop
 ***********/
get_header(); ?>
    
   <section class="inner-header">
   		<div class="container">
        	<h2><?php the_title();?></h2>
            <ul>
              <li><a href="#">Home</a></li>
              <li>></li>
              <li><a href="#"><?php the_title();?></a></li>
            </ul>
        </div>
        <!--container ends....	-->
   </section>
   <!--inner-header ends......-->
   
   <section class="inner-content min-height">
   		<div class="container">
        	<div class="col-md-3">
            	<div class="category">
                	<p>Coming Soon...</p>
                </div>	           
            </div>
            <!--col-md-3 ends....-->
            
            <div class="col-md-9">
            	<div class="product">
                	<p>Coming Soon...</p>	
                </div>	            
            </div>
            <!--col-md-3 ends....-->
        </div>
   </section>
   <!--inner-content ends......-->
<?php get_footer(); ?>
    