<?php if( have_posts() ): while( have_posts() ): the_post();?>

    <?php the_content();?>

    <!-- DISPLAYING THE DATE: -->
    <?php echo get_the_date('d/m/Y');?> 
    <!-- find more by: php date format in google -->

    <!-- DISPLAYING THE AUTHOR: -->
    <!--can be udes to display nickname: <?php the_author();?> -->

    <!-- to display a full name:
    <?php 
    $fname = get_the_author_meta('first_name');
    $lname = get_the_author_meta('last_name');
    echo $fname . ' ' . $lname;
    ?>  -->
    <!-- OR:  -->
    <p>Posted by: <?php echo $fname;?> <?php echo $lname;?></p>


    <!-- DISPLAYING TAGS: -->
    <?php
    $tags = get_the_tags();
    foreach($tags as $tag):?>

        <a href="<?php echo get_tag_link($tag->term_id);?>">
        <?php echo $tag->name;?>
        </a>

    <?php endforeach;?>

        <!-- DISPLAYING CATEGORIES: -->
        <?php
    $categories = get_the_category();
    foreach($categories as $cat):?>

    <a href="<?php echo get_category_link($cat->term_id);?>">
    <?php echo $cat->name;?>
    </a>

    <?php endforeach;?>

    <!-- COMMENTS: -->
    <!-- to style your comments section go to dev tools and look for classes -->
    <?php comments_template();?>

<?php endwhile; else: endif;?>

