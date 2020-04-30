
    <footer>
    	<div class="container">
        	<div class="col-md-6 col-sm-6">
            	<div class="footer-left">
                	<a href="<?php bloginfo('url');?>"><img src="<?php echo of_get_option('logo-ft','no entry');?>" alt="logo-ft"></a>
                    <?php echo of_get_option('c1','no entry');?>
                </div>
                <!--footer-left ends.....-->
            </div>
           <!-- col-md-6 ends...-->
           <div class="col-md-6 col-sm-6">
           		<div class="footer-right">
         			<div class="width"><ul class="footer-menu">
                	  <li><a href="<?php bloginfo('url');?>/terms-condition/">Terms & condition</a></li>
                      <li><a href="<?php bloginfo('url');?>/privacy-policy/">Privacy Policy</a></li>
                      <li><a href="<?php bloginfo('url');?>/shipping-info/">Shipping & Info</a></li>
                      <li><a href="<?php bloginfo('url');?>/sitemap/">Sitemap</a></li>              
                	</ul></div>
                    <!--footer-menu ends....-->	
                    
                    <div class="width"><ul class="follow">
                	  <li>Follow Us:</li>
                      <li><a href="<?php echo of_get_option('fb','no entry');?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                      <li><a href="<?php echo of_get_option('ins','no entry');?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                      <li><a href="<?php echo of_get_option('pin','no entry');?>"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>              
                	</ul></div>
                    <!--footer-menu ends....-->	
                    
                    <div class="width"><ul class="pay">
                      <li><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/pay1.png" alt=""></a></li>
                      <li><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/pay2.png" alt=""></a></li>
                      <li><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/pay3.png" alt=""></a></li>
                      <li><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/pay4.png" alt=""></a></li>          
                	</ul></div>
                    <!--footer-menu ends....-->	
                    
                    <p><?php echo of_get_option('copyright_ftext','no entry');?></p>
                    
                </div>
                <!--footer-right ends.....-->		
           </div>
           <!--col-md-6 ends....-->
        </div>
        <!--container ends.....	-->
    </footer>
    <!--footer ends.....-->
    

<!-- **** JS(Java Script) FILES****** --> 
<!-- Lib -->
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-1.10.1.min.js"></script>
<!-- BOOTSTRAP js -->
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.js"></script>

<!-- Menu JS -->
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/menu-responsive.js"></script>

<!-- bx JS -->
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.bxslider.js"></script>
<script type="text/javascript">

	$(document).ready(function(){

	  $('.bxslider1').bxSlider();
	  $('.bxslider2').bxSlider();

	});

</script>

<!--flexisel.js-->
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.flexisel.js"></script>
<script type="text/javascript">
$(window).load(function() {
    $("#flexiselDemo1").flexisel();
});
</script>


<!-- Add fancyBox main JS -->
<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.fancybox.js?v=2.1.5"></script>

<script type="text/javascript">
		$(document).ready(function() {
			
			$('.fancybox').fancybox();

		});
</script>



<?php wp_footer(); ?>
</body>
</html>