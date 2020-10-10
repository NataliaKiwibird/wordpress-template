<?php if( have_posts() ): while( have_posts() ): the_post();?>

    <div class="card">
        <div class="card-body mb-3 d-flex justify-content-center align-items-center">

            <?php if(has_post_thumbnail()):?>
            <img src="<?php the_post_thumbnail_url('blog-small');?>" alt="<?php the_title();?>" class="img-fluid mb-3 img-thumbnail mr-4">
            <?php endif;?>

            <div class="blog-content">
                <h3> <?php the_title();?> </h3>
                <?php the_excerpt();?>
                <!--  the_excerpt() if you want to display titles and bite of text only -->
                <!--  the_content() if you want to display a whole content -->

                <a href="<?php the_permalink();?>">Read more</a>
            </div>

        </div>
    </div>
<?php endwhile; else: endif;?>