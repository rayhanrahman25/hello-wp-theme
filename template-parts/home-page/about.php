<!-- About-->
<section class="<?php echo esc_attr('content-section bg-light');?>" id="about">
            <div class="<?php echo esc_attr('container px-4 px-lg-5 text-center');?>">
                <div class="<?php echo esc_attr('row gx-4 gx-lg-5 justify-content-center');?>">
                    <div class="<?php echo esc_attr('col-lg-10');?>">
                        <h2><?php echo esc_html(( get_theme_mod( 'about_heading', __( 'GET MORE THEMES', 'hello' ) ) )); ?></h2>

                        <p class="<?php echo esc_attr('lead mb-5');?>">
                       <?php echo esc_html(( get_theme_mod( 'about_sub_heading', __( 'Bulilds Themes For Your Professional Business ', 'hello' ) ) )); ?>
                        </p>
                        <div class="py-4">
                        <?php echo do_shortcode('[contact-form-7 id="199" title="Subscribe"]'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

       <!-- <a class="btn btn-dark btn-xl" href="<?php // echo esc_url(( get_theme_mod( 'about_btn_link', __( 'https://rayhanr.com', 'hello' ) ) )); ?>"><?php echo esc_html(( get_theme_mod( 'about_btn_title', __( 'What We Offer ', 'hello' ) ) )); ?></a> !-->