<?php
/*
* Template Name: Home Template
*/
get_header();
?>
	    <div id="main-wrap">
    <div id="wsite-content" class="wsite-elements wsite-not-footer">

		<?php $img = get_field('banner_image');
		?>

        <div class="wsite-section-wrap">
            <div class="wsite-section wsite-body-section wsite-section-bg-image wsite-section-effect-reveal wsite-background-51" style="height: auto;background-image: url('<?php echo $img['url']?>') ;background-repeat: no-repeat ;background-position: 50.00% 28.28% ;background-size: 100% ;background-color: transparent ;background-size: cover;">
                <div class="wsite-section-content">
                    <div class="container">
                        <div class="wsite-section-elements">
                            <div class="wsite-spacer" style="height:50px;"></div>

                            <h2 class="wsite-content-title" style="text-align:center;"><font size="7" color="#ffffff"><?php the_field('banner_title');?></font></h2>

                            <h2 class="wsite-content-title" style="text-align:center;"><font size="5" color="#ffffff"><span style="font-weight:normal"><?php the_field('banner_description');?></font></h2>

                            <div>
                                <div class="wsite-multicol">
                                    <div class="wsite-multicol-table-wrap" style="margin:0 -10px;">
                                        <table class="wsite-multicol-table">
                                            <tbody class="wsite-multicol-tbody">
                                                <tr class="wsite-multicol-tr">

												<?php 
												$class = array("wsite-button-highlight","wsite-button-normal");
												$i = 0;
												while(have_rows('button')): the_row(); ?>
                                                    <td class="wsite-multicol-col" style="width:48.633879781421%; padding:0 10px;">

                                                        <div style="text-align:right;">
                                                            <div style="height: 10px; overflow: hidden;"></div>
                                                            <a class="wsite-button wsite-button-large <?php echo $class[$i]; ?>" href="<?php the_sub_field('button_link');?>">
                                                                <span class="wsite-button-inner"><?php the_sub_field('button_name');?></span>
                                                            </a>
                                                            <div style="height: 10px; overflow: hidden;"></div>
                                                        </div>

                                                    </td>
												<?php $i++; endwhile; ?>
                                                    <!-- <td class="wsite-multicol-col" style="width:51.36612021858%; padding:0 10px;">

                                                        <div style="text-align:left;">
                                                            <div style="height: 10px; overflow: hidden;"></div>
                                                            <a class="wsite-button wsite-button-large wsite-button-normal" href="/contact.html">
                                                                <span class="wsite-button-inner">Contact Us</span>
                                                            </a>
                                                            <div style="height: 10px; overflow: hidden;"></div>
                                                        </div>

                                                    </td> -->
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="wsite-section-wrap">
            <div class="wsite-section wsite-body-section wsite-section-effect-reveal wsite-background-52">
                <div class="wsite-section-content">
                    <div class="container">
                        <div class="wsite-section-elements">
                            <h2 class="wsite-content-title" style="text-align:center;"><font size="7"><?php the_field('insurance_title');?><br /></font></h2>

                            <div>
                                <div class="wsite-multicol">
                                    <div class="wsite-multicol-table-wrap" style="margin:0 -15px;">
                                        <table class="wsite-multicol-table">
                                            <tbody class="wsite-multicol-tbody">
                                                <tr class="wsite-multicol-tr">

												  <?php while(have_rows('quotes')): the_row();
														 $simg= get_sub_field('image');
														 
												  ?>
														<td class="wsite-multicol-col" style="width:25.12315270936%; padding:0 15px;">
															<div>
																<div class="wsite-image wsite-image-border-none " style="padding-top:10px;padding-bottom:10px;margin-left:0px;margin-right:0px;text-align:center">
																	<a href='<?php the_sub_field('link');?>'>
																		<img src="<?php echo $simg['url'];?>" alt="Free Auto Insurance Quote" style="width:auto;max-width:100%" />
																	</a>
																	<div style="display:block;font-size:90%"></div>
																</div>
															</div>
															<div style="text-align:center;">
																<div style="height: 0px; overflow: hidden;"></div>
																<a class="wsite-button wsite-button-small wsite-button-highlight" href="<?php the_sub_field('link');?>">
																	<span class="wsite-button-inner"><?php the_sub_field('name');?></span>
																</a>
																<div style="height: 10px; overflow: hidden;"></div>
															</div>

														</td>
													<?php endwhile;?>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="wsite-spacer" style="height:34px;"></div>

                            <div>
                                <div class="wsite-multicol">
                                    <div class="wsite-multicol-table-wrap" style="margin:0 -15px;">
                                        <table class="wsite-multicol-table">
                                            <tbody class="wsite-multicol-tbody">
                                                <tr class="wsite-multicol-tr">
                                                    <td class="wsite-multicol-col" style="width:55.496828752643%; padding:0 15px;">
                                                        <?php the_field('insurance_quote_desc');?>
                                                    </td>
                                                    <td class="wsite-multicol-col" style="width:44.503171247357%; padding:0 15px;">

                                                        <div>
                                                            <div class="wsite-image wsite-image-border-thin " style="padding-top:0px;padding-bottom:10px;margin-left:0px;margin-right:0px;text-align:center">
                                                                <a href='/quotes.html'>
																    <?php $img = get_field('insurance_quote_image'); ?>
                                                                    <img src="<?php echo $img['url'];?>" alt="Free Insurance Quotes" style="width:auto;max-width:100%" />
                                                                </a>
                                                                <div style="display:block;font-size:90%"></div>
                                                            </div>
                                                        </div>

                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="wsite-section-wrap">
            <div class="wsite-section wsite-body-section wsite-section-bg-color wsite-section-effect-reveal wsite-background-53" style="background-color: #edebeb;background-image: none;is_customized: 1;">
                <?php while(have_rows('insurance_agency')): the_row(); ?>
				<div class="wsite-section-content">
                    <div class="container">
                        <div class="wsite-section-elements">
                            <h2 class="wsite-content-title" style="text-align:center;"><font size="7"><?php the_sub_field('title');?><br /></font></h2>

                            <div>
                                <div class="wsite-multicol">
                                    <div class="wsite-multicol-table-wrap" style="margin:0 -15px;">
                                        <table class="wsite-multicol-table">
                                            <tbody class="wsite-multicol-tbody">
                                                <tr class="wsite-multicol-tr">
                                                    <td class="wsite-multicol-col" style="width:49.365750528541%; padding:0 15px;">

                                                        <div>
                                                            <div class="wsite-image wsite-image-border-thin " style="padding-top:10px;padding-bottom:10px;margin-left:0px;margin-right:0px;text-align:center">
                                                                <a href='<?php the_sub_field('button_link');?>'>
																<?php $img = get_sub_field('image');?>
                                                                    <img src="<?php echo $img['url'];?>" alt="Independent Insurance Agency Consultation Advice" style="width:auto;max-width:100%" />
                                                                </a>
                                                                <div style="display:block;font-size:90%"></div>
                                                            </div>
                                                        </div>

                                                    </td>
                                                    <td class="wsite-multicol-col" style="width:50.634249471459%; padding:0 15px;">

                                                        <div class="wsite-spacer" style="height:24px;"></div>

                                                        <div class="paragraph" style="text-align:left;"><span><?php the_sub_field('description');?></span>
                                                            <br />
                                                        </div>

                                                        <div>
                                                            <div class="wsite-multicol">
                                                                <div class="wsite-multicol-table-wrap" style="margin:0 -15px;">
                                                                    <table class="wsite-multicol-table">
                                                                        <tbody class="wsite-multicol-tbody">
                                                                            <tr class="wsite-multicol-tr">
                                                                                <td class="wsite-multicol-col" style="width:61.844863731656%; padding:0 15px;">

                                                                                    <div style="text-align:left;">
                                                                                        <div style="height: 0px; overflow: hidden;"></div>
                                                                                        <a class="wsite-button wsite-button-small wsite-button-normal" href="<?php the_sub_field('button_link');?>">
                                                                                            <span class="wsite-button-inner"><?php the_sub_field('button_name');?></span>
                                                                                        </a>
                                                                                        <div style="height: 10px; overflow: hidden;"></div>
                                                                                    </div>

                                                                                </td>
                                                                                <td class="wsite-multicol-col" style="width:38.155136268344%; padding:0 15px;">

                                                                                    <div style="text-align:left;">
                                                                                        <div style="height:10px;overflow:hidden"></div>
                                                                                        <span class="wsite-social wsite-social-default"><a class='first-child wsite-social-item wsite-social-facebook' href='https://www.facebook.com/Go-Save-Insurance-391572331439063/' target='_blank' alt='Facebook'><span class='wsite-social-item-inner'></span></a><a class='last-child wsite-social-item wsite-social-mail' href='mailto:gosaveinsurance@gmail.com' target='_blank' alt='Mail'><span class='wsite-social-item-inner'></span></a></span>
                                                                                        <div style="height:10px;overflow:hidden"></div>
                                                                                    </div>

                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			<?php endwhile; ?>
            </div>
        </div>
        <div class="wsite-section-wrap">
            
			<?php while(have_rows('online_service')): the_row();
			 $bgimage = get_sub_field('background_image');
			?>
			<div class="wsite-section wsite-body-section wsite-section-bg-image wsite-section-effect-reveal wsite-background-54" style="background-image: url('<?php echo $bgimage['url']; ?>') ;background-repeat: no-repeat ;background-position: 50.00% 0.00% ;background-size: 100% ;background-color: transparent ;background-size: cover;">
				<div class="wsite-section-content">
                    <div class="container">
                        <div class="wsite-section-elements">
                            <h2 class="wsite-content-title" style="text-align:center;"><font size="7" color="#faf7f7"><?php the_sub_field('title');?><br /></font></h2>

                            <div class="paragraph" style="text-align:center;"><strong><font size="5" color="#ffffff"><?php the_sub_field('description');?></font><br /></strong></div>

                            <div>
                                <div class="wsite-multicol">
                                    <div class="wsite-multicol-table-wrap" style="margin:0 -15px;">
                                        <table class="wsite-multicol-table">
                                            <tbody class="wsite-multicol-tbody">
                                                <tr class="wsite-multicol-tr">
													
														<?php $i = 1; while(have_rows('services')): the_row(); ?>

															<?php if( $i % 2 != 0){
																echo '<td class="wsite-multicol-col" style="width:33.333333333333%; padding:0 15px;">';
															} ?>
														

															<div style="text-align:center;">
																<div style="height: 10px; overflow: hidden;"></div>
																<a class="wsite-button wsite-button-large wsite-button-normal" href="<?php the_sub_field('link');?>">
																	<span class="wsite-button-inner"><?php the_sub_field('name');?></span>
																</a>
																<div style="height: 10px; overflow: hidden;"></div>
															</div>

															<?php if( $i % 2 == 0){
																echo '</td>';
															} ?>
														
													<?php $i++; endwhile;?>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
		<?php endwhile;?>
            </div>
        </div>
        <div class="wsite-section-wrap">
            <div class="wsite-section wsite-body-section wsite-section-bg-color wsite-section-effect-reveal wsite-background-56" style="background-color: #fff;background-image: none;">
			<?php while(have_rows('learn_more_about_insurance')): the_row(); ?>
                <div class="wsite-section-content">
                    <div class="container">
                        <div class="wsite-section-elements">
                            <h2 class="wsite-content-title" style="text-align:center;"><font size="7"><?php the_sub_field('title');?><br /></font></h2>

                            <div>
                                <div class="wsite-multicol">
                                    <div class="wsite-multicol-table-wrap" style="margin:0 -15px;">
                                        <table class="wsite-multicol-table">
                                            <tbody class="wsite-multicol-tbody">
                                                <tr class="wsite-multicol-tr">
                                                    <td class="wsite-multicol-col" style="width:55.533980582524%; padding:0 15px;">

                                                        <div class="wsite-spacer" style="height:13px;"></div>

                                                        <?php the_sub_field('description'); ?>

                                                    </td>
                                                    <td class="wsite-multicol-col" style="width:44.466019417476%; padding:0 15px;">

                                                        <div>
                                                            <div class="wsite-image wsite-image-border-thin " style="padding-top:10px;padding-bottom:10px;margin-left:0px;margin-right:0px;text-align:center">
                                                                <a href='<?php the_sub_field('link');?>'>
																<?php $img = get_sub_field('image');?>
                                                                    <img src="<?php echo $img['url'];?>" alt="Learn more about the Insurance Products and Services we offer" style="width:auto;max-width:100%" />
                                                                </a>
                                                                <div style="display:block;font-size:90%"></div>
                                                            </div>
                                                        </div>

                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			<?php endwhile; ?>
            </div>
        </div>
        <div class="wsite-section-wrap">
            <div class="wsite-section wsite-body-section wsite-section-bg-image wsite-section-effect-reveal wsite-background-58" style="height: auto;background-image: url(&quot;/uploads/1/2/5/3/125309125/background-images/528512039.jpg&quot;) ;background-repeat: no-repeat ;background-position: 50% 50% ;background-size: 100% ;background-color: transparent ;background-size: cover;">
            
				<div class="wsite-section-content">
                    <div class="container">
                        <div class="wsite-section-elements">
                            <div class="wsite-spacer" style="height:20px;"></div>

                            <h2 class="wsite-content-title" style="text-align:center;"><font size="7">Contact Us Today<br /></font></h2>

                            <div>
                                <div class="wsite-multicol">
                                    <div class="wsite-multicol-table-wrap" style="margin:0 -15px;">
                                        <table class="wsite-multicol-table">
                                            <tbody class="wsite-multicol-tbody">
                                                <tr class="wsite-multicol-tr">
                                                    <td class="wsite-multicol-col" style="width:36.445182751227%; padding:0 15px;">

                                                        <div>
                                                            <form enctype="multipart/form-data" action="//www.weebly.com/weebly/apps/formSubmit.php" method="POST" id="form-336801909203661413">
                                                                <div id="336801909203661413-form-parent" class="wsite-form-container" style="margin-top:10px;">
                                                                    <ul class="formlist" id="336801909203661413-form-list">
                                                                        <label class="wsite-form-label wsite-form-fields-required-label"><span class="form-required">*</span> Indicates required field</label>
                                                                        <div>
                                                                            <div class="wsite-form-field wsite-name-field" style="margin:5px 0px 5px 0px;">
                                                                                <label class="wsite-form-label">Name <span class="form-required">*</span></label>
                                                                                <div style="clear:both;"></div>
                                                                                <div class="wsite-form-input-container wsite-form-left wsite-form-input-first-name">
                                                                                    <input aria-required="true" id="input-146516874399291146" class="wsite-form-input wsite-input" placeholder="First" type="text" name="_u146516874399291146[first]" />
                                                                                    <label class="wsite-form-sublabel" for="input-146516874399291146">First</label>
                                                                                </div>
                                                                                <div class="wsite-form-input-container wsite-form-right wsite-form-input-last-name">
                                                                                    <input aria-required="true" id="input-146516874399291146-1" class="wsite-form-input wsite-input" placeholder="Last" type="text" name="_u146516874399291146[last]" />
                                                                                    <label class="wsite-form-sublabel" for="input-146516874399291146-1">Last</label>
                                                                                </div>
                                                                                <div id="instructions-146516874399291146" class="wsite-form-instructions" style="display:none;">Please enter your first and last name so we can get reply back and assist you as quickly as possible.</div>
                                                                            </div>
                                                                            <div style="clear:both;"></div>
                                                                        </div>

                                                                        <div>
                                                                            <div class="wsite-form-field" style="margin:5px 0px 5px 0px;">
                                                                                <label class="wsite-form-label" for="input-662819234879543558">Email <span class="form-required">*</span></label>
                                                                                <div class="wsite-form-input-container">
                                                                                    <input aria-required="true" id="input-662819234879543558" class="wsite-form-input wsite-input wsite-input-width-370px" type="text" name="_u662819234879543558" />
                                                                                </div>
                                                                                <div id="instructions-662819234879543558" class="wsite-form-instructions" style="display:none;">Please enter the best email address for us to contact you.</div>
                                                                            </div>
                                                                        </div>

                                                                        <div>
                                                                            <div class="wsite-form-field" style="margin:5px 0px 5px 0px;">
                                                                                <label class="wsite-form-label" for="input-222976108108696087">Comment <span class="form-required">*</span></label>
                                                                                <div class="wsite-form-input-container">
                                                                                    <textarea aria-required="true" id="input-222976108108696087" class="wsite-form-input wsite-input wsite-input-width-370px" name="_u222976108108696087" style="height: 50px"></textarea>
                                                                                </div>
                                                                                <div id="instructions-222976108108696087" class="wsite-form-instructions" style="display:none;">Please explain the reason you're reaching out to us and how we can help you. </div>
                                                                            </div>
                                                                        </div>

                                                                        <div>
                                                                            <div id="880938386305104501" align="left" style="width: 100%; overflow-y: hidden;" class="wcustomhtml">
                                                                                <div class="wsite-form-field" style="margin:10px 0 0 0;">
                                                                                    <label class="wsite-form-label">&#128274; Your information is secure.</label>
                                                                                    <div class="wsite-form-instructions" style="display:none;">Your private information is provided exclusively to our agency and will not be redistributed or sold to anyone else.</div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </ul>

                                                                </div>
                                                                <div style="display:none; visibility:hidden;">
                                                                    <input type="hidden" name="wsite_subject" />
                                                                </div>
                                                                <div style="text-align:left; margin-top:10px; margin-bottom:10px;">
                                                                    <input type="hidden" name="form_version" value="2" />
                                                                    <input type="hidden" name="wsite_approved" id="wsite-approved" value="approved" />
                                                                    <input type="hidden" name="ucfid" value="336801909203661413" />
                                                                    <input type="hidden" name="recaptcha_token" />
                                                                    <input type="submit" role="button" aria-label="Send MESSAGE" value="Send MESSAGE" style="position:absolute;top:0;left:-9999px;width:1px;height:1px" />
                                                                    <a class="wsite-button">
                                                                        <span class="wsite-button-inner">Send MESSAGE</span>
                                                                    </a>
                                                                </div>
                                                            </form>
                                                            <div id="g-recaptcha-336801909203661413" class="recaptcha" data-size="invisible" data-recaptcha="0" data-sitekey="6Ldf5h8UAAAAAJFJhN6x2OfZqBvANPQcnPa8eb1C"></div>

                                                        </div>

                                                    </td>
                                                    <td class="wsite-multicol-col" style="width:31.972797400554%; padding:0 15px;">

                                                        <div class="wsite-spacer" style="height:26px;"></div>

                                                        <div class="paragraph" style="text-align:left;"><strong>Phone:</strong>&nbsp;(949) 529-3800&#8203;
                                                            <br />&#8203;
                                                            <br /><strong>Email:</strong>
                                                            <br /><a href="mailto:gosaveinsurance@gmail.com">gosaveinsurance@gmail.com</a>
                                                            <br />
                                                            <br /><strong>Location:</strong>
                                                            <br />924 S Main Street
                                                            <br />Santa Ana, CA 92701&#8203;
                                                            <br />
                                                            <br /><strong>Agency Hours:</strong>
                                                            <br />Weekdays: 8:30am - 6:00pm</div>

                                                        <div style="text-align:left;">
                                                            <div style="height:10px;overflow:hidden"></div>
                                                            <span class="wsite-social wsite-social-default"><a class='first-child wsite-social-item wsite-social-facebook' href='https://www.facebook.com/Go-Save-Insurance-391572331439063/' target='_blank' alt='Facebook'><span class='wsite-social-item-inner'></span></a><a class='last-child wsite-social-item wsite-social-mail' href='mailto:gosaveinsurance@gmail.com' target='_blank' alt='Mail'><span class='wsite-social-item-inner'></span></a></span>
                                                            <div style="height:10px;overflow:hidden"></div>
                                                        </div>

                                                    </td>
                                                    <td class="wsite-multicol-col" style="width:31.58201984822%; padding:0 15px;">

                                                        <div style="text-align:center;">
                                                            <div style="height: 10px; overflow: hidden;"></div>
                                                            <a class="wsite-button wsite-button-small wsite-button-highlight" href="tel:9495293800">
                                                                <span class="wsite-button-inner">Call Us Now</span>
                                                            </a>
                                                            <div style="height: 10px; overflow: hidden;"></div>
                                                        </div>

                                                        <div style="text-align:center;">
                                                            <div style="height: 0px; overflow: hidden;"></div>
                                                            <a class="wsite-button wsite-button-small wsite-button-normal" href="https://www.google.com/maps/dir/Current+Location/924+S+Main+Street+Santa+Ana+CA+92701" target="_blank">
                                                                <span class="wsite-button-inner">Directions</span>
                                                            </a>
                                                            <div style="height: 10px; overflow: hidden;"></div>
                                                        </div>

                                                        <div class="wsite-map">
                                                            <iframe allowtransparency="true" frameborder="0" scrolling="no" style="width: 100%; height: 250px; margin-top: 10px; margin-bottom: 10px;" src="//www.weebly.com/weebly/apps/generateMap.php?map=google&elementid=816106356423704868&ineditor=0&control=1&width=auto&height=250px&overviewmap=1&scalecontrol=1&typecontrol=0&zoom=15&long=-117.86787170000002&lat=33.7362267&domain=www&point=1&align=1&reseller=true"></iframe>
                                                        </div>

                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="wsite-spacer" style="height:50px;"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="wsite-section-wrap">
            <div class="wsite-section wsite-body-section wsite-section-bg-video wsite-section-effect-reveal wsite-background-59" style="height: auto;background-image: url('//cdn2.editmysite.com/background-videos/Two-Ways-Traffic/snapshots/Two-Ways-Traffic.jpg');" data-video_type="gallery" data-video_url="//cdn2.editmysite.com/background-videos/Two-Ways-Traffic/Two-Ways-Traffic.mp4" data-video_id="//cdn2.editmysite.com/background-videos/Two-Ways-Traffic/Two-Ways-Traffic.mp4" data-background_url="//cdn2.editmysite.com/background-videos/Two-Ways-Traffic/snapshots/Two-Ways-Traffic.jpg" data-loop="1" data-autoplay="1" data-mute="1">
                <?php while( have_rows('great_insurance_carriers')): the_row();?>
				<div class="wsite-section-content">
                    <div class="container">
                        <div class="wsite-section-elements">
                            <h2 class="wsite-content-title" style="text-align:center;"><strong><font size="6" color="#ffffff"><?php the_sub_field('title');?></font></strong></h2>

                            <div>
                                <div style="height: 20px; overflow: hidden;"></div>
                                <div id='147940632175802707-gallery' class='imageGallery' style='line-height: 0px; padding: 0; margin: 0'>
								<?php while(have_rows('logos')): the_row();
									$limg = get_sub_field('image');
								?>
                                    <div id='147940632175802707-imageContainer0' style='float:left;width:19.95%;margin:0;'>
                                        <div id='147940632175802707-insideImageContainer0' style='position:relative;margin:5px;'>
                                            <div class='galleryImageBorder' style='border-width:1px;padding:1px;'>
                                                <div class='galleryImageHolder' style='position:relative; width:100%; padding:0 0 75%;overflow:hidden;'>
                                                    <div class='galleryInnerImageHolder'>
                                                        <a href='/insurance-carriers.html'><img src='<?php echo $limg['url'];?>' class='galleryImage' _width='400' _height='287' alt='AIG' style='position:absolute;border:0;width:104.53%;top:0%;left:-2.26%' /></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

								<?php endwhile; ?>
                                    <span style='display: block; clear: both; height: 0px; overflow: hidden;'></span>
                                </div>

                                <div style="height: 0px; overflow: hidden;"></div>
                            </div>
                        </div>
                    </div>
                </div>
		<?php endwhile;?>
            </div>
        </div>

    </div>

</div>
<!-- end main-wrap -->

<?php get_footer(); ?>