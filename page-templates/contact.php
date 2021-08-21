<?php 
/*
* Template Name: contact us 
*/
get_header();
?>
<?php get_template_part( 'template-parts/contact-banner/contact-banner' ); ?>
<div class="container py-5">
    <h2 class="text-center text-uppercase py-4">Send Message</h2>
<?php echo do_shortcode( '[contact-form-7 id="135" title="hello cotact"]' ); ?>
</div>
<?php get_template_part( 'template-parts/contact-banner/map' ); ?>
<?php
 get_footer();
 ?>