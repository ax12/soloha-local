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
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
   
<div class="head-bground">
    <div class="container-fluid">
       <div class="row">
            <div class="col-xl-3 col-md-2 d-none d-md-block d-lg-block left-header pl-0 "> <img src="wp-content/themes/soloha/img/left-header.png" alt=""> </div>
                <div class="col-12 col-md-8 col-sm-12 col-xl-6 head-center">
                  
			<div class="site-branding row justify-content-center">
			        <div class="contact-head">
			            <? echo get_theme_mod ('addres','Укажите адрес');?>
			        </div>  
			            
                    <div class="contact-head phone footer-tel ">
                    <a href="tel:<? echo get_theme_mod ('phone');?>"><? echo get_theme_mod ('phone');?></a>
                    </div>
                  
		    </div>
                              <div class="custom-logo"> <?php the_custom_logo(); ?> </div><!-- .site-branding -->

  <nav class="navbar navbar-expand-lg navbar-light nav soloha-menu-top  nav-link navbar-nav text-center">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      <div class="collapse navbar-collapse" id="navbarNav">
                    
                    <? wp_nav_menu([
                    'theme_location' => 'heder-menu',
                     'menu_id'        => 'primary-menu',
                    'depth'           => 2,
                    'container'       => false,
                    'menu_class'      => 'navbar-nav mr-auto',
                    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'          => new WP_Bootstrap_Navwalker()   
                    ]);
                    ?>
      </div>
</nav>
                    
                            

                                            
                                                            
                  
                    <h1 class="site-title text-center"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <? $soloha_description = get_bloginfo( 'description', 'display' );?>
           <div class="site-description text-center"><?php echo $soloha_description;?> </div>
               <div class="text-center bottons-header">
               
               <a class="btn btn-outline-secondary buton-main-1" href="<? the_field('link_bt_1') ;?>" role="button"><? the_field('name_bt_1') ;?></a>
               <a class="btn btn-outline-secondary buton-main-2" href="#" role="button">Забронировать</a>
                </div>
                </div> 
           
			
                
            <div class="col-xl-3 col-md-2 right-header  p-0 bd-highlight d-none d-md-block d-lg-block"><img src="wp-content/themes/soloha/img/right-header.png" class="float-right" alt=""></div>
        </div> 
    </div> <!--    END CONTAINER-->
</div> 
<!--
<div id="page" class="site">

	<div id="content" class="site-content">
-->
