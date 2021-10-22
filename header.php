<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="viewport" content="initial-scale=1.0, width=device-width"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <title>Rabi Morad</title>
    <?php wp_head(); ?>
</head>
<body>
    <header class="header-container">
    <?php
    $arguments =[
        "theme_location" => "primary-menu",
	    "menu" => "CC MENU",
        'container' => 'ul',
        'li' => 'a',
        'current' => '',
        'menu_class' => 'menu',                           
	];
	$menuItems = wp_nav_menu($arguments);
	?>	
    <!-- <?php wp_nav_menu(array(
					'menu' => 'CC MENU',
					'theme_location' => 'primary-menu',
					'menu_class' => 'menu',
					'container'=> 'current',
					'li_class' => 'nav-item',
					'a_class' => 'nav-link',
					'active_class' => 'active'
				));?> -->
    </header>
    