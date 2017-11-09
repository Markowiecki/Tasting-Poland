<div class="ogloszenie <?php echo esc_attr($atts['before_item_class']); ?>">
	<div class="listing listing--list3">		
		<div class="listing__media">	
			<?php// WilokePublic::renderFeaturedIcon($post); ?>
			<a class="lazy bg-scroll" href="<?php echo esc_url(get_permalink($postID)); ?>" data-src="<?php echo esc_url($aFeaturedImage['main']['src']); ?>">
				<img src="<?php echo esc_url($aFeaturedImage['main']['src']); ?>" srcset="<?php echo isset($aFeaturedImage['srcset']) ? esc_attr($aFeaturedImage['srcset']) : ''; ?>" alt="<?php echo esc_attr(get_the_title($postID)); ?>"  width="<?php echo esc_attr($aFeaturedImage['main']['width']); ?>" height="<?php echo esc_attr($aFeaturedImage['main']['height']); ?>" />
			</a>

			<?php
			if ( $atts['show_terms'] === 'listing_location' ){
				WilokePublic::renderTaxonomy($postID, 'listing_location', true);
			}else{
				WilokePublic::renderTaxonomy($postID, 'listing_cat', true);
			}
			?>
			
			<?php WilokePublic::renderListingStatus($post); ?>
		</div>

		<div class="listing__body">
            <h3 class="wyroznione-firmy-title">
                <a href="<?php echo esc_url(get_permalink($post->ID)); ?>"><?php echo esc_html($post->post_title); ?></a>
				<?php // do_action('wiloke/listgo/admin/public/template/vc/listing-layout/after_title', $post); ?>
            </h3>
			<?php // WilokePublic::renderAverageRating($post, array('toggle_render_rating'=>'enable')); ?>
			<?php // WilokePublic::renderAuthor($post, $atts); ?>
			<?php // WilokePublic::renderPriceSegment($post); ?>
			<!-- Opis -->
			<div class="ofertaOpis"><?php echo the_excerpt();?></div>
			<?php	$ofertaOpis = get_post_meta($post->ID, 'listing_settings', true);?>
			<!-- dane -->
			<div class="ofertaDane">
				<!-- <span><strong><?php if(ICL_LANGUAGE_CODE=='sv'): ?>Adress:<?php elseif(ICL_LANGUAGE_CODE=='en'): ?>Address:<?php endif; ?></strong><br> <?php echo $ofertaOpis['map']['location'];?></span> -->
				<span><strong><a href="<?php echo $ofertaOpis['website'];?>"><?php echo $ofertaOpis['website'];?></a></strong></span>
				<!-- <span><strong><?php if(ICL_LANGUAGE_CODE=='sv'): ?>Telefon:<?php elseif(ICL_LANGUAGE_CODE=='en'): ?>Phone:<?php endif; ?></strong><br> <a href="<?php echo $ofertaOpis['phone_number'];?>"><?php echo $ofertaOpis['phone_number'];?></a></span> -->
			</div>
			<?php  // echo '<pre>',print_r(get_post_meta($post->ID,'listing_settings')),'</pre>';?>
			<?php //WilokePublic::renderContent($post, array('toggle_render_post_excerpt'=>false, 'toggle_render_address'=>'enable')); ?>
			<!-- Ikony -->
			<div class="item__actions">
				<div class="tb">
					<?php
					WilokePublic::renderMapPage('s_search='.$post->post_title, $mapPage, $atts, true);
					WilokePublic::renderFindDirection($aPageSettings, $atts);
					//WilokePublic::renderFavorite($post, $atts);
					?>
					<div class="tb__cell">
			            <a href="mailto:<?php echo $ofertaOpis['Email'];?>" class="napiszWiadomosc" data-tooltip="<?php if(ICL_LANGUAGE_CODE=='sv'): ?>Skicka meddelande<?php elseif(ICL_LANGUAGE_CODE=='en'): ?>Send message<?php endif; ?>">
			                <i class="icon_mail_alt"></i>
			            </a>
			        </div>
				</div>
			</div>
		</div>
	</div>	
</div>