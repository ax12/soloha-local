<?php /* Template Name: Главная страница */ ?>
<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package soloha
 */

 get_header('main');?>


<div class="container-fluid">
    <div class="row">
    <div class="col-12 pl-0 pr-0">
        <h2 class="name-part d-flex justify-content-center"><? the_field('first_part_name') ;?></h2>
        <div class="d-flex justify-content-center"> <img  src="<?= get_template_directory_uri() . '/img/ico-clif.jpg'; ?>" alt=""></div>
        <div class="rowpartgray  wave">
            <div class="description-part d-flex justify-content-center"><p class="des text-center"><? the_field('first_part_description'); ?></p></div>
                  
                <!--   main galery-->
            <div class="row"> <div class="col-md-2"></div> <div class="col-md-8 widt-galery"> <?php echo do_shortcode('[supsystic-gallery id=1]') ?> </div> <div class="col-md-2"></div></div>
                <!--    end main galery-->
        </div>        
        </div><!--        end col-12 -->
    </div> <!--end row-->
    
     <div class="row"> <!--     second part-->
    <div class="col-12 pl-0 pr-0 justify-content-center">
        <h2 class="name-part d-flex justify-content-center"><? the_field('second_part_name') ;?></h2>
        <div class="d-flex justify-content-center"> <img  src="<?= get_template_directory_uri() . '/img/ico-clif.jpg'; ?>" alt=""></div>
        <div class="rowpartgray justify-content-center wave">
            <div class="description-part d-flex justify-content-center"><p class="des text-center"><? the_field('second_part_description'); ?></p></div>
                  
                <!--   main menu restoran-->
                 
    <div class="row pr-0 pl-0 ml-0 mr-0 justify-content-center img-menu">
                              
                <div class="text-center 1">  
                        <a href="<? the_field('link_first_menu_item'); ?>"> 
                            <img  src="<?= get_template_directory_uri() . '/img/ico-menu-1.jpg'; ?>" alt=""></a>
                         <p class="ico-menu"><a href="<? the_field('link_first_menu_item'); ?>"><? the_field('name_first_menu_item'); ?></a></p>
                </div>
        <div class="text-center 2">  <a href="<? the_field('link_second_menu_item'); ?>"><img  src="<?= get_template_directory_uri() . '/img/ico-menu-2.jpg'; ?>" alt=""></a>
                         <p class="ico-menu"><a href="<? the_field('link_second_menu_item'); ?>"><? the_field('name_second_menu_item'); ?></a></p>
                </div>
        <div class="text-center 3">  <a href="<? the_field('link_third_menu_item'); ?>"><img  src="<?= get_template_directory_uri() . '/img/ico-menu-3.jpg'; ?>" alt=""></a>
                     <p class="ico-menu"><a href="<? the_field('link_third_menu_item'); ?>"><? the_field('name_third_menu_item'); ?></a></p>
                </div>
	</div>
                
    <div class="row pr-0 pl-0 ml-0 mr-0 justify-content-center img-menu">
                              
        <div class="text-center 4">  <a href="<? the_field('link_fourth_menu_item'); ?>"><img  src="<?= get_template_directory_uri() . '/img/ico-menu-4.jpg'; ?>" alt=""></a>
                         <p class="ico-menu"><a href="<? the_field('link_fourth_menu_item'); ?>"><? the_field('name_fourth_menu_item'); ?></a></p>
                </div>
        <div class="text-center 5">  <a href="<? the_field('link_fifth_menu_item'); ?>"><img  src="<?= get_template_directory_uri() . '/img/ico-menu-5.jpg'; ?>" alt=""></a>
                         <p class="ico-menu"><a href="<? the_field('link_fifth_menu_item'); ?>"><? the_field('name_fifth_menu_item'); ?></a></p>
                </div>
        <div class="text-center 6">  <a href="<? the_field('link_sixth_menu_item'); ?>"><img  src="<?= get_template_directory_uri() . '/img/ico-menu-6.jpg'; ?>" alt=""></a>
                     <p class="ico-menu"><a href="<? the_field('link_sixth_menu_item'); ?>"><? the_field('name_sixth_menu_item'); ?></a></p>
                </div>
	</div>
                 
                <!--    end main menu of restoran-->
        </div>        
        </div><!--        end col-12 -->
    </div> <!--end row--> <!--    end second part-->
    
    

       <div class="row"> <!--    start third part-->
    <div class="col-12 pl-0 pr-0 justify-content-center">
        <h2 class="name-part d-flex justify-content-center"><? the_field('third_part_name') ;?></h2>
        <div class="d-flex justify-content-center"> <img  src="<?= get_template_directory_uri() . '/img/ico-clif.jpg'; ?>" alt=""></div>
        <div class="rowpartgray justify-content-center">
            <div class="vine-ground">
            <div class="vine-bground description-part justify-content-center"><p class="des text-center col-12"><? the_field('third_part_description'); ?></p>
           
                     <div> <?php echo do_shortcode('[supsystic-gallery id=2]') ?>  </div>  
                </div>
              </div>
              
            
          
            
         
            
        </div>
           </div>
    </div> <!--    end row of third part--> <!--    end third part-->

    
        
       <div class="row "> <!--    start fourth part-->
    <div class="col-12 pl-0 pr-0 justify-content-center">
        <h2 class="name-part d-flex justify-content-center"><? the_field('fourth_part_name') ;?></h2>
        <div class="d-flex justify-content-center"> <img  src="<?= get_template_directory_uri() . '/img/ico-clif.jpg'; ?>" alt=""></div>
        <div class="rowpartgray justify-content-center">
            <div class="galery-ground  wave">
            <div class="description-part justify-content-center"><p class="des text-center col-12"><? the_field('fourth_part_description'); ?></p>
           
                     <div> <?php echo do_shortcode('[supsystic-gallery id=4]') ?>  </div>  
                </div>
              </div>
              
            
          
            
         
            
        </div>
           </div>
    </div> <!--    end row of fourth part--> <!--    end fourth part-->  
    
        
    
</div> <!--    end container_fluid-->

 
			

<?php
//get_sidebar();
get_footer('main');
