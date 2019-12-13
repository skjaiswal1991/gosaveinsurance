<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<?php $bimg = get_field('banner_image'); ?>
<div id="main-wrap">
    <div id="wsite-content" class="wsite-elements wsite-not-footer">
        <div class="wsite-section-wrap">
            <div class="wsite-section wsite-body-section wsite-section-bg-image wsite-section-effect-reveal wsite-background-78" style="background-image: url('<?php echo $bimg['url'];?>') ;background-repeat: no-repeat ;background-position: 8.33% 25.36% ;background-size: 100% ;background-color: transparent ;background-size: cover;">
                <div class="wsite-section-content">
                    <div class="container">
                        <div class="wsite-section-elements">
                            <div class="wsite-spacer" style="height:50px;"></div>
                            <h2 class="wsite-content-title" style="text-align:center;; visibility: visible;  -webkit-transform: translateY(0) scale(1); opacity: 1;transform: translateY(0) scale(1); opacity: 1;-webkit-transition: -webkit-transform 0.3s ease-in 0.3s, opacity 0.3s ease-in 0.3s; transition: transform 0.3s ease-in 0.3s, opacity 0.3s ease-in 0.3s; " data-sr-id="2"><strong><font color="#ffffff"><font size="7"><?php the_title();?></font></font></strong></h2>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="wsite-section-wrap">
            <div class="wsite-section wsite-body-section wsite-background-79">
                <div class="wsite-section-content">
                    <div class="container">
                        <div class="wsite-section-elements">
                            <div>
                                <div class="wsite-multicol">
                                    <div class="wsite-multicol-table-wrap" style="margin:0 -15px;">
                                        <table class="wsite-multicol-table">
                                            <tbody class="wsite-multicol-tbody">
                                                <tr class="wsite-multicol-tr">
                                                    <td class="wsite-multicol-col" style="width:74.736842105263%; padding:0 15px;">
                                                        <h2 class="wsite-content-title" style="text-align:left;">
															<font size="6">Complete the details below to get your free car insurance quote<?php //the_field('banner_title');?> </font>
														</h2>
                                                    </td>
                                                    
                                                    <?php /* while(have_rows('button')): the_row(); ?>
                                                        <div style="text-align:center;">
                                                            <div style="height: 0px; overflow: hidden;"></div>
                                                            <a class="wsite-button wsite-button-small wsite-button-highlight" href="/contact.html">
                                                                <span class="wsite-button-inner"><?php the_sub_field('button_name');?></span>
                                                            </a>
                                                            <div style="height: 10px; overflow: hidden;"></div>
                                                        </div>
													<?php endwhile; */ ?>

                                                    <td class="wsite-multicol-col" style="width:25.263157894737%; padding:0 15px;">
                                                        <div style="text-align:center;">
                                                            <div style="height: 0px; overflow: hidden;"></div>
                                                            <a class="wsite-button wsite-button-small wsite-button-highlight" href="/contact.html">
                                                                <span class="wsite-button-inner">Contact Us</span>
                                                            </a>
                                                            <div style="height: 10px; overflow: hidden;"></div>
                                                        </div>
													    <div style="text-align:center;">
                                                            <div style="height: 0px; overflow: hidden;"></div>
                                                            <a class="wsite-button wsite-button-small wsite-button-highlight" href="/contact.html">
                                                                <span class="wsite-button-inner">Quick Quote</span>
                                                            </a>
                                                            <div style="height: 10px; overflow: hidden;"></div>
                                                        </div>
	                                                </td>
                                                    
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
		<?php
		// Start the loop.
		while ( have_posts() ) :
			the_post();

			// Include the single post content template.
			get_template_part( 'template-parts/content', 'single' );

			// If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) {
			// 	comments_template();
			// }

			// if ( is_singular( 'attachment' ) ) {
			// 	// Parent post navigation.
			// 	the_post_navigation(
			// 		array(
			// 			'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'twentysixteen' ),
			// 		)
			// 	);
			// } elseif ( is_singular( 'post' ) ) {
			// 	// Previous/next post navigation.
			// 	the_post_navigation(
			// 		array(
			// 			'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentysixteen' ) . '</span> ' .
			// 				'<span class="screen-reader-text">' . __( 'Next post:', 'twentysixteen' ) . '</span> ' .
			// 				'<span class="post-title">%title</span>',
			// 			'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentysixteen' ) . '</span> ' .
			// 				'<span class="screen-reader-text">' . __( 'Previous post:', 'twentysixteen' ) . '</span> ' .
			// 				'<span class="post-title">%title</span>',
			// 		)
			// 	);
			// }

			// End of the loop.
		endwhile;
		?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- .site-main -->

	<?php //get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
