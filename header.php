<div class="title-bar" data-responsive-toggle="responsivehide" data-hide-for="medium">
  <button class="menu-icon" type="button" data-toggle></button>
  <div class="title-bar-title"><?php _e('Menu','wrockmetro'); ?></div>
</div>

<div class="top-bar" id="responsivehide">

<?php wp_nav_menu( array( 'theme_location' => 'top-menu', 'container' => false, 'depth' => 0, 'items_wrap' => '<ul class="vertical medium-horizontal menu" data-responsive-menu="drilldown medium-dropdown">%3$s</ul>', 'walker' => new insertcart_walker( array( 'in_top_bar' => true, 'item_type' => 'li', 'menu_type' => 'main-menu' ) ), ) ); ?>
  
</div>
