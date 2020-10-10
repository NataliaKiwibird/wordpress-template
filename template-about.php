<?php 

/* Template Name: About
*/

?>

<?php get_header();?>
<section class="page-wrap">
    <div class="container">

        <div class="row">

            <div class="col-md-3 text-primary">

            <?php if(has_post_thumbnail()):?>
            <img src="<?php the_post_thumbnail_url('about');?>" alt="<?php the_title();?>" class="img-fluid about-img">
            <?php endif;?>
            
            </div>

            <div class="col-md-9">
                
            <h3>This is a header</h3>
                <?php get_template_part('includes/section','content');?>

            </div>
        
        </div>


    </div>
</section>


<?php get_footer();?>