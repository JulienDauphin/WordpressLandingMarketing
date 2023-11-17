<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php wp_head(); ?>

</head>

<body id="body">

<header id="header">
    <div id="logoContainer">
    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Notre Logo" id="logo">
    </div>
    <nav id="menuContainer">
    <?php wp_nav_menu(array('theme_location' => 'header_menu', 'menu_id' => 'headerMenu', )); ?>
    </nav>
</header>