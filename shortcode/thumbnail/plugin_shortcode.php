<?php

/* * *********************************************************
 * BUTTONS
 * ********************************************************* */

function osc_theme_oscitasthumbnail($params, $content = 'Label') {
    extract(shortcode_atts(array(
                'src' => '',
                'class' => '',
                'link' => '',
                'border'=>''
                    ), $params));
    $out = '';
	if ($border != '') {
		$borderClass = 'img-thumbnail';
	} else {
		$borderClass = 'img-responsive';
	}


	$out = ' <div class="img-thumbnail ' . $class . '">';
	if ($link != '') {
		$out .='<a href="' . $link . '">';
	}
	$out .= '<img src="' . $src . '" class="' . $borderClass.EBS_CONTAINER_CLASS . ' oscitas-res-image">';
	if ($link != '') {
		$out .='</a>';
	}
    $out .='</div>';
    return $out;
}

add_shortcode('thumbnail', 'osc_theme_oscitasthumbnail');

