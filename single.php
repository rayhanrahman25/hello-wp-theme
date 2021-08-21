<?php get_header(); ?>
    <section class="py-5 sing-post-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8  single-page-col">
                    <div class="text-center">
                    <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="single-title py-3">
                        <div class="post-title">
                    <h2 class="fw-bold py-4"><?php the_title(); ?></h2>
                   </div>
                   </div>
                    <p class="pt-1 pb-3 post-des">
                        <?php
                    the_content();
                    ?>
                    </p>
                    <div class="single-title">
                        <div class="post-title">
                    <h2 class="fw-bold py-4"><?php echo carbon_get_the_post_meta( 'crb_text_step_title' ); ?></h2>
                </div>
            </div>
                    <div class="row py-5">
                        <div class="col-md-6">
                            <h5 class="works-title fw-bold"><span class="serial"> 01. </span> <?php echo carbon_get_the_post_meta( 'crb_text_step_1' ); ?></h5>
                            <p class="py-3">
                            <?php echo carbon_get_the_post_meta( 'crb_text_step_1_des' ); ?>
                            </p>
                        </div>
                        <div class="col-md-6">
                            <h5 class="works-title fw-bold"><span class="serial"> 02. </span>  <?php echo carbon_get_the_post_meta( 'crb_text_step_2' ); ?></h5>
                            <p class="py-3">
                            <?php echo carbon_get_the_post_meta( 'crb_text_step_2_des' ); ?>
                            </p>
                        </div>
                        <div class="col-md-6">
                            <h5 class="works-title fw-bold"><span class="serial"> 03. </span>  <?php echo carbon_get_the_post_meta( 'crb_text_step_3' ); ?> </h5>
                            <p class="py-3">
                            <?php echo carbon_get_the_post_meta( 'crb_text_step_4_des' ); ?>
                            </p>
                        </div>
                        <div class="col-md-6">
                            <h5 class="works-title fw-bold"><span class="serial"> 04. </span> <?php echo carbon_get_the_post_meta( 'crb_text_step_4' ); ?></h5>
                            <p class="py-3">
                            <?php echo carbon_get_the_post_meta( 'crb_text_step_4_des' ); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <?php 
                     if ( is_active_sidebar( "single_post_widgets" ) ) {
                        dynamic_sidebar( "single_post_widgets" );
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();