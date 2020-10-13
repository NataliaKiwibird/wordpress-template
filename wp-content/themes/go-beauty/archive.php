<?php get_header();?>

    <section class="page-wrap">
        <div class="container">

        <!-- IF YOU WANT A SIDEBAR: -->
        <!-- <div class="col-lg-3">
            <?php if( is_active_sidebar('page-sidebar') ):?>
                <?php dynamic_sidebar('page-sidebar');?>
            <?php endif;?>
        </div> -->

            <div class="archive-header">

            <h1 class="archive-h1"><?php echo single_cat_title();?></h1>

             <!-- SEARCH: -->
             <?php get_search_form();?>
            </div>

            <?php get_template_part('includes/section','archive');?>

            <?php previous_posts_link();?>
            <?php next_posts_link();?>

            <!-- <?php

            global $wp_query;

            $big = 999999999; // need an unlikely integer
            
            echo paginate_links( array(
                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'format' => '?paged=%#%',
                'current' => max( 1, get_query_var('paged') ),
                'total' => $the_query->max_num_pages
            ) );
            ?> -->

        </div>
    </section>

<?php get_footer();?>