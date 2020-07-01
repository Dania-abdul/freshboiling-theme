<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fresh Boiling</title>

    <?php wp_head(); ?>


</head>
<body     <?php body_class('test');?> >

<header>
    <div class="pageheader container">
        <h3 class="menu_title">Fresh Boiling</h3>
        <?php 
            wp_nav_menu (
                array(
                    'theme_location' =>'top-menu',
                    'menu_class' => 'pageheader__menu d-flex',
                )
            );
        ?>
    </div>
</header>