<?php 

/* Template Name: Gallery
*/

?>

<?php get_header();?>
<section class="page-wrap">
    <div class="container">

        <h1> <?php the_title();?> </h1>
        <?php get_template_part('includes/section','content');?>

        <?php if(has_post_thumbnail()):?>
            <img src="<?php the_post_thumbnail_url('gallery');?>" alt="<?php the_title();?>" class="img-fluid gallery-img">
        <?php endif;?>


    </div>
</section>


<?php get_footer();?>