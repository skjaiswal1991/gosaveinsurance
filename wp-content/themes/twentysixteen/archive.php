<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="main-wrap">
    <div id="wsite-content" class="wsite-elements wsite-not-footer">

		<?php if ( have_posts() ) : ?>

			<!-- <header class="page-header">
				<?php
					//the_archive_title( '<h1 class="page-title">', '</h1>' );
					//the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header>.page-header -->

			<?php
			$category = get_queried_object();			
			$meta_image = get_wp_term_image($category->term_id)?>
			<div class="wsite-section-wrap">
            <div class="wsite-section wsite-body-section wsite-section-bg-image wsite-background-11" style="vertical-align: middle;background-image: url('<?php echo $meta_image;?>') ;background-repeat: no-repeat ;background-position: 0.00% 57.28% ;background-size: 100% ;background-color: transparent ;background-size: cover;">
                <div class="wsite-section-content">
                    <div class="container">
                        <div class="wsite-section-elements">
                            <div class="wsite-spacer" style="height:37px;"></div>

                            <h2 class="wsite-content-title" style="text-align:center;"><strong><font color="#ffffff"><font size="7">Insurance Quotes</font></font><br></strong></h2>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="wsite-section-wrap">
            <div class="wsite-section wsite-body-section wsite-background-12">
                <div class="wsite-section-content">
                    <div class="container">
                        <div class="wsite-section-elements">
                            <div>
                                <div class="wsite-multicol">
                                    <div class="wsite-multicol-table-wrap" style="margin:0 -15px;">
                                        <table class="wsite-multicol-table">
                                            <tbody class="wsite-multicol-tbody">
                                                <tr class="wsite-multicol-tr">
                                                    <td class="wsite-multicol-col" style="width:82.076308784383%; padding:0 15px;">

                                                        <h2 class="wsite-content-title" style="text-align:center;"><font size="6">What type of insurance quote would you like?</font></h2>

                                                    </td>
                                                    <td class="wsite-multicol-col" style="width:17.923691215617%; padding:0 15px;">

                                                        <div style="text-align:center;">
                                                            <div style="height: 0px; overflow: hidden;"></div>
                                                            <a class="wsite-button wsite-button-small wsite-button-highlight" href="/contact.html">
                                                                <span class="wsite-button-inner">Contact Us</span>
                                                            </a>
                                                            <div style="height: 0px; overflow: hidden;"></div>
                                                        </div>

                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

			
			<?php
			// Start the Loop.
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

				// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination(
				array(
					'prev_text'          => __( 'Previous page', 'twentysixteen' ),
					'next_text'          => __( 'Next page', 'twentysixteen' ),
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
				)
			);

			// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		</div> <span style="display: block; clear: both; height: 0px; overflow: hidden;"></span>
		
		</div><div style="height: 20px; overflow: hidden;"></div></div></div></div>	

		</div><!-- .site-main -->
	</div><!-- .content-area -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
