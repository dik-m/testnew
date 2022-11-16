<!doctype html>
<html <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">

     <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
     <!-- Meta Content -->
     <meta content="width=device-width, initial-scale=1" name="viewport" />
     <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; " charset="<?php bloginfo('charset'); ?>" />	
     <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> 
     <!-- Link Tag-->
     <link rel="alternate" type="application/rss+xml" title="Rider" href="<?php bloginfo('rss2_url'); ?>" />
     <link rel="alternate" type="text/xml" title="Rider .92" href="<?php bloginfo('rss_url'); ?>" />
     <link rel="alternate" type="application/atom+xml" title="Rider 0.3" href="<?php bloginfo('atom_url'); ?>" />
	
	

	 <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" crossorigin="anonymous"></script> -->


     <?php wp_get_archives('type=monthly&format=link'); ?>
     <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="navigation-wrap start-header start-style">


    <div class="container ">

        <div class="row ">
    
            <div class="col-xs-4  col-sm-4 menu-btn ">
				
				
				
				<nav class="navbar ">
   <button class="navbar-toggler menu-button" type="button" data-toggle="collapse"
        data-target="#collapsingNavbar">
        <div class="animated-menu"><span></span><span></span><span></span> <abbr>Menu</abbr></div>
      </button>
					
    <div class="navbar-collapse collapse" id="collapsingNavbar">
        <?php 

					wp_nav_menu( array(

						'theme_location' => 'primary',

						'items_wrap'     => '<ul id="%1$s" class="%2$s navbar-nav m-auto py-4 py-md-0">%3$s</ul>',

						'add_li_class'   => 'nav-item pl-4 pl-md-0 ml-0 ml-md-4'

							

					) );

					?>
    </div>
</nav>
		
			</div>
			
			
            <div class="col-xs-4  col-sm-4 logo-wrap "><a href="#"><img src="https://wordpress-426808-2401231.cloudwaysapps.com/wp-content/uploads/2022/01/logo.png" ></a></div>
            <div class="col-xs-4 col-sm-4 btns">
				<div class=" book-now disctop-view"><a href="#" target="_blank">BOOK NOW </a> </div>
			    <div class=" calender mobile-view"><img src="/wp-content/uploads/2022/01/Icon-metro-calendar.png"></div>
			</div>

      </div>
    </div>
</div>
	
	



	
				

		
			

			


