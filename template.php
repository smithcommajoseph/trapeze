<?php

function trapeze_preprocess_page(&$vars){
    // Add body class for theme.
    $vars['attr']['class'] .= ' trapeze';
}