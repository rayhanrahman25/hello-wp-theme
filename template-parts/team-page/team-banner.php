<?php $image = get_theme_mod( 'tm_banner_background_img', '' ); ?>
        <div class="masthead d-flex align-items-center"style="background: linear-gradient(90deg, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0.1) 100%), url('<?php echo esc_url( $image ); ?>'); background-repeat:no-repeat; background-size:cover;">
            <div class="container px-4 px-lg-5 text-center">
                <h1 class="mb-1"><?php echo get_theme_mod('tm_banner_heading',__('Meet The Team','hello')); ?></h1>
                <h3 class="mb-5"><em><?php echo get_theme_mod('tm_banner_sub_heading',__('Hello Theme Created By Rayhan Rahman','hello')); ?></em></h3>
     </div>
</div>