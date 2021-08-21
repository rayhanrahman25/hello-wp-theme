<!-- Callout-->
<?php $image = get_theme_mod( 'welcome_background_img', '' ); ?>
<section class="callout" style="background: linear-gradient(90deg, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0.1) 100%), url('<?php echo esc_url( $image ); ?>');">
            <div class="container px-4 px-lg-5 text-center">
                <h2 class="mx-auto mb-5">
                <?php echo get_theme_mod('welcome_title',__('Welcome to your next website!','hello')); ?>
                </h2>
                <a class="btn btn-primary btn-xl" href="<?php echo esc_url(get_theme_mod('welcome_btn_link',__('Download Now!','hello'))); ?>"> <?php echo get_theme_mod('welcome_btn_title',__('Download Now!','hello')); ?></a>
            </div>
</section>


