<?php
/**
 * The Template for displaying all single posts.
 *
 * @package speedup-store
 */

get_header(); ?>

<div class="container">
    <main role="main" id="maincontent" class="middle-align my-0 mx-auto py-3 px-0">
    	<?php
        $speedup_store_left_right = get_theme_mod( 'speedup_store_single_post_sidebar_layout','Right Sidebar');
        if($speedup_store_left_right == 'Left Sidebar'){ ?>
            <div class="row">
		    	<div id="sidebar" class="col-lg-4 col-md-4 my-3 mx-0">
					<?php dynamic_sidebar('sidebar-1'); ?>
				</div>
				<div class="col-lg-8 col-md-8" class="content-ts">
					<?php while ( have_posts() ) : the_post(); 
						get_template_part( 'template-parts/single-post' );
		            endwhile; // end of the loop. ?>
		            <div class="clearfix"></div>
		       	</div>
		    </div>
	    <?php }else if($speedup_store_left_right == 'Right Sidebar'){ ?>
	    	<div class="row">
		       	<div class="col-lg-8 col-md-8" class="content-ts">
					<?php while ( have_posts() ) : the_post(); 
						get_template_part( 'template-parts/single-post' );
		            endwhile; // end of the loop. ?>
		       	</div>
				<div id="sidebar" class="col-lg-4 col-md-4 my-3 mx-0">
					<?php dynamic_sidebar('sidebar-1'); ?>
				</div>
			</div>
		<?php }else if($speedup_store_left_right == 'One Column'){ ?>
			<div class="content-ts">
				<?php while ( have_posts() ) : the_post(); 
					get_template_part( 'template-parts/single-post' );
	            endwhile; // end of the loop. ?>
	       	</div>
		<?php }else {?>
			<div class="row">
		    	<div id="sidebar" class="col-lg-4 col-md-4 my-3 mx-0">
					<?php dynamic_sidebar('sidebar-1'); ?>
				</div>
				<div class="col-lg-8 col-md-8" class="content-ts">
					<?php while ( have_posts() ) : the_post(); 
						get_template_part( 'template-parts/single-post' );
		            endwhile; // end of the loop. ?>
		            <div class="clearfix"></div>
		       	</div>
		    </div>
		<?php }?>
	    <div class="clearfix"></div>
    </main>
</div>

<?php get_footer(); ?>