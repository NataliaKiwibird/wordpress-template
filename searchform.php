<!-- <form action="/" method="get">

    <label for="search">Search:</label>
    <input type="text" name="s" id="search" value="<?php the_search_query();?>" required>
    <button type="submit">Search</button> 

</form>  -->

    <form method="get" id="searchform" action="<?php bloginfo( 'url' ); ?>/">
    <div>
        <label for="search">Search for:</label>
        <input type="text" value="<?php the_search_query(); ?>" name="s" id="search" />
        <input type="submit" id="searchsubmit" value="Search" class="search-form-btn" />
    </div>
</form>
