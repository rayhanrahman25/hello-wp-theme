<?php wp_head();?>
    <body id="page-top">
        <!-- Navigation-->
        <div class="menu-toggle rounded" href="#">☰</div>
        <nav id="sidebar-wrapper">
            <?php
         wp_nav_menu(array(
           'theme-location'=>'topmenu',
           'menu_id'=>'topmenu', // li->class->sidebar-nav-item
           'menu_class'=>'sidebar-nav'//brand->class->sidebar-brand
         ))
          ?>  
        </nav>
      
