<?php
/**
 * Output the main menu if set
 */
$args = array(
	'theme_location' 	=> 'header-menu',
	'container'       	=> 'div',
    'container_class'   => 'collapse navbar-collapse',
    'container_id'      => 'navbarSupportedContent',
	'menu_id'        	=> '',
	'menu_class' 		=> 'navbar-nav mr-auto',
	'echo'				=> false,
    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
    'walker'            => new WP_Bootstrap_Navwalker(),
);
$menu = wp_nav_menu($args);
if ($menu) :
?>
<nav class="navbar navbar-expand-lg navbar-light ">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
	<?php
	echo $menu;
	?>
</nav>
<?php
endif;
?>