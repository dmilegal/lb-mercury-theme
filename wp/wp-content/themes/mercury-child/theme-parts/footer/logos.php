<?
$logos_arr = get_field('sett_footer_logos','option');
$logos_html = '';
if(is_array($logos_arr) && count($logos_arr)>0):?>
	<div class="footer-logos"><?
		foreach ($logos_arr as $item):
			if(!$item['size'])
				$item['size']='thumbnail';

			$img = wp_get_attachment_image($item['img'], $item['size']);
			if($item['boxed']){
				$logos_html .= '<div class="logo boxed" style="width:'.$item["width"].'px;">';
			}
			else{
				$logos_html .= '<div class="logo ">';
			}
			$rel = ($item['rel'] !== '' ? 'rel="'.$item['rel'].'"' : '');
			if($item['url'] !== '')
				$logos_html .= '<a href="'.$item['url'].'" '.$rel.' '.($item['blank'] ? "target='_blank'" : "").'>';
			
			$logos_html .= $img;
			$logos_html .= ($item['url'] !== '' ? '</a>' : '');
			$logos_html .= '</div>';	
		endforeach;
	echo $logos_html;?>

	</div><?
endif;