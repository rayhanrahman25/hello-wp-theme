<article class="item col-md-4 mt-1  py-4">
					<div class="work">
                    <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' ); ?>
                    <div  class="img d-flex align-items-end justify-content-center" style="background-image:url('<?php echo $backgroundImg[0]; ?>'); background-repeat:no-repeat;">
							<div class="text w-100">
								<span class="cat my-4"><?php the_category(' | '); ?></span>
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							</div>
						</div>
					</div>
             </article>