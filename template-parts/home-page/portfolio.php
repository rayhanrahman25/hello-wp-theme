<!-- Portfolio-->
<section class="content-section" id="portfolio">
            <div class="container px-4 px-lg-5">
                <div class="content-section-heading text-center">
                    <h3 class="text-secondary mb-0"><?php echo esc_html(get_theme_mod('portfolio_top_title',__('PORTFOLIO','hello'))); ?></h3>
                    <h2 class="mb-5"><?php echo esc_html(get_theme_mod('portfolio_title',__('Recent Projects','hello'))); ?></h2>
                </div>
                <div class="row gx-0">
                <?php
                 $defaults = [
                    [
                   'portfolio_title'
                    ],
                    [
                   'portfolio_sub_title'
                    ],
                    [
                   'portfolio_img_field'
                    ]
                ];
                $settings = get_theme_mod('my_portfolio_repeater_setting',$defaults);
                foreach($settings as $setting):
                 ?>
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="#!">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2"><?php echo $setting['portfolio_title']; ?></div>
                                    <p class="mb-0"><?php echo $setting['portfolio_sub_title']; ?></p>
                                </div>
                            </div>
                            <img class="img-fluid" src="<?php echo wp_get_attachment_url( $setting['portfolio_img_field'] ); ?>" alt="..." />
                        </a>
                        </div>
                    <?php endforeach;?>
                    <!-- <div class="col-lg-6">
                        <a class="portfolio-item" href="#!">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2">Ice Cream</div>
                                    <p class="mb-0">A dark blue background with a colored pencil, a clip, and a tiny ice cream cone!</p>
                                </div>
                            </div>
                            <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/img/portfolio-2.jpg" alt="..." />
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="#!">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2">Strawberries</div>
                                    <p class="mb-0">Strawberries are such a tasty snack, especially with a little sugar on top!</p>
                                </div>
                            </div>
                            <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/img/portfolio-3.jpg" alt="..." />
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="#!">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2">Workspace</div>
                                    <p class="mb-0">A yellow workspace with some scissors, pencils, and other objects.</p>
                                </div>
                            </div>
                            <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/img/portfolio-4.jpg" alt="..." />
                        </a>
                    </div> -->
               
            </div>
        </section>