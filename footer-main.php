<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package soloha
 */

?>



<div class="row footer-bg mm justify-content-center">
                    <div class="col-md-3 col-sm-12">
                      
                       <div class="custom-logo"> <?php the_custom_logo(); ?> </div>
                         <div class="contact-head phone footer-tel text-center">
                    <a href="tel:<? echo get_theme_mod ('phone');?>"><? the_field('telephone_head') ;?></a>
                    </div>
                    <div class="contact-head  text-center">
			            <? echo get_theme_mod ('addres','Укажите адрес');?>
			        </div>  
                    </div>
                        <div class="col-md-6 col-sm-12 p-map">
                        <div class="site-branding row justify-content-center">
			        
			            
                  
                  
		    </div>
                        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A64a55ac80f8540df1e9d86237699cb1b7fccc621522c5cee58acc670295567f9&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe>
                        </div>
                        <div class="col-md-3 col-sm-12 footer-menu">
                        <p class="footer-part ">Основные разделы</p><? wp_nav_menu( ['theme_location' => 'footer-menu',]);
                        ?></div>
     
        
		  
           
		       


<?php wp_footer(); ?>


</body>
</html>
