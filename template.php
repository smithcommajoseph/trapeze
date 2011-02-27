<?php

/**
 * Implements hook_theme().
 */
function trapeze_theme(){
    $items = array();
    return $items;
}

/**
 * Implements hook_preprocess_page().
 */
function trapeze_preprocess_page(&$vars){
    // Add body class for theme.
    $vars['attr']['class'] .= ' trapeze';
}