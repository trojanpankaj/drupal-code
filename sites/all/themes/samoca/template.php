<?php
function samoca_preprocess_page(&$vars){
    $testvar = 'abc';
    $vars['testvar'] = $testvar;
}

function samoca_preprocess_node(&$pankaj){
    $zone = 'this is 123';
    $pankaj['zone'] = $zone;

    return $pankaj;
}
?>