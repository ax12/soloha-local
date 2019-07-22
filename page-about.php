<?php /* Template Name: О нас */ ?>
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

 get_header('inside');?>


<div class="container-fluid">
    <div class="row">
    <div class="col-12 pl-0 pr-0">
        <h2 class="name-part d-flex justify-content-center"><? the_field('name_of_part') ;?></h2>
        <div class="d-flex justify-content-center"> <img  src="<?= get_template_directory_uri() . '/img/ico-clif.jpg'; ?>" alt=""></div>
        <div class="rowpartgray  wave">
           
                <!--   main galery-->
                
            <div class="row"> <div class="col-md-2"></div> <div class="col-md-8 widt-galery"> 
               <div class="text-lorem"> <? the_field('first_text_about'); ?></div>
               <?php echo do_shortcode('[supsystic-gallery id=1]') ?> </div> <div class="col-md-2"></div></div>
                <!--    end main galery-->
        </div>        
        </div><!--        end col-12 -->
    </div> <!--end row-->
    
     
       <div class="row "> <!--    start fourth part-->
    <div class="col-12 pl-0 pr-0 justify-content-center">
        <h2 class="name-part d-flex justify-content-center"><? the_field('two_part_name_about') ;?></h2>
        <div class="d-flex justify-content-center"> <img  src="<?= get_template_directory_uri() . '/img/ico-clif.jpg'; ?>" alt=""></div>
        <div class="rowpartgray justify-content-center">
            <div class="galery-ground  wave">
            <div class="row">
               <div class="col-md-2"></div> 
                <div class="col-md-8">
                        <div class="text-lorem"> <? the_field('second_text_about'); ?></div>
                </div>
            <div class="col-md-2"></div> 
            </div>
           
                     <div> <?php echo do_shortcode('[supsystic-gallery id=4]') ?>  </div>  
               
              </div>
              
            
          
            
         
            
        </div>
           </div>
    </div> <!--    end row of fourth part--> <!--    end fourth part-->  
    
        
    
</div> <!--    end container_fluid-->

 
			

<?php
//get_sidebar();
get_footer('main');
