<?php

function osc_theme_list($params, $content = null) {
    extract(shortcode_atts(array(
                'class' => ''
                    ), $params));
    $content = str_replace("]<br />", ']', $content);
    $content = str_replace("]<br />\n", ']', $content);
    $content = str_replace("<br />\n[", '[', $content);
    return '<ul class="list-group ' . $class .EBS_CONTAINER_CLASS. '">' . do_shortcode($content) . '</ul>';
}

add_shortcode('list', 'osc_theme_list');

function osc_theme_li($params, $content = null) {
    extract(shortcode_atts(array(
                'type' => '',
        'icon'=>'',
        'icontype'=>'',
        'iconcolor'=>''
                    ), $params));
    if ($type != '' && $type!='custom') {
        $osc_class = '<span class="glyphicon ' . $type . '"></span> ';
    }elseif($type=='custom'){
        if(trim($iconcolor)!=''){
            $iconcolor='style="color:'.$iconcolor.'"';
        }
        $osc_class='<span class="'.$icontype.' ' . $icon . '" '.$iconcolor.'></span> ';
    } else {
        $osc_class = '';
    }
    return '<li class="list-group-item'.EBS_CONTAINER_CLASS.'">' . $osc_class . do_shortcode($content) . '</li>';
}

add_shortcode('li', 'osc_theme_li');