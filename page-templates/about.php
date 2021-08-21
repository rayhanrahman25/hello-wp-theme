<?php
/*
* Template Name: About 
*/

get_header();
?>
<?php get_template_part( 'template-parts/team-page/team-banner' ); ?>
 <!--====== TEAM START ======-->
 <section id="team" class="team-area pt-120 pb-130 py-5">
        <div class="container">

        
            <!-- row -->
            <div class="row py-5">
            <?php
                 $defaults = [
                     [
                    'tm_title' => __('Jeffery Riley','hello')
                     ],
                     [
                    'tm_sub_title' =>  __('Art Director','hello')
                     ],
                     [
                    'tm_img_field'  =>  __('Image','hello')
                     ],
                     [
                     'tm_facebook' => esc_attr('facebook','hello')
                     ],
                     [
                     'tm_twitter' => esc_attr('twitter','hello')
                     ],
                     [
                     'tm_linkedin' => esc_attr('linkedin','hello')
                     ],
                     [
                     'tm_instagram' => esc_attr('instagram','hello')
                     ],
                 ];
                 $settings = get_theme_mod('my_team_repeater_setting',$defaults);
                foreach($settings as $setting):  
                ?>
                <div class="col-lg-4 col-sm-6">
                    <div class="team-style-eleven text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                        <div class="team-image">
                        <img  src="<?php echo wp_get_attachment_url( $setting[ 'tm_img_field'] ); ?>" alt="Team">
                        </div>
                        <div class="team-content">
                            <div class="team-social">
                                <ul class="social">
                                    <li><a href="#"><i class="icon-social-<?php echo get_theme_mod('tm_facebook', esc_attr('facebook','hello')); ?>"></i></a></li> 
                                    <li><a href="#"><i class="icon-social-<?php echo get_theme_mod('tm_twitter', esc_attr('twitter','hello')); ?>"></i></a></li> 
                                    <li><a href="#"><i class="icon-social-<?php echo get_theme_mod('tm_linkedin', esc_attr('linkedin','hello')); ?>"></i></a></li> 
                                    <li><a href="#"><i class="icon-social-<?php echo get_theme_mod('tm_instagram', esc_attr('instagram','hello')); ?>"></i></a></li> 
                                </ul>
                            </div>
                            <h4 class="team-name"><a href="#"><?php echo $setting['tm_title']; ?></a></h4>
                            <span class="sub-title"><?php echo $setting['tm_sub_title']; ?></span>
                        </div>
                    </div> <!-- single team -->
                </div>
                <?php endforeach; ?>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <!--====== TEAM  ENDS ======-->
   
    <?php
    get_footer();