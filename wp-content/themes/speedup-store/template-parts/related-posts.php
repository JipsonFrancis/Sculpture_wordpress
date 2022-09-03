<?php $related_posts = speedup_store_related_posts();
if(get_theme_mod('speedup_store_show_related_post',true)==1){ ?>
<?php if ( $related_posts->have_posts() ): ?>
    <div class="related-posts">
        <?php if ( get_theme_mod('speedup_store_related_post_title','Related Posts') != '' ) {?>
            <h3 class="mb-3"><?php echo esc_html( get_theme_mod('speedup_store_related_post_title',__('Related Posts','speedup-store')) ); ?></h3>
        <?php }?>
        <div class="row">
            <?php while ( $related_posts->have_posts() ) : $related_posts->the_post(); ?>
                <div class="col-lg-4 col-md-6">
                    <div class="related-box mb-3 p-2">
                        <?php if(has_post_thumbnail()) { ?>
                            <div class="box-image mb-3">
                                <?php the_post_thumbnail(); ?>
                            </div>
                        <?php }?>
                        <h4><?php the_title(); ?></h4>
                        <div class="entry-content"><p><?php $excerpt = get_the_excerpt(); echo esc_html( speedup_store_string_limit_words( $excerpt, esc_attr(get_theme_mod('speedup_store_excerpt_number','20')))); ?> <?php echo esc_html( get_theme_mod('speedup_store_post_suffix_option','...') ); ?></p></div>
                        <?php if( get_theme_mod('speedup_store_button_text','Read More') != ''){ ?>
                            <div class="second-border text-start my-3 mx-0">
                                <a href="<?php echo esc_url( get_permalink() );?>" class="py-2 px-3" title="<?php esc_attr_e( 'Read More', 'speedup-store' ); ?>"><?php echo esc_html(get_theme_mod('speedup_store_button_text','Read More'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('speedup_store_button_text','Read More'));?></span></a>
                            </div>
                        <?php }?>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif; ?>
<?php wp_reset_postdata(); }?>