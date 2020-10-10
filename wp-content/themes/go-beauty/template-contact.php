<?php 

/* Template Name: Contact
*/

?>

<?php get_header();?>
<section class="page-wrap">
    <div class="container">

        <h1> <?php the_title();?> </h1>

        <div class="row">

            <div class="col-md-6 text-primary">
            
                Part 1
            
            </div>

            <div class="col-md-6">

                <?php get_template_part('includes/section','content');?>

            </div>
        
        </div>


    </div>
</section>


<?php get_footer();?>

