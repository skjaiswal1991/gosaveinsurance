<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<?php 
$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>




		<div>
			<div style=" overflow: hidden;"></div>
			<div id="297588089306813881-gallery" class="imageGallery" style="line-height: 0px; padding: 0; margin: 0">
				<div id="297588089306813881-imageContainer0" style="float:left;width:33.28%;margin:0;">
					<div id="297588089306813881-insideImageContainer0" style="position:relative;margin:10px;">
						<div class="galleryImageBorder" style="border-width:1px;padding:6px;">
							<div class="galleryImageHolder" style="position:relative; width:100%; padding:0 0 75%;overflow:hidden;">
								<div class="galleryInnerImageHolder">
									<a href="<?php echo esc_url( get_permalink() );?>" title="Auto Insurance Quote"><img src="<?php echo $url;?>" class="galleryImage" _width="400" _height="266" alt="Auto Insurance Quote" style="position:absolute;border:0;width:112.78%;top:0%;left:-6.39%">
										<div class="galleryCaptionHolder partialImageGalleryCaption" style="">
											<div class="galleryCaptionHolderInnerBg"></div>
											<div class="galleryCaptionHolderInner galleryCaptionsVisible">
												<div class="galleryCaptionInnerTextHolder">
													<div class="galleryCaptionInnerText"><?php the_title();?></div>
												</div>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
