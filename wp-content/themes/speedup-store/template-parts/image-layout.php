<?php
/**
 * The template part for displaying slider
 *
 * @package speedup-store
 * @subpackage speedup-store
 * @since speedup-store 1.0
 */
?>	
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-content">
        <h2><?php the_title();?></h2>
        <div class="entry-attachment">
            <div class="attachment">
                <?php speedup_store_the_attached_image(); ?>
            </div>
            <?php if ( has_excerpt() ) : ?>
                <div class="entry-caption">
                    <div class="entry-content">
                        <?php the_excerpt(); ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>    
        <?php
            the_content();
            wp_link_pages( array(
                'before' => '<div class="page-links">' . __( 'Pages:', 'speedup-store' ),
                'after'  => '</div>',
            ) );
        ?>
    </div>    
    <?php edit_post_link( __( 'Edit', 'speedup-store' ), '<footer role="contentinfo" class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
  
    <?php
        // If comments are open or we have at least one comment, load up the comment template
        if ( comments_open() || '0' != get_comments_number() )
            comments_template();

        if ( is_singular( 'attachment' ) ) {
            // Parent post navigation.
            the_post_navigation( array(
                'prev_text' => _x( '<span class="meta-nav text-uppercase p-2">Published in</span><span class="post-title my-3 mx-0">%title</span>', 'Parent post link', 'speedup-store' ),
            ) );
        }   elseif ( is_singular( 'post' ) ) {
            // Previous/next post navigation.
            the_post_navigation( array(
                'next_text' => '<span class="meta-nav text-uppercase p-2" aria-hidden="true">' . __( 'Next', 'speedup-store' ) . '</span> ' .
                    '<span class="screen-reader-text">' . __( 'Next post:', 'speedup-store' ) . '</span> ' .
                    '<span class="post-title my-3 mx-0">%title</span>',
                'prev_text' => '<span class="meta-nav text-uppercase p-2" aria-hidden="true">' . __( 'Previous', 'speedup-store' ) . '</span> ' .
                    '<span class="screen-reader-text">' . __( 'Previous post:', 'speedup-store' ) . '</span> ' .
                    '<span class="post-title my-3 mx-0">%title</span>',
            ) );
        }

    ?>
</article>  