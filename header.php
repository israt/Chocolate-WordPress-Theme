<?php

/**

 * The template for displaying the header

 *

 * @package WordPress

 * @subpackage Dynasty3

 * @since Dynasty3 1.0

 */

?>

<!doctype html>
<html lang="en-US">
<head>
<title><?php wp_title( '|', true, 'right' ); ?></title>
<meta charset="utf-8">


<!-- Responsive View  -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Favicon -->
<link rel="shortcut icon" href="<?php echo of_get_option('fav','no entry');?>">

<!-- Google fonts-->
<link href='https://fonts.googleapis.com/css?family=Lato:400,900italic,900,700italic,700,400italic,300italic,300,100italic,100' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!-- FONT awesome STYLES -->
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/font-awesome.min.css" type="text/css" />
<!-- BOOTSTRAP STYLES -->
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.css" type="text/css" />

<!-- Add fancyBox CSS files -->
<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/jquery.fancybox.css?v=2.1.5" media="screen" />

<!--slider-->
<link rel="stylesheet" media="all" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/jquery.bxslider.css" type="text/css">

<!--flex.css-->
<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/flex.css" rel="stylesheet" type="text/css" />

<!-- Menu CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/menu.css" media="all" />


<!-- CSS STYLES -->
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css" type="text/css" />
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/template.css" type="text/css" />

<!-- Responsive Devices Styles -->
<link rel="stylesheet" media="screen" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/responsive-leyouts.css" type="text/css" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header class="for-mobile2">
    	<div class="container">
        	<div class="col-md-3 col-sm-3">
            	<div class="search-box">
                <?php dynamic_sidebar("sidebar-2")?>
                	<!--<form role="form">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search Products">
                      </div>
                      <input type="submit" class="" />
                    </form>
                    <!--form ends....-->
                </div>
                <!--search-box ends.....	-->
            </div>
           <!-- col-md-3 ends.....-->
           
           <div class="col-md-6 col-sm-6">
           		<div class="logo-area">
                	<a href="<?php bloginfo('url'); ?>" title="<?php echo of_get_option('sitename','no entry');?>"><img src="<?php echo of_get_option('logo','no entry');?>" alt="logo"></a>	
                </div>
                <!--logo-area ends......-->
           </div>
           <!--col-md-6 ends......	-->
           
           <div class="col-md-3 col-sm-3">
           		<div class="login-area">
                
                
                	<ul>
                    
                     <?php
									  if ( is_user_logged_in() ) {
										  ?>
										  <li><a href="<?php echo bloginfo('url'); ?>/my-account/">My Account</a></li>   <li><a href="#">/</a></li>
                                          <li><a href="<?php echo bloginfo('url'); ?>/my-account/customer-logout/">Logout</a></li>
                                          <?php
									  } else {
										?>
										<li><a href="<?php echo bloginfo('url'); ?>/my-account/">Sign In</a></li>  <li><a href="#">/</a></li>
									    <li><a href="<?php echo bloginfo('url'); ?>/my-account/">Sign Up</a></li>
										<?php
									  }
									  ?>

<li class="create">
                      		<a href="<?php bloginfo('url'); ?>/cart/"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/bag.png" alt=""></a>
                            <a href="<?php bloginfo('url'); ?>/cart/"><span><?php  /* Display number of items in cart and total */  global $woocommerce;  echo "".sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count); ?></span></a>
                      </li>
                	</ul>	
                </div>
                <!--login-area ends....	-->
           </div>
           <!--col-md-3 ends......-->
        </div>
        <!--container ends.....	-->
    </header>
    <!--header ends.....-->
    
    <header class="for-mobile">
    	<div class="container">
           <div class="col-md-6 col-sm-6">
           		<div class="logo-area">
                	<a href="<?php bloginfo('url'); ?>" title="<?php echo of_get_option('sitename','no entry');?>"><img src="<?php echo of_get_option('logo','no entry');?>" alt="logo"></a>
                </div>
                <!--logo-area ends......-->
           </div>
           <!--col-md-6 ends......	-->
           
           <div class="col-md-3 col-sm-3">
            	<div class="search-box">
                	<?php dynamic_sidebar("sidebar-2")?>
                	<!--<form role="form">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search Products">
                      </div>
                      <input type="submit" class="" />
                    </form>-->
                    <!--form ends....-->
                </div>
                <!--search-box ends.....	-->
            </div>
           <!-- col-md-3 ends.....-->
           
           <div class="col-md-3 col-sm-3">
           		<div class="login-area">
                	<ul>
                    
                     <?php
									  if ( is_user_logged_in() ) {
										  ?>
										  <li><a href="<?php echo bloginfo('url'); ?>/my-account/">My Account</a></li>   <li><a href="#">/</a></li>
                                          <li><a href="<?php echo bloginfo('url'); ?>/my-account/customer-logout/">Logout</a></li>
                                          <?php
									  } else {
										?>
										<li><a href="<?php echo bloginfo('url'); ?>/my-account/">Sign In</a></li>  <li><a href="#">/</a></li>
									    <li><a href="<?php echo bloginfo('url'); ?>/my-account/">Sign Up</a></li>
										<?php
									  }
									  ?>

