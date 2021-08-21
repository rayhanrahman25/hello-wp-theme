 <!-- Services-->
 <section class="content-section bg-primary text-white text-center" id="services">
            <div class="container px-4 px-lg-5">
                <div class="content-section-heading">
                    <h3 class="text-secondary mb-0"><?php echo __('Services','hello');?></h3>
                    <h2 class="mb-5"><?php echo __('What We Offer','hello');?></h2>
                </div>
                <div class="row gx-4 gx-lg-5">
               
                <?php
                 $defaults = [
                     [
                    'service_title' => esc_html('Responsive','hello')
                     ],
                     [
                    'service_sub_title'=> esc_html('Looks great on any screen size!','hello')   
                     ],
                     [
                    'icon_calss'=> esc_attr('icon-pencil','hello')
                     ]
                 ];
                 $settings = get_theme_mod('my_service_repeater_setting',$defaults);
                foreach($settings as $setting):  
                ?>
                    <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                        <div class="py-4 mx-auto mb-3"> <i class="icon-<?php echo $setting['icon_calss']; ?>" style="font-size: 4rem; margin-top:1rem !important;"  ></i></div>
                        <h4><strong><?php echo $setting['service_title']; ?></strong></h4>
                        <p class="text-faded mb-0"><?php echo $setting['service_sub_title']; ?></p>
                    </div>
                <?php endforeach;?>
                </div>
            </div>
        </section>