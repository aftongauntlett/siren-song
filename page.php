<?php 
    get_header();

    while(have_posts()) {
        the_post(); 
?>

<div class="picture-column">
    <div class="pimg-top pimg3" style="background-image: url(<?php echo wp_get_attachment_url(get_theme_mod('lawyer_secondary_image')) ?>) "></div>


    <div class="container-fluid mainPage">
        <div class="container">
            <?php
                the_content(); 
            ?>
        </div>
        
    </div>

    <div class="pimg-bottom pimg3" style="background-image: url(<?php echo wp_get_attachment_url(get_theme_mod('lawyer_secondary_image')) ?>) "></div>
</div>
        

    

<?php }
    get_footer();
?>