<li class="create">
                      		<a href="<?php bloginfo('url'); ?>/cart/"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/bag.png" alt=""></a>
                           <a href="<?php bloginfo('url'); ?>/cart/"> <span><?php  /* Display number of items in cart and total */  global $woocommerce;  echo "".sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count); ?></span></a>
                      </li>
                	</ul>	
                </div>
                <!--login-area ends....	-->
           </div>
           <!--col-md-3 ends......-->
        </div>
        <!--container ends.....	-->
    </header>
    <!--header ends.....-->
    
    <section class="menu-area">
    	<div class="container">
        	<div class="responsive-menu">
            	<i class="fa fa-bars menu-icon" aria-hidden="true"></i>
            </div>
             <?php
							  $url=get_post_permalink();
								 $pageid = url_to_postid( $url );
							?>  
            <div class="nav dnt3-menu">
                    <ul class="dropdown clear">
                        <li><a href="<?php bloginfo('url'); ?>" class="active">Home</a></li>
              <li><a href="<?php bloginfo('url');?>/about-us/" <?php echo $pageid== '7'?'class="active"':'';?>>ABOUT</a></li>
              <li class="sub"><a href="#">SHOP</a>
              		<ul>
              		   <li><a href="<?php bloginfo('url');?>/product-category/weddings/" <?php echo $pageid== '7'?'class="active"':'';?>>Weddings</a></li>
                       <li><a href="<?php bloginfo('url');?>/product-category/birthday/" <?php echo $pageid== '7'?'class="active"':'';?>>Birthday</a></li>
                       <li><a href="<?php bloginfo('url');?>/product-category/christmas/" <?php echo $pageid== '7'?'class="active"':'';?>>Christmas</a></li>
                       <li><a href="<?php bloginfo('url');?>/product-category/easter/" <?php echo $pageid== '7'?'class="active"':'';?>>Easter</a></li>
                       <li><a href="<?php bloginfo('url');?>/product-category/hens/" <?php echo $pageid== '7'?'class="active"':'';?>>Hens</a></li>
                       <li><a href="<?php bloginfo('url');?>/product-category/gift-boxes/" <?php echo $pageid== '7'?'class="active"':'';?>>Gift Boxes</a></li>
                       <li><a href="<?php bloginfo('url');?>/product-category/corporate/" <?php echo $pageid== '7'?'class="active"':'';?>>Corporate</a></li>
                       <li><a href="<?php bloginfo('url');?>/product-category/other-occasions/" <?php echo $pageid== '7'?'class="active"':'';?>>Other Occasions</a></li>
                       <li><a href="<?php bloginfo('url');?>/product-category/cup-cakes/" <?php echo $pageid== '7'?'class="active"':'';?>>Cup Cakes</a></li>
                       <li><a href="<?php bloginfo('url');?>/product-category/special-occasion-cakes/" <?php echo $pageid== '7'?'class="active"':'';?>>Special Occasion Cakes</a></li>
              		</ul>
              </li>
              <li><a href="<?php bloginfo('url');?>/classes/" <?php echo $pageid== '7'?'class="active"':'';?>>Classes</a></li>
              <li><a href="<?php bloginfo('url');?>/boxes/" <?php echo $pageid== '7'?'class="active"':'';?>>Boxes</a></li>
              <li><a href="<?php bloginfo('url');?>/gallery/" <?php echo $pageid== '7'?'class="active"':'';?>>GALLERY</a></li>
              <li><a href="<?php bloginfo('url');?>/postage/" <?php echo $pageid== '7'?'class="active"':'';?>>Postage</a></li>
              <li><a href="<?php bloginfo('url');?>/contact-us/" <?php echo $pageid== '7'?'class="active"':'';?>>CONTACT</a></li>
                    </ul>
      		</div>
        </div>
        <!--container ends.....-->
    </section>
    <!--menu-area ends......-->
    
