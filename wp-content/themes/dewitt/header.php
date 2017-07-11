<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?> class="no-js">
<!--<![endif]-->

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>
<?php wp_title(''); ?> | <?php bloginfo(); ?>
</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
<link href="https://fonts.googleapis.com/css?family=Heebo:100,300,400,500,700,800,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Vidaloka" rel="stylesheet">
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUjs9tA9xiKurLHDH9KsTkIKlYLqmNgrg"></script>
<?php wp_head(); ?>
<?php the_field('header_tags', 'option');?>
</head>


	<body <?php body_class(); ?> >
    
    <div id="page">

        <!-- header -->
        
		<header id="masthead">
				
			<!-- mobile header -->
            
		        <div id="mobile-nav-wrap" class="visible-xs visible-sm">
		            
		            
		            <div id="header-mobile" class="navbar navbar-inverse visible-xs visible-sm">
		                <div class="container">
		                    
		                    
		                    
		                    <div id="mobile-logo">
		                        <a href="<?= get_home_url(); ?>">
		                            <img class="img-responsive center-block visible-xs" src="<?php echo get_stylesheet_directory_uri(); ?>/images/mobile_logo.png" />
<!-- 		                            <img class="img-responsive center-block visible-sm" src="<?php echo get_stylesheet_directory_uri(); ?>/images/tablet_logo.png" /> -->
		                        </a>
		                    </div>
		                    
		                    
		                    
		                    <div id="mobile-phone" class="mytablet-phone">
		                        <div class="phone-number">
		                        	<a href="tel: +1<?php echo preg_replace("/[^0-9]/",'', get_field('header_phone_number', 'options')); ?>"><?php the_field('header_phone_number', 'options');?></a>
		                        </div><!-- phone-number -->
		                    </div><!-- mobile-phone -->
		                   
		                   
		                   
		                    <div id="mobile-toggle" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mobile-nav">
                            	<span class="icon-bar">
                                </span>
                                <span class="icon-bar">
                                </span>
                                <span class="icon-bar">
                                </span>
		                        <span class="brand">Menu</span>
		                    </div>
		                </div>
		            </div>   
		            
		            
		            
		            <div id="mobile-nav" class="collapse navbar-collapse">
			            
			            <div id="mobile-close" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mobile-nav">					</div>
		                <?php wp_nav_menu(array('theme_location' => 'mobile', 'menu_class'  => 'nav',)); ?>
		            </div>
		      
		      
		      
		      
		      
		      
		      
		       </div>
		           
		       <!-- mobile header ends  -->
        
              <!-- desktop header -->
        
        		<div id="header-desktop" class="visible-md visible-lg">
                    
               <div id="logo">
                  
                  <a href="<?php echo site_url(); ?>">
                     
                     <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" />
                 	
                 	</a>
               
               </div> <!-- logo -->
               
               
               <div class="my_header_col">
               
               
               		<div id="main-nav">
						
										<?php wp_nav_menu(array('theme_location' => 'main', 'menu_class'  => 'nav',)); ?>
					
									</div><!-- main-nav -->
					
					
									<div id="header-phone">
							 	
							 			<div class="phone-number">
							 		
							 				<a href="tel: +1<?php echo preg_replace("/[^0-9]/",'', get_field('header_phone_number', 'options')); ?>"><?php the_field('header_phone_number', 'options');?></a>
						
										</div><!-- phone-number -->
					
					
									</div><!-- header-phone -->
								
								
									</div><!-- my_header_col -->

              
              </div><!-- header-phone -->
                
                <!-- desktop header ends  -->
                
                <!-- banner -->
        
				<section id="banner">
					
					
						<div id="mobile-phone" class="banner-phone">
		          <div class="phone-number">
		             <a href="tel: +1<?php echo preg_replace("/[^0-9]/",'', get_field('header_phone_number', 'options')); ?>"><?php the_field('header_phone_number', 'options');?></a>
		          </div><!-- phone-number -->
		        </div><!-- mobile-phone -->
					
					
					
					<div id="banner-text">
						<?php if( get_field('banner_subtitle') ): ?>
							<div id="banner-subtitle">
								<div id="banner-subtitle-mask">
									<div id="banner-subtitle-text">
										<?php the_field('banner_subtitle');?>
									</div>
								</div>
							</div>
						<?php endif; ?>

						

							<div id="banner-title">
								
								
								
								<?php if(is_page_template( 'page-contact.php') ):?>
								
									<h1>Use the contact form below to <strong>make an appointment</strong></h1>
									
								<?php endif;?>
									
									
								<?php if(is_page_template( 'page-home.php')): ?>	
									
															
									<h1>
										
										
										<span class="top_line">The personal</span>
										
										<span class="middle_line">injury law firm where</span> 
										
										
										<span class="bottom_line"><strong>you come first</strong></span></h1>
								
								
								<?php endif;?>
								
								
								<?php if( is_page_template( 'page-practice-areas.php') || is_page_template( 'page-case-results.php') || is_page_template( 'page-about.php') || is_page_template( 'page-attorney.php') || is_page_template( 'page-attorneys.php')): ?>	
									
															
									
										
								<h1>The personal injury law firm where <strong>you come first</strong></h1>
										
										
									
								
								<?php endif;?>
								
								
								<?php $classes = get_body_class();
									
									if (in_array('page-template-default',$classes)):?>
   
								
									<h1>The personal injury law firm where <strong>you come first</strong></h1>
									
									
									
									<?php endif;?> 
									
									
									<?php if(is_home() || is_single()):?>
									
									
										<h1>personal injury blog</h1>
									
									
									<?php endif;?>
									
									
									
									
									
									<?php if(is_archive()):?>
									
										<h1 class="mycat"><?php single_cat_title();?></h1>
										
										<h1 class="myarchive">Archive</h1>
									
									<?php endif;?>
									
									
									
								

								
							</div>
						
						<div id="banner-button">
							<div id="banner-button-mask">
								<a href="#colophon" class="button">Start your free case evaluation</a>
							</div>
						</div>
					</div>
					<div id="banner-side" class="hidden-xs">
						<div id="banner-scroll" class="animated infiniteDown fadeInDown">
							<div id="banner-scroll-text">Scroll down</div>
						</div>
					</div>
				</section>

				<!-- banner ends -->
                
		</header>
        
        <!-- header ends  -->
        
<div id="main">
	<div id="sticky"><a href="<?php echo site_url(); ?>/contact/" id="sticky-link">Start Your Free Case Evaluation</a></div>