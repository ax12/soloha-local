<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package soloha
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
   
<div class="head-bground">
    <div class="container-fluid">
       <div class="row">
            <div class="col-xl-3 col-md-2 d-none d-md-block d-lg-block left-header-inside pl-0 "> <img src="<? echo get_template_directory_uri() . '/img/left-header.png';?> " alt=""> </div>
                <div class="col-12 col-md-8 col-sm-12 col-xl-6 head-center">
                    <div class="logo-inside custom-logo">  <?php the_custom_logo(); ?> </div>
			<div class="site-branding row justify-content-center">
			        <div class="contact-head">
			            <? echo get_theme_mod ('addres','Укажите адрес');?>
			        </div>  
			            
                    <div class="contact-head phone footer-tel ">
                    <a href="tel:<? echo get_theme_mod ('phone');?>"><? echo get_theme_mod ('phone');?></a>
                    </div>
                  
		    </div>
                           <!-- .site-branding -->
                    <div class="row">
                           
                            <div class="col-md-12">
                               <h1 class="site-title site-title-inside text-center logo-iside"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                           
                            </div>
                             <nav class="main-navigation soloha-menu-top row justify-content-center "> <? wp_nav_menu( ['theme_location' => 'heder-menu',]);
                                ?></nav>
                       
                    </div>
                              
                    
                  
                   
          
         
                </div> 
           
			
                
            <div class="col-xl-3 col-md-2 right-header-inside  p-0 bd-highlight d-none d-md-block d-lg-block"><img src="<? echo get_template_directory_uri() . '/img/right-header.png';?>" class="float-right" alt=""></div>
        </div> 
    </div> <!--    END CONTAINER-->
</div> 
<!--
<div id="page" class="site">

	<div id="content" class="site-content">
-->
