<!-- Header -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Go Beauty</title>

    <!-- enquing stylesheet -->
<?php wp_head();?>

</head>
<body>

<header>

<div class="container">
    <?php
    wp_nav_menu(
        array(

            'theme_location' => 'my-menu',
            'menu_class' => 'my-menu'

        )
    );
    ?>
</div>

</header>

<!-- .sub-menu .menu-item-has-children classes for sub-menus -->
<!-- Closing tags in footer.php -->
    
