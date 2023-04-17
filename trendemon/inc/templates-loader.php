<?php
/**
 * Templates loader
 */


$templates_to_load = array(
    'pricing',
    'why',
);


foreach($templates_to_load as $template) :
    require THEME_TEMPLATES . '/'.$template.'/init.php';
endforeach;
