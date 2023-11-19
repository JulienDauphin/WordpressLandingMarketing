<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php wp_head(); ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Boostez votre visibilité en ligne - Marketing Digital">
<title>MédiePulse360 - Marketing Digital et plus encore</title>

</head>

<body id="body">

<header id="header">
    <div id="logoContainer">
    <a href="<?php echo home_url() ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Notre Logo" id="logo"></a>
    </div>
    <nav id="menuContainer">
    <?php wp_nav_menu(array('theme_location' => 'header_menu', 'menu_id' => 'headerMenu', )); ?>
    </nav>
</header>