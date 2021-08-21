<?php
get_header();

?>
<?php get_template_part( 'template-parts/blog-page/blog-banner' ); ?>
<div class="container py-5">
    <div class="row">
        <?php
        while(have_posts()){
            the_post();
            get_template_part("template-parts/post-formats/post",get_post_format());
        }
        ?>
    </div>
    <div class="container text-center py-5">
    <?php
    posts_nav_link();
     ?>
     </div>
</div>
<?
get_footer();




     