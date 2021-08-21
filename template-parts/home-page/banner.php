  <!-- Header-->
  <?php $image = get_theme_mod( 'banner_background_img', '' ); ?>
        <header class="masthead d-flex align-items-center"style="background: linear-gradient(90deg, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0.1) 100%), url('<?php echo esc_url( $image ); ?>');">
            <div class="container px-4 px-lg-5 text-center">
                <h1 class="mb-1"><?php echo get_theme_mod('banner_heading',__('Stylish Portfolio','hello')); ?></h1>
                <h3 class="mb-5"><em><?php echo get_theme_mod('banner_sub_heading',__('A Free Bootstrap Theme by Start Bootstrap','hello')); ?></em></h3>
                <a class="btn btn-primary btn-xl" href="<?php echo esc_url_raw(get_theme_mod('banner_btn_link',__('https://rayhanr.com/','hello')));  ?>"><?php echo get_theme_mod('banner_btn_title',__('Find Out More','hello')); ?></a>
            </div>
</header>