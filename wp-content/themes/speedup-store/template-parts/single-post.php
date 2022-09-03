<?php
/**
 * The template part for displaying services
 *
 * @package speedup-store
 * @subpackage speedup-store
 * @since speedup-store 1.0
 */
?> 
<?php 
  $archive_year  = get_the_time('Y'); 
  $archive_month = get_the_time('m'); 
  $archive_day   = get_the_time('d'); 
?> 
<article class="page-box-single py-3 px-4" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<h1><?php the_title();?></h1>
	<?php if( get_theme_mod( 'speedup_store_author_hide',true) != '' || get_theme_mod( 'speedup_store_date_hide',true) != '' || get_theme_mod( 'speedup_store_comment_hide',true) != '') { ?>
	    <div class="metabox py-2 px-0 mb-3">
	      <?php if( get_theme_mod( 'speedup_store_author_hide',true) != '') { ?>
	        <span class="entry-author py-0 px-2"><i class="fa fa-user me-2"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span><?php echo esc_html( get_theme_mod('speedup_store_metabox_separator_blog_post') ); ?>
	      <?php } ?>
	      <?php if( get_theme_mod( 'speedup_store_date_hide',true) != '') { ?>
	        <span class="entry-date py-0 px-2"><i class="fa fa-calendar me-2"></i><a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span><?php echo esc_html( get_theme_mod('speedup_store_metabox_separator_blog_post') ); ?>
	      <?php } ?>     
	      <?php if( get_theme_mod( 'speedup_store_comment_hide',true) != '') { ?>
	        <span class="entry-comments py-0 px-2"><i class="fas fa-comments me-2"></i> <?php comments_number( __('0 Comment', 'speedup-store'), __('0 Comments', 'speedup-store'), __('% Comments', 'speedup-store') ); ?> </span>
	      <?php } ?>
	    </div>
	<?php }?>
	<?php if( get_theme_mod( 'speedup_store_show_featured_image_single_post',true) != '') { ?>
		<?php if(has_post_thumbnail()) { ?>
	    <hr>
	    <div class="feature-box">   
      		<?php the_post_thumbnail(); ?>
	    </div>
	    <hr>                    
	    <?php } ?> 
	<?php } ?>
    <div class="entry-content">
      <?php the_content(); ?>     
    </div> 
    <?php if( get_theme_mod( 'speedup_store_tags_hide',true) != '') { ?>
    <div class="tags my-3 mx-0"><p><?php
        if( $tags = get_the_tags() ) {
          echo '<i class="fas fa-tags me-3"></i>';
          echo '<span class="meta-sep"></span>';
          foreach( $tags as $content_tag ) {
            $sep = ( $content_tag === end( $tags ) ) ? '' : ' ';
            echo '<a href="' . esc_url(get_term_link( $content_tag, $content_tag->taxonomy )) . '">' . esc_html($content_tag->name) . '</a>' . esc_html($sep);
          }
        } ?></p></div>
    <?php } ?>
    <?php
	wp_link_pages( array(
		'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'speedup-store' ) . '</span>',
		'after'       => '</div>',
		'link_before' => '<span>',
		'link_after'  => '</span>',
		'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'speedup-store' ) . ' </span>%',
		'separator'   => '<span class="screen-reader-text">, </span>',
	) );
		
	if ( is_singular( 'attachment' ) ) {
		// Parent post navigation.
		the_post_navigation( array(
			'prev_text' => _x( '<span class="meta-nav text-uppercase p-2">Published in</span><span class="post-title my-3 mx-0">%title</span>', 'Parent post link', 'speedup-store' ),
		) );
	} elseif ( is_singular( 'post' ) ) {
		// Previous/next post navigation.
		the_post_navigation( array(
			'next_text' => '<span class="meta-nav text-uppercase p-2" aria-hidden="true">' . __( 'Next <i class="far fa-long-arrow-alt-right"></i>', 'speedup-store' ) . '</span> ' .
				'<span class="screen-reader-text">' . __( 'Next post:', 'speedup-store' ) . '</span> ' ,
			'prev_text' => '<span class="meta-nav text-uppercase p-2" aria-hidden="true">' . __( '<i class="far fa-long-arrow-alt-left"></i> Previous', 'speedup-store' ) . '</span> ' .
				'<span class="screen-reader-text">' . __( 'Previous post:', 'speedup-store' ) . '</span> ' ,
		) );
	}

	echo '<div class="clearfix"></div>'; ?>

	<?php
	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}?>

	<?php get_template_part('template-parts/related-posts'); ?>
</article>