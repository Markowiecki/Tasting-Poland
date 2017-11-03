<div class="ogloszenie2 <?php echo esc_attr($atts['before_item_class']); ?>">
		<div class="pozostale-firmy">
			<h3 class="pozostale-firmy-title"><a href="<?php echo esc_url(get_permalink($post->ID)); ?>"><?php echo esc_html($post->post_title); ?></a></h3>
		</div>
<!-- 		<div class="listing__body">
            <h3 class="listing__title">
                <a href="<?php echo esc_url(get_permalink($post->ID)); ?>"><?php echo esc_html($post->post_title); ?></a>
				<?php // do_action('wiloke/listgo/admin/public/template/vc/listing-layout/after_title', $post); ?>
            </h3>
			<?php // WilokePublic::renderAverageRating($post, array('toggle_render_rating'=>'enable')); ?>
			<?php // WilokePublic::renderAuthor($post, $atts); ?>
			<?php // WilokePublic::renderPriceSegment($post); ?>
			<?php WilokePublic::renderContent($post, array('toggle_render_post_excerpt'=>false, 'toggle_render_address'=>'enable')); ?>
			<div class="item__actions">
				<div class="tb">
					<?php
					WilokePublic::renderMapPage('s_search='.$post->post_title, $mapPage, $atts, true);
					WilokePublic::renderFindDirection($aPageSettings, $atts);
					WilokePublic::renderFavorite($post, $atts);
					?>
				</div>
			</div>
		</div> -->
</div>