<?php
/************
 * Template Name: Contact Us
 ***********/
get_header(); ?>


<!--------------banner_area_inner_about starts------------------------------------------->

    
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


<section class="inner-content">
    	<div class="container">
        	<div class="inner_about">
            	<div class="col-md-12">
                	<!--contact starts.....-->
                    <!--contact starts...--> 
                        <div class="contact2">
                            <div class="col-md-6 col-sm-6">
                            	<div class="row">
                                <div class="contact-book">
                                	<?php echo of_get_option('c2','no entry');?>
                                </div>
                                <div class="contact_map">
                                	<?php echo of_get_option('map','no entry');?>
                                </div>
                                </div>
                                <!--row ends....-->
                            </div>
                            <!--col-md-6 ends...-->
                            <div class="col-md-6 col-sm-6">
                              <div class="form_area_inner">
                                <h2><b>Your Enquiry</b></h2>
                                <?php echo do_shortcode('[contact-form-7 id="29" title="Contact form"]');?>
                              </div>
                         </div>
                         <!--col-md-6 ends...-->
                        </div>
                        <!--contact ends...-->
                </div>
                <!--col-md-12 ends....-->
            </div>
        </div>
</section>

<!--inner page content ends........-->
<?php get_footer(); ?>











                               <
