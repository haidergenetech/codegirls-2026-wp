<?php 
 /* Template Name: mera abc template  */
    echo get_header();
    if(is_page("229")){
        die("Asdfasdf");
    }
    
?>
<section>
   <div class="container">
        <div class="sidebar-custom">
            <?php do_shortcode("[search_krlo_isko]")?>

            <?php echo wp_nav_menu()?>
            <?php echo get_search_form()?>
            <?php echo get_sidebar("default");?>
        </div>
        <div>
             <h1>
                <?php echo get_the_title() ;?>
            </h1>

            <?php echo get_the_content();  ?>

            <?php echo get_the_excerpt();?>

            <?php echo get_the_post_thumbnail(); ?>

            <a href="<?php echo get_the_permalink();?>">Link</a>

        </div>
    </div>
</section>


<?php
    echo get_footer();
?>