<?
$logos_arr = get_field('sett_footer_logos','option');
$logos_html = '';

if(is_array($logos_arr) && count($logos_arr)>0):
	$logos_html .= '<div class="lb-footer__cp-list">';
		foreach ($logos_arr as $item):
		
			$img = wp_get_attachment_image($item['img'], [0, 32]);
			$logos_html .= '<div class="lb-footer__cp-logo">';
			$rel = ($item['rel'] !== '' ? 'rel="'.$item['rel'].'"' : '');
			if($item['url'] !== '')
				$logos_html .= '<a href="'.$item['url'].'" '.$rel.' '.($item['blank'] ? "target='_blank'" : "").'>';
			
			$logos_html .= $img;
			$logos_html .= ($item['url'] !== '' ? '</a>' : '');
			$logos_html .= '</div>';	
		endforeach;
	$logos_html .= '</div>';	
	echo $logos_html;
endif